<?php

namespace GeoSocio\SluggerBundle\DependencyInjection;

use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Extension Test
 */
class GeoSocioSluggerExtensionTest extends TestCase
{
    /**
     * Test Load
     */
    public function testLoad()
    {
        $definition = $this->getMockBuilder(Definition::class)
            ->disableOriginalConstructor()
            ->getMock();

        $container = $this->getMockBuilder(ContainerBuilder::class)
            ->disableOriginalConstructor()
            ->getMock();
        $container->expects($this->once())
            ->method('register')
            ->willReturn($definition);

        $extension = new GeoSocioSluggerExtension();
        $extension->load([], $container);
    }
}
