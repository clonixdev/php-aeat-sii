<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaInmueblesAdicionalesType StructType
 * @subpackage Structs
 */
class ConsultaInmueblesAdicionalesType extends ConsultaInformacion
{
    /**
     * The FiltroConsultaInmueblesAdicionales
     * @var \ClonixDev\AeatSii\StructType\LRFiltroInmueblesAdicionalesType
     */
    public $FiltroConsultaInmueblesAdicionales;
    /**
     * Constructor method for ConsultaInmueblesAdicionalesType
     * @uses ConsultaInmueblesAdicionalesType::setFiltroConsultaInmueblesAdicionales()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroInmueblesAdicionalesType $filtroConsultaInmueblesAdicionales
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroInmueblesAdicionalesType $filtroConsultaInmueblesAdicionales = null)
    {
        $this
            ->setFiltroConsultaInmueblesAdicionales($filtroConsultaInmueblesAdicionales);
    }
    /**
     * Get FiltroConsultaInmueblesAdicionales value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroInmueblesAdicionalesType|null
     */
    public function getFiltroConsultaInmueblesAdicionales()
    {
        return $this->FiltroConsultaInmueblesAdicionales;
    }
    /**
     * Set FiltroConsultaInmueblesAdicionales value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroInmueblesAdicionalesType $filtroConsultaInmueblesAdicionales
     * @return \ClonixDev\AeatSii\StructType\ConsultaInmueblesAdicionalesType
     */
    public function setFiltroConsultaInmueblesAdicionales(\ClonixDev\AeatSii\StructType\LRFiltroInmueblesAdicionalesType $filtroConsultaInmueblesAdicionales = null)
    {
        $this->FiltroConsultaInmueblesAdicionales = $filtroConsultaInmueblesAdicionales;
        return $this;
    }
}
