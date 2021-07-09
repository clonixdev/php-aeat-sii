<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFacturasRecibidasType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos correspondientes al libro de Facturas recibidas
 * @subpackage Structs
 */
class LRFacturasRecibidasType extends RegistroSii
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaRecibidaType
     */
    public $IDFactura;
    /**
     * The FacturaRecibida
     * Meta information extracted from the WSDL
     * - documentation: Apunte correspondiente al libro de facturas recibidas.
     * @var \ClonixDev\AeatSii\StructType\FacturaRecibidaType
     */
    public $FacturaRecibida;
    /**
     * Constructor method for LRFacturasRecibidasType
     * @uses LRFacturasRecibidasType::setIDFactura()
     * @uses LRFacturasRecibidasType::setFacturaRecibida()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\FacturaRecibidaType $facturaRecibida
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaType $iDFactura = null, \ClonixDev\AeatSii\StructType\FacturaRecibidaType $facturaRecibida = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setFacturaRecibida($facturaRecibida);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaRecibidaType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get FacturaRecibida value
     * @return \ClonixDev\AeatSii\StructType\FacturaRecibidaType|null
     */
    public function getFacturaRecibida()
    {
        return $this->FacturaRecibida;
    }
    /**
     * Set FacturaRecibida value
     * @param \ClonixDev\AeatSii\StructType\FacturaRecibidaType $facturaRecibida
     * @return \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType
     */
    public function setFacturaRecibida(\ClonixDev\AeatSii\StructType\FacturaRecibidaType $facturaRecibida = null)
    {
        $this->FacturaRecibida = $facturaRecibida;
        return $this;
    }
}
