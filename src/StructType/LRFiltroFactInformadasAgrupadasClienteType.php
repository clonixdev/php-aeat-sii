<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroFactInformadasAgrupadasClienteType StructType
 * @subpackage Structs
 */
class LRFiltroFactInformadasAgrupadasClienteType extends RegistroSiiImputacion
{
    /**
     * The Cliente
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $Cliente;
    /**
     * The EstadoCuadre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EstadoCuadre;
    /**
     * Constructor method for LRFiltroFactInformadasAgrupadasClienteType
     * @uses LRFiltroFactInformadasAgrupadasClienteType::setCliente()
     * @uses LRFiltroFactInformadasAgrupadasClienteType::setEstadoCuadre()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente
     * @param string $estadoCuadre
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente = null, $estadoCuadre = null)
    {
        $this
            ->setCliente($cliente)
            ->setEstadoCuadre($estadoCuadre);
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasClienteType
     */
    public function setCliente(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $cliente = null)
    {
        $this->Cliente = $cliente;
        return $this;
    }
    /**
     * Get EstadoCuadre value
     * @return string|null
     */
    public function getEstadoCuadre()
    {
        return $this->EstadoCuadre;
    }
    /**
     * Set EstadoCuadre value
     * @uses \ClonixDev\AeatSii\EnumType\EstadoCuadreImputacionType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\EstadoCuadreImputacionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $estadoCuadre
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasClienteType
     */
    public function setEstadoCuadre($estadoCuadre = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\EstadoCuadreImputacionType::valueIsValid($estadoCuadre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\EstadoCuadreImputacionType', is_array($estadoCuadre) ? implode(', ', $estadoCuadre) : var_export($estadoCuadre, true), implode(', ', \ClonixDev\AeatSii\EnumType\EstadoCuadreImputacionType::getValidValues())), __LINE__);
        }
        $this->EstadoCuadre = $estadoCuadre;
        return $this;
    }
}
