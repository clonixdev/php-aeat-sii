<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaCobrosType StructType
 * @subpackage Structs
 */
class ConsultaCobrosType extends ConsultaInformacion
{
    /**
     * The FiltroConsultaCobros
     * @var \ClonixDev\AeatSii\StructType\LRFiltroCobrosType
     */
    public $FiltroConsultaCobros;
    /**
     * Constructor method for ConsultaCobrosType
     * @uses ConsultaCobrosType::setFiltroConsultaCobros()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroCobrosType $filtroConsultaCobros
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroCobrosType $filtroConsultaCobros = null)
    {
        $this
            ->setFiltroConsultaCobros($filtroConsultaCobros);
    }
    /**
     * Get FiltroConsultaCobros value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroCobrosType|null
     */
    public function getFiltroConsultaCobros()
    {
        return $this->FiltroConsultaCobros;
    }
    /**
     * Set FiltroConsultaCobros value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroCobrosType $filtroConsultaCobros
     * @return \ClonixDev\AeatSii\StructType\ConsultaCobrosType
     */
    public function setFiltroConsultaCobros(\ClonixDev\AeatSii\StructType\LRFiltroCobrosType $filtroConsultaCobros = null)
    {
        $this->FiltroConsultaCobros = $filtroConsultaCobros;
        return $this;
    }
}
