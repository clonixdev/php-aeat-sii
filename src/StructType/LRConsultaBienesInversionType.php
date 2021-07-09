<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRConsultaBienesInversionType StructType
 * @subpackage Structs
 */
class LRConsultaBienesInversionType extends ConsultaInformacion
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroBienInversionType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for LRConsultaBienesInversionType
     * @uses LRConsultaBienesInversionType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroBienInversionType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroBienInversionType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroBienInversionType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroBienInversionType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\LRConsultaBienesInversionType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroBienInversionType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
