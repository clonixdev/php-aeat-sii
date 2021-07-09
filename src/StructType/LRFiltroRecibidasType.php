<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroRecibidasType StructType
 * @subpackage Structs
 */
class LRFiltroRecibidasType extends RegistroSii
{
    /**
     * The IDFactura
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type
     */
    public $IDFactura;
    /**
     * The FechaPresentacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType
     */
    public $FechaPresentacion;
    /**
     * The FechaCuadre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType
     */
    public $FechaCuadre;
    /**
     * The FacturaModificada
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FacturaModificada;
    /**
     * The EstadoCuadre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EstadoCuadre;
    /**
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType
     */
    public $ClavePaginacion;
    /**
     * Constructor method for LRFiltroRecibidasType
     * @uses LRFiltroRecibidasType::setIDFactura()
     * @uses LRFiltroRecibidasType::setFechaPresentacion()
     * @uses LRFiltroRecibidasType::setFechaCuadre()
     * @uses LRFiltroRecibidasType::setFacturaModificada()
     * @uses LRFiltroRecibidasType::setEstadoCuadre()
     * @uses LRFiltroRecibidasType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type $iDFactura
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaCuadre
     * @param string $facturaModificada
     * @param string $estadoCuadre
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type $iDFactura = null, \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null, \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaCuadre = null, $facturaModificada = null, $estadoCuadre = null, \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $clavePaginacion = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setFechaPresentacion($fechaPresentacion)
            ->setFechaCuadre($fechaCuadre)
            ->setFacturaModificada($facturaModificada)
            ->setEstadoCuadre($estadoCuadre)
            ->setClavePaginacion($clavePaginacion);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type $iDFactura
     * @return \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get FechaPresentacion value
     * @return \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType|null
     */
    public function getFechaPresentacion()
    {
        return $this->FechaPresentacion;
    }
    /**
     * Set FechaPresentacion value
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType
     */
    public function setFechaPresentacion(\ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null)
    {
        $this->FechaPresentacion = $fechaPresentacion;
        return $this;
    }
    /**
     * Get FechaCuadre value
     * @return \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType|null
     */
    public function getFechaCuadre()
    {
        return $this->FechaCuadre;
    }
    /**
     * Set FechaCuadre value
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaCuadre
     * @return \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType
     */
    public function setFechaCuadre(\ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaCuadre = null)
    {
        $this->FechaCuadre = $fechaCuadre;
        return $this;
    }
    /**
     * Get FacturaModificada value
     * @return string|null
     */
    public function getFacturaModificada()
    {
        return $this->FacturaModificada;
    }
    /**
     * Set FacturaModificada value
     * @uses \ClonixDev\AeatSii\EnumType\FacturaModificadaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\FacturaModificadaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $facturaModificada
     * @return \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType
     */
    public function setFacturaModificada($facturaModificada = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\FacturaModificadaType::valueIsValid($facturaModificada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\FacturaModificadaType', is_array($facturaModificada) ? implode(', ', $facturaModificada) : var_export($facturaModificada, true), implode(', ', \ClonixDev\AeatSii\EnumType\FacturaModificadaType::getValidValues())), __LINE__);
        }
        $this->FacturaModificada = $facturaModificada;
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
     * @uses \ClonixDev\AeatSii\EnumType\EstadoCuadreType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\EstadoCuadreType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $estadoCuadre
     * @return \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType
     */
    public function setEstadoCuadre($estadoCuadre = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\EstadoCuadreType::valueIsValid($estadoCuadre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\EstadoCuadreType', is_array($estadoCuadre) ? implode(', ', $estadoCuadre) : var_export($estadoCuadre, true), implode(', ', \ClonixDev\AeatSii\EnumType\EstadoCuadreType::getValidValues())), __LINE__);
        }
        $this->EstadoCuadre = $estadoCuadre;
        return $this;
    }
    /**
     * Get ClavePaginacion value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType|null
     */
    public function getClavePaginacion()
    {
        return $this->ClavePaginacion;
    }
    /**
     * Set ClavePaginacion value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $clavePaginacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroRecibidasType
     */
    public function setClavePaginacion(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $clavePaginacion = null)
    {
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
