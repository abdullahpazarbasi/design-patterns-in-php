<?php
/**
 * User: abdullah
 * Date: 01.01.2018
 * Time: 15:15
 */
namespace DesignPatterns\Lib\Helpers;

/**
 * Class Misc
 */
class Misc
{

    /**
     * @param object|string|null $classOrObject
     * @return string
     */
    public static function class_basename($classOrObject)
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