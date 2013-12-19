<?php

namespace KzykHys\TwigExtensions\TokenParser;

use KzykHys\TwigExtensions\Node\Less as LessNode;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Less extends \Twig_TokenParser
{

    /**
     * {@inheritdoc}
     */
    public function parse(\Twig_Token $token)
    {
        $parser  = $this->parser;
        $stream  = $parser->getStream();
        $lineno  = $token->getLine();

        $stream->expect(\Twig_Token::BLOCK_END_TYPE);
        $body = $parser->subparse(array($this, 'decideLessEnd'), true);
        $stream->expect(\Twig_Token::BLOCK_END_TYPE);

        return new LessNode(array('body' => $body), array(), $lineno, 'less');
    }

    public function decideLessEnd(\Twig_Token $token)
    {
        return $token->test('endless');
    }

    /**
     * {@inheritdoc}
     */
    public function getTag()
    {
        return 'less';
    }

}