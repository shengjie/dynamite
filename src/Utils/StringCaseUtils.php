<?php
/**
 * @author: shengjie
 * @date: 11/09/15 14:09
 * @file: StringUtils.php
 * This file is part of dynamite, All rights reserved
 */

namespace Shengjie\Dynamite\Utils;


class StringCaseUtils
{
    public static function toSnakeCase($camelCase)
    {
        return strtolower(preg_replace('/([A-Z])/', '_$1', lcfirst($camelCase)));
    }
    public static function toCamelCase($snakeCase)
    {
        return implode('', array_map('ucfirst', explode("_", $snakeCase)));
    }
}