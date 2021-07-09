<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TipoClaveDeclaranteType EnumType
 * @subpackage Enumerations
 */
class TipoClaveDeclaranteType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'V'
     * @return string 'V'
     */
    const VALUE_V = 'V';
    /**
     * Constant for value 'A'
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Return allowed values
     * @uses self::VALUE_V
     * @uses self::VALUE_A
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_V,
            self::VALUE_A,
        );
    }
}
