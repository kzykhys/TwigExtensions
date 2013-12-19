<?php

namespace KzykHys\TwigExtensions;

use KzykHys\TwigExtensions\Extension\Jinja;
use KzykHys\TwigExtensions\Extension\SyntaxHighlight;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Extensions
{

    /**
     * @param \Twig_Environment $twig
     */
    public static function register(\Twig_Environment $twig)
    {
        $twig->addExtension(new Jinja());
        $twig->addExtension(new SyntaxHighlight());
    }

} 