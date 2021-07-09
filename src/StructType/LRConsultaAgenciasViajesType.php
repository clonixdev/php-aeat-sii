<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRConsultaAgenciasViajesType StructType
 * @subpackage Structs
 */
class LRConsultaAgenciasViajesType extends ConsultaInformacion
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for LRConsultaAgenciasViajesType
     * @uses LRConsultaAgenciasViajesType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\LRConsultaAgenciasViajesType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
