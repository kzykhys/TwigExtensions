<?php

namespace KzykHys\TwigExtensions\Extension;

use KzykHys\TwigExtensions\TokenParser\Unless;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Core extends \Twig_Extension
{

    const EXPRESSION_INSTANCEOF = 'KzykHys\\TwigExtensions\\Node\\Expression\\Test\\InstanceOfExpression';

    /**
     * {@inheritdoc}
     */
    public function getTokenParsers()
    {
        return array(
            new Unless()
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('lipsum', array($this, 'lipsum'), array('is_safe' => array('html')))
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('center', array($this, 'center')),
            new \Twig_SimpleFilter('filesizeformat', array($this, 'filesizeformat'))
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getTests()
    {
        return array(
            new \Twig_SimpleTest('callable', array($this, 'isCallable')),
            new \Twig_SimpleTest('instance of', null, array('node_class' => self::EXPRESSION_INSTANCEOF)),
            new \Twig_SimpleTest('instanceof', null, array('node_class' => self::EXPRESSION_INSTANCEOF))
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'kzykhys_core';
    }

    /**
     * Generates some lorem ipsum for the template
     */
    public function lipsum($paragraphs = 5, $html = true, $min = 20, $max = 100)
    {
        $lines  = array();
        $lipsum = array();

        for ($i = 0; $i < $paragraphs; $i++) {
            for ($j = rand($min, $max); $j > 0; $j--) {
                $word = '';
                for ($k = rand(2, 8); $k > 0; $k--) {
                    $word .= chr(rand(97, 122));
                }
                $lipsum[$i][] = $word;
            }
        }

        foreach ($lipsum as $line) {
            $paragraph = ucfirst(implode(' ', $line)) . ".";

            if ($html) {
                $paragraph = '<p>' . $paragraph . '</p>';
            }

            $lines[] = $paragraph;
        }

        return implode("\n\n", $lines);
    }

    /**
     * Centers the value in a field of a given width.
     */
    public function center($value, $width = 80)
    {
        $length = strlen($value);

        if ($length >= $width) {
            return $value;
        }

        $spaces = ceil(($width - $length) / 2);

        return sprintf('%s%s', str_repeat(' ', $spaces), $value);
    }

    /**
     * Format the value like a ‘human-readable’ file size (i.e. 13 kB, 4.1 MB, 102 Bytes, etc)
     */
    public function filesizeformat($bytes, $binary = false)
    {
        $unit     = 'Byte';
        $prefix   = '';
        $bytes    = (float)$bytes;
        $base     = $binary ? 1024 : 1000;
        $prefixes = array('K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y');

        if ($bytes == 1) {
            return '1 Byte';
        } elseif ($bytes < $base) {
            return $bytes . ' Bytes';
        }

        foreach ($prefixes as $i => $prefix) {
            $unit = pow($base, ($i + 2));
            if ($bytes < $unit) {
                return sprintf('%.1f %s', ($base * $bytes / $unit), $prefix . ($binary ? 'iB' : 'B'));
            }
        }

        return sprintf('%.1f %s', ($base * $bytes / $unit), $prefix . ($binary ? 'iB' : 'B'));
    }

    /**
     * Return whether the object is callable
     */
    public function isCallable($var)
    {
        return is_callable($var);
    }

}