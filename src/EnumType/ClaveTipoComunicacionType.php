<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClaveTipoComunicacionType EnumType
 * @subpackage Enumerations
 */
class ClaveTipoComunicacionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'A0'
     * Meta information extracted from the WSDL
     * - documentation: A0 Alta (Se añade al libro un registro una nueva factura)
     * @return string 'A0'
     */
    const VALUE_A_0 = 'A0';
    /**
     * Constant for value 'A1'
     * Meta information extracted from the WSDL
     * - documentation: A1 Modificación (La información que se comunica sustituye a la existente relacionada)
     * @return string 'A1'
     */
    const VALUE_A_1 = 'A1';
    /**
     * Constant for value 'A4'
     * Meta information extracted from the WSDL
     * - documentation: Modificación Factura Régimen de Viajeros
     * @return string 'A4'
     */
    const VALUE_A_4 = 'A4';
    /**
     * Constant for value 'A5'
     * Meta information extracted from the WSDL
     * - documentation: Alta de las devoluciones del IVA de viajeros
     * @return string 'A5'
     */
    const VALUE_A_5 = 'A5';
    /**
     * Constant for value 'A6'
     * Meta information extracted from the WSDL
     * - documentation: Modificacion de las devoluciones del IVA de viajeros
     * @return string 'A6'
     */
    const VALUE_A_6 = 'A6';
    /**
     * Return allowed values
     * @uses self::VALUE_A_0
     * @uses self::VALUE_A_1
     * @uses self::VALUE_A_4
     * @uses self::VALUE_A_5
     * @uses self::VALUE_A_6
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_A_0,
            self::VALUE_A_1,
            self::VALUE_A_4,
            self::VALUE_A_5,
            self::VALUE_A_6,
        );
    }
}
