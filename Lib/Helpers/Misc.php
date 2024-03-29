<?php

namespace DesignPatterns\Lib\Helpers;

class Misc
{

    /**
     * @param object|string|null $classOrObject
     * @return string
     */
    public static function class_basename(object|string|null $classOrObject): string
    {
        if (is_object($classOrObject)) {
            $sClass = get_class($classOrObject);
        }
        elseif (is_string($classOrObject)) {
            $sClass = $classOrObject;
        }
        else {
            return '';
        }
        if ($iPos = strrpos($sClass, "\\")) {
            return substr($sClass, $iPos + 1) ?: $sClass;
        }

        return $sClass;
    }

}