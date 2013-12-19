<?php

namespace KzykHys\TwigExtensions\TokenParser;

use KzykHys\TwigExtensions\Node\Pygments as PygmentsNode;

class Pygments extends \Twig_TokenParser
{

    /**
     * {@inheritdoc}
     */
    public function parse(\Twig_Token $token)
    {
        $parser  = $this->parser;
        $stream  = $parser->getStream();
        $lineno  = $token->getLine();
        $lexer   = null;
        $showLinenos = false;

        if ($stream->test(\Twig_Token::NAME_TYPE)) {
            $lexer = $stream->getCurrent()->getValue();
            $stream->next();
        }

        if ($stream->test(\Twig_Token::NAME_TYPE)) {
            $stream->expect(\Twig_Token::NAME_TYPE, 'linenos');
            $showLinenos = true;
        }

        $stream->expect(\Twig_Token::BLOCK_END_TYPE);
        $body = $parser->subparse(array($this, 'decidePygmentsEnd'), true);
        $stream->expect(\Twig_Token::BLOCK_END_TYPE);

        return new PygmentsNode(
            array('body' => $body),
            array('lexer' => $lexer, 'linenos' => $showLinenos),
            $lineno,
            'pygments'
        );
    }

    public function decidePygmentsEnd(\Twig_Token $token)
    {
        return $token->test('endpygments');
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'pygments';
    }

}