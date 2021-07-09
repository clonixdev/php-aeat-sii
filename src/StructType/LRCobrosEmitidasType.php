<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRCobrosEmitidasType StructType
 * @subpackage Structs
 */
class LRCobrosEmitidasType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType
     */
    public $IDFactura;
    /**
     * The Cobros
     * @var \ClonixDev\AeatSii\StructType\CobrosType
     */
    public $Cobros;
    /**
     * Constructor method for LRCobrosEmitidasType
     * @uses LRCobrosEmitidasType::setIDFactura()
     * @uses LRCobrosEmitidasType::setCobros()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\CobrosType $cobros
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null, \ClonixDev\AeatSii\StructType\CobrosType $cobros = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setCobros($cobros);
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
     * @return \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get Cobros value
     * @return \ClonixDev\AeatSii\StructType\CobrosType|null
     */
    public function getCobros()
    {
        return $this->Cobros;
    }
    /**
     * Set Cobros value
     * @param \ClonixDev\AeatSii\StructType\CobrosType $cobros
     * @return \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType
     */
    public function setCobros(\ClonixDev\AeatSii\StructType\CobrosType $cobros = null)
    {
        $this->Cobros = $cobros;
        return $this;
    }
}
