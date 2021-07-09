<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroPagosType StructType
 * @subpackage Structs
 */
class LRFiltroPagosType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType
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
     * Constructor method for LRFiltroPagosType
     * @uses LRFiltroPagosType::setIDFactura()
     * @uses LRFiltroPagosType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura
     * @param float $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura = null, $clavePaginacion = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setClavePaginacion($clavePaginacion);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\LRFiltroPagosType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura = null)
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroPagosType
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
