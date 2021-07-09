<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OperacionIntracomunitariaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente al libro de operaciones intracomunitarias.
 * @subpackage Structs
 */
class OperacionIntracomunitariaType extends AbstractStructBase
{
    /**
     * The TipoOperacion
     * @var string
     */
    public $TipoOperacion;
    /**
     * The ClaveDeclarado
     * @var string
     */
    public $ClaveDeclarado;
    /**
     * The EstadoMiembro
     * @var string
     */
    public $EstadoMiembro;
    /**
     * The PlazoOperacion
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: \d{1,3}
     * @var string
     */
    public $PlazoOperacion;
    /**
     * The DescripcionBienes
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 40
     * @var string
     */
    public $DescripcionBienes;
    /**
     * The DireccionOperador
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 120
     * @var string
     */
    public $DireccionOperador;
    /**
     * The FacturasODocumentacion
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 150
     * - minOccurs: 0
     * @var string
     */
    public $FacturasODocumentacion;
    /**
     * The RefExterna
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 60
     * - minOccurs: 0
     * @var string
     */
    public $RefExterna;
    /**
     * The NumRegistroAcuerdoFacturacion
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 15
     * - minOccurs: 0
     * @var string
     */
    public $NumRegistroAcuerdoFacturacion;
    /**
     * The EntidadSucedida
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $EntidadSucedida;
    /**
     * The RegPrevioGGEEoREDEMEoCompetencia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RegPrevioGGEEoREDEMEoCompetencia;
    /**
     * Constructor method for OperacionIntracomunitariaType
     * @uses OperacionIntracomunitariaType::setTipoOperacion()
     * @uses OperacionIntracomunitariaType::setClaveDeclarado()
     * @uses OperacionIntracomunitariaType::setEstadoMiembro()
     * @uses OperacionIntracomunitariaType::setPlazoOperacion()
     * @uses OperacionIntracomunitariaType::setDescripcionBienes()
     * @uses OperacionIntracomunitariaType::setDireccionOperador()
     * @uses OperacionIntracomunitariaType::setFacturasODocumentacion()
     * @uses OperacionIntracomunitariaType::setRefExterna()
     * @uses OperacionIntracomunitariaType::setNumRegistroAcuerdoFacturacion()
     * @uses OperacionIntracomunitariaType::setEntidadSucedida()
     * @uses OperacionIntracomunitariaType::setRegPrevioGGEEoREDEMEoCompetencia()
     * @param string $tipoOperacion
     * @param string $claveDeclarado
     * @param string $estadoMiembro
     * @param string $plazoOperacion
     * @param string $descripcionBienes
     * @param string $direccionOperador
     * @param string $facturasODocumentacion
     * @param string $refExterna
     * @param string $numRegistroAcuerdoFacturacion
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     * @param string $regPrevioGGEEoREDEMEoCompetencia
     */
    public function __construct($tipoOperacion = null, $claveDeclarado = null, $estadoMiembro = null, $plazoOperacion = null, $descripcionBienes = null, $direccionOperador = null, $facturasODocumentacion = null, $refExterna = null, $numRegistroAcuerdoFacturacion = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null, $regPrevioGGEEoREDEMEoCompetencia = null)
    {
        $this
            ->setTipoOperacion($tipoOperacion)
            ->setClaveDeclarado($claveDeclarado)
            ->setEstadoMiembro($estadoMiembro)
            ->setPlazoOperacion($plazoOperacion)
            ->setDescripcionBienes($descripcionBienes)
            ->setDireccionOperador($direccionOperador)
            ->setFacturasODocumentacion($facturasODocumentacion)
            ->setRefExterna($refExterna)
            ->setNumRegistroAcuerdoFacturacion($numRegistroAcuerdoFacturacion)
            ->setEntidadSucedida($entidadSucedida)
            ->setRegPrevioGGEEoREDEMEoCompetencia($regPrevioGGEEoREDEMEoCompetencia);
    }
    /**
     * Get TipoOperacion value
     * @return string|null
     */
    public function getTipoOperacion()
    {
        return $this->TipoOperacion;
    }
    /**
     * Set TipoOperacion value
     * @uses \ClonixDev\AeatSii\EnumType\TipoOperacion::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\TipoOperacion::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoOperacion
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setTipoOperacion($tipoOperacion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\TipoOperacion::valueIsValid($tipoOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\TipoOperacion', is_array($tipoOperacion) ? implode(', ', $tipoOperacion) : var_export($tipoOperacion, true), implode(', ', \ClonixDev\AeatSii\EnumType\TipoOperacion::getValidValues())), __LINE__);
        }
        $this->TipoOperacion = $tipoOperacion;
        return $this;
    }
    /**
     * Get ClaveDeclarado value
     * @return string|null
     */
    public function getClaveDeclarado()
    {
        return $this->ClaveDeclarado;
    }
    /**
     * Set ClaveDeclarado value
     * @uses \ClonixDev\AeatSii\EnumType\ClaveDeclarado::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\ClaveDeclarado::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claveDeclarado
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setClaveDeclarado($claveDeclarado = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\ClaveDeclarado::valueIsValid($claveDeclarado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\ClaveDeclarado', is_array($claveDeclarado) ? implode(', ', $claveDeclarado) : var_export($claveDeclarado, true), implode(', ', \ClonixDev\AeatSii\EnumType\ClaveDeclarado::getValidValues())), __LINE__);
        }
        $this->ClaveDeclarado = $claveDeclarado;
        return $this;
    }
    /**
     * Get EstadoMiembro value
     * @return string|null
     */
    public function getEstadoMiembro()
    {
        return $this->EstadoMiembro;
    }
    /**
     * Set EstadoMiembro value
     * @uses \ClonixDev\AeatSii\EnumType\CountryMiembroType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\CountryMiembroType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $estadoMiembro
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setEstadoMiembro($estadoMiembro = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\CountryMiembroType::valueIsValid($estadoMiembro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\CountryMiembroType', is_array($estadoMiembro) ? implode(', ', $estadoMiembro) : var_export($estadoMiembro, true), implode(', ', \ClonixDev\AeatSii\EnumType\CountryMiembroType::getValidValues())), __LINE__);
        }
        $this->EstadoMiembro = $estadoMiembro;
        return $this;
    }
    /**
     * Get PlazoOperacion value
     * @return string|null
     */
    public function getPlazoOperacion()
    {
        return $this->PlazoOperacion;
    }
    /**
     * Set PlazoOperacion value
     * @param string $plazoOperacion
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setPlazoOperacion($plazoOperacion = null)
    {
        // validation for constraint: string
        if (!is_null($plazoOperacion) && !is_string($plazoOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plazoOperacion, true), gettype($plazoOperacion)), __LINE__);
        }
        // validation for constraint: pattern(\d{1,3})
        if (!is_null($plazoOperacion) && !preg_match('/\\d{1,3}/', $plazoOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{1,3}', var_export($plazoOperacion, true)), __LINE__);
        }
        $this->PlazoOperacion = $plazoOperacion;
        return $this;
    }
    /**
     * Get DescripcionBienes value
     * @return string|null
     */
    public function getDescripcionBienes()
    {
        return $this->DescripcionBienes;
    }
    /**
     * Set DescripcionBienes value
     * @param string $descripcionBienes
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setDescripcionBienes($descripcionBienes = null)
    {
        // validation for constraint: string
        if (!is_null($descripcionBienes) && !is_string($descripcionBienes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionBienes, true), gettype($descripcionBienes)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($descripcionBienes) && mb_strlen($descripcionBienes) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($descripcionBienes)), __LINE__);
        }
        $this->DescripcionBienes = $descripcionBienes;
        return $this;
    }
    /**
     * Get DireccionOperador value
     * @return string|null
     */
    public function getDireccionOperador()
    {
        return $this->DireccionOperador;
    }
    /**
     * Set DireccionOperador value
     * @param string $direccionOperador
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setDireccionOperador($direccionOperador = null)
    {
        // validation for constraint: string
        if (!is_null($direccionOperador) && !is_string($direccionOperador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direccionOperador, true), gettype($direccionOperador)), __LINE__);
        }
        // validation for constraint: maxLength(120)
        if (!is_null($direccionOperador) && mb_strlen($direccionOperador) > 120) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 120', mb_strlen($direccionOperador)), __LINE__);
        }
        $this->DireccionOperador = $direccionOperador;
        return $this;
    }
    /**
     * Get FacturasODocumentacion value
     * @return string|null
     */
    public function getFacturasODocumentacion()
    {
        return $this->FacturasODocumentacion;
    }
    /**
     * Set FacturasODocumentacion value
     * @param string $facturasODocumentacion
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setFacturasODocumentacion($facturasODocumentacion = null)
    {
        // validation for constraint: string
        if (!is_null($facturasODocumentacion) && !is_string($facturasODocumentacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($facturasODocumentacion, true), gettype($facturasODocumentacion)), __LINE__);
        }
        // validation for constraint: maxLength(150)
        if (!is_null($facturasODocumentacion) && mb_strlen($facturasODocumentacion) > 150) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 150', mb_strlen($facturasODocumentacion)), __LINE__);
        }
        $this->FacturasODocumentacion = $facturasODocumentacion;
        return $this;
    }
    /**
     * Get RefExterna value
     * @return string|null
     */
    public function getRefExterna()
    {
        return $this->RefExterna;
    }
    /**
     * Set RefExterna value
     * @param string $refExterna
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setRefExterna($refExterna = null)
    {
        // validation for constraint: string
        if (!is_null($refExterna) && !is_string($refExterna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refExterna, true), gettype($refExterna)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($refExterna) && mb_strlen($refExterna) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($refExterna)), __LINE__);
        }
        $this->RefExterna = $refExterna;
        return $this;
    }
    /**
     * Get NumRegistroAcuerdoFacturacion value
     * @return string|null
     */
    public function getNumRegistroAcuerdoFacturacion()
    {
        return $this->NumRegistroAcuerdoFacturacion;
    }
    /**
     * Set NumRegistroAcuerdoFacturacion value
     * @param string $numRegistroAcuerdoFacturacion
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setNumRegistroAcuerdoFacturacion($numRegistroAcuerdoFacturacion = null)
    {
        // validation for constraint: string
        if (!is_null($numRegistroAcuerdoFacturacion) && !is_string($numRegistroAcuerdoFacturacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numRegistroAcuerdoFacturacion, true), gettype($numRegistroAcuerdoFacturacion)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($numRegistroAcuerdoFacturacion) && mb_strlen($numRegistroAcuerdoFacturacion) > 15) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen($numRegistroAcuerdoFacturacion)), __LINE__);
        }
        $this->NumRegistroAcuerdoFacturacion = $numRegistroAcuerdoFacturacion;
        return $this;
    }
    /**
     * Get EntidadSucedida value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType|null
     */
    public function getEntidadSucedida()
    {
        return $this->EntidadSucedida;
    }
    /**
     * Set EntidadSucedida value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setEntidadSucedida(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this->EntidadSucedida = $entidadSucedida;
        return $this;
    }
    /**
     * Get RegPrevioGGEEoREDEMEoCompetencia value
     * @return string|null
     */
    public function getRegPrevioGGEEoREDEMEoCompetencia()
    {
        return $this->RegPrevioGGEEoREDEMEoCompetencia;
    }
    /**
     * Set RegPrevioGGEEoREDEMEoCompetencia value
     * @uses \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regPrevioGGEEoREDEMEoCompetencia
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public function setRegPrevioGGEEoREDEMEoCompetencia($regPrevioGGEEoREDEMEoCompetencia = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::valueIsValid($regPrevioGGEEoREDEMEoCompetencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType', is_array($regPrevioGGEEoREDEMEoCompetencia) ? implode(', ', $regPrevioGGEEoREDEMEoCompetencia) : var_export($regPrevioGGEEoREDEMEoCompetencia, true), implode(', ', \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::getValidValues())), __LINE__);
        }
        $this->RegPrevioGGEEoREDEMEoCompetencia = $regPrevioGGEEoREDEMEoCompetencia;
        return $this;
    }
}
