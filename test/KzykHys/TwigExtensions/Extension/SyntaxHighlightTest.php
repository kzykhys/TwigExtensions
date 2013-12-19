<?php

use KzykHys\TwigExtensions\Extension\SyntaxHighlight;

class SyntaxHighlightTest extends PHPUnit_Framework_TestCase
{

    public function testPygmentsTag()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/SyntaxHighlight');
        $twig   = new Twig_Environment($loader);
        $twig->addExtension(new SyntaxHighlight());

        $twig->render('tag_pygments.twig');
    }

} 