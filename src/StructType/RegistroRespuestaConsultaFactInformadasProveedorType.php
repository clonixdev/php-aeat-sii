<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaFactInformadasProveedorType
 * StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaFactInformadasProveedorType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaImputacionType
     */
    public $IDFactura;
    /**
     * The PeriodoLiquidacion
     * @var \ClonixDev\AeatSii\StructType\PeriodoLiquidacion
     */
    public $PeriodoLiquidacion;
    /**
     * The DatosFacturaInformadaProveedor
     * @var \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public $DatosFacturaInformadaProveedor;
    /**
     * The Proveedor
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $Proveedor;
    /**
     * The EstadoFactura
     * @var \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType
     */
    public $EstadoFactura;
    /**
     * Constructor method for RegistroRespuestaConsultaFactInformadasProveedorType
     * @uses RegistroRespuestaConsultaFactInformadasProveedorType::setIDFactura()
     * @uses RegistroRespuestaConsultaFactInformadasProveedorType::setPeriodoLiquidacion()
     * @uses RegistroRespuestaConsultaFactInformadasProveedorType::setDatosFacturaInformadaProveedor()
     * @uses RegistroRespuestaConsultaFactInformadasProveedorType::setProveedor()
     * @uses RegistroRespuestaConsultaFactInformadasProveedorType::setEstadoFactura()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaImputacionType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion
     * @param \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType $datosFacturaInformadaProveedor
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor
     * @param \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType $estadoFactura
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaImputacionType $iDFactura = null, \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null, \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType $datosFacturaInformadaProveedor = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor = null, \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType $estadoFactura = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setPeriodoLiquidacion($periodoLiquidacion)
            ->setDatosFacturaInformadaProveedor($datosFacturaInformadaProveedor)
            ->setProveedor($proveedor)
            ->setEstadoFactura($estadoFactura);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaImputacionType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaImputacionType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaImputacionType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get PeriodoLiquidacion value
     * @return \ClonixDev\AeatSii\StructType\PeriodoLiquidacion|null
     */
    public function getPeriodoLiquidacion()
    {
        return $this->PeriodoLiquidacion;
    }
    /**
     * Set PeriodoLiquidacion value
     * @param \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType
     */
    public function setPeriodoLiquidacion(\ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null)
    {
        $this->PeriodoLiquidacion = $periodoLiquidacion;
        return $this;
    }
    /**
     * Get DatosFacturaInformadaProveedor value
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType|null
     */
    public function getDatosFacturaInformadaProveedor()
    {
        return $this->DatosFacturaInformadaProveedor;
    }
    /**
     * Set DatosFacturaInformadaProveedor value
     * @param \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType $datosFacturaInformadaProveedor
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType
     */
    public function setDatosFacturaInformadaProveedor(\ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType $datosFacturaInformadaProveedor = null)
    {
        $this->DatosFacturaInformadaProveedor = $datosFacturaInformadaProveedor;
        return $this;
    }
    /**
     * Get Proveedor value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType|null
     */
    public function getProveedor()
    {
        return $this->Proveedor;
    }
    /**
     * Set Proveedor value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType
     */
    public function setProveedor(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor = null)
    {
        $this->Proveedor = $proveedor;
        return $this;
    }
    /**
     * Get EstadoFactura value
     * @return \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType|null
     */
    public function getEstadoFactura()
    {
        return $this->EstadoFactura;
    }
    /**
     * Set EstadoFactura value
     * @param \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType $estadoFactura
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType
     */
    public function setEstadoFactura(\ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType $estadoFactura = null)
    {
        $this->EstadoFactura = $estadoFactura;
        return $this;
    }
}
