<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FacturaE_PaymentMeansType EnumType
 * @subpackage Enumerations
 */
class FacturaE_PaymentMeansType extends AbstractStructEnumBase
{
    /**
     * Constant for value '01'
     * Meta information extracted from the WSDL
     * - documentation: In cash | Al contado
     * @return string '01'
     */
    const VALUE_01 = '01';
    /**
     * Constant for value '02'
     * Meta information extracted from the WSDL
     * - documentation: Direct debit | Recibo Domiciliado
     * @return string '02'
     */
    const VALUE_02 = '02';
    /**
     * Constant for value '03'
     * Meta information extracted from the WSDL
     * - documentation: Receipt | Recibo
     * @return string '03'
     */
    const VALUE_03 = '03';
    /**
     * Constant for value '04'
     * Meta information extracted from the WSDL
     * - documentation: Credit transfer | Transferencia
     * @return string '04'
     */
    const VALUE_04 = '04';
    /**
     * Constant for value '05'
     * Meta information extracted from the WSDL
     * - documentation: Accepted bill of exchange | Letra Aceptada
     * @return string '05'
     */
    const VALUE_05 = '05';
    /**
     * Constant for value '06'
     * Meta information extracted from the WSDL
     * - documentation: Documentary credit | Crédito Documentario
     * @return string '06'
     */
    const VALUE_06 = '06';
    /**
     * Constant for value '07'
     * Meta information extracted from the WSDL
     * - documentation: Contract award | Contrato Adjudicación
     * @return string '07'
     */
    const VALUE_07 = '07';
    /**
     * Constant for value '08'
     * Meta information extracted from the WSDL
     * - documentation: Bill of exchange | Letra de cambio
     * @return string '08'
     */
    const VALUE_08 = '08';
    /**
     * Constant for value '09'
     * Meta information extracted from the WSDL
     * - documentation: Transferable promissory note | Pagaré a la Orden
     * @return string '09'
     */
    const VALUE_09 = '09';
    /**
     * Constant for value '10'
     * Meta information extracted from the WSDL
     * - documentation: Non transferable promissory note | Pagaré No a la Orden
     * @return string '10'
     */
    const VALUE_10 = '10';
    /**
     * Constant for value '11'
     * Meta information extracted from the WSDL
     * - documentation: Cheque | Cheque
     * @return string '11'
     */
    const VALUE_11 = '11';
    /**
     * Constant for value '12'
     * Meta information extracted from the WSDL
     * - documentation: Open account reimbursement | Reposición
     * @return string '12'
     */
    const VALUE_12 = '12';
    /**
     * Constant for value '13'
     * Meta information extracted from the WSDL
     * - documentation: Special payment | Especiales
     * @return string '13'
     */
    const VALUE_13 = '13';
    /**
     * Constant for value '14'
     * Meta information extracted from the WSDL
     * - documentation: Set-off by reciprocal credits | Compensación
     * @return string '14'
     */
    const VALUE_14 = '14';
    /**
     * Constant for value '15'
     * Meta information extracted from the WSDL
     * - documentation: Payment by postgiro | Giro postal
     * @return string '15'
     */
    const VALUE_15 = '15';
    /**
     * Constant for value '16'
     * Meta information extracted from the WSDL
     * - documentation: Certified cheque | Cheque conformado
     * @return string '16'
     */
    const VALUE_16 = '16';
    /**
     * Constant for value '17'
     * Meta information extracted from the WSDL
     * - documentation: Banker’s draft | Cheque bancario
     * @return string '17'
     */
    const VALUE_17 = '17';
    /**
     * Constant for value '18'
     * Meta information extracted from the WSDL
     * - documentation: Cash on delivery | Pago contra reembolso
     * @return string '18'
     */
    const VALUE_18 = '18';
    /**
     * Constant for value '19'
     * Meta information extracted from the WSDL
     * - documentation: Payment by card | Pago mediante tarjeta
     * @return string '19'
     */
    const VALUE_19 = '19';
    /**
     * Constant for value '20'
     * Meta information extracted from the WSDL
     * - documentation: No se cobra / paga (fecha límite de devengo / devengo forzoso en concurso de acreedores)
     * @return string '20'
     */
    const VALUE_20 = '20';
    /**
     * Return allowed values
     * @uses self::VALUE_01
     * @uses self::VALUE_02
     * @uses self::VALUE_03
     * @uses self::VALUE_04
     * @uses self::VALUE_05
     * @uses self::VALUE_06
     * @uses self::VALUE_07
     * @uses self::VALUE_08
     * @uses self::VALUE_09
     * @uses self::VALUE_10
     * @uses self::VALUE_11
     * @uses self::VALUE_12
     * @uses self::VALUE_13
     * @uses self::VALUE_14
     * @uses self::VALUE_15
     * @uses self::VALUE_16
     * @uses self::VALUE_17
     * @uses self::VALUE_18
     * @uses self::VALUE_19
     * @uses self::VALUE_20
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
            self::VALUE_06,
            self::VALUE_07,
            self::VALUE_08,
            self::VALUE_09,
            self::VALUE_10,
            self::VALUE_11,
            self::VALUE_12,
            self::VALUE_13,
            self::VALUE_14,
            self::VALUE_15,
            self::VALUE_16,
            self::VALUE_17,
            self::VALUE_18,
            self::VALUE_19,
            self::VALUE_20,
        );
    }
}
