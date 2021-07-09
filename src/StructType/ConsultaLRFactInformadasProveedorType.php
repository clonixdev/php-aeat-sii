<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaLRFactInformadasProveedorType StructType
 * @subpackage Structs
 */
class ConsultaLRFactInformadasProveedorType extends ConsultaInformacionProveedor
{
    /**
     * The FiltroConsulta
     * @var \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType
     */
    public $FiltroConsulta;
    /**
     * Constructor method for ConsultaLRFactInformadasProveedorType
     * @uses ConsultaLRFactInformadasProveedorType::setFiltroConsulta()
     * @param \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType $filtroConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType $filtroConsulta = null)
    {
        $this
            ->setFiltroConsulta($filtroConsulta);
    }
    /**
     * Get FiltroConsulta value
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType|null
     */
    public function getFiltroConsulta()
    {
        return $this->FiltroConsulta;
    }
    /**
     * Set FiltroConsulta value
     * @param \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType $filtroConsulta
     * @return \ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasProveedorType
     */
    public function setFiltroConsulta(\ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType $filtroConsulta = null)
    {
        $this->FiltroConsulta = $filtroConsulta;
        return $this;
    }
}
