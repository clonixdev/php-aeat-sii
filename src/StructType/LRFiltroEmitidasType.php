<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroEmitidasType StructType
 * @subpackage Structs
 */
class LRFiltroEmitidasType extends RegistroSii
{
    /**
     * The IDFactura
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\IDFacturaConsulta2Type
     */
    public $IDFactura;
    /**
     * The Contraparte
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\ContraparteConsultaType
     */
    public $Contraparte;
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
     * @var \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType
     */
    public $ClavePaginacion;
    /**
     * Constructor method for LRFiltroEmitidasType
     * @uses LRFiltroEmitidasType::setIDFactura()
     * @uses LRFiltroEmitidasType::setContraparte()
     * @uses LRFiltroEmitidasType::setFechaPresentacion()
     * @uses LRFiltroEmitidasType::setFechaCuadre()
     * @uses LRFiltroEmitidasType::setFacturaModificada()
     * @uses LRFiltroEmitidasType::setEstadoCuadre()
     * @uses LRFiltroEmitidasType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaConsulta2Type $iDFactura
     * @param \ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaCuadre
     * @param string $facturaModificada
     * @param string $estadoCuadre
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaConsulta2Type $iDFactura = null, \ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte = null, \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null, \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaCuadre = null, $facturaModificada = null, $estadoCuadre = null, \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $clavePaginacion = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setContraparte($contraparte)
            ->setFechaPresentacion($fechaPresentacion)
            ->setFechaCuadre($fechaCuadre)
            ->setFacturaModificada($facturaModificada)
            ->setEstadoCuadre($estadoCuadre)
            ->setClavePaginacion($clavePaginacion);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaConsulta2Type|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaConsulta2Type $iDFactura
     * @return \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaConsulta2Type $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get Contraparte value
     * @return \ClonixDev\AeatSii\StructType\ContraparteConsultaType|null
     */
    public function getContraparte()
    {
        return $this->Contraparte;
    }
    /**
     * Set Contraparte value
     * @param \ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte
     * @return \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType
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
     * @return \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType|null
     */
    public function getClavePaginacion()
    {
        return $this->ClavePaginacion;
    }
    /**
     * Set ClavePaginacion value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $clavePaginacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroEmitidasType
     */
    public function setClavePaginacion(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $clavePaginacion = null)
    {
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
