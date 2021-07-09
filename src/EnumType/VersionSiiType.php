<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VersionSiiType EnumType
 * @subpackage Enumerations
 */
class VersionSiiType extends AbstractStructEnumBase
{
    /**
     * Constant for value '1.1'
     * @return string '1.1'
     */
    const VALUE_1_1 = '1.1';
    /**
     * Return allowed values
     * @uses self::VALUE_1_1
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_1_1,
        );
    }
}
