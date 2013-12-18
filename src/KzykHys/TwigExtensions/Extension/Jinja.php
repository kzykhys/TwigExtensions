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

        $left = ceil(($width - $length) / 2);
        $right = $left + (($width - $length) % 2);

        return sprintf('%s%s%s', str_repeat(' ', $left), $value, str_repeat(' ', $right));
    }

    /**
     * Format the value like a ‘human-readable’ file size (i.e. 13 kB, 4.1 MB, 102 Bytes, etc)
     */
    public function filesizeformat($bytes, $binary = false)
    {
        $bytes = (float) $bytes;
        $base = $binary ? 1024 : 1000;
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

}