<?php

namespace KzykHys\TwigExtensions\Extension;

use KzykHys\TwigExtensions\TokenParser\Less as LessTokenParser;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Less extends \Twig_Extension
{

    /**
     * {@inheritdoc}
     */
    public function getTokenParsers()
    {
        if (!class_exists('lessc')) {
            return array();
        }

        return array(
            new LessTokenParser()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'kzykhys_less';
    }

} 