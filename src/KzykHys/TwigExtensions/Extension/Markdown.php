<?php

namespace KzykHys\TwigExtensions\Extension;

use Ciconia\Ciconia;
use Ciconia\Extension\Gfm;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Markdown extends \Twig_Extension
{

    /**
     * @var Ciconia
     */
    protected $ciconia;

    public function __construct()
    {
        if (class_exists('Ciconia\\Ciconia')) {
            $this->ciconia = new Ciconia();
            $this->ciconia->addExtensions(array(
                new Gfm\TableExtension(),
                new Gfm\FencedCodeBlockExtension(),
                new Gfm\InlineStyleExtension(),
                new Gfm\TaskListExtension(),
                new Gfm\UrlAutoLinkExtension(),
                new Gfm\WhiteSpaceExtension()
            ));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        if (!class_exists('Ciconia\\Ciconia')) {
            return array();
        }

        return array(
            new \Twig_SimpleFilter('markdown', array($this, 'markdown'), array('is_safe' => array('html')))
        );
    }

    /**
     * Transform markdown into html
     */
    public function markdown($text, $options = array())
    {
        return $this->ciconia->render($text, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'kzykhys_markdown';
    }

}