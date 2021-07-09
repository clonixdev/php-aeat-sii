<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FacturaARType EnumType
 * @subpackage Enumerations
 */
class FacturaARType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'S'
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'N'
     * @return string 'N'
     */
    const VALUE_N = 'N';
    /**
     * Return allowed values
     * @uses self::VALUE_S
     * @uses self::VALUE_N
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_S,
            self::VALUE_N,
        );
    }
}
