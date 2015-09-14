<?php
/**
 * @author: shengjie
 * @date: 14/09/15 18:58
 * @file: ObjectTypeRegistry.php
 * This file is part of dynamite, All rights reserved
 */

namespace Shengjie\Dynamite\Components;


use Shengjie\Dynamite\Model\ObjectType;

class ObjectTypeRegistry
{
    private $map;

    public function register(ObjectType $type, $alias = null)
    {
        if (!$alias) $alias = $type->getName();

        $this->map[$alias] = $type;
    }

    public function get($name)
    {
        return $this->map[$name];
    }
}