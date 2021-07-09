<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClavePaginacionBienType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de identificación de factura
 * @subpackage Structs
 */
class ClavePaginacionBienType extends AbstractStructBase
{
    /**
     * The IDEmisorFactura
     * @var \ClonixDev\AeatSii\StructType\IDEmisorFactura
     */
    public $IDEmisorFactura;
    /**
     * The NumSerieFacturaEmisor
     * Meta information extracted from the WSDL
     * - documentation: Nº Serie+Nº Factura de la Factura del Emisor.
     * - base: string
     * - maxLength: 60
     * - minLength: 1
     * @var string
     */
    public $NumSerieFacturaEmisor;
    /**
     * The FechaExpedicionFacturaEmisor
     * Meta information extracted from the WSDL
     * - documentation: Fecha de emisión de la factura
     * - base: string
     * - length: 10
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaExpedicionFacturaEmisor;
    /**
     * The IdentificacionBien
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 40
     * @var string
     */
    public $IdentificacionBien;
    /**
     * Constructor method for ClavePaginacionBienType
     * @uses ClavePaginacionBienType::setIDEmisorFactura()
     * @uses ClavePaginacionBienType::setNumSerieFacturaEmisor()
     * @uses ClavePaginacionBienType::setFechaExpedicionFacturaEmisor()
     * @uses ClavePaginacionBienType::setIdentificacionBien()
     * @param \ClonixDev\AeatSii\StructType\IDEmisorFactura $iDEmisorFactura
     * @param string $numSerieFacturaEmisor
     * @param string $fechaExpedicionFacturaEmisor
     * @param string $identificacionBien
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDEmisorFactura $iDEmisorFactura = null, $numSerieFacturaEmisor = null, $fechaExpedicionFacturaEmisor = null, $identificacionBien = null)
    {
        $this
            ->setIDEmisorFactura($iDEmisorFactura)
            ->setNumSerieFacturaEmisor($numSerieFacturaEmisor)
            ->setFechaExpedicionFacturaEmisor($fechaExpedicionFacturaEmisor)
            ->setIdentificacionBien($identificacionBien);
    }
    /**
     * Get IDEmisorFactura value
     * @return \ClonixDev\AeatSii\StructType\IDEmisorFactura|null
     */
    public function getIDEmisorFactura()
    {
        return $this->IDEmisorFactura;
    }
    /**
     * Set IDEmisorFactura value
     * @param \ClonixDev\AeatSii\StructType\IDEmisorFactura $iDEmisorFactura
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacionBienType
     */
    public function setIDEmisorFactura(\ClonixDev\AeatSii\StructType\IDEmisorFactura $iDEmisorFactura = null)
    {
        $this->IDEmisorFactura = $iDEmisorFactura;
        return $this;
    }
    /**
     * Get NumSerieFacturaEmisor value
     * @return string|null
     */
    public function getNumSerieFacturaEmisor()
    {
        return $this->NumSerieFacturaEmisor;
    }
    /**
     * Set NumSerieFacturaEmisor value
     * @param string $numSerieFacturaEmisor
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacionBienType
     */
    public function setNumSerieFacturaEmisor($numSerieFacturaEmisor = null)
    {
        // validation for constraint: string
        if (!is_null($numSerieFacturaEmisor) && !is_string($numSerieFacturaEmisor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numSerieFacturaEmisor, true), gettype($numSerieFacturaEmisor)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($numSerieFacturaEmisor) && mb_strlen($numSerieFacturaEmisor) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($numSerieFacturaEmisor)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numSerieFacturaEmisor) && mb_strlen($numSerieFacturaEmisor) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($numSerieFacturaEmisor)), __LINE__);
        }
        $this->NumSerieFacturaEmisor = $numSerieFacturaEmisor;
        return $this;
    }
    /**
     * Get FechaExpedicionFacturaEmisor value
     * @return string|null
     */
    public function getFechaExpedicionFacturaEmisor()
    {
        return $this->FechaExpedicionFacturaEmisor;
    }
    /**
     * Set FechaExpedicionFacturaEmisor value
     * @param string $fechaExpedicionFacturaEmisor
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacionBienType
     */
    public function setFechaExpedicionFacturaEmisor($fechaExpedicionFacturaEmisor = null)
    {
        // validation for constraint: string
        if (!is_null($fechaExpedicionFacturaEmisor) && !is_string($fechaExpedicionFacturaEmisor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaExpedicionFacturaEmisor, true), gettype($fechaExpedicionFacturaEmisor)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaExpedicionFacturaEmisor) && mb_strlen($fechaExpedicionFacturaEmisor) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaExpedicionFacturaEmisor)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaExpedicionFacturaEmisor) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaExpedicionFacturaEmisor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaExpedicionFacturaEmisor, true)), __LINE__);
        }
        $this->FechaExpedicionFacturaEmisor = $fechaExpedicionFacturaEmisor;
        return $this;
    }
    /**
     * Get IdentificacionBien value
     * @return string|null
     */
    public function getIdentificacionBien()
    {
        return $this->IdentificacionBien;
    }
    /**
     * Set IdentificacionBien value
     * @param string $identificacionBien
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacionBienType
     */
    public function setIdentificacionBien($identificacionBien = null)
    {
        // validation for constraint: string
        if (!is_null($identificacionBien) && !is_string($identificacionBien)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificacionBien, true), gettype($identificacionBien)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($identificacionBien) && mb_strlen($identificacionBien) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($identificacionBien)), __LINE__);
        }
        $this->IdentificacionBien = $identificacionBien;
        return $this;
    }
}
