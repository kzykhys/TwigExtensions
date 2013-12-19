<?php

use KzykHys\TwigExtensions\Extension\Snippet;

class SnippetTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider provideResources
     */
    public function testPatterns($template, $expected)
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/../Resources/Snippet');
        $twig   = new Twig_Environment($loader);
        $twig->addExtension(new Snippet());

        $out = $twig->render($template);
        $this->assertEquals($expected, $out, $template);
    }

    /**
     * @return array
     */
    public function provideResources()
    {
        $finder = new \Symfony\Component\Finder\Finder();
        $finder
            ->in(__DIR__ . '/../Resources/Snippet')
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