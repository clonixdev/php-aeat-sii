<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaCobrosType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaCobrosType extends AbstractStructBase
{
    /**
     * The DatosCobro
     * @var \ClonixDev\AeatSii\StructType\DatosPagoCobroType
     */
    public $DatosCobro;
    /**
     * The DatosPresentacion
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacion2Type
     */
    public $DatosPresentacion;
    /**
     * Constructor method for RegistroRespuestaConsultaCobrosType
     * @uses RegistroRespuestaConsultaCobrosType::setDatosCobro()
     * @uses RegistroRespuestaConsultaCobrosType::setDatosPresentacion()
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType $datosCobro
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\DatosPagoCobroType $datosCobro = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this
            ->setDatosCobro($datosCobro)
            ->setDatosPresentacion($datosPresentacion);
    }
    /**
     * Get DatosCobro value
     * @return \ClonixDev\AeatSii\StructType\DatosPagoCobroType|null
     */
    public function getDatosCobro()
    {
        return $this->DatosCobro;
    }
    /**
     * Set DatosCobro value
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType $datosCobro
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType
     */
    public function setDatosCobro(\ClonixDev\AeatSii\StructType\DatosPagoCobroType $datosCobro = null)
    {
        $this->DatosCobro = $datosCobro;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
}
