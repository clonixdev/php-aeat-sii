<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacturaRespuestaRecibidaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente al libro de facturas recibidas.
 * @subpackage Structs
 */
class FacturaRespuestaRecibidaType extends FacturaRespuestaType
{
    /**
     * The DesgloseFactura
     * @var \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType
     */
    public $DesgloseFactura;
    /**
     * The Contraparte
     * Meta information extracted from the WSDL
     * - documentation: Contraparte de la operación. Proveedor (Obligatorio) en facturas recibidas.
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The FechaRegContable
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaRegContable;
    /**
     * The CuotaDeducible
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $CuotaDeducible;
    /**
     * The Pagos
     * @var string
     */
    public $Pagos;
    /**
     * The ADeducirEnPeriodoPosterior
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ADeducirEnPeriodoPosterior;
    /**
     * The EjercicioDeduccion
     * Meta information extracted from the WSDL
     * - documentation: Año en formato YYYY
     * - base: string
     * - length: 4
     * - minOccurs: 0
     * - pattern: \d{4,4}
     * @var string
     */
    public $EjercicioDeduccion;
    /**
     * The PeriodoDeduccion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $PeriodoDeduccion;
    /**
     * Constructor method for FacturaRespuestaRecibidaType
     * @uses FacturaRespuestaRecibidaType::setDesgloseFactura()
     * @uses FacturaRespuestaRecibidaType::setContraparte()
     * @uses FacturaRespuestaRecibidaType::setFechaRegContable()
     * @uses FacturaRespuestaRecibidaType::setCuotaDeducible()
     * @uses FacturaRespuestaRecibidaType::setPagos()
     * @uses FacturaRespuestaRecibidaType::setADeducirEnPeriodoPosterior()
     * @uses FacturaRespuestaRecibidaType::setEjercicioDeduccion()
     * @uses FacturaRespuestaRecibidaType::setPeriodoDeduccion()
     * @param \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType $desgloseFactura
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param string $fechaRegContable
     * @param string $cuotaDeducible
     * @param string $pagos
     * @param string $aDeducirEnPeriodoPosterior
     * @param string $ejercicioDeduccion
     * @param string $periodoDeduccion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType $desgloseFactura = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, $fechaRegContable = null, $cuotaDeducible = null, $pagos = null, $aDeducirEnPeriodoPosterior = null, $ejercicioDeduccion = null, $periodoDeduccion = null)
    {
        $this
            ->setDesgloseFactura($desgloseFactura)
            ->setContraparte($contraparte)
            ->setFechaRegContable($fechaRegContable)
            ->setCuotaDeducible($cuotaDeducible)
            ->setPagos($pagos)
            ->setADeducirEnPeriodoPosterior($aDeducirEnPeriodoPosterior)
            ->setEjercicioDeduccion($ejercicioDeduccion)
            ->setPeriodoDeduccion($periodoDeduccion);
    }
    /**
     * Get DesgloseFactura value
     * @return \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType|null
     */
    public function getDesgloseFactura()
    {
        return $this->DesgloseFactura;
    }
    /**
     * Set DesgloseFactura value
     * @param \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType $desgloseFactura
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType
     */
    public function setDesgloseFactura(\ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType $desgloseFactura = null)
    {
        $this->DesgloseFactura = $desgloseFactura;
        return $this;
    }
    /**
     * Get Contraparte value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType|null
     */
    public function getContraparte()
    {
        return $this->Contraparte;
    }
    /**
     * Set Contraparte value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
        return $this;
    }
    /**
     * Get FechaRegContable value
     * @return string|null
     */
    public function getFechaRegContable()
    {
        return $this->FechaRegContable;
    }
    /**
     * Set FechaRegContable value
     * @param string $fechaRegContable
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType
     */
    public function setFechaRegContable($fechaRegContable = null)
    {
        // validation for constraint: string
        if (!is_null($fechaRegContable) && !is_string($fechaRegContable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaRegContable, true), gettype($fechaRegContable)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaRegContable) && mb_strlen($fechaRegContable) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaRegContable)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaRegContable) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaRegContable)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaRegContable, true)), __LINE__);
        }
        $this->FechaRegContable = $fechaRegContable;
        return $this;
    }
    /**
     * Get CuotaDeducible value
     * @return string|null
     */
    public function getCuotaDeducible()
    {
        return $this->CuotaDeducible;
    }
    /**
     * Set CuotaDeducible value
     * @param string $cuotaDeducible
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType
     */
    public function setCuotaDeducible($cuotaDeducible = null)
    {
        // validation for constraint: string
        if (!is_null($cuotaDeducible) && !is_string($cuotaDeducible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuotaDeducible, true), gettype($cuotaDeducible)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($cuotaDeducible) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $cuotaDeducible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($cuotaDeducible, true)), __LINE__);
        }
        $this->CuotaDeducible = $cuotaDeducible;
        return $this;
    }
    /**
     * Get Pagos value
     * @return string|null
     */
    public function getPagos()
    {
        return $this->Pagos;
    }
    /**
     * Set Pagos value
     * @uses \ClonixDev\AeatSii\EnumType\FacturaARType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\FacturaARType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $pagos
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType
     */
    public function setPagos($pagos = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\FacturaARType::valueIsValid($pagos)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\FacturaARType', is_array($pagos) ? implode(', ', $pagos) : var_export($pagos, true), implode(', ', \ClonixDev\AeatSii\EnumType\FacturaARType::getValidValues())), __LINE__);
        }
        $this->Pagos = $pagos;
        return $this;
    }
    /**
     * Get ADeducirEnPeriodoPosterior value
     * @return string|null
     */
    public function getADeducirEnPeriodoPosterior()
    {
        return $this->ADeducirEnPeriodoPosterior;
    }
    /**
     * Set ADeducirEnPeriodoPosterior value
     * @uses \ClonixDev\AeatSii\EnumType\DeducirEnPeriodoPosteriorType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\DeducirEnPeriodoPosteriorType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $aDeducirEnPeriodoPosterior
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType
     */
    public function setADeducirEnPeriodoPosterior($aDeducirEnPeriodoPosterior = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\DeducirEnPeriodoPosteriorType::valueIsValid($aDeducirEnPeriodoPosterior)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\DeducirEnPeriodoPosteriorType', is_array($aDeducirEnPeriodoPosterior) ? implode(', ', $aDeducirEnPeriodoPosterior) : var_export($aDeducirEnPeriodoPosterior, true), implode(', ', \ClonixDev\AeatSii\EnumType\DeducirEnPeriodoPosteriorType::getValidValues())), __LINE__);
        }
        $this->ADeducirEnPeriodoPosterior = $aDeducirEnPeriodoPosterior;
        return $this;
    }
    /**
     * Get EjercicioDeduccion value
     * @return string|null
     */
    public function getEjercicioDeduccion()
    {
        return $this->EjercicioDeduccion;
    }
    /**
     * Set EjercicioDeduccion value
     * @param string $ejercicioDeduccion
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType
     */
    public function setEjercicioDeduccion($ejercicioDeduccion = null)
    {
        // validation for constraint: string
        if (!is_null($ejercicioDeduccion) && !is_string($ejercicioDeduccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ejercicioDeduccion, true), gettype($ejercicioDeduccion)), __LINE__);
        }
        // validation for constraint: length(4)
        if (!is_null($ejercicioDeduccion) && mb_strlen($ejercicioDeduccion) !== 4) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 4', mb_strlen($ejercicioDeduccion)), __LINE__);
        }
        // validation for constraint: pattern(\d{4,4})
        if (!is_null($ejercicioDeduccion) && !preg_match('/\\d{4,4}/', $ejercicioDeduccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{4,4}', var_export($ejercicioDeduccion, true)), __LINE__);
        }
        $this->EjercicioDeduccion = $ejercicioDeduccion;
        return $this;
    }
    /**
     * Get PeriodoDeduccion value
     * @return string|null
     */
    public function getPeriodoDeduccion()
    {
        return $this->PeriodoDeduccion;
    }
    /**
     * Set PeriodoDeduccion value
     * @uses \ClonixDev\AeatSii\EnumType\TipoPeriodoType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\TipoPeriodoType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $periodoDeduccion
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType
     */
    public function setPeriodoDeduccion($periodoDeduccion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\TipoPeriodoType::valueIsValid($periodoDeduccion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\TipoPeriodoType', is_array($periodoDeduccion) ? implode(', ', $periodoDeduccion) : var_export($periodoDeduccion, true), implode(', ', \ClonixDev\AeatSii\EnumType\TipoPeriodoType::getValidValues())), __LINE__);
        }
        $this->PeriodoDeduccion = $periodoDeduccion;
        return $this;
    }
}
