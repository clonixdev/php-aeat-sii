<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BienDeInversionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente al libro de bienes de inversion.
 * @subpackage Structs
 */
class BienDeInversionType extends AbstractStructBase
{
    /**
     * The IdentificacionBien
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 40
     * @var string
     */
    public $IdentificacionBien;
    /**
     * The FechaInicioUtilizacion
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaInicioUtilizacion;
    /**
     * The ProrrataAnualDefinitiva
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: \d{1,3}(\.\d{0,2})?
     * @var string
     */
    public $ProrrataAnualDefinitiva;
    /**
     * The RegularizacionAnualDeduccion
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $RegularizacionAnualDeduccion;
    /**
     * The IdentificacionEntrega
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 40
     * - minOccurs: 0
     * @var string
     */
    public $IdentificacionEntrega;
    /**
     * The RegularizacionDeduccionEfectuada
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $RegularizacionDeduccionEfectuada;
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
     * Constructor method for BienDeInversionType
     * @uses BienDeInversionType::setIdentificacionBien()
     * @uses BienDeInversionType::setFechaInicioUtilizacion()
     * @uses BienDeInversionType::setProrrataAnualDefinitiva()
     * @uses BienDeInversionType::setRegularizacionAnualDeduccion()
     * @uses BienDeInversionType::setIdentificacionEntrega()
     * @uses BienDeInversionType::setRegularizacionDeduccionEfectuada()
     * @uses BienDeInversionType::setRefExterna()
     * @uses BienDeInversionType::setNumRegistroAcuerdoFacturacion()
     * @uses BienDeInversionType::setEntidadSucedida()
     * @param string $identificacionBien
     * @param string $fechaInicioUtilizacion
     * @param string $prorrataAnualDefinitiva
     * @param string $regularizacionAnualDeduccion
     * @param string $identificacionEntrega
     * @param string $regularizacionDeduccionEfectuada
     * @param string $refExterna
     * @param string $numRegistroAcuerdoFacturacion
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     */
    public function __construct($identificacionBien = null, $fechaInicioUtilizacion = null, $prorrataAnualDefinitiva = null, $regularizacionAnualDeduccion = null, $identificacionEntrega = null, $regularizacionDeduccionEfectuada = null, $refExterna = null, $numRegistroAcuerdoFacturacion = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this
            ->setIdentificacionBien($identificacionBien)
            ->setFechaInicioUtilizacion($fechaInicioUtilizacion)
            ->setProrrataAnualDefinitiva($prorrataAnualDefinitiva)
            ->setRegularizacionAnualDeduccion($regularizacionAnualDeduccion)
            ->setIdentificacionEntrega($identificacionEntrega)
            ->setRegularizacionDeduccionEfectuada($regularizacionDeduccionEfectuada)
            ->setRefExterna($refExterna)
            ->setNumRegistroAcuerdoFacturacion($numRegistroAcuerdoFacturacion)
            ->setEntidadSucedida($entidadSucedida);
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
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType
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
     * Get FechaInicioUtilizacion value
     * @return string|null
     */
    public function getFechaInicioUtilizacion()
    {
        return $this->FechaInicioUtilizacion;
    }
    /**
     * Set FechaInicioUtilizacion value
     * @param string $fechaInicioUtilizacion
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType
     */
    public function setFechaInicioUtilizacion($fechaInicioUtilizacion = null)
    {
        // validation for constraint: string
        if (!is_null($fechaInicioUtilizacion) && !is_string($fechaInicioUtilizacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaInicioUtilizacion, true), gettype($fechaInicioUtilizacion)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaInicioUtilizacion) && mb_strlen($fechaInicioUtilizacion) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaInicioUtilizacion)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaInicioUtilizacion) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaInicioUtilizacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaInicioUtilizacion, true)), __LINE__);
        }
        $this->FechaInicioUtilizacion = $fechaInicioUtilizacion;
        return $this;
    }
    /**
     * Get ProrrataAnualDefinitiva value
     * @return string|null
     */
    public function getProrrataAnualDefinitiva()
    {
        return $this->ProrrataAnualDefinitiva;
    }
    /**
     * Set ProrrataAnualDefinitiva value
     * @param string $prorrataAnualDefinitiva
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType
     */
    public function setProrrataAnualDefinitiva($prorrataAnualDefinitiva = null)
    {
        // validation for constraint: string
        if (!is_null($prorrataAnualDefinitiva) && !is_string($prorrataAnualDefinitiva)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($prorrataAnualDefinitiva, true), gettype($prorrataAnualDefinitiva)), __LINE__);
        }
        // validation for constraint: pattern(\d{1,3}(\.\d{0,2})?)
        if (!is_null($prorrataAnualDefinitiva) && !preg_match('/\\d{1,3}(\\.\\d{0,2})?/', $prorrataAnualDefinitiva)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{1,3}(\.\d{0,2})?', var_export($prorrataAnualDefinitiva, true)), __LINE__);
        }
        $this->ProrrataAnualDefinitiva = $prorrataAnualDefinitiva;
        return $this;
    }
    /**
     * Get RegularizacionAnualDeduccion value
     * @return string|null
     */
    public function getRegularizacionAnualDeduccion()
    {
        return $this->RegularizacionAnualDeduccion;
    }
    /**
     * Set RegularizacionAnualDeduccion value
     * @param string $regularizacionAnualDeduccion
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType
     */
    public function setRegularizacionAnualDeduccion($regularizacionAnualDeduccion = null)
    {
        // validation for constraint: string
        if (!is_null($regularizacionAnualDeduccion) && !is_string($regularizacionAnualDeduccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regularizacionAnualDeduccion, true), gettype($regularizacionAnualDeduccion)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($regularizacionAnualDeduccion) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $regularizacionAnualDeduccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($regularizacionAnualDeduccion, true)), __LINE__);
        }
        $this->RegularizacionAnualDeduccion = $regularizacionAnualDeduccion;
        return $this;
    }
    /**
     * Get IdentificacionEntrega value
     * @return string|null
     */
    public function getIdentificacionEntrega()
    {
        return $this->IdentificacionEntrega;
    }
    /**
     * Set IdentificacionEntrega value
     * @param string $identificacionEntrega
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType
     */
    public function setIdentificacionEntrega($identificacionEntrega = null)
    {
        // validation for constraint: string
        if (!is_null($identificacionEntrega) && !is_string($identificacionEntrega)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificacionEntrega, true), gettype($identificacionEntrega)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($identificacionEntrega) && mb_strlen($identificacionEntrega) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($identificacionEntrega)), __LINE__);
        }
        $this->IdentificacionEntrega = $identificacionEntrega;
        return $this;
    }
    /**
     * Get RegularizacionDeduccionEfectuada value
     * @return string|null
     */
    public function getRegularizacionDeduccionEfectuada()
    {
        return $this->RegularizacionDeduccionEfectuada;
    }
    /**
     * Set RegularizacionDeduccionEfectuada value
     * @param string $regularizacionDeduccionEfectuada
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType
     */
    public function setRegularizacionDeduccionEfectuada($regularizacionDeduccionEfectuada = null)
    {
        // validation for constraint: string
        if (!is_null($regularizacionDeduccionEfectuada) && !is_string($regularizacionDeduccionEfectuada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regularizacionDeduccionEfectuada, true), gettype($regularizacionDeduccionEfectuada)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($regularizacionDeduccionEfectuada) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $regularizacionDeduccionEfectuada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($regularizacionDeduccionEfectuada, true)), __LINE__);
        }
        $this->RegularizacionDeduccionEfectuada = $regularizacionDeduccionEfectuada;
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
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType
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
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType
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
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType
     */
    public function setEntidadSucedida(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this->EntidadSucedida = $entidadSucedida;
        return $this;
    }
}
