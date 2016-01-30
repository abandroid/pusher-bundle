<?php

/*
 * (c) Jeroen van den Enden <info@endroid.nl>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Endroid\Bundle\PusherBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();

        $treeBuilder
            ->root('endroid_pusher')
                ->children()
                    ->scalarNode('app_id')->isRequired()->cannotBeEmpty()->end()
                    ->scalarNode('key')->isRequired()->cannotBeEmpty()->end()
                    ->scalarNode('secret')->isRequired()->cannotBeEmpty()->end()
                ->end()
        ;

        return $treeBuilder;
    }
}
