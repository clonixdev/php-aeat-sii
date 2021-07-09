<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClaveTipoRectificativaType EnumType
 * @subpackage Enumerations
 */
class ClaveTipoRectificativaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'S'
     * Meta information extracted from the WSDL
     * - documentation: SUSTITUTIVA
     * @return string 'S'
     */
    const VALUE_S = 'S';
    /**
     * Constant for value 'I'
     * Meta information extracted from the WSDL
     * - documentation: INCREMENTAL
     * @return string 'I'
     */
    const VALUE_I = 'I';
    /**
     * Constant for value ' '
     * Meta information extracted from the WSDL
     * - documentation: VACIO
     * @return string ' '
     */
    const VALUE_ = ' ';
    /**
     * Return allowed values
     * @uses self::VALUE_S
     * @uses self::VALUE_I
     * @uses self::VALUE_
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_S,
            self::VALUE_I,
            self::VALUE_,
        );
    }
}
