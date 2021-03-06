<?php

namespace KzykHys\TwigExtensions\Node;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Unless extends \Twig_Node
{

    /**
     * {@inheritdoc}
     */
    public function compile(\Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write('if (!(')
            ->subcompile($this->getNode('expr'))
            ->raw(")) {\n")
            ->indent()
            ->subcompile($this->getNode('body'))
            ->outdent()
            ->write("}\n")
        ;
    }

} 