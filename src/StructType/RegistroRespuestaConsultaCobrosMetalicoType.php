<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaCobrosMetalicoType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaCobrosMetalicoType extends AbstractStructBase
{
    /**
     * The DatosCobroMetalico
     * @var \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType
     */
    public $DatosCobroMetalico;
    /**
     * The DatosPresentacion
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacion2Type
     */
    public $DatosPresentacion;
    /**
     * The EstadoCobroMetalico
     * @var \ClonixDev\AeatSii\StructType\EstadoFactura2Type
     */
    public $EstadoCobroMetalico;
    /**
     * Constructor method for RegistroRespuestaConsultaCobrosMetalicoType
     * @uses RegistroRespuestaConsultaCobrosMetalicoType::setDatosCobroMetalico()
     * @uses RegistroRespuestaConsultaCobrosMetalicoType::setDatosPresentacion()
     * @uses RegistroRespuestaConsultaCobrosMetalicoType::setEstadoCobroMetalico()
     * @param \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType $datosCobroMetalico
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoCobroMetalico
     */
    public function __construct(\ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType $datosCobroMetalico = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null, \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoCobroMetalico = null)
    {
        $this
            ->setDatosCobroMetalico($datosCobroMetalico)
            ->setDatosPresentacion($datosPresentacion)
            ->setEstadoCobroMetalico($estadoCobroMetalico);
    }
    /**
     * Get DatosCobroMetalico value
     * @return \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType|null
     */
    public function getDatosCobroMetalico()
    {
        return $this->DatosCobroMetalico;
    }
    /**
     * Set DatosCobroMetalico value
     * @param \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType $datosCobroMetalico
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType
     */
    public function setDatosCobroMetalico(\ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType $datosCobroMetalico = null)
    {
        $this->DatosCobroMetalico = $datosCobroMetalico;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
    /**
     * Get EstadoCobroMetalico value
     * @return \ClonixDev\AeatSii\StructType\EstadoFactura2Type|null
     */
    public function getEstadoCobroMetalico()
    {
        return $this->EstadoCobroMetalico;
    }
    /**
     * Set EstadoCobroMetalico value
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoCobroMetalico
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType
     */
    public function setEstadoCobroMetalico(\ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoCobroMetalico = null)
    {
        $this->EstadoCobroMetalico = $estadoCobroMetalico;
        return $this;
    }
}
