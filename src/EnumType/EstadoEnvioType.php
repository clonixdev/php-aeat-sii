<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EstadoEnvioType EnumType
 * @subpackage Enumerations
 */
class EstadoEnvioType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Correcto'
     * Meta information extracted from the WSDL
     * - documentation: Correcto
     * @return string 'Correcto'
     */
    const VALUE_CORRECTO = 'Correcto';
    /**
     * Constant for value 'ParcialmenteCorrecto'
     * Meta information extracted from the WSDL
     * - documentation: Parcialmente correcto. Ver detalle de errores
     * @return string 'ParcialmenteCorrecto'
     */
    const VALUE_PARCIALMENTE_CORRECTO = 'ParcialmenteCorrecto';
    /**
     * Constant for value 'Incorrecto'
     * Meta information extracted from the WSDL
     * - documentation: Incorrecto
     * @return string 'Incorrecto'
     */
    const VALUE_INCORRECTO = 'Incorrecto';
    /**
     * Return allowed values
     * @uses self::VALUE_CORRECTO
     * @uses self::VALUE_PARCIALMENTE_CORRECTO
     * @uses self::VALUE_INCORRECTO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CORRECTO,
            self::VALUE_PARCIALMENTE_CORRECTO,
            self::VALUE_INCORRECTO,
        );
    }
}
