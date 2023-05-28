<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use PDO;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

class UserController extends AbstractController
{
    #[Route('/users', name: 'liste_des_users', methods:['GET'])]
    public function getListeDesUsers(EntityManagerInterface $entityManager): JsonResponse
    {
        $data = $entityManager->getRepository(User::class)->findAll();
        return $this->json(
            $data,
            headers: ['Content-Type' => 'application/json;charset=UTF-8']
        );
    }

    #[Route('/users', name: 'user_post', methods:['POST'])]
    public function createUser(Request $request,EntityManagerInterface $entityManager): JsonResponse
    {
        if($request->getMethod() === 'POST'){
            $data = json_decode($request->getContent(), true);
            $form = $this->createFormBuilder()
                ->add('nom', TextType::class, [
                    'constraints'=>[
                        new Assert\NotBlank(),
                        new Assert\Length(['min'=>1, 'max'=>255])
                    ]
                ])
                ->add('age', NumberType::class, [
                    'constraints'=>[
                        new Assert\NotBlank()
                    ]
                ])
                ->getForm();

            $form->submit($data);

            if($form->isValid())
            {
                if($data['age'] > 21){
                    $user = $entityManager->getRepository(User::class)->findBy(['name'=>$data['nom']]);
                    if(count($user) === 0){
                        $joueur = new User();
                        $joueur->setName($data['nom']);
                        $joueur->setAge($data['age']);
                        $entityManager->persist($joueur);
                        $entityManager->flush();

                        return $this->json(
                                    $joueur,
                                    201,
                                    ['Content-Type' => 'application/json;charset=UTF-8']
                                );                    
                    }else{
                        return new JsonResponse('Name already exists', 400);
                    }
                }else{
                    return new JsonResponse('Wrong age', 400);
                }
            }else{
                return new JsonResponse('Invalid form', 400);
            }
        }else{
            return new JsonResponse('Wrong method', 405);
        }
    }

    #[Route('/user/{identifiant}', name: 'get_user_by_id', methods:['GET'])]
    public function getUserWithIdentifiant($identifiant, EntityManagerInterface $entityManager): JsonResponse
    {
        if (!ctype_digit($identifiant)) {
            return new JsonResponse('Wrong id', 404);
        }
        
        $joueur = $entityManager->getRepository(User::class)->findOneBy(['id' => $identifiant]);
        
        if (!$joueur) {
            return new JsonResponse('Wrong id', 404);
        }
        
        $response = [
            'name' => $joueur->getName(),
            'age' => $joueur->getAge(),
            'id' => $joueur->getId()
        ];
        
        return new JsonResponse($response, 200);
    }

    #[Route('/user/{identifiant}', name: 'udpate_user', methods:['PATCH'])]
    public function updateUser(EntityManagerInterface $entityManager, $identifiant, Request $request): JsonResponse
{
    $joueur = $entityManager->getRepository(User::class)->find($identifiant);

    if (!$joueur) {
        return new JsonResponse('Wrong id', 404);
    }

    if ($request->getMethod() !== 'PATCH') {
        return new JsonResponse('Wrong method', 405);
    }

    $data = json_decode($request->getContent(), true);
    $form = $this->createFormBuilder($joueur)
        ->add('nom', TextType::class, ['required' => false])
        ->add('age', NumberType::class, ['required' => false])
        ->getForm();

    $form->submit($data);
    if (!$form->isValid()) {
        return new JsonResponse('Invalid form', 400);
    }

    $entityManager->flush();

    return new JsonResponse([
        'name' => $joueur->getName(),
        'age' => $joueur->getAge(),
        'id' => $joueur->getId()
    ], 200);
}

    #[Route('/user/{id}', name: 'delete_user_by_identifiant', methods:['DELETE'])]
    public function suprUser($id, EntityManagerInterface $entityManager): JsonResponse | null
{
    $joueur = $entityManager->getRepository(User::class)->findOneBy(['id' => $id]);

    if (!$joueur) {
        return new JsonResponse('Wrong id', 404);
    }

    try {
        $entityManager->remove($joueur);
        $entityManager->flush();

        $existeEncore = $entityManager->getRepository(User::class)->findOneBy(['id' => $id]);

        if ($existeEncore) {
            throw new \Exception("Le user n'a pas été supprimé");
        } else {
            return new JsonResponse('', 204);
        }
    } catch (\Exception $e) {
        return new JsonResponse($e->getMessage(), 500);
    }
 }
}
