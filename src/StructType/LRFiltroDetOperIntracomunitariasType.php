<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroDetOperIntracomunitariasType StructType
 * @subpackage Structs
 */
class LRFiltroDetOperIntracomunitariasType extends RegistroSii
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
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType
     */
    public $ClavePaginacion;
    /**
     * Constructor method for LRFiltroDetOperIntracomunitariasType
     * @uses LRFiltroDetOperIntracomunitariasType::setIDFactura()
     * @uses LRFiltroDetOperIntracomunitariasType::setFechaPresentacion()
     * @uses LRFiltroDetOperIntracomunitariasType::setFacturaModificada()
     * @uses LRFiltroDetOperIntracomunitariasType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type $iDFactura
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion
     * @param string $facturaModificada
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaConsulta1Type $iDFactura = null, \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null, $facturaModificada = null, \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $clavePaginacion = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setFechaPresentacion($fechaPresentacion)
            ->setFacturaModificada($facturaModificada)
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType
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
     * Get ClavePaginacion value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType|null
     */
    public function getClavePaginacion()
    {
        return $this->ClavePaginacion;
    }
    /**
     * Set ClavePaginacion value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $clavePaginacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroDetOperIntracomunitariasType
     */
    public function setClavePaginacion(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $clavePaginacion = null)
    {
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
