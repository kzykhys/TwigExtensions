<?php

namespace KzykHys\TwigExtensions\Extension;

use KzykHys\TwigExtensions\TokenParser\Unless;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Core extends \Twig_Extension
{

    const EXPRESSION_INSTANCEOF = 'KzykHys\\TwigExtensions\\Node\\Expression\\Test\\InstanceOfExpression';

    /**
     * {@inheritdoc}
     */
    public function getTokenParsers()
    {
        return array(
            new Unless()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
        return array(
            new \Twig_SimpleTest('callable', array($this, 'isCallable')),
            new \Twig_SimpleTest('instance of', null, array('node_class' => self::EXPRESSION_INSTANCEOF)),
            new \Twig_SimpleTest('instanceof', null, array('node_class' => self::EXPRESSION_INSTANCEOF))
        );
    }

    /**
     * Return whether the object is callable
     */
    public function isCallable($var)
    {
        return is_callable($var);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'kzykhys_core';
    }

}