<?php

namespace KzykHys\TwigExtensions\Extension;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Jinja extends \Twig_Extension
{

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
            new \Twig_SimpleTest('callable', array($this, 'isCallable'))
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'jinja';
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