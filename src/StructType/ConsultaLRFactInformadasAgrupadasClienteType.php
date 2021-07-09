<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaLRFactInformadasAgrupadasClienteType StructType
 * @subpackage Structs
 */
class ConsultaLRFactInformadasAgrupadasClienteType extends ConsultaInformacionCliente
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasClienteType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for ConsultaLRFactInformadasAgrupadasClienteType
     * @uses ConsultaLRFactInformadasAgrupadasClienteType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasClienteType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasClienteType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasClienteType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasClienteType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasAgrupadasClienteType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasClienteType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
