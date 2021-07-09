<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroBienInversionType StructType
 * @subpackage Structs
 */
class LRFiltroBienInversionType extends RegistroSii
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
     * The FacturaModificada
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FacturaModificada;
    /**
     * The IdentificacionBien
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 40
     * - minOccurs: 0
     * @var string
     */
    public $IdentificacionBien;
    /**
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\ClavePaginacionBienType
     */
    public $ClavePaginacion;
    /**
     * Constructor method for LRFiltroBienInversionType
     * @uses LRFiltroBienInversionType::setIDFactura()
     * @uses LRFiltroBienInversionType::setFechaPresentacion()
     * @uses LRFiltroBienInversionType::setFacturaModificada()
     * @uses LRFiltroBienInversionType::setIdentificacionBien()
     * @uses LRFiltroBienInversionType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type $iDFactura
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion
     * @param string $facturaModificada
     * @param string $identificacionBien
     * @param \ClonixDev\AeatSii\StructType\ClavePaginacionBienType $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type $iDFactura = null, \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null, $facturaModificada = null, $identificacionBien = null, \ClonixDev\AeatSii\StructType\ClavePaginacionBienType $clavePaginacion = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setFechaPresentacion($fechaPresentacion)
            ->setFacturaModificada($facturaModificada)
            ->setIdentificacionBien($identificacionBien)
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroBienInversionType
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroBienInversionType
     */
    public function setFechaPresentacion(\ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null)
    {
        $this->FechaPresentacion = $fechaPresentacion;
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroBienInversionType
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
     * Get IdentificacionBien value
     * @return string|null
     */
    public function getIdentificacionBien()
    {
        return $this->IdentificacionBien;
    }
    /**
     * Set IdentificacionBien value
     * @param string $identificacionBien
     * @return \ClonixDev\AeatSii\StructType\LRFiltroBienInversionType
     */
    public function setIdentificacionBien($identificacionBien = null)
    {
        // validation for constraint: string
        if (!is_null($identificacionBien) && !is_string($identificacionBien)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificacionBien, true), gettype($identificacionBien)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($identificacionBien) && mb_strlen($identificacionBien) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($identificacionBien)), __LINE__);
        }
        $this->IdentificacionBien = $identificacionBien;
        return $this;
    }
    /**
     * Get ClavePaginacion value
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacionBienType|null
     */
    public function getClavePaginacion()
    {
        return $this->ClavePaginacion;
    }
    /**
     * Set ClavePaginacion value
     * @param \ClonixDev\AeatSii\StructType\ClavePaginacionBienType $clavePaginacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroBienInversionType
     */
    public function setClavePaginacion(\ClonixDev\AeatSii\StructType\ClavePaginacionBienType $clavePaginacion = null)
    {
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
