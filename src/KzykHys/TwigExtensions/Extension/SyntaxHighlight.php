<?php

namespace KzykHys\TwigExtensions\Extension;

use KzykHys\TwigExtensions\TokenParser\Pygments as PygmentsTokenParser;

class SyntaxHighlight extends \Twig_Extension
{

    public function getTokenParsers()
    {
        return array(
            new PygmentsTokenParser()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'syntaxhighlight';
    }

}