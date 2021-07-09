<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroSiiImputacion StructType
 * Meta information extracted from the WSDL
 * - documentation: Información básica que contienen los registros de imputacion
 * @subpackage Structs
 */
class RegistroSiiImputacion extends AbstractStructBase
{
    /**
     * The PeriodoImputacion
     * @var \ClonixDev\AeatSii\StructType\PeriodoImputacion
     */
    public $PeriodoImputacion;
    /**
     * Constructor method for RegistroSiiImputacion
     * @uses RegistroSiiImputacion::setPeriodoImputacion()
     * @param \ClonixDev\AeatSii\StructType\PeriodoImputacion $periodoImputacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PeriodoImputacion $periodoImputacion = null)
    {
        $this
            ->setPeriodoImputacion($periodoImputacion);
    }
    /**
     * Get PeriodoImputacion value
     * @return \ClonixDev\AeatSii\StructType\PeriodoImputacion|null
     */
    public function getPeriodoImputacion()
    {
        return $this->PeriodoImputacion;
    }
    /**
     * Set PeriodoImputacion value
     * @param \ClonixDev\AeatSii\StructType\PeriodoImputacion $periodoImputacion
     * @return \ClonixDev\AeatSii\StructType\RegistroSiiImputacion
     */
    public function setPeriodoImputacion(\ClonixDev\AeatSii\StructType\PeriodoImputacion $periodoImputacion = null)
    {
        $this->PeriodoImputacion = $periodoImputacion;
        return $this;
    }
}
