<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for
 * RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType extends AbstractStructBase
{
    /**
     * The Proveedor
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $Proveedor;
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
     * RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType
     * @uses RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType::setProveedor()
     * @uses RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType::setNumeroFacturas()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor
     * @param string $numeroFacturas
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor = null, $numeroFacturas = null)
    {
        $this
            ->setProveedor($proveedor)
            ->setNumeroFacturas($numeroFacturas);
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType
     */
    public function setProveedor(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor = null)
    {
        $this->Proveedor = $proveedor;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType
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
