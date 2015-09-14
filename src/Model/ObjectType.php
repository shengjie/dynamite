<?php
/**
 * @author: shengjie
 * @date: 14/09/15 18:40
 * @file: Type.php
 * This file is part of dynamite, All rights reserved
 */

namespace Shengjie\Dynamite\Model;


class ObjectType
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var ObjectProperty[]
     */
    private $properties;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return ObjectProperty[]
     */
    public function getProperties()
    {
        return $this->properties;
    }
}