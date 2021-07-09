<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroCobrosMetalicoType StructType
 * @subpackage Structs
 */
class LRFiltroCobrosMetalicoType extends RegistroSii
{
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
     * The CobroModificado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CobroModificado;
    /**
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\ClavePaginacion
     */
    public $ClavePaginacion;
    /**
     * Constructor method for LRFiltroCobrosMetalicoType
     * @uses LRFiltroCobrosMetalicoType::setContraparte()
     * @uses LRFiltroCobrosMetalicoType::setFechaPresentacion()
     * @uses LRFiltroCobrosMetalicoType::setCobroModificado()
     * @uses LRFiltroCobrosMetalicoType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion
     * @param string $cobroModificado
     * @param \ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte = null, \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null, $cobroModificado = null, \ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion = null)
    {
        $this
            ->setContraparte($contraparte)
            ->setFechaPresentacion($fechaPresentacion)
            ->setCobroModificado($cobroModificado)
            ->setClavePaginacion($clavePaginacion);
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType
     */
    public function setFechaPresentacion(\ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null)
    {
        $this->FechaPresentacion = $fechaPresentacion;
        return $this;
    }
    /**
     * Get CobroModificado value
     * @return string|null
     */
    public function getCobroModificado()
    {
        return $this->CobroModificado;
    }
    /**
     * Set CobroModificado value
     * @uses \ClonixDev\AeatSii\EnumType\FacturaModificadaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\FacturaModificadaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cobroModificado
     * @return \ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType
     */
    public function setCobroModificado($cobroModificado = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\FacturaModificadaType::valueIsValid($cobroModificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\FacturaModificadaType', is_array($cobroModificado) ? implode(', ', $cobroModificado) : var_export($cobroModificado, true), implode(', ', \ClonixDev\AeatSii\EnumType\FacturaModificadaType::getValidValues())), __LINE__);
        }
        $this->CobroModificado = $cobroModificado;
        return $this;
    }
    /**
     * Get ClavePaginacion value
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacion|null
     */
    public function getClavePaginacion()
    {
        return $this->ClavePaginacion;
    }
    /**
     * Set ClavePaginacion value
     * @param \ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroCobrosMetalicoType
     */
    public function setClavePaginacion(\ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion = null)
    {
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
