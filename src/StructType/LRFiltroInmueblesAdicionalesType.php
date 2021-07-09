<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroInmueblesAdicionalesType StructType
 * @subpackage Structs
 */
class LRFiltroInmueblesAdicionalesType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType
     */
    public $IDFactura;
    /**
     * Constructor method for LRFiltroInmueblesAdicionalesType
     * @uses LRFiltroInmueblesAdicionalesType::setIDFactura()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null)
    {
        $this
            ->setIDFactura($iDFactura);
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroInmueblesAdicionalesType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
}
