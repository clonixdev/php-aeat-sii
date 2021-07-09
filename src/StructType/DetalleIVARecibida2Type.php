<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetalleIVARecibida2Type StructType
 * @subpackage Structs
 */
class DetalleIVARecibida2Type extends AbstractStructBase
{
    /**
     * The TipoImpositivo
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: \d{1,3}(\.\d{0,2})?
     * @var string
     */
    public $TipoImpositivo;
    /**
     * The BaseImponible
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $BaseImponible;
    /**
     * The CuotaSoportada
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $CuotaSoportada;
    /**
     * The TipoRecargoEquivalencia
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: \d{1,3}(\.\d{0,2})?
     * @var string
     */
    public $TipoRecargoEquivalencia;
    /**
     * The CuotaRecargoEquivalencia
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $CuotaRecargoEquivalencia;
    /**
     * The BienInversion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $BienInversion;
    /**
     * Constructor method for DetalleIVARecibida2Type
     * @uses DetalleIVARecibida2Type::setTipoImpositivo()
     * @uses DetalleIVARecibida2Type::setBaseImponible()
     * @uses DetalleIVARecibida2Type::setCuotaSoportada()
     * @uses DetalleIVARecibida2Type::setTipoRecargoEquivalencia()
     * @uses DetalleIVARecibida2Type::setCuotaRecargoEquivalencia()
     * @uses DetalleIVARecibida2Type::setBienInversion()
     * @param string $tipoImpositivo
     * @param string $baseImponible
     * @param string $cuotaSoportada
     * @param string $tipoRecargoEquivalencia
     * @param string $cuotaRecargoEquivalencia
     * @param string $bienInversion
     */
    public function __construct($tipoImpositivo = null, $baseImponible = null, $cuotaSoportada = null, $tipoRecargoEquivalencia = null, $cuotaRecargoEquivalencia = null, $bienInversion = null)
    {
        $this
            ->setTipoImpositivo($tipoImpositivo)
            ->setBaseImponible($baseImponible)
            ->setCuotaSoportada($cuotaSoportada)
            ->setTipoRecargoEquivalencia($tipoRecargoEquivalencia)
            ->setCuotaRecargoEquivalencia($cuotaRecargoEquivalencia)
            ->setBienInversion($bienInversion);
    }
    /**
     * Get TipoImpositivo value
     * @return string|null
     */
    public function getTipoImpositivo()
    {
        return $this->TipoImpositivo;
    }
    /**
     * Set TipoImpositivo value
     * @param string $tipoImpositivo
     * @return \ClonixDev\AeatSii\StructType\DetalleIVARecibida2Type
     */
    public function setTipoImpositivo($tipoImpositivo = null)
    {
        // validation for constraint: string
        if (!is_null($tipoImpositivo) && !is_string($tipoImpositivo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoImpositivo, true), gettype($tipoImpositivo)), __LINE__);
        }
        // validation for constraint: pattern(\d{1,3}(\.\d{0,2})?)
        if (!is_null($tipoImpositivo) && !preg_match('/\\d{1,3}(\\.\\d{0,2})?/', $tipoImpositivo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{1,3}(\.\d{0,2})?', var_export($tipoImpositivo, true)), __LINE__);
        }
        $this->TipoImpositivo = $tipoImpositivo;
        return $this;
    }
    /**
     * Get BaseImponible value
     * @return string|null
     */
    public function getBaseImponible()
    {
        return $this->BaseImponible;
    }
    /**
     * Set BaseImponible value
     * @param string $baseImponible
     * @return \ClonixDev\AeatSii\StructType\DetalleIVARecibida2Type
     */
    public function setBaseImponible($baseImponible = null)
    {
        // validation for constraint: string
        if (!is_null($baseImponible) && !is_string($baseImponible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseImponible, true), gettype($baseImponible)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($baseImponible) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $baseImponible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($baseImponible, true)), __LINE__);
        }
        $this->BaseImponible = $baseImponible;
        return $this;
    }
    /**
     * Get CuotaSoportada value
     * @return string|null
     */
    public function getCuotaSoportada()
    {
        return $this->CuotaSoportada;
    }
    /**
     * Set CuotaSoportada value
     * @param string $cuotaSoportada
     * @return \ClonixDev\AeatSii\StructType\DetalleIVARecibida2Type
     */
    public function setCuotaSoportada($cuotaSoportada = null)
    {
        // validation for constraint: string
        if (!is_null($cuotaSoportada) && !is_string($cuotaSoportada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuotaSoportada, true), gettype($cuotaSoportada)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($cuotaSoportada) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $cuotaSoportada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($cuotaSoportada, true)), __LINE__);
        }
        $this->CuotaSoportada = $cuotaSoportada;
        return $this;
    }
    /**
     * Get TipoRecargoEquivalencia value
     * @return string|null
     */
    public function getTipoRecargoEquivalencia()
    {
        return $this->TipoRecargoEquivalencia;
    }
    /**
     * Set TipoRecargoEquivalencia value
     * @param string $tipoRecargoEquivalencia
     * @return \ClonixDev\AeatSii\StructType\DetalleIVARecibida2Type
     */
    public function setTipoRecargoEquivalencia($tipoRecargoEquivalencia = null)
    {
        // validation for constraint: string
        if (!is_null($tipoRecargoEquivalencia) && !is_string($tipoRecargoEquivalencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tipoRecargoEquivalencia, true), gettype($tipoRecargoEquivalencia)), __LINE__);
        }
        // validation for constraint: pattern(\d{1,3}(\.\d{0,2})?)
        if (!is_null($tipoRecargoEquivalencia) && !preg_match('/\\d{1,3}(\\.\\d{0,2})?/', $tipoRecargoEquivalencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{1,3}(\.\d{0,2})?', var_export($tipoRecargoEquivalencia, true)), __LINE__);
        }
        $this->TipoRecargoEquivalencia = $tipoRecargoEquivalencia;
        return $this;
    }
    /**
     * Get CuotaRecargoEquivalencia value
     * @return string|null
     */
    public function getCuotaRecargoEquivalencia()
    {
        return $this->CuotaRecargoEquivalencia;
    }
    /**
     * Set CuotaRecargoEquivalencia value
     * @param string $cuotaRecargoEquivalencia
     * @return \ClonixDev\AeatSii\StructType\DetalleIVARecibida2Type
     */
    public function setCuotaRecargoEquivalencia($cuotaRecargoEquivalencia = null)
    {
        // validation for constraint: string
        if (!is_null($cuotaRecargoEquivalencia) && !is_string($cuotaRecargoEquivalencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuotaRecargoEquivalencia, true), gettype($cuotaRecargoEquivalencia)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($cuotaRecargoEquivalencia) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $cuotaRecargoEquivalencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($cuotaRecargoEquivalencia, true)), __LINE__);
        }
        $this->CuotaRecargoEquivalencia = $cuotaRecargoEquivalencia;
        return $this;
    }
    /**
     * Get BienInversion value
     * @return string|null
     */
    public function getBienInversion()
    {
        return $this->BienInversion;
    }
    /**
     * Set BienInversion value
     * @uses \ClonixDev\AeatSii\EnumType\BienInversionType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\BienInversionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bienInversion
     * @return \ClonixDev\AeatSii\StructType\DetalleIVARecibida2Type
     */
    public function setBienInversion($bienInversion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\BienInversionType::valueIsValid($bienInversion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\BienInversionType', is_array($bienInversion) ? implode(', ', $bienInversion) : var_export($bienInversion, true), implode(', ', \ClonixDev\AeatSii\EnumType\BienInversionType::getValidValues())), __LINE__);
        }
        $this->BienInversion = $bienInversion;
        return $this;
    }
}
