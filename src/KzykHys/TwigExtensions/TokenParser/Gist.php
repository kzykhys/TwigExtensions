<?php

namespace KzykHys\TwigExtensions\TokenParser;

use KzykHys\TwigExtensions\Node\Gist as GistNode;

class Gist extends \Twig_TokenParser
{

    /**
     * {@inheritdoc}
     */
    public function parse(\Twig_Token $token)
    {
        $parser  = $this->parser;
        $stream  = $parser->getStream();
        $lineno  = $token->getLine();

        $id = $stream->expect(\Twig_Token::NUMBER_TYPE)->getValue();
        $file = null;

        if ($stream->test(\Twig_Token::STRING_TYPE)) {
            $file = $stream->expect(\Twig_Token::STRING_TYPE)->getValue();
        }

        $stream->expect(\Twig_Token::BLOCK_END_TYPE);

        return new GistNode(array(), array("id" => $id, "file" => $file), $lineno, 'gist');
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'gist';
    }

}