<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRConsultaVentaBienesConsignaType StructType
 * @subpackage Structs
 */
class LRConsultaVentaBienesConsignaType extends ConsultaInformacion
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroVentaBienesConsignaType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for LRConsultaVentaBienesConsignaType
     * @uses LRConsultaVentaBienesConsignaType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroVentaBienesConsignaType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroVentaBienesConsignaType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroVentaBienesConsignaType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroVentaBienesConsignaType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\LRConsultaVentaBienesConsignaType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroVentaBienesConsignaType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
