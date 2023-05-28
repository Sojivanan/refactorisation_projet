<?php

namespace ContainerDQUWtJA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_ReferenceEscaperLexerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer' shared service.
     *
     * @return \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceEscaperLexer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/LexerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/IsAServiceTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/nelmio/alice/src/FixtureBuilder/ExpressionLanguage/Lexer/ReferenceEscaperLexer.php';

        return $container->privates['nelmio_alice.fixture_builder.expression_language.lexer.reference_escaper_lexer'] = new \Nelmio\Alice\FixtureBuilder\ExpressionLanguage\Lexer\ReferenceEscaperLexer(($container->privates['nelmio_alice.fixture_builder.expression_language.lexer.globals_patterns_lexer'] ?? $container->load('getNelmioAlice_FixtureBuilder_ExpressionLanguage_Lexer_GlobalsPatternsLexerService')));
    }
}
