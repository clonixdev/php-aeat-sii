<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EstadoCuadreType EnumType
 * @subpackage Enumerations
 */
class EstadoCuadreType extends AbstractStructEnumBase
{
    /**
     * Constant for value '1'
     * Meta information extracted from the WSDL
     * - documentation: No aplica contraste
     * @return string '1'
     */
    const VALUE_1 = '1';
    /**
     * Constant for value '2'
     * Meta information extracted from the WSDL
     * - documentation: En proceso de contraste
     * @return string '2'
     */
    const VALUE_2 = '2';
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
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @uses self::VALUE_3
     * @uses self::VALUE_4
     * @uses self::VALUE_5
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_1,
            self::VALUE_2,
            self::VALUE_3,
            self::VALUE_4,
            self::VALUE_5,
        );
    }
}
