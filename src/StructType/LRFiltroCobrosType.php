<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroCobrosType StructType
 * @subpackage Structs
 */
class LRFiltroCobrosType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType
     */
    public $IDFactura;
    /**
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float
     */
    public $ClavePaginacion;
    /**
     * Constructor method for LRFiltroCobrosType
     * @uses LRFiltroCobrosType::setIDFactura()
     * @uses LRFiltroCobrosType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura
     * @param float $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null, $clavePaginacion = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setClavePaginacion($clavePaginacion);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\LRFiltroCobrosType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get ClavePaginacion value
     * @return float|null
     */
    public function getClavePaginacion()
    {
        return $this->ClavePaginacion;
    }
    /**
     * Set ClavePaginacion value
     * @param float $clavePaginacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroCobrosType
     */
    public function setClavePaginacion($clavePaginacion = null)
    {
        // validation for constraint: float
        if (!is_null($clavePaginacion) && !(is_float($clavePaginacion) || is_numeric($clavePaginacion))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($clavePaginacion, true), gettype($clavePaginacion)), __LINE__);
        }
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
