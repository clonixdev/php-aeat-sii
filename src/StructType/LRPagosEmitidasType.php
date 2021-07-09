<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRPagosEmitidasType StructType
 * @subpackage Structs
 */
class LRPagosEmitidasType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType
     */
    public $IDFactura;
    /**
     * The Pagos
     * @var \ClonixDev\AeatSii\StructType\PagosType
     */
    public $Pagos;
    /**
     * Constructor method for LRPagosEmitidasType
     * @uses LRPagosEmitidasType::setIDFactura()
     * @uses LRPagosEmitidasType::setPagos()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\PagosType $pagos
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura = null, \ClonixDev\AeatSii\StructType\PagosType $pagos = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setPagos($pagos);
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
     * @return \ClonixDev\AeatSii\StructType\LRPagosEmitidasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get Pagos value
     * @return \ClonixDev\AeatSii\StructType\PagosType|null
     */
    public function getPagos()
    {
        return $this->Pagos;
    }
    /**
     * Set Pagos value
     * @param \ClonixDev\AeatSii\StructType\PagosType $pagos
     * @return \ClonixDev\AeatSii\StructType\LRPagosEmitidasType
     */
    public function setPagos(\ClonixDev\AeatSii\StructType\PagosType $pagos = null)
    {
        $this->Pagos = $pagos;
        return $this;
    }
}
