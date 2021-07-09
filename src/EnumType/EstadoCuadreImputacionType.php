<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EstadoCuadreImputacionType EnumType
 * @subpackage Enumerations
 */
class EstadoCuadreImputacionType extends AbstractStructEnumBase
{
    /**
     * Constant for value '3'
     * Meta information extracted from the WSDL
     * - documentation: No contrastada
     * @return string '3'
     */
    const VALUE_3 = '3';
    /**
     * Constant for value '4'
     * Meta information extracted from the WSDL
     * - documentation: Parcialmente contrastada
     * @return string '4'
     */
    const VALUE_4 = '4';
    /**
     * Constant for value '5'
     * Meta information extracted from the WSDL
     * - documentation: Contrastada
     * @return string '5'
     */
    const VALUE_5 = '5';
    /**
     * Return allowed values
     * @uses self::VALUE_3
     * @uses self::VALUE_4
     * @uses self::VALUE_5
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_3,
            self::VALUE_4,
            self::VALUE_5,
        );
    }
}
