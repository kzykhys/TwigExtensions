<?php

use KzykHys\TwigExtensions\ExtensionAggregate;

/**
 * @author Kazuyuki Hayashi <hayashi@valnur.net>
 */
class ExtensionAggregateTest extends PHPUnit_Framework_TestCase
{

    public function testRegister()
    {
        $twig = new Twig_Environment(new Twig_Loader_String());
        ExtensionAggregate::register($twig);

        $this->assertTrue($twig->hasExtension('kzykhys_core'));
    }

    public function testGetExtensions()
    {
        $this->assertCount(7, ExtensionAggregate::getExtensions());
    }

} 