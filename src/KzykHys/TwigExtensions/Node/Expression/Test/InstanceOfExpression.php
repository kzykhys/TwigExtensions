<?php

namespace KzykHys\TwigExtensions\Node\Expression\Test;

class InstanceOfExpression extends \Twig_Node_Expression_Test
{

    public function compile(\Twig_Compiler $compiler)
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('node'))
            ->raw(' instanceof ')
            ->raw($this->getNode('arguments')->getNode(0)->getAttribute('value'))
            ->raw(')')
        ;
    }

}