<?php

declare(strict_types=1);

/*
 * This file is part of the dotfiles project.
 *
 *     (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Dotfiles\Plugins\PHPCSFixer;

use Dotfiles\Core\Config\DefinitionInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;

class Configuration implements DefinitionInterface
{
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder();
        $root = $builder->root('phpcs');
        $root
            ->children()
                ->scalarNode('file_name')
                    ->defaultValue('phpcs')
                ->end()
            ->end()
        ;

        return $builder;
    }
}
