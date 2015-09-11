<?php
/**
 * @author: shengjie
 * @date: 11/09/15 14:42
 * @file: ObjectGenerator.php
 * This file is part of dynamite, All rights reserved
 */

namespace Shengjie\Dynamite\Generators;


use Zend\Code\Generator\ClassGenerator;
use Zend\Code\Generator\MethodGenerator;
use Zend\Code\Generator\PropertyGenerator;

class ObjectGenerator implements GeneratorInterface
{
    /**
     * ObjectGenerator constructor.
     */
    public function __construct($name, $options)
    {
        $this->name = $name;
        $this->options = $options;
        $this->fnGetter = function($prop, $type) {
            return 'return $this->'.$prop.';';
        };
    }

    public function generate()
    {
        $gen = new ClassGenerator($this->name);
        $fnGetter = $this->fnGetter;
        foreach($this->options["properties"] as $prop => $type) {
            $c = ucfirst($prop);
            $gen->addProperty($prop, null, PropertyGenerator::FLAG_PRIVATE);
            $gen->addMethod("get".$c,[],MethodGenerator::FLAG_PUBLIC, $fnGetter($prop, $type), "???");
        }

        return $gen->generate();
    }
}