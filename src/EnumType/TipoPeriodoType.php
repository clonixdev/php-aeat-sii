<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TipoPeriodoType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Período dentro del ejercicio en formato MM para meses, 1T/2T/3T/4T para trimestres o 0A para anual
 * @subpackage Enumerations
 */
class TipoPeriodoType extends AbstractStructEnumBase
{
    /**
     * Constant for value '01'
     * Meta information extracted from the WSDL
     * - documentation: Enero
     * @return string '01'
     */
    const VALUE_01 = '01';
    /**
     * Constant for value '02'
     * Meta information extracted from the WSDL
     * - documentation: Febrero
     * @return string '02'
     */
    const VALUE_02 = '02';
    /**
     * Constant for value '03'
     * Meta information extracted from the WSDL
     * - documentation: Marzo
     * @return string '03'
     */
    const VALUE_03 = '03';
    /**
     * Constant for value '04'
     * Meta information extracted from the WSDL
     * - documentation: Abril
     * @return string '04'
     */
    const VALUE_04 = '04';
    /**
     * Constant for value '05'
     * Meta information extracted from the WSDL
     * - documentation: Mayo
     * @return string '05'
     */
    const VALUE_05 = '05';
    /**
     * Constant for value '06'
     * Meta information extracted from the WSDL
     * - documentation: Junio
     * @return string '06'
     */
    const VALUE_06 = '06';
    /**
     * Constant for value '07'
     * Meta information extracted from the WSDL
     * - documentation: Julio
     * @return string '07'
     */
    const VALUE_07 = '07';
    /**
     * Constant for value '08'
     * Meta information extracted from the WSDL
     * - documentation: Agosto
     * @return string '08'
     */
    const VALUE_08 = '08';
    /**
     * Constant for value '09'
     * Meta information extracted from the WSDL
     * - documentation: Septiembre
     * @return string '09'
     */
    const VALUE_09 = '09';
    /**
     * Constant for value '10'
     * Meta information extracted from the WSDL
     * - documentation: Octubre
     * @return string '10'
     */
    const VALUE_10 = '10';
    /**
     * Constant for value '11'
     * Meta information extracted from the WSDL
     * - documentation: Noviembre
     * @return string '11'
     */
    const VALUE_11 = '11';
    /**
     * Constant for value '12'
     * Meta information extracted from the WSDL
     * - documentation: Diciembre
     * @return string '12'
     */
    const VALUE_12 = '12';
    /**
     * Constant for value '0A'
     * Meta information extracted from the WSDL
     * - documentation: Periodicidad anual
     * @return string '0A'
     */
    const VALUE_0_A = '0A';
    /**
     * Constant for value '1T'
     * Meta information extracted from the WSDL
     * - documentation: Primer trimestre
     * @return string '1T'
     */
    const VALUE_1_T = '1T';
    /**
     * Constant for value '2T'
     * Meta information extracted from the WSDL
     * - documentation: Segundo trimestre
     * @return string '2T'
     */
    const VALUE_2_T = '2T';
    /**
     * Constant for value '3T'
     * Meta information extracted from the WSDL
     * - documentation: Tercer trimestre
     * @return string '3T'
     */
    const VALUE_3_T = '3T';
    /**
     * Constant for value '4T'
     * Meta information extracted from the WSDL
     * - documentation: Cuarto trimestre
     * @return string '4T'
     */
    const VALUE_4_T = '4T';
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
     * @uses self::VALUE_0_A
     * @uses self::VALUE_1_T
     * @uses self::VALUE_2_T
     * @uses self::VALUE_3_T
     * @uses self::VALUE_4_T
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
            self::VALUE_0_A,
            self::VALUE_1_T,
            self::VALUE_2_T,
            self::VALUE_3_T,
            self::VALUE_4_T,
        );
    }
}
