<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroFactInformadasAgrupadasProveedorType StructType
 * @subpackage Structs
 */
class LRFiltroFactInformadasAgrupadasProveedorType extends RegistroSiiImputacion
{
    /**
     * The Proveedor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $Proveedor;
    /**
     * The EstadoCuadre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EstadoCuadre;
    /**
     * Constructor method for LRFiltroFactInformadasAgrupadasProveedorType
     * @uses LRFiltroFactInformadasAgrupadasProveedorType::setProveedor()
     * @uses LRFiltroFactInformadasAgrupadasProveedorType::setEstadoCuadre()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor
     * @param string $estadoCuadre
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor = null, $estadoCuadre = null)
    {
        $this
            ->setProveedor($proveedor)
            ->setEstadoCuadre($estadoCuadre);
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasProveedorType
     */
    public function setProveedor(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor = null)
    {
        $this->Proveedor = $proveedor;
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasAgrupadasProveedorType
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
