<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ErrorEnvioType EnumType
 * @subpackage Enumerations
 */
class ErrorEnvioType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ERR01'
     * Meta information extracted from the WSDL
     * - documentation: Error de validación contra esquema
     * @return string 'ERR01'
     */
    const VALUE_ERR_01 = 'ERR01';
    /**
     * Constant for value 'ERR03'
     * Meta information extracted from the WSDL
     * - documentation: Declarante desconocido
     * @return string 'ERR03'
     */
    const VALUE_ERR_03 = 'ERR03';
    /**
     * Constant for value 'ERR04'
     * Meta information extracted from the WSDL
     * - documentation: El declarante debe identificarse mediante un NIF español.
     * @return string 'ERR04'
     */
    const VALUE_ERR_04 = 'ERR04';
    /**
     * Constant for value 'ERR05'
     * Meta information extracted from the WSDL
     * - documentation: El NIF del representante es incorrecto.
     * @return string 'ERR05'
     */
    const VALUE_ERR_05 = 'ERR05';
    /**
     * Return allowed values
     * @uses self::VALUE_ERR_01
     * @uses self::VALUE_ERR_03
     * @uses self::VALUE_ERR_04
     * @uses self::VALUE_ERR_05
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_ERR_01,
            self::VALUE_ERR_03,
            self::VALUE_ERR_04,
            self::VALUE_ERR_05,
        );
    }
}
