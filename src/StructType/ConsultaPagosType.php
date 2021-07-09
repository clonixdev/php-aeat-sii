<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaPagosType StructType
 * @subpackage Structs
 */
class ConsultaPagosType extends ConsultaInformacion
{
    /**
     * The FiltroConsultaPagos
     * @var \ClonixDev\AeatSii\StructType\LRFiltroPagosType
     */
    public $FiltroConsultaPagos;
    /**
     * Constructor method for ConsultaPagosType
     * @uses ConsultaPagosType::setFiltroConsultaPagos()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroPagosType $filtroConsultaPagos
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroPagosType $filtroConsultaPagos = null)
    {
        $this
            ->setFiltroConsultaPagos($filtroConsultaPagos);
    }
    /**
     * Get FiltroConsultaPagos value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroPagosType|null
     */
    public function getFiltroConsultaPagos()
    {
        return $this->FiltroConsultaPagos;
    }
    /**
     * Set FiltroConsultaPagos value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroPagosType $filtroConsultaPagos
     * @return \ClonixDev\AeatSii\StructType\ConsultaPagosType
     */
    public function setFiltroConsultaPagos(\ClonixDev\AeatSii\StructType\LRFiltroPagosType $filtroConsultaPagos = null)
    {
        $this->FiltroConsultaPagos = $filtroConsultaPagos;
        return $this;
    }
}
