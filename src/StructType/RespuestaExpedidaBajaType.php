<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaExpedidaBajaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Respuesta a un envío Sii
 * @subpackage Structs
 */
class RespuestaExpedidaBajaType extends AbstractStructBase
{
    /**
     * The IDFactura
     * Meta information extracted from the WSDL
     * - documentation: Factura Expedida
     * @var \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType
     */
    public $IDFactura;
    /**
     * The RefExterna
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 60
     * - minOccurs: 0
     * @var string
     */
    public $RefExterna;
    /**
     * The EstadoRegistro
     * Meta information extracted from the WSDL
     * - documentation: Estado del registro. Correcto, Incorrecto o Aceptado con errores
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
     * The CSV
     * Meta information extracted from the WSDL
     * - documentation: CSV asociado a la factura registrada previamente en el sistema. Solo se suministra si la factura es rechazada porque ya está dada de baja
     * - minOccurs: 0
     * @var string
     */
    public $CSV;
    /**
     * Constructor method for RespuestaExpedidaBajaType
     * @uses RespuestaExpedidaBajaType::setIDFactura()
     * @uses RespuestaExpedidaBajaType::setRefExterna()
     * @uses RespuestaExpedidaBajaType::setEstadoRegistro()
     * @uses RespuestaExpedidaBajaType::setCodigoErrorRegistro()
     * @uses RespuestaExpedidaBajaType::setDescripcionErrorRegistro()
     * @uses RespuestaExpedidaBajaType::setCSV()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura
     * @param string $refExterna
     * @param string $estadoRegistro
     * @param int $codigoErrorRegistro
     * @param string $descripcionErrorRegistro
     * @param string $cSV
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura = null, $refExterna = null, $estadoRegistro = null, $codigoErrorRegistro = null, $descripcionErrorRegistro = null, $cSV = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setRefExterna($refExterna)
            ->setEstadoRegistro($estadoRegistro)
            ->setCodigoErrorRegistro($codigoErrorRegistro)
            ->setDescripcionErrorRegistro($descripcionErrorRegistro)
            ->setCSV($cSV);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\RespuestaExpedidaBajaType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get RefExterna value
     * @return string|null
     */
    public function getRefExterna()
    {
        return $this->RefExterna;
    }
    /**
     * Set RefExterna value
     * @param string $refExterna
     * @return \ClonixDev\AeatSii\StructType\RespuestaExpedidaBajaType
     */
    public function setRefExterna($refExterna = null)
    {
        // validation for constraint: string
        if (!is_null($refExterna) && !is_string($refExterna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refExterna, true), gettype($refExterna)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($refExterna) && mb_strlen($refExterna) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($refExterna)), __LINE__);
        }
        $this->RefExterna = $refExterna;
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
     * @uses \ClonixDev\AeatSii\EnumType\EstadoRegistroType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\EstadoRegistroType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $estadoRegistro
     * @return \ClonixDev\AeatSii\StructType\RespuestaExpedidaBajaType
     */
    public function setEstadoRegistro($estadoRegistro = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\EstadoRegistroType::valueIsValid($estadoRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\EstadoRegistroType', is_array($estadoRegistro) ? implode(', ', $estadoRegistro) : var_export($estadoRegistro, true), implode(', ', \ClonixDev\AeatSii\EnumType\EstadoRegistroType::getValidValues())), __LINE__);
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaExpedidaBajaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaExpedidaBajaType
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
    /**
     * Get CSV value
     * @return string|null
     */
    public function getCSV()
    {
        return $this->CSV;
    }
    /**
     * Set CSV value
     * @param string $cSV
     * @return \ClonixDev\AeatSii\StructType\RespuestaExpedidaBajaType
     */
    public function setCSV($cSV = null)
    {
        // validation for constraint: string
        if (!is_null($cSV) && !is_string($cSV)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cSV, true), gettype($cSV)), __LINE__);
        }
        $this->CSV = $cSV;
        return $this;
    }
}
