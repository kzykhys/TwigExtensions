<?php

namespace KzykHys\TwigExtensions\Extension;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Snippet extends \Twig_Extension
{

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('gist', array($this, 'gist'), array('is_safe' => array('html'))),
            new \Twig_SimpleFunction('pastebin', array($this, 'pastebin'), array('is_safe' => array('html')))
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'snippet';
    }

    /**
     * Embed a gist
     */
    public function gist($id, $file = '')
    {
        if ($file) {
            $file = '?file=' . $file;
        }

        return sprintf('<script src="https://gist.github.com/%s.js%s"></script>', $id, $file);
    }

    /**
     * Enbed a pastebin
     */
    public function pastebin($id)
    {
        return sprintf('<script src="http://pastebin.com/embed_js.php?i=%s"></script>', $id);
    }

}