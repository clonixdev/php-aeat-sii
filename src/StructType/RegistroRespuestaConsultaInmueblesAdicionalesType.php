<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaInmueblesAdicionalesType
 * StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaInmueblesAdicionalesType extends AbstractStructBase
{
    /**
     * The DatosInmueblesAdicionales
     * @var \ClonixDev\AeatSii\StructType\DatosInmuebleType
     */
    public $DatosInmueblesAdicionales;
    /**
     * The DatosPresentacion
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacion2Type
     */
    public $DatosPresentacion;
    /**
     * Constructor method for RegistroRespuestaConsultaInmueblesAdicionalesType
     * @uses RegistroRespuestaConsultaInmueblesAdicionalesType::setDatosInmueblesAdicionales()
     * @uses RegistroRespuestaConsultaInmueblesAdicionalesType::setDatosPresentacion()
     * @param \ClonixDev\AeatSii\StructType\DatosInmuebleType $datosInmueblesAdicionales
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\DatosInmuebleType $datosInmueblesAdicionales = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this
            ->setDatosInmueblesAdicionales($datosInmueblesAdicionales)
            ->setDatosPresentacion($datosPresentacion);
    }
    /**
     * Get DatosInmueblesAdicionales value
     * @return \ClonixDev\AeatSii\StructType\DatosInmuebleType|null
     */
    public function getDatosInmueblesAdicionales()
    {
        return $this->DatosInmueblesAdicionales;
    }
    /**
     * Set DatosInmueblesAdicionales value
     * @param \ClonixDev\AeatSii\StructType\DatosInmuebleType $datosInmueblesAdicionales
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType
     */
    public function setDatosInmueblesAdicionales(\ClonixDev\AeatSii\StructType\DatosInmuebleType $datosInmueblesAdicionales = null)
    {
        $this->DatosInmueblesAdicionales = $datosInmueblesAdicionales;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
}
