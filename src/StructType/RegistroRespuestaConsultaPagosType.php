<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaPagosType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaPagosType extends AbstractStructBase
{
    /**
     * The DatosPago
     * @var \ClonixDev\AeatSii\StructType\DatosPagoCobroType
     */
    public $DatosPago;
    /**
     * The DatosPresentacion
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacion2Type
     */
    public $DatosPresentacion;
    /**
     * Constructor method for RegistroRespuestaConsultaPagosType
     * @uses RegistroRespuestaConsultaPagosType::setDatosPago()
     * @uses RegistroRespuestaConsultaPagosType::setDatosPresentacion()
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType $datosPago
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\DatosPagoCobroType $datosPago = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this
            ->setDatosPago($datosPago)
            ->setDatosPresentacion($datosPresentacion);
    }
    /**
     * Get DatosPago value
     * @return \ClonixDev\AeatSii\StructType\DatosPagoCobroType|null
     */
    public function getDatosPago()
    {
        return $this->DatosPago;
    }
    /**
     * Set DatosPago value
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType $datosPago
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType
     */
    public function setDatosPago(\ClonixDev\AeatSii\StructType\DatosPagoCobroType $datosPago = null)
    {
        $this->DatosPago = $datosPago;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
}
