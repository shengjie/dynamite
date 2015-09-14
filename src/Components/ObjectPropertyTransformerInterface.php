<?php
/**
 * @author: shengjie
 * @date: 14/09/15 18:51
 * @file: ObjectPropertyTransformer.php
 * This file is part of dynamite, All rights reserved
 */

namespace Shengjie\Dynamite\Components;


use Shengjie\Dynamite\Model\ObjectProperty;

interface ObjectPropertyTransformerInterface
{
    /**
     * @param ObjectProperty $property
     * @return ObjectProperty
     */
    public function transform(ObjectProperty $property);
}