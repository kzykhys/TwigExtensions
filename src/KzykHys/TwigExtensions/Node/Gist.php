<?php

namespace KzykHys\TwigExtensions\Node;

use Twig_Compiler;

class Gist extends \Twig_Node
{

    public function compile(Twig_Compiler $compiler)
    {
        $query = '';

        if ($file = $this->getAttribute('file')) {
            $query = '?file=' . $file;
        }

        $compiler
            ->addDebugInfo($this)
            ->write('echo "<script src=\"https://gist.github.com/' . $this->getAttribute('id') . '.js' . $query . '\"></script>\n";')
        ;
    }

} 