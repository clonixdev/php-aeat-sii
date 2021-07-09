<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaAgenciasViajesType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaAgenciasViajesType extends AbstractStructBase
{
    /**
     * The DatosAgenciasViajes
     * @var \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType
     */
    public $DatosAgenciasViajes;
    /**
     * The DatosPresentacion
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacion2Type
     */
    public $DatosPresentacion;
    /**
     * The EstadoAgenciasViajes
     * @var \ClonixDev\AeatSii\StructType\EstadoFactura2Type
     */
    public $EstadoAgenciasViajes;
    /**
     * Constructor method for RegistroRespuestaConsultaAgenciasViajesType
     * @uses RegistroRespuestaConsultaAgenciasViajesType::setDatosAgenciasViajes()
     * @uses RegistroRespuestaConsultaAgenciasViajesType::setDatosPresentacion()
     * @uses RegistroRespuestaConsultaAgenciasViajesType::setEstadoAgenciasViajes()
     * @param \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType $datosAgenciasViajes
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoAgenciasViajes
     */
    public function __construct(\ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType $datosAgenciasViajes = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null, \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoAgenciasViajes = null)
    {
        $this
            ->setDatosAgenciasViajes($datosAgenciasViajes)
            ->setDatosPresentacion($datosPresentacion)
            ->setEstadoAgenciasViajes($estadoAgenciasViajes);
    }
    /**
     * Get DatosAgenciasViajes value
     * @return \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType|null
     */
    public function getDatosAgenciasViajes()
    {
        return $this->DatosAgenciasViajes;
    }
    /**
     * Set DatosAgenciasViajes value
     * @param \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType $datosAgenciasViajes
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType
     */
    public function setDatosAgenciasViajes(\ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType $datosAgenciasViajes = null)
    {
        $this->DatosAgenciasViajes = $datosAgenciasViajes;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
    /**
     * Get EstadoAgenciasViajes value
     * @return \ClonixDev\AeatSii\StructType\EstadoFactura2Type|null
     */
    public function getEstadoAgenciasViajes()
    {
        return $this->EstadoAgenciasViajes;
    }
    /**
     * Set EstadoAgenciasViajes value
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoAgenciasViajes
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType
     */
    public function setEstadoAgenciasViajes(\ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoAgenciasViajes = null)
    {
        $this->EstadoAgenciasViajes = $estadoAgenciasViajes;
        return $this;
    }
}
