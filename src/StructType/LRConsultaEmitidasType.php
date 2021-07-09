<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRConsultaEmitidasType StructType
 * @subpackage Structs
 */
class LRConsultaEmitidasType extends ConsultaInformacion
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for LRConsultaEmitidasType
     * @uses LRConsultaEmitidasType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroEmitidasType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\LRConsultaEmitidasType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroEmitidasType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
