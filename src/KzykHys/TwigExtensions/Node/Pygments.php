<?php

namespace KzykHys\TwigExtensions\Node;

use Twig_Compiler;

class Pygments extends \Twig_Node
{

    public function compile(Twig_Compiler $compiler)
    {
        $lexer = $this->getAttribute('lexer');
        $lexer = $lexer ? "'".$lexer."'" : 'null';

        $options = '';

        if ($this->getAttribute('linenos')) {
            $options = ', array("linenos" => 1)';
        }

        $compiler
            ->addDebugInfo($this)
            ->write("ob_start();\n")
            ->subcompile($this->getNode('body'), true)
            ->write('$raw_input = ob_get_clean();'."\n")
            ->write('$pygments = new \KzykHys\Pygments\Pygments();'."\n")
            ->write('$pygments_output = $pygments->highlight($raw_input, ' . $lexer . ', "html"' . $options. ');'."\n")
            ->write('echo $pygments_output;')
        ;

        echo $compiler->getSource();
    }

} 