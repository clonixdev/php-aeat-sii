<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MedioPagoType EnumType
 * @subpackage Enumerations
 */
class MedioPagoType extends AbstractStructEnumBase
{
    /**
     * Constant for value '01'
     * Meta information extracted from the WSDL
     * - documentation: Transferencia
     * @return string '01'
     */
    const VALUE_01 = '01';
    /**
     * Constant for value '02'
     * Meta information extracted from the WSDL
     * - documentation: cheque
     * @return string '02'
     */
    const VALUE_02 = '02';
    /**
     * Constant for value '03'
     * Meta information extracted from the WSDL
     * - documentation: No se cobra / paga (fecha límite de devengo / devengo forzoso en concurso de acreedores)
     * @return string '03'
     */
    const VALUE_03 = '03';
    /**
     * Constant for value '04'
     * Meta information extracted from the WSDL
     * - documentation: Otros medios de cobro / pago
     * @return string '04'
     */
    const VALUE_04 = '04';
    /**
     * Constant for value '05'
     * Meta information extracted from the WSDL
     * - documentation: Domiciliación bancaria
     * @return string '05'
     */
    const VALUE_05 = '05';
    /**
     * Return allowed values
     * @uses self::VALUE_01
     * @uses self::VALUE_02
     * @uses self::VALUE_03
     * @uses self::VALUE_04
     * @uses self::VALUE_05
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_01,
            self::VALUE_02,
            self::VALUE_03,
            self::VALUE_04,
            self::VALUE_05,
        );
    }
}
