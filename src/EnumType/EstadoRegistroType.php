<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EstadoRegistroType EnumType
 * @subpackage Enumerations
 */
class EstadoRegistroType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Correcto'
     * Meta information extracted from the WSDL
     * - documentation: Correcto
     * @return string 'Correcto'
     */
    const VALUE_CORRECTO = 'Correcto';
    /**
     * Constant for value 'AceptadoConErrores'
     * Meta information extracted from the WSDL
     * - documentation: Aceptado con Errores. Ver detalle del error
     * @return string 'AceptadoConErrores'
     */
    const VALUE_ACEPTADO_CON_ERRORES = 'AceptadoConErrores';
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
     * @uses self::VALUE_ACEPTADO_CON_ERRORES
     * @uses self::VALUE_INCORRECTO
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CORRECTO,
            self::VALUE_ACEPTADO_CON_ERRORES,
            self::VALUE_INCORRECTO,
        );
    }
}
