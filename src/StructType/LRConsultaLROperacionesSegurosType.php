<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRConsultaLROperacionesSegurosType StructType
 * @subpackage Structs
 */
class LRConsultaLROperacionesSegurosType extends ConsultaInformacion
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for LRConsultaLROperacionesSegurosType
     * @uses LRConsultaLROperacionesSegurosType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\LRConsultaLROperacionesSegurosType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
