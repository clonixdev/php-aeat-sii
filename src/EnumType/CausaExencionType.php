<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CausaExencionType EnumType
 * @subpackage Enumerations
 */
class CausaExencionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'E1'
     * Meta information extracted from the WSDL
     * - documentation: EXENTA por Art. 20
     * @return string 'E1'
     */
    const VALUE_E_1 = 'E1';
    /**
     * Constant for value 'E2'
     * Meta information extracted from the WSDL
     * - documentation: EXENTA por Art. 21
     * @return string 'E2'
     */
    const VALUE_E_2 = 'E2';
    /**
     * Constant for value 'E3'
     * Meta information extracted from the WSDL
     * - documentation: EXENTA por Art. 22
     * @return string 'E3'
     */
    const VALUE_E_3 = 'E3';
    /**
     * Constant for value 'E4'
     * Meta information extracted from the WSDL
     * - documentation: EXENTA por Art. 24
     * @return string 'E4'
     */
    const VALUE_E_4 = 'E4';
    /**
     * Constant for value 'E5'
     * Meta information extracted from the WSDL
     * - documentation: EXENTA por Art. 25
     * @return string 'E5'
     */
    const VALUE_E_5 = 'E5';
    /**
     * Constant for value 'E6'
     * Meta information extracted from the WSDL
     * - documentation: EXENTA otros
     * @return string 'E6'
     */
    const VALUE_E_6 = 'E6';
    /**
     * Return allowed values
     * @uses self::VALUE_E_1
     * @uses self::VALUE_E_2
     * @uses self::VALUE_E_3
     * @uses self::VALUE_E_4
     * @uses self::VALUE_E_5
     * @uses self::VALUE_E_6
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_E_1,
            self::VALUE_E_2,
            self::VALUE_E_3,
            self::VALUE_E_4,
            self::VALUE_E_5,
            self::VALUE_E_6,
        );
    }
}
