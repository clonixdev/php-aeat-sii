<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ClaveDeclarado EnumType
 * @subpackage Enumerations
 */
class ClaveDeclarado extends AbstractStructEnumBase
{
    /**
     * Constant for value 'D'
     * Meta information extracted from the WSDL
     * - documentation: DESTINATARIO
     * @return string 'D'
     */
    const VALUE_D = 'D';
    /**
     * Constant for value 'R'
     * Meta information extracted from the WSDL
     * - documentation: REMITENTE
     * @return string 'R'
     */
    const VALUE_R = 'R';
    /**
     * Return allowed values
     * @uses self::VALUE_D
     * @uses self::VALUE_R
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_D,
            self::VALUE_R,
        );
    }
}
