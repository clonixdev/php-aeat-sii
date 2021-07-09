<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaLRFactInformadasAgrupadasProveedorType StructType
 * @subpackage Structs
 */
class ConsultaLRFactInformadasAgrupadasProveedorType extends ConsultaInformacionProveedor
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasProveedorType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for ConsultaLRFactInformadasAgrupadasProveedorType
     * @uses ConsultaLRFactInformadasAgrupadasProveedorType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasProveedorType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasProveedorType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasProveedorType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasProveedorType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasAgrupadasProveedorType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasProveedorType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
