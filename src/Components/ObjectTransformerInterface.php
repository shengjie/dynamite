<?php
/**
 * @author: shengjie
 * @date: 14/09/15 18:53
 * @file: ObjectTransformer.php
 * This file is part of dynamite, All rights reserved
 */

namespace Shengjie\Dynamite\Components;


use Shengjie\Dynamite\Model\ObjectType;

interface ObjectTransformerInterface
{
    public function transform(ObjectType $object);
}