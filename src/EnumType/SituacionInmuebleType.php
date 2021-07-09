<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SituacionInmuebleType EnumType
 * @subpackage Enumerations
 */
class SituacionInmuebleType extends AbstractStructEnumBase
{
    /**
     * Constant for value '1'
     * Meta information extracted from the WSDL
     * - documentation: Inmueble con referencia catastral situado en cualquier punto del territorio español, excepto País Vasco y Navarra
     * @return string '1'
     */
    const VALUE_1 = '1';
    /**
     * Constant for value '2'
     * Meta information extracted from the WSDL
     * - documentation: Inmueble situado en la Comunidad Autónoma del País Vasco o en la Comunidad Foral de Navarra
     * @return string '2'
     */
    const VALUE_2 = '2';
    /**
     * Constant for value '3'
     * Meta information extracted from the WSDL
     * - documentation: Inmueble en cualquiera de las situaciones anteriores pero sin referencia catastral
     * @return string '3'
     */
    const VALUE_3 = '3';
    /**
     * Constant for value '4'
     * Meta information extracted from the WSDL
     * - documentation: Inmueble situado en el extranjero
     * @return string '4'
     */
    const VALUE_4 = '4';
    /**
     * Return allowed values
     * @uses self::VALUE_1
     * @uses self::VALUE_2
     * @uses self::VALUE_3
     * @uses self::VALUE_4
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_1,
            self::VALUE_2,
            self::VALUE_3,
            self::VALUE_4,
        );
    }
}
