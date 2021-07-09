<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PersonaFisicaJuridicaIDTypeType EnumType
 * @subpackage Enumerations
 */
class PersonaFisicaJuridicaIDTypeType extends AbstractStructEnumBase
{
    /**
     * Constant for value '02'
     * Meta information extracted from the WSDL
     * - documentation: NIF-IVA
     * @return string '02'
     */
    const VALUE_02 = '02';
    /**
     * Constant for value '03'
     * Meta information extracted from the WSDL
     * - documentation: Pasaporte
     * @return string '03'
     */
    const VALUE_03 = '03';
    /**
     * Constant for value '04'
     * Meta information extracted from the WSDL
     * - documentation: IDEnPaisResidencia
     * @return string '04'
     */
    const VALUE_04 = '04';
    /**
     * Constant for value '05'
     * Meta information extracted from the WSDL
     * - documentation: Certificado Residencia
     * @return string '05'
     */
    const VALUE_05 = '05';
    /**
     * Constant for value '06'
     * Meta information extracted from the WSDL
     * - documentation: Otro documento Probatorio
     * @return string '06'
     */
    const VALUE_06 = '06';
    /**
     * Constant for value '07'
     * Meta information extracted from the WSDL
     * - documentation: No Censado
     * @return string '07'
     */
    const VALUE_07 = '07';
    /**
     * Return allowed values
     * @uses self::VALUE_02
     * @uses self::VALUE_03
     * @uses self::VALUE_04
     * @uses self::VALUE_05
     * @uses self::VALUE_06
     * @uses self::VALUE_07
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_02,
            self::VALUE_03,
            self::VALUE_04,
            self::VALUE_05,
            self::VALUE_06,
            self::VALUE_07,
        );
    }
}
