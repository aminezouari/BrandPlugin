<?php

declare(strict_types=1);

namespace New\SyliusBrandPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('new_sylius_brand_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
