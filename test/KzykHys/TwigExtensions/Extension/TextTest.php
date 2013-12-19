<?php

use KzykHys\TwigExtensions\Extension\Text;

class TextTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider provideResources
     */
    public function testPatterns($template, $expected)
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Text');
        $twig   = new Twig_Environment($loader);
        $twig->addExtension(new Text());

        $out = $twig->render($template);
        $this->assertEquals($expected, $out, $template);
    }

    public function testLipsumFunction()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Text');
        $twig   = new Twig_Environment($loader);
        $twig->addExtension(new Text());

        $twig->render('function_lipsum.twig');
    }

    /**
     * @return array
     */
    public function provideResources()
    {
        $finder = new \Symfony\Component\Finder\Finder();
        $finder
            ->in(__DIR__ . '/../Resources/Text')
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