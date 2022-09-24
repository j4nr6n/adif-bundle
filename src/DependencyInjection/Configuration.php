<?php

namespace j4nr6n\ADIFBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('j4nr6n_adif');

        /**
         * @noinspection NullPointerExceptionInspection
         *
         * @psalm-suppress PossiblyUndefinedMethod
         * @psalm-suppress MixedMethodCall
         */
        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('program_id')->defaultNull()->end()
                ->scalarNode('program_version')->defaultNull()->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
