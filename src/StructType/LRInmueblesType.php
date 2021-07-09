<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRInmueblesType StructType
 * @subpackage Structs
 */
class LRInmueblesType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType
     */
    public $IDFactura;
    /**
     * The DatosInmueble
     * @var \ClonixDev\AeatSii\StructType\InmueblesAdicionalType
     */
    public $DatosInmueble;
    /**
     * Constructor method for LRInmueblesType
     * @uses LRInmueblesType::setIDFactura()
     * @uses LRInmueblesType::setDatosInmueble()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\InmueblesAdicionalType $datosInmueble
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null, \ClonixDev\AeatSii\StructType\InmueblesAdicionalType $datosInmueble = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setDatosInmueble($datosInmueble);
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
     * @return \ClonixDev\AeatSii\StructType\LRInmueblesType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get DatosInmueble value
     * @return \ClonixDev\AeatSii\StructType\InmueblesAdicionalType|null
     */
    public function getDatosInmueble()
    {
        return $this->DatosInmueble;
    }
    /**
     * Set DatosInmueble value
     * @param \ClonixDev\AeatSii\StructType\InmueblesAdicionalType $datosInmueble
     * @return \ClonixDev\AeatSii\StructType\LRInmueblesType
     */
    public function setDatosInmueble(\ClonixDev\AeatSii\StructType\InmueblesAdicionalType $datosInmueble = null)
    {
        $this->DatosInmueble = $datosInmueble;
        return $this;
    }
}
