<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRConsultaDetOperIntracomunitariasType StructType
 * @subpackage Structs
 */
class LRConsultaDetOperIntracomunitariasType extends ConsultaInformacion
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for LRConsultaDetOperIntracomunitariasType
     * @uses LRConsultaDetOperIntracomunitariasType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\LRConsultaDetOperIntracomunitariasType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
