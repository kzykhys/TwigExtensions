<?php

namespace KzykHys\TwigExtensions\Extension;

use KzykHys\TwigExtensions\TokenParser\Gist;

class Snippet extends \Twig_Extension
{

    /**
     * {@inheritdoc}
     */
    public function getTokenParsers()
    {
        return array(
            new Gist()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'snippet';
    }

}