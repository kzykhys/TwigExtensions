<?php

namespace KzykHys\TwigExtensions;

use KzykHys\TwigExtensions\Extension\Core;
use KzykHys\TwigExtensions\Extension\Less;
use KzykHys\TwigExtensions\Extension\Markdown;
use KzykHys\TwigExtensions\Extension\Snippet;
use KzykHys\TwigExtensions\Extension\SyntaxHighlight;
use KzykHys\TwigExtensions\Extension\Text;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class ExtensionAggregate extends \Twig_Extension
{

    /**
     * {@inheritdoc}
     */
    public function initRuntime(\Twig_Environment $environment)
    {
        $environment->addExtension(new Core());
        $environment->addExtension(new Markdown());
        $environment->addExtension(new Snippet());
        $environment->addExtension(new SyntaxHighlight());
        $environment->addExtension(new Text());
        $environment->addExtension(new Less());
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'kzykhys_twig_extensions';
    }

}