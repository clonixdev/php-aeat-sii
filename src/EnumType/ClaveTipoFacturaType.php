<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClaveTipoFacturaType EnumType
 * @subpackage Enumerations
 */
class ClaveTipoFacturaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'F1'
     * Meta information extracted from the WSDL
     * - documentation: FACTURA
     * @return string 'F1'
     */
    const VALUE_F_1 = 'F1';
    /**
     * Constant for value 'F2'
     * Meta information extracted from the WSDL
     * - documentation: FACTURA SIMPLIFICADA
     * @return string 'F2'
     */
    const VALUE_F_2 = 'F2';
    /**
     * Constant for value 'R1'
     * Meta information extracted from the WSDL
     * - documentation: FACTURA RECTIFICATIVA (Art 80.1 y 80.2 y error fundado en derecho)
     * @return string 'R1'
     */
    const VALUE_R_1 = 'R1';
    /**
     * Constant for value 'R2'
     * Meta information extracted from the WSDL
     * - documentation: FACTURA RECTIFICATIVA (Art. 80.3)
     * @return string 'R2'
     */
    const VALUE_R_2 = 'R2';
    /**
     * Constant for value 'R3'
     * Meta information extracted from the WSDL
     * - documentation: FACTURA RECTIFICATIVA (Art. 80.4)
     * @return string 'R3'
     */
    const VALUE_R_3 = 'R3';
    /**
     * Constant for value 'R4'
     * Meta information extracted from the WSDL
     * - documentation: FACTURA RECTIFICATIVA (Resto)
     * @return string 'R4'
     */
    const VALUE_R_4 = 'R4';
    /**
     * Constant for value 'R5'
     * Meta information extracted from the WSDL
     * - documentation: FACTURA RECTIFICATIVA EN FACTURAS SIMPLIFICADAS
     * @return string 'R5'
     */
    const VALUE_R_5 = 'R5';
    /**
     * Constant for value 'F3'
     * Meta information extracted from the WSDL
     * - documentation: FACTURA EMITIDA EN SUSTITUCIÓN DE FACTURAS SIMPLIFICADAS FACTURADAS Y DECLARADAS
     * @return string 'F3'
     */
    const VALUE_F_3 = 'F3';
    /**
     * Constant for value 'F4'
     * Meta information extracted from the WSDL
     * - documentation: ASIENTO RESUMEN DE FACTURAS
     * @return string 'F4'
     */
    const VALUE_F_4 = 'F4';
    /**
     * Constant for value 'F5'
     * Meta information extracted from the WSDL
     * - documentation: IMPORTACIONES (DUA)
     * @return string 'F5'
     */
    const VALUE_F_5 = 'F5';
    /**
     * Constant for value 'F6'
     * Meta information extracted from the WSDL
     * - documentation: OTROS JUSTIFICANTES CONTABLES
     * @return string 'F6'
     */
    const VALUE_F_6 = 'F6';
    /**
     * Constant for value 'LC'
     * Meta information extracted from the WSDL
     * - documentation: ADUANAS - LIQUIDACION COMPLEMENTARIA
     * @return string 'LC'
     */
    const VALUE_LC = 'LC';
    /**
     * Return allowed values
     * @uses self::VALUE_F_1
     * @uses self::VALUE_F_2
     * @uses self::VALUE_R_1
     * @uses self::VALUE_R_2
     * @uses self::VALUE_R_3
     * @uses self::VALUE_R_4
     * @uses self::VALUE_R_5
     * @uses self::VALUE_F_3
     * @uses self::VALUE_F_4
     * @uses self::VALUE_F_5
     * @uses self::VALUE_F_6
     * @uses self::VALUE_LC
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_F_1,
            self::VALUE_F_2,
            self::VALUE_R_1,
            self::VALUE_R_2,
            self::VALUE_R_3,
            self::VALUE_R_4,
            self::VALUE_R_5,
            self::VALUE_F_3,
            self::VALUE_F_4,
            self::VALUE_F_5,
            self::VALUE_F_6,
            self::VALUE_LC,
        );
    }
}
