<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EstadoFactura2Type StructType
 * @subpackage Structs
 */
class EstadoFactura2Type extends AbstractStructBase
{
    /**
     * The TimestampUltimaModificacion
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 19
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4} \d{2,2}:\d{2,2}:\d{2,2}
     * @var string
     */
    public $TimestampUltimaModificacion;
    /**
     * The EstadoRegistro
     * Meta information extracted from the WSDL
     * - documentation: Estado del registro almacenado en SII
     * @var string
     */
    public $EstadoRegistro;
    /**
     * The CodigoErrorRegistro
     * Meta information extracted from the WSDL
     * - documentation: Código del error de registro, en su caso.
     * - base: integer
     * - minOccurs: 0
     * @var int
     */
    public $CodigoErrorRegistro;
    /**
     * The DescripcionErrorRegistro
     * Meta information extracted from the WSDL
     * - documentation: Descripción detallada del error de registro, en su caso.
     * - base: string
     * - maxLength: 500
     * - minOccurs: 0
     * @var string
     */
    public $DescripcionErrorRegistro;
    /**
     * Constructor method for EstadoFactura2Type
     * @uses EstadoFactura2Type::setTimestampUltimaModificacion()
     * @uses EstadoFactura2Type::setEstadoRegistro()
     * @uses EstadoFactura2Type::setCodigoErrorRegistro()
     * @uses EstadoFactura2Type::setDescripcionErrorRegistro()
     * @param string $timestampUltimaModificacion
     * @param string $estadoRegistro
     * @param int $codigoErrorRegistro
     * @param string $descripcionErrorRegistro
     */
    public function __construct($timestampUltimaModificacion = null, $estadoRegistro = null, $codigoErrorRegistro = null, $descripcionErrorRegistro = null)
    {
        $this
            ->setTimestampUltimaModificacion($timestampUltimaModificacion)
            ->setEstadoRegistro($estadoRegistro)
            ->setCodigoErrorRegistro($codigoErrorRegistro)
            ->setDescripcionErrorRegistro($descripcionErrorRegistro);
    }
    /**
     * Get TimestampUltimaModificacion value
     * @return string|null
     */
    public function getTimestampUltimaModificacion()
    {
        return $this->TimestampUltimaModificacion;
    }
    /**
     * Set TimestampUltimaModificacion value
     * @param string $timestampUltimaModificacion
     * @return \ClonixDev\AeatSii\StructType\EstadoFactura2Type
     */
    public function setTimestampUltimaModificacion($timestampUltimaModificacion = null)
    {
        // validation for constraint: string
        if (!is_null($timestampUltimaModificacion) && !is_string($timestampUltimaModificacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestampUltimaModificacion, true), gettype($timestampUltimaModificacion)), __LINE__);
        }
        // validation for constraint: length(19)
        if (!is_null($timestampUltimaModificacion) && mb_strlen($timestampUltimaModificacion) !== 19) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 19', mb_strlen($timestampUltimaModificacion)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4} \d{2,2}:\d{2,2}:\d{2,2})
        if (!is_null($timestampUltimaModificacion) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4} \\d{2,2}:\\d{2,2}:\\d{2,2}/', $timestampUltimaModificacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4} \d{2,2}:\d{2,2}:\d{2,2}', var_export($timestampUltimaModificacion, true)), __LINE__);
        }
        $this->TimestampUltimaModificacion = $timestampUltimaModificacion;
        return $this;
    }
    /**
     * Get EstadoRegistro value
     * @return string|null
     */
    public function getEstadoRegistro()
    {
        return $this->EstadoRegistro;
    }
    /**
     * Set EstadoRegistro value
     * @uses \ClonixDev\AeatSii\EnumType\EstadoRegistroSIIType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\EstadoRegistroSIIType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $estadoRegistro
     * @return \ClonixDev\AeatSii\StructType\EstadoFactura2Type
     */
    public function setEstadoRegistro($estadoRegistro = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\EstadoRegistroSIIType::valueIsValid($estadoRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\EstadoRegistroSIIType', is_array($estadoRegistro) ? implode(', ', $estadoRegistro) : var_export($estadoRegistro, true), implode(', ', \ClonixDev\AeatSii\EnumType\EstadoRegistroSIIType::getValidValues())), __LINE__);
        }
        $this->EstadoRegistro = $estadoRegistro;
        return $this;
    }
    /**
     * Get CodigoErrorRegistro value
     * @return int|null
     */
    public function getCodigoErrorRegistro()
    {
        return $this->CodigoErrorRegistro;
    }
    /**
     * Set CodigoErrorRegistro value
     * @param int $codigoErrorRegistro
     * @return \ClonixDev\AeatSii\StructType\EstadoFactura2Type
     */
    public function setCodigoErrorRegistro($codigoErrorRegistro = null)
    {
        // validation for constraint: int
        if (!is_null($codigoErrorRegistro) && !(is_int($codigoErrorRegistro) || ctype_digit($codigoErrorRegistro))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoErrorRegistro, true), gettype($codigoErrorRegistro)), __LINE__);
        }
        $this->CodigoErrorRegistro = $codigoErrorRegistro;
        return $this;
    }
    /**
     * Get DescripcionErrorRegistro value
     * @return string|null
     */
    public function getDescripcionErrorRegistro()
    {
        return $this->DescripcionErrorRegistro;
    }
    /**
     * Set DescripcionErrorRegistro value
     * @param string $descripcionErrorRegistro
     * @return \ClonixDev\AeatSii\StructType\EstadoFactura2Type
     */
    public function setDescripcionErrorRegistro($descripcionErrorRegistro = null)
    {
        // validation for constraint: string
        if (!is_null($descripcionErrorRegistro) && !is_string($descripcionErrorRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionErrorRegistro, true), gettype($descripcionErrorRegistro)), __LINE__);
        }
        // validation for constraint: maxLength(500)
        if (!is_null($descripcionErrorRegistro) && mb_strlen($descripcionErrorRegistro) > 500) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 500', mb_strlen($descripcionErrorRegistro)), __LINE__);
        }
        $this->DescripcionErrorRegistro = $descripcionErrorRegistro;
        return $this;
    }
}
