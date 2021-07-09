<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TipoOperacion EnumType
 * @subpackage Enumerations
 */
class TipoOperacion extends AbstractStructEnumBase
{
    /**
     * Constant for value 'A'
     * Meta information extracted from the WSDL
     * - documentation: envío o recepción de bienes para la realización de los informes parciales o trabajos mencionados en el artículo 70, apartado uno, número 7º, de la Ley del Impuesto (Ley 37/1992).
     * @return string 'A'
     */
    const VALUE_A = 'A';
    /**
     * Constant for value 'B'
     * Meta information extracted from the WSDL
     * - documentation: transferencias de bienes y las adquisiciones intracomunitarias de bienes comprendidas en los artículos 9, apartado 3º, y 16, apartado 2º, de la Ley del Impuesto (Ley 37/1992).
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
