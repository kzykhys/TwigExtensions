<?php

namespace KzykHys\TwigExtensions\Extension;

use KzykHys\TwigExtensions\TokenParser\Pygments as PygmentsTokenParser;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class SyntaxHighlight extends \Twig_Extension
{

    /**
     * {@inheritdoc}
     */
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
        return 'kzykhys_syntaxhighlight';
    }

}