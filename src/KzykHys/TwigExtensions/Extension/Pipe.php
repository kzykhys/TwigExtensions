<?php

namespace KzykHys\TwigExtensions\Extension;

use Symfony\Component\Process\Process;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class Pipe extends \Twig_Extension
{

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        if (!class_exists('Symfony\\Component\\Process\\Process')) {
            return array();
        }

        return array(
            new \Twig_SimpleFilter('pipe', array($this, 'pipe'))
        );
    }

    /**
     * Executes external command
     */
    public function pipe($value, $command)
    {
        $process = new Process($command);
        $process->setStdin($value);
        $process->run();

        if (!$process->isSuccessful()) {
            return false;
        }

        return $process->getOutput();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'kzykhys_pipe';
    }

}