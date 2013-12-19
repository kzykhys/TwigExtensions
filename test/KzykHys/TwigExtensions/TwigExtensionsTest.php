<?php

class TwigExtensionsTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider provideFilterTemplates
     */
    public function testFilters($template, $expected)
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/Resources/filter');
        $twig   = new Twig_Environment($loader);
        \KzykHys\TwigExtensions\Extensions::register($twig);
        $out = $twig->render($template);

        $this->assertEquals($expected, $out);
    }

    public function testCallableTest()
    {
        $expected = file_get_contents(__DIR__ . '/Resources/test/jinja_callable.out');
        $loader   = new Twig_Loader_Filesystem(__DIR__ . '/Resources/test');
        $twig     = new Twig_Environment($loader);
        \KzykHys\TwigExtensions\Extensions::register($twig);
        $out = $twig->render('jinja_callable.twig', array(
            'closure'      => function () {},
            'invoke'       => new Invokable(),
            'not_callable' => 100
        ));

        $this->assertEquals($expected, $out);
    }

    public function testPygmentsTag()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/Resources/tag');
        $twig   = new Twig_Environment($loader);
        \KzykHys\TwigExtensions\Extensions::register($twig);

        echo $twig->render('syntax_pygments.twig');
    }

    public function provideFilterTemplates()
    {
        $finder = new \Symfony\Component\Finder\Finder();
        $finder
            ->in(__DIR__ . '/Resources/filter')
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
    public function __invoke()
    {

    }
}