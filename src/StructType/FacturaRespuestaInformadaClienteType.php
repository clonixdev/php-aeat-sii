<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacturaRespuestaInformadaClienteType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de factura Informada por el cliente
 * @subpackage Structs
 */
class FacturaRespuestaInformadaClienteType extends FacturaRespuestaType
{
    /**
     * The DesgloseFactura
     * @var \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType
     */
    public $DesgloseFactura;
    /**
     * The FechaRegContable
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaRegContable;
    /**
     * The Pagos
     * @var string
     */
    public $Pagos;
    /**
     * Constructor method for FacturaRespuestaInformadaClienteType
     * @uses FacturaRespuestaInformadaClienteType::setDesgloseFactura()
     * @uses FacturaRespuestaInformadaClienteType::setFechaRegContable()
     * @uses FacturaRespuestaInformadaClienteType::setPagos()
     * @param \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType $desgloseFactura
     * @param string $fechaRegContable
     * @param string $pagos
     */
    public function __construct(\ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType $desgloseFactura = null, $fechaRegContable = null, $pagos = null)
    {
        $this
            ->setDesgloseFactura($desgloseFactura)
            ->setFechaRegContable($fechaRegContable)
            ->setPagos($pagos);
    }
    /**
     * Get DesgloseFactura value
     * @return \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType|null
     */
    public function getDesgloseFactura()
    {
        return $this->DesgloseFactura;
    }
    /**
     * Set DesgloseFactura value
     * @param \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType $desgloseFactura
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaClienteType
     */
    public function setDesgloseFactura(\ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType $desgloseFactura = null)
    {
        $this->DesgloseFactura = $desgloseFactura;
        return $this;
    }
    /**
     * Get FechaRegContable value
     * @return string|null
     */
    public function getFechaRegContable()
    {
        return $this->FechaRegContable;
    }
    /**
     * Set FechaRegContable value
     * @param string $fechaRegContable
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaClienteType
     */
    public function setFechaRegContable($fechaRegContable = null)
    {
        // validation for constraint: string
        if (!is_null($fechaRegContable) && !is_string($fechaRegContable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaRegContable, true), gettype($fechaRegContable)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaRegContable) && mb_strlen($fechaRegContable) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaRegContable)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaRegContable) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaRegContable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaRegContable, true)), __LINE__);
        }
        $this->FechaRegContable = $fechaRegContable;
        return $this;
    }
    /**
     * Get Pagos value
     * @return string|null
     */
    public function getPagos()
    {
        return $this->Pagos;
    }
    /**
     * Set Pagos value
     * @uses \ClonixDev\AeatSii\EnumType\FacturaARType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\FacturaARType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pagos
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaClienteType
     */
    public function setPagos($pagos = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\FacturaARType::valueIsValid($pagos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\FacturaARType', is_array($pagos) ? implode(', ', $pagos) : var_export($pagos, true), implode(', ', \ClonixDev\AeatSii\EnumType\FacturaARType::getValidValues())), __LINE__);
        }
        $this->Pagos = $pagos;
        return $this;
    }
}
