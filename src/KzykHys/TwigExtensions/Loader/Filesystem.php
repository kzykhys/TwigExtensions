<?php

namespace KzykHys\TwigExtensions\Loader;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Filesystem extends \Twig_Loader_Filesystem
{

    /**
     * @param array|string $names
     * @throws \Twig_Error_Loader
     * @return string
     */
    protected function findTemplate($names)
    {
        if (!is_array($names)) {
            return parent::findTemplate($names);
        }

        foreach ($names as $name) {
            try {
                return parent::findTemplate($name);
            } catch (\Twig_Error_Loader $e) {

            }
        }

        throw new \Twig_Error_Loader(sprintf('Unable to find template "%s".', implode(', ', $names)));
    }

} 