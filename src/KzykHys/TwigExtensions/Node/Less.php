<?php

namespace KzykHys\TwigExtensions\Node;

use Twig_Compiler;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Less extends \Twig_Node
{

    /**
     * {@inheritdoc}
     */
    public function compile(Twig_Compiler $compiler)
    {
        $compiler
            ->addDebugInfo($this)
            ->write("ob_start();\n")
            ->subcompile($this->getNode('body'), true)
            ->write('$raw_input = ob_get_clean();'."\n")
            ->write('$lessc = new lessc();'."\n")
            ->write('echo $lessc->compile($raw_input);'."\n")
        ;
    }

} 