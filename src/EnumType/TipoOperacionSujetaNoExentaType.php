<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TipoOperacionSujetaNoExentaType EnumType
 * @subpackage Enumerations
 */
class TipoOperacionSujetaNoExentaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'S1'
     * Meta information extracted from the WSDL
     * - documentation: No exenta- Sin inversion sujeto pasivo
     * @return string 'S1'
     */
    const VALUE_S_1 = 'S1';
    /**
     * Constant for value 'S2'
     * Meta information extracted from the WSDL
     * - documentation: No exenta - Con Inversion sujeto pasivo
     * @return string 'S2'
     */
    const VALUE_S_2 = 'S2';
    /**
     * Constant for value 'S3'
     * Meta information extracted from the WSDL
     * - documentation: No exenta - Sin inversion sujeto pasivo y con inversion sujeto Pasivo
     * @return string 'S3'
     */
    const VALUE_S_3 = 'S3';
    /**
     * Return allowed values
     * @uses self::VALUE_S_1
     * @uses self::VALUE_S_2
     * @uses self::VALUE_S_3
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_S_1,
            self::VALUE_S_2,
            self::VALUE_S_3,
        );
    }
}
