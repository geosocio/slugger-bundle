<?php

namespace GeoSocio\SluggerBundle\DependencyInjection;

use GeoSocio\Slugger\Slugger;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

/**
 * {@inheritdoc}
 *
 * @see http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class GeoSocioSluggerExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $container->register('geosocio_slugger.default_slugger', Slugger::class);
        $container->setAlias('geosocio_slugger', 'geosocio_slugger.default_slugger');
    }
}
