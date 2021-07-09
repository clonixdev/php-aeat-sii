<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroFactInformadasProveedorType StructType
 * @subpackage Structs
 */
class LRFiltroFactInformadasProveedorType extends RegistroSiiImputacion
{
    /**
     * The Proveedor
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $Proveedor;
    /**
     * The NumSerieFacturaEmisor
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 60
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $NumSerieFacturaEmisor;
    /**
     * The EstadoCuadre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EstadoCuadre;
    /**
     * The FechaExpedicion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RangoFechaType
     */
    public $FechaExpedicion;
    /**
     * The FechaOperacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RangoFechaType
     */
    public $FechaOperacion;
    /**
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\ClavePaginacionProveedorType
     */
    public $ClavePaginacion;
    /**
     * Constructor method for LRFiltroFactInformadasProveedorType
     * @uses LRFiltroFactInformadasProveedorType::setProveedor()
     * @uses LRFiltroFactInformadasProveedorType::setNumSerieFacturaEmisor()
     * @uses LRFiltroFactInformadasProveedorType::setEstadoCuadre()
     * @uses LRFiltroFactInformadasProveedorType::setFechaExpedicion()
     * @uses LRFiltroFactInformadasProveedorType::setFechaOperacion()
     * @uses LRFiltroFactInformadasProveedorType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor
     * @param string $numSerieFacturaEmisor
     * @param string $estadoCuadre
     * @param \ClonixDev\AeatSii\StructType\RangoFechaType $fechaExpedicion
     * @param \ClonixDev\AeatSii\StructType\RangoFechaType $fechaOperacion
     * @param \ClonixDev\AeatSii\StructType\ClavePaginacionProveedorType $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor = null, $numSerieFacturaEmisor = null, $estadoCuadre = null, \ClonixDev\AeatSii\StructType\RangoFechaType $fechaExpedicion = null, \ClonixDev\AeatSii\StructType\RangoFechaType $fechaOperacion = null, \ClonixDev\AeatSii\StructType\ClavePaginacionProveedorType $clavePaginacion = null)
    {
        $this
            ->setProveedor($proveedor)
            ->setNumSerieFacturaEmisor($numSerieFacturaEmisor)
            ->setEstadoCuadre($estadoCuadre)
            ->setFechaExpedicion($fechaExpedicion)
            ->setFechaOperacion($fechaOperacion)
            ->setClavePaginacion($clavePaginacion);
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType
     */
    public function setProveedor(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $proveedor = null)
    {
        $this->Proveedor = $proveedor;
        return $this;
    }
    /**
     * Get NumSerieFacturaEmisor value
     * @return string|null
     */
    public function getNumSerieFacturaEmisor()
    {
        return $this->NumSerieFacturaEmisor;
    }
    /**
     * Set NumSerieFacturaEmisor value
     * @param string $numSerieFacturaEmisor
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType
     */
    public function setNumSerieFacturaEmisor($numSerieFacturaEmisor = null)
    {
        // validation for constraint: string
        if (!is_null($numSerieFacturaEmisor) && !is_string($numSerieFacturaEmisor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numSerieFacturaEmisor, true), gettype($numSerieFacturaEmisor)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($numSerieFacturaEmisor) && mb_strlen($numSerieFacturaEmisor) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($numSerieFacturaEmisor)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numSerieFacturaEmisor) && mb_strlen($numSerieFacturaEmisor) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($numSerieFacturaEmisor)), __LINE__);
        }
        $this->NumSerieFacturaEmisor = $numSerieFacturaEmisor;
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType
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
    /**
     * Get FechaExpedicion value
     * @return \ClonixDev\AeatSii\StructType\RangoFechaType|null
     */
    public function getFechaExpedicion()
    {
        return $this->FechaExpedicion;
    }
    /**
     * Set FechaExpedicion value
     * @param \ClonixDev\AeatSii\StructType\RangoFechaType $fechaExpedicion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType
     */
    public function setFechaExpedicion(\ClonixDev\AeatSii\StructType\RangoFechaType $fechaExpedicion = null)
    {
        $this->FechaExpedicion = $fechaExpedicion;
        return $this;
    }
    /**
     * Get FechaOperacion value
     * @return \ClonixDev\AeatSii\StructType\RangoFechaType|null
     */
    public function getFechaOperacion()
    {
        return $this->FechaOperacion;
    }
    /**
     * Set FechaOperacion value
     * @param \ClonixDev\AeatSii\StructType\RangoFechaType $fechaOperacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType
     */
    public function setFechaOperacion(\ClonixDev\AeatSii\StructType\RangoFechaType $fechaOperacion = null)
    {
        $this->FechaOperacion = $fechaOperacion;
        return $this;
    }
    /**
     * Get ClavePaginacion value
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacionProveedorType|null
     */
    public function getClavePaginacion()
    {
        return $this->ClavePaginacion;
    }
    /**
     * Set ClavePaginacion value
     * @param \ClonixDev\AeatSii\StructType\ClavePaginacionProveedorType $clavePaginacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroFactInformadasProveedorType
     */
    public function setClavePaginacion(\ClonixDev\AeatSii\StructType\ClavePaginacionProveedorType $clavePaginacion = null)
    {
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
