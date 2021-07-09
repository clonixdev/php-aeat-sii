<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroOperacionesSegurosType StructType
 * @subpackage Structs
 */
class LRFiltroOperacionesSegurosType extends RegistroSii
{
    /**
     * The Contraparte
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\ContraparteConsultaType
     */
    public $Contraparte;
    /**
     * The ClaveOperacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaveOperacion;
    /**
     * The FechaPresentacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType
     */
    public $FechaPresentacion;
    /**
     * The OperacionModificada
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $OperacionModificada;
    /**
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\ClavePaginacion
     */
    public $ClavePaginacion;
    /**
     * Constructor method for LRFiltroOperacionesSegurosType
     * @uses LRFiltroOperacionesSegurosType::setContraparte()
     * @uses LRFiltroOperacionesSegurosType::setClaveOperacion()
     * @uses LRFiltroOperacionesSegurosType::setFechaPresentacion()
     * @uses LRFiltroOperacionesSegurosType::setOperacionModificada()
     * @uses LRFiltroOperacionesSegurosType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte
     * @param string $claveOperacion
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion
     * @param string $operacionModificada
     * @param \ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte = null, $claveOperacion = null, \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null, $operacionModificada = null, \ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion = null)
    {
        $this
            ->setContraparte($contraparte)
            ->setClaveOperacion($claveOperacion)
            ->setFechaPresentacion($fechaPresentacion)
            ->setOperacionModificada($operacionModificada)
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
        return $this;
    }
    /**
     * Get ClaveOperacion value
     * @return string|null
     */
    public function getClaveOperacion()
    {
        return $this->ClaveOperacion;
    }
    /**
     * Set ClaveOperacion value
     * @uses \ClonixDev\AeatSii\EnumType\ClaveOperacionType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\ClaveOperacionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claveOperacion
     * @return \ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType
     */
    public function setClaveOperacion($claveOperacion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\ClaveOperacionType::valueIsValid($claveOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\ClaveOperacionType', is_array($claveOperacion) ? implode(', ', $claveOperacion) : var_export($claveOperacion, true), implode(', ', \ClonixDev\AeatSii\EnumType\ClaveOperacionType::getValidValues())), __LINE__);
        }
        $this->ClaveOperacion = $claveOperacion;
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType
     */
    public function setFechaPresentacion(\ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null)
    {
        $this->FechaPresentacion = $fechaPresentacion;
        return $this;
    }
    /**
     * Get OperacionModificada value
     * @return string|null
     */
    public function getOperacionModificada()
    {
        return $this->OperacionModificada;
    }
    /**
     * Set OperacionModificada value
     * @uses \ClonixDev\AeatSii\EnumType\FacturaModificadaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\FacturaModificadaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $operacionModificada
     * @return \ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType
     */
    public function setOperacionModificada($operacionModificada = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\FacturaModificadaType::valueIsValid($operacionModificada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\FacturaModificadaType', is_array($operacionModificada) ? implode(', ', $operacionModificada) : var_export($operacionModificada, true), implode(', ', \ClonixDev\AeatSii\EnumType\FacturaModificadaType::getValidValues())), __LINE__);
        }
        $this->OperacionModificada = $operacionModificada;
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroOperacionesSegurosType
     */
    public function setClavePaginacion(\ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion = null)
    {
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
