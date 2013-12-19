<?php

use KzykHys\TwigExtensions\Extension\Jinja;

class JinjaTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider provideResources
     */
    public function testPatterns($template, $expected)
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Jinja');
        $twig   = new Twig_Environment($loader);
        $twig->addExtension(new Jinja());

        $out = $twig->render($template);
        $this->assertEquals($expected, $out, $template);
    }

    public function testCallableTest()
    {
        $loader   = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Jinja');
        $twig     = new Twig_Environment($loader);
        $twig->addExtension(new Jinja());

        $out = $twig->render('test_callable.twig', array(
            'closure'      => function () {},
            'invoke'       => new Invokable(),
            'not_callable' => 100
        ));

        $this->assertEquals('truetruefalse', $out);
    }

    public function testLipsumFunction()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Jinja');
        $twig   = new Twig_Environment($loader);
        $twig->addExtension(new Jinja());

        $twig->render('function_lipsum.twig');
    }

    /**
     * @return array
     */
    public function provideResources()
    {
        $finder = new \Symfony\Component\Finder\Finder();
        $finder
            ->in(__DIR__ . '/../Resources/Jinja')
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