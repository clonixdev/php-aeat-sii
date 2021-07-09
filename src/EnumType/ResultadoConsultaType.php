<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ResultadoConsultaType EnumType
 * @subpackage Enumerations
 */
class ResultadoConsultaType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ConDatos'
     * @return string 'ConDatos'
     */
    const VALUE_CON_DATOS = 'ConDatos';
    /**
     * Constant for value 'SinDatos'
     * @return string 'SinDatos'
     */
    const VALUE_SIN_DATOS = 'SinDatos';
    /**
     * Return allowed values
     * @uses self::VALUE_CON_DATOS
     * @uses self::VALUE_SIN_DATOS
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CON_DATOS,
            self::VALUE_SIN_DATOS,
        );
    }
}
