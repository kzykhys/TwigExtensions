<?php

namespace KzykHys\TwigExtensions;

use KzykHys\TwigExtensions\Extension\Jinja;

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
    }

} 