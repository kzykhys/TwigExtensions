<?php

class TwigExtensionsTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider provideTemplates
     */
    public function testExtensions($template, $expected)
    {
        $loader = new Twig_Loader_Filesystem(__DIR__ . '/Resources');
        $twig = new Twig_Environment($loader);
        \KzykHys\TwigExtensions\Extensions::register($twig);
        $out = $twig->render($template);

        $this->assertEquals($expected, $out);
    }

    public function provideTemplates()
    {
        $finder = new \Symfony\Component\Finder\Finder();
        $finder
            ->in(__DIR__ . '/Resources')
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