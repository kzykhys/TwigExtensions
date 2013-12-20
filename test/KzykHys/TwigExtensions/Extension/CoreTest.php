<?php

use KzykHys\TwigExtensions\Extension\Core;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class CoreTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider provideResources
     */
    public function testPatterns($template, $expected)
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Core');
        $twig   = new Twig_Environment($loader);
        $twig->addExtension(new Core());

        $out = $twig->render($template);
        $this->assertEquals($expected, $out, $template);
    }

    public function testCallableTest()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Core');
        $twig   = new Twig_Environment($loader);
        $twig->addExtension(new Core());

        $out = $twig->render('test_callable.twig', array(
            'closure'      => function () {},
            'invoke'       => new Invokable(),
            'not_callable' => 100
        ));

        $this->assertEquals('truetruefalse', $out);
    }

    public function testCallFunction()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Core');
        $twig   = new Twig_Environment($loader);
        $twig->addExtension(new Core());

        $out = $twig->render('function_call.twig', array(
            'closure' => function ($name) {
                return "hello $name";
            },
        ));

        $this->assertEquals('hello kzykhys', $out);
    }

    public function testInstanceOfTest()
    {
        $loader   = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Core');
        $twig     = new Twig_Environment($loader);
        $twig->addExtension(new Core());

        $out = $twig->render('test_instanceof.twig', array(
            'stdClass'      => new stdClass(),
            'splStack' => new \SplStack(),
            'integer'       => 100
        ));

        $this->assertEquals('truetruefalsetruetruefalse', $out);
    }

    /**
     * @return array
     */
    public function provideResources()
    {
        $finder = new \Symfony\Component\Finder\Finder();
        $finder
            ->in(__DIR__ . '/../Resources/Core')
            ->files()
            ->name('*.out');

        $files = array();

        /* @var \Symfony\Component\Finder\SplFileInfo $file */
        foreach ($finder as $file) {
            $files[] = array(
                str_replace('.out', '.twig', $file->getFilename()),
                $file->getContents()
            );
        }

        return $files;
    }

}

class Invokable
{
    public function __invoke() { }
}