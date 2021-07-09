<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRConsultaRecibidasType StructType
 * @subpackage Structs
 */
class LRConsultaRecibidasType extends ConsultaInformacion
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for LRConsultaRecibidasType
     * @uses LRConsultaRecibidasType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroRecibidasType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\LRConsultaRecibidasType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroRecibidasType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
