<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRFiltroAgenciasViajesType StructType
 * @subpackage Structs
 */
class LRFiltroAgenciasViajesType extends RegistroSii
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
     * The RegistroModificado
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RegistroModificado;
    /**
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\ClavePaginacion
     */
    public $ClavePaginacion;
    /**
     * Constructor method for LRFiltroAgenciasViajesType
     * @uses LRFiltroAgenciasViajesType::setContraparte()
     * @uses LRFiltroAgenciasViajesType::setFechaPresentacion()
     * @uses LRFiltroAgenciasViajesType::setRegistroModificado()
     * @uses LRFiltroAgenciasViajesType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte
     * @param \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion
     * @param string $registroModificado
     * @param \ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\ContraparteConsultaType $contraparte = null, \ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null, $registroModificado = null, \ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion = null)
    {
        $this
            ->setContraparte($contraparte)
            ->setFechaPresentacion($fechaPresentacion)
            ->setRegistroModificado($registroModificado)
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType
     */
    public function setFechaPresentacion(\ClonixDev\AeatSii\StructType\RangoFechaPresentacionType $fechaPresentacion = null)
    {
        $this->FechaPresentacion = $fechaPresentacion;
        return $this;
    }
    /**
     * Get RegistroModificado value
     * @return string|null
     */
    public function getRegistroModificado()
    {
        return $this->RegistroModificado;
    }
    /**
     * Set RegistroModificado value
     * @uses \ClonixDev\AeatSii\EnumType\FacturaModificadaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\FacturaModificadaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $registroModificado
     * @return \ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType
     */
    public function setRegistroModificado($registroModificado = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\FacturaModificadaType::valueIsValid($registroModificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\FacturaModificadaType', is_array($registroModificado) ? implode(', ', $registroModificado) : var_export($registroModificado, true), implode(', ', \ClonixDev\AeatSii\EnumType\FacturaModificadaType::getValidValues())), __LINE__);
        }
        $this->RegistroModificado = $registroModificado;
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
     * @return \ClonixDev\AeatSii\StructType\LRFiltroAgenciasViajesType
     */
    public function setClavePaginacion(\ClonixDev\AeatSii\StructType\ClavePaginacion $clavePaginacion = null)
    {
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
