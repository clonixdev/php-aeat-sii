<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRfacturasEmitidasType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos correspondientes al libro de Facturas emitidas
 * @subpackage Structs
 */
class LRfacturasEmitidasType extends RegistroSii
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType
     */
    public $IDFactura;
    /**
     * The FacturaExpedida
     * Meta information extracted from the WSDL
     * - documentation: Factura correspondiente al libro de facturas expedidas.
     * @var \ClonixDev\AeatSii\StructType\FacturaExpedidaType
     */
    public $FacturaExpedida;
    /**
     * Constructor method for LRfacturasEmitidasType
     * @uses LRfacturasEmitidasType::setIDFactura()
     * @uses LRfacturasEmitidasType::setFacturaExpedida()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\FacturaExpedidaType $facturaExpedida
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura = null, \ClonixDev\AeatSii\StructType\FacturaExpedidaType $facturaExpedida = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setFacturaExpedida($facturaExpedida);
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
     * @return \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get FacturaExpedida value
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType|null
     */
    public function getFacturaExpedida()
    {
        return $this->FacturaExpedida;
    }
    /**
     * Set FacturaExpedida value
     * @param \ClonixDev\AeatSii\StructType\FacturaExpedidaType $facturaExpedida
     * @return \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType
     */
    public function setFacturaExpedida(\ClonixDev\AeatSii\StructType\FacturaExpedidaType $facturaExpedida = null)
    {
        $this->FacturaExpedida = $facturaExpedida;
        return $this;
    }
}
