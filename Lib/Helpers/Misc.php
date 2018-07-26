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
     * @param object|string|null $xClass
     * @return string
     */
    public static function class_basename($xClass)
    {
        if (is_object($xClass)) {
            $sClass = get_class($xClass);
        }
        elseif (is_string($xClass)) {
            $sClass = $xClass;
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