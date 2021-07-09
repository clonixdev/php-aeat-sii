<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaLRFactInformadasClienteType StructType
 * @subpackage Structs
 */
class ConsultaLRFactInformadasClienteType extends ConsultaInformacionCliente
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasClienteType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for ConsultaLRFactInformadasClienteType
     * @uses ConsultaLRFactInformadasClienteType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasClienteType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroFactInformadasClienteType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasClienteType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasClienteType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasClienteType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroFactInformadasClienteType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
