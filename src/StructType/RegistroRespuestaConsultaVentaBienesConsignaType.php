<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaVentaBienesConsignaType
 * StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaVentaBienesConsignaType extends AbstractStructBase
{
    /**
     * The IdRegistroDeclarado
     * @var \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType
     */
    public $IdRegistroDeclarado;
    /**
     * The DatosVentaBienesConsigna
     * @var \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
     */
    public $DatosVentaBienesConsigna;
    /**
     * The DatosPresentacion
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacion2Type
     */
    public $DatosPresentacion;
    /**
     * The EstadoVentaBienesConsigna
     * @var \ClonixDev\AeatSii\StructType\EstadoFactura2Type
     */
    public $EstadoVentaBienesConsigna;
    /**
     * Constructor method for RegistroRespuestaConsultaVentaBienesConsignaType
     * @uses RegistroRespuestaConsultaVentaBienesConsignaType::setIdRegistroDeclarado()
     * @uses RegistroRespuestaConsultaVentaBienesConsignaType::setDatosVentaBienesConsigna()
     * @uses RegistroRespuestaConsultaVentaBienesConsignaType::setDatosPresentacion()
     * @uses RegistroRespuestaConsultaVentaBienesConsignaType::setEstadoVentaBienesConsigna()
     * @param \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado
     * @param \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType $datosVentaBienesConsigna
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoVentaBienesConsigna
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado = null, \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType $datosVentaBienesConsigna = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null, \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoVentaBienesConsigna = null)
    {
        $this
            ->setIdRegistroDeclarado($idRegistroDeclarado)
            ->setDatosVentaBienesConsigna($datosVentaBienesConsigna)
            ->setDatosPresentacion($datosPresentacion)
            ->setEstadoVentaBienesConsigna($estadoVentaBienesConsigna);
    }
    /**
     * Get IdRegistroDeclarado value
     * @return \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType|null
     */
    public function getIdRegistroDeclarado()
    {
        return $this->IdRegistroDeclarado;
    }
    /**
     * Set IdRegistroDeclarado value
     * @param \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType
     */
    public function setIdRegistroDeclarado(\ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado = null)
    {
        $this->IdRegistroDeclarado = $idRegistroDeclarado;
        return $this;
    }
    /**
     * Get DatosVentaBienesConsigna value
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType|null
     */
    public function getDatosVentaBienesConsigna()
    {
        return $this->DatosVentaBienesConsigna;
    }
    /**
     * Set DatosVentaBienesConsigna value
     * @param \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType $datosVentaBienesConsigna
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType
     */
    public function setDatosVentaBienesConsigna(\ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType $datosVentaBienesConsigna = null)
    {
        $this->DatosVentaBienesConsigna = $datosVentaBienesConsigna;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
    /**
     * Get EstadoVentaBienesConsigna value
     * @return \ClonixDev\AeatSii\StructType\EstadoFactura2Type|null
     */
    public function getEstadoVentaBienesConsigna()
    {
        return $this->EstadoVentaBienesConsigna;
    }
    /**
     * Set EstadoVentaBienesConsigna value
     * @param \ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoVentaBienesConsigna
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType
     */
    public function setEstadoVentaBienesConsigna(\ClonixDev\AeatSii\StructType\EstadoFactura2Type $estadoVentaBienesConsigna = null)
    {
        $this->EstadoVentaBienesConsigna = $estadoVentaBienesConsigna;
        return $this;
    }
}
