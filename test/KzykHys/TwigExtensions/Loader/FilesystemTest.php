<?php

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class FilesystemTest extends PHPUnit_Framework_TestCase
{

    public function testString()
    {
        $loader = new \KzykHys\TwigExtensions\Loader\Filesystem(__DIR__ . '/../Resources/Loader');
        $twig   = new Twig_Environment($loader);

        $out = $twig->render('template.twig');

        $this->assertEquals('template.twig', $out);
    }

    public function testArray()
    {
        $loader = new \KzykHys\TwigExtensions\Loader\Filesystem(__DIR__ . '/../Resources/Loader');
        $twig   = new Twig_Environment($loader);

        $out = $twig->render(array('template.twig', 'fallback1.twig'));

        $this->assertEquals('template.twig', $out);
    }

    public function testFallback()
    {
        $loader = new \KzykHys\TwigExtensions\Loader\Filesystem(__DIR__ . '/../Resources/Loader');
        $twig   = new Twig_Environment($loader);

        $out = $twig->render(array('invalid.twig', 'template.twig', 'fallback1.twig'));

        $this->assertEquals('template.twig', $out);
    }

    /**
     * @expectedException Twig_Error_Loader
     */
    public function testException()
    {
        $loader = new \KzykHys\TwigExtensions\Loader\Filesystem(__DIR__ . '/../Resources/Loader');
        $twig   = new Twig_Environment($loader);

        $twig->render(array('foo.twig'));
    }

} 