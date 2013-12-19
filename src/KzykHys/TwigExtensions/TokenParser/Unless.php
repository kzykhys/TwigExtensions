<?php

namespace KzykHys\TwigExtensions\TokenParser;

use KzykHys\TwigExtensions\Node\Unless as UnlessNode;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Unless extends \Twig_TokenParser
{

    /**
     * {@inheritdoc}
     */
    public function parse(\Twig_Token $token)
    {
        $lineno = $token->getLine();
        $expr = $this->parser->getExpressionParser()->parseExpression();
        $stream = $this->parser->getStream();
        $stream->expect(\Twig_Token::BLOCK_END_TYPE);
        $body = $this->parser->subparse(array($this, 'decideUnlessEnd'), true);
        $stream->expect(\Twig_Token::BLOCK_END_TYPE);

        return new UnlessNode(array('expr' => $expr, 'body' => $body), array(), $lineno, 'unless');
    }

    public function decideUnlessEnd(\Twig_Token $token)
    {
        return $token->test('endunless');
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'unless';
    }

}