<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaFactInformadasClienteType
 * StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaFactInformadasClienteType extends AbstractStructBase
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
     * The DatosFacturaInformadaCliente
     * @var \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaClienteType
     */
    public $DatosFacturaInformadaCliente;
    /**
     * The Cliente
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $Cliente;
    /**
     * The EstadoFactura
     * @var \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType
     */
    public $EstadoFactura;
    /**
     * Constructor method for RegistroRespuestaConsultaFactInformadasClienteType
     * @uses RegistroRespuestaConsultaFactInformadasClienteType::setIDFactura()
     * @uses RegistroRespuestaConsultaFactInformadasClienteType::setPeriodoLiquidacion()
     * @uses RegistroRespuestaConsultaFactInformadasClienteType::setDatosFacturaInformadaCliente()
     * @uses RegistroRespuestaConsultaFactInformadasClienteType::setCliente()
     * @uses RegistroRespuestaConsultaFactInformadasClienteType::setEstadoFactura()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaImputacionType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion
     * @param \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaClienteType $datosFacturaInformadaCliente
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente
     * @param \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType $estadoFactura
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaImputacionType $iDFactura = null, \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null, \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaClienteType $datosFacturaInformadaCliente = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente = null, \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType $estadoFactura = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setPeriodoLiquidacion($periodoLiquidacion)
            ->setDatosFacturaInformadaCliente($datosFacturaInformadaCliente)
            ->setCliente($cliente)
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType
     */
    public function setPeriodoLiquidacion(\ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null)
    {
        $this->PeriodoLiquidacion = $periodoLiquidacion;
        return $this;
    }
    /**
     * Get DatosFacturaInformadaCliente value
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaClienteType|null
     */
    public function getDatosFacturaInformadaCliente()
    {
        return $this->DatosFacturaInformadaCliente;
    }
    /**
     * Set DatosFacturaInformadaCliente value
     * @param \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaClienteType $datosFacturaInformadaCliente
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType
     */
    public function setDatosFacturaInformadaCliente(\ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaClienteType $datosFacturaInformadaCliente = null)
    {
        $this->DatosFacturaInformadaCliente = $datosFacturaInformadaCliente;
        return $this;
    }
    /**
     * Get Cliente value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType|null
     */
    public function getCliente()
    {
        return $this->Cliente;
    }
    /**
     * Set Cliente value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType
     */
    public function setCliente(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente = null)
    {
        $this->Cliente = $cliente;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType
     */
    public function setEstadoFactura(\ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType $estadoFactura = null)
    {
        $this->EstadoFactura = $estadoFactura;
        return $this;
    }
}
