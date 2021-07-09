<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaOperacionesSegurosType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaOperacionesSegurosType extends AbstractStructBase
{
    /**
     * The DatosOperacionesSeguros
     * @var \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
     */
    public $DatosOperacionesSeguros;
    /**
     * The DatosPresentacion
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacion2Type
     */
    public $DatosPresentacion;
    /**
     * The EstadoOperacionesSeguros
     * @var \ClonixDev\AeatSii\StructType\EstadoFactura2Type
     */
    public $EstadoOperacionesSeguros;
    /**
     * Constructor method for RegistroRespuestaConsultaOperacionesSegurosType
     * @uses RegistroRespuestaConsultaOperacionesSegurosType::setDatosOperacionesSeguros()
     * @uses RegistroRespuestaConsultaOperacionesSegurosType::setDatosPresentacion()
     * @uses RegistroRespuestaConsultaOperacionesSegurosType::setEstadoOperacionesSeguros()
     * @param \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType $datosOperacionesSeguros
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoOperacionesSeguros
     */
    public function __construct(\ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType $datosOperacionesSeguros = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null, \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoOperacionesSeguros = null)
    {
        $this
            ->setDatosOperacionesSeguros($datosOperacionesSeguros)
            ->setDatosPresentacion($datosPresentacion)
            ->setEstadoOperacionesSeguros($estadoOperacionesSeguros);
    }
    /**
     * Get DatosOperacionesSeguros value
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType|null
     */
    public function getDatosOperacionesSeguros()
    {
        return $this->DatosOperacionesSeguros;
    }
    /**
     * Set DatosOperacionesSeguros value
     * @param \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType $datosOperacionesSeguros
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType
     */
    public function setDatosOperacionesSeguros(\ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType $datosOperacionesSeguros = null)
    {
        $this->DatosOperacionesSeguros = $datosOperacionesSeguros;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
    /**
     * Get EstadoOperacionesSeguros value
     * @return \ClonixDev\AeatSii\StructType\EstadoFactura2Type|null
     */
    public function getEstadoOperacionesSeguros()
    {
        return $this->EstadoOperacionesSeguros;
    }
    /**
     * Set EstadoOperacionesSeguros value
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoOperacionesSeguros
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType
     */
    public function setEstadoOperacionesSeguros(\ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoOperacionesSeguros = null)
    {
        $this->EstadoOperacionesSeguros = $estadoOperacionesSeguros;
        return $this;
    }
}
