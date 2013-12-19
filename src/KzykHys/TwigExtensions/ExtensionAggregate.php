<?php

namespace KzykHys\TwigExtensions;

use KzykHys\TwigExtensions\Extension\Jinja;
use KzykHys\TwigExtensions\Extension\SyntaxHighlight;
use Twig_Environment;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class ExtensionAggregate extends \Twig_Extension
{

    /**
     * {@inheritdoc}
     */
    public function initRuntime(Twig_Environment $environment)
    {
        $environment->addExtension(new Jinja());
        $environment->addExtension(new SyntaxHighlight());
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'kzykhys_twig_extensions';
    }

}