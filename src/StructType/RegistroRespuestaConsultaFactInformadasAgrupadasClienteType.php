<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * RegistroRespuestaConsultaFactInformadasAgrupadasClienteType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaFactInformadasAgrupadasClienteType extends AbstractStructBase
{
    /**
     * The Cliente
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $Cliente;
    /**
     * The NumeroFacturas
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: \d{0,10}
     * @var string
     */
    public $NumeroFacturas;
    /**
     * Constructor method for
     * RegistroRespuestaConsultaFactInformadasAgrupadasClienteType
     * @uses RegistroRespuestaConsultaFactInformadasAgrupadasClienteType::setCliente()
     * @uses RegistroRespuestaConsultaFactInformadasAgrupadasClienteType::setNumeroFacturas()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente
     * @param string $numeroFacturas
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente = null, $numeroFacturas = null)
    {
        $this
            ->setCliente($cliente)
            ->setNumeroFacturas($numeroFacturas);
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType
     */
    public function setCliente(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente = null)
    {
        $this->Cliente = $cliente;
        return $this;
    }
    /**
     * Get NumeroFacturas value
     * @return string|null
     */
    public function getNumeroFacturas()
    {
        return $this->NumeroFacturas;
    }
    /**
     * Set NumeroFacturas value
     * @param string $numeroFacturas
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType
     */
    public function setNumeroFacturas($numeroFacturas = null)
    {
        // validation for constraint: string
        if (!is_null($numeroFacturas) && !is_string($numeroFacturas)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroFacturas, true), gettype($numeroFacturas)), __LINE__);
        }
        // validation for constraint: pattern(\d{0,10})
        if (!is_null($numeroFacturas) && !preg_match('/\\d{0,10}/', $numeroFacturas)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{0,10}', var_export($numeroFacturas, true)), __LINE__);
        }
        $this->NumeroFacturas = $numeroFacturas;
        return $this;
    }
}
