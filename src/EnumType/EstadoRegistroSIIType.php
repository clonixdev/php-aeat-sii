<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EstadoRegistroSIIType EnumType
 * @subpackage Enumerations
 */
class EstadoRegistroSIIType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Correcta'
     * Meta information extracted from the WSDL
     * - documentation: El registro se almacenado sin errores | El registro se almacenado sin errores
     * @return string 'Correcta'
     */
    const VALUE_CORRECTA = 'Correcta';
    /**
     * Constant for value 'AceptadaConErrores'
     * Meta information extracted from the WSDL
     * - documentation: El registro se almacenado tiene algunos errores. Ver detalle del error | El registro se almacenado tiene algunos errores. Ver detalle del error
     * @return string 'AceptadaConErrores'
     */
    const VALUE_ACEPTADA_CON_ERRORES = 'AceptadaConErrores';
    /**
     * Constant for value 'Anulada'
     * Meta information extracted from the WSDL
     * - documentation: El registro almacenado ha sido anulado | El registro almacenado ha sido anulado
     * @return string 'Anulada'
     */
    const VALUE_ANULADA = 'Anulada';
    /**
     * Return allowed values
     * @uses self::VALUE_CORRECTA
     * @uses self::VALUE_ACEPTADA_CON_ERRORES
     * @uses self::VALUE_ANULADA
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CORRECTA,
            self::VALUE_ACEPTADA_CON_ERRORES,
            self::VALUE_ANULADA,
        );
    }
}
