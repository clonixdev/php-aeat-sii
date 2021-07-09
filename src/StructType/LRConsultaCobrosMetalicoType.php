<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRConsultaCobrosMetalicoType StructType
 * @subpackage Structs
 */
class LRConsultaCobrosMetalicoType extends ConsultaInformacion
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for LRConsultaCobrosMetalicoType
     * @uses LRConsultaCobrosMetalicoType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\LRConsultaCobrosMetalicoType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
