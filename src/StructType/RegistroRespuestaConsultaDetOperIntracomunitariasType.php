<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaDetOperIntracomunitariasType
 * StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaDetOperIntracomunitariasType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType
     */
    public $IDFactura;
    /**
     * The DatosDetOperIntracomunitarias
     * @var \ClonixDev\AeatSii\StructType\RespuestaDetOperIntracomunitariaType
     */
    public $DatosDetOperIntracomunitarias;
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
     * Constructor method for RegistroRespuestaConsultaDetOperIntracomunitariasType
     * @uses RegistroRespuestaConsultaDetOperIntracomunitariasType::setIDFactura()
     * @uses RegistroRespuestaConsultaDetOperIntracomunitariasType::setDatosDetOperIntracomunitarias()
     * @uses RegistroRespuestaConsultaDetOperIntracomunitariasType::setDatosPresentacion()
     * @uses RegistroRespuestaConsultaDetOperIntracomunitariasType::setEstadoFactura()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\RespuestaDetOperIntracomunitariaType $datosDetOperIntracomunitarias
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoFactura
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null, \ClonixDev\AeatSii\StructType\RespuestaDetOperIntracomunitariaType $datosDetOperIntracomunitarias = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null, \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoFactura = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setDatosDetOperIntracomunitarias($datosDetOperIntracomunitarias)
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get DatosDetOperIntracomunitarias value
     * @return \ClonixDev\AeatSii\StructType\RespuestaDetOperIntracomunitariaType|null
     */
    public function getDatosDetOperIntracomunitarias()
    {
        return $this->DatosDetOperIntracomunitarias;
    }
    /**
     * Set DatosDetOperIntracomunitarias value
     * @param \ClonixDev\AeatSii\StructType\RespuestaDetOperIntracomunitariaType $datosDetOperIntracomunitarias
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType
     */
    public function setDatosDetOperIntracomunitarias(\ClonixDev\AeatSii\StructType\RespuestaDetOperIntracomunitariaType $datosDetOperIntracomunitarias = null)
    {
        $this->DatosDetOperIntracomunitarias = $datosDetOperIntracomunitarias;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType
     */
    public function setEstadoFactura(\ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoFactura = null)
    {
        $this->EstadoFactura = $estadoFactura;
        return $this;
    }
}
