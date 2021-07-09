<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClaveOperacionType EnumType
 * @subpackage Enumerations
 */
class ClaveOperacionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'A'
     * Meta information extracted from the WSDL
     * - documentation: Indemnizaciones o prestaciones satisfechas superiores a 3005,06
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'B'
     * Meta information extracted from the WSDL
     * - documentation: Primas o contraprestaciones percibidas superiores a 3005,06
     * @return string 'B'
     */
    const VALUE_B = 'B';
    /**
     * Return allowed values
     * @uses self::VALUE_A
     * @uses self::VALUE_B
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_A,
            self::VALUE_B,
        );
    }
}
