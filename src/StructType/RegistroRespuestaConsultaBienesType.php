<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaBienesType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaBienesType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType
     */
    public $IDFactura;
    /**
     * The DatosBienInversion
     * @var \ClonixDev\AeatSii\StructType\BienDeInversionType
     */
    public $DatosBienInversion;
    /**
     * The DatosPresentacion
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacion2Type
     */
    public $DatosPresentacion;
    /**
     * The EstadoFactura
     * @var \ClonixDev\AeatSii\StructType\EstadoFactura2Type
     */
    public $EstadoFactura;
    /**
     * Constructor method for RegistroRespuestaConsultaBienesType
     * @uses RegistroRespuestaConsultaBienesType::setIDFactura()
     * @uses RegistroRespuestaConsultaBienesType::setDatosBienInversion()
     * @uses RegistroRespuestaConsultaBienesType::setDatosPresentacion()
     * @uses RegistroRespuestaConsultaBienesType::setEstadoFactura()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\BienDeInversionType $datosBienInversion
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoFactura
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null, \ClonixDev\AeatSii\StructType\BienDeInversionType $datosBienInversion = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null, \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoFactura = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setDatosBienInversion($datosBienInversion)
            ->setDatosPresentacion($datosPresentacion)
            ->setEstadoFactura($estadoFactura);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get DatosBienInversion value
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType|null
     */
    public function getDatosBienInversion()
    {
        return $this->DatosBienInversion;
    }
    /**
     * Set DatosBienInversion value
     * @param \ClonixDev\AeatSii\StructType\BienDeInversionType $datosBienInversion
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType
     */
    public function setDatosBienInversion(\ClonixDev\AeatSii\StructType\BienDeInversionType $datosBienInversion = null)
    {
        $this->DatosBienInversion = $datosBienInversion;
        return $this;
    }
    /**
     * Get DatosPresentacion value
     * @return \ClonixDev\AeatSii\StructType\DatosPresentacion2Type|null
     */
    public function getDatosPresentacion()
    {
        return $this->DatosPresentacion;
    }
    /**
     * Set DatosPresentacion value
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
    /**
     * Get EstadoFactura value
     * @return \ClonixDev\AeatSii\StructType\EstadoFactura2Type|null
     */
    public function getEstadoFactura()
    {
        return $this->EstadoFactura;
    }
    /**
     * Set EstadoFactura value
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoFactura
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType
     */
    public function setEstadoFactura(\ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoFactura = null)
    {
        $this->EstadoFactura = $estadoFactura;
        return $this;
    }
}
