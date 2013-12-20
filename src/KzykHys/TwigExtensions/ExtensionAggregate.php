<?php

namespace KzykHys\TwigExtensions;

use KzykHys\TwigExtensions\Extension\Core;
use KzykHys\TwigExtensions\Extension\Less;
use KzykHys\TwigExtensions\Extension\Markdown;
use KzykHys\TwigExtensions\Extension\Pipe;
use KzykHys\TwigExtensions\Extension\Snippet;
use KzykHys\TwigExtensions\Extension\SyntaxHighlight;
use KzykHys\TwigExtensions\Extension\Text;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class ExtensionAggregate
{

    /**
     * @param \Twig_Environment $twig
     *
     * @return \Twig_Environment
     */
    public static function register(\Twig_Environment $twig)
    {
        $twig->setExtensions(self::getExtensions());

        return $twig;
    }

    /**
     * @return array|\Twig_Extension[]
     */
    public static function getExtensions()
    {
        return array(
            new Core(),
            new Markdown(),
            new Snippet(),
            new SyntaxHighlight(),
            new Text(),
            new Less(),
            new Pipe()
        );
    }

}