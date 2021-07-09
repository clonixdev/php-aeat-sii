<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetalleIVAEmitidaType StructType
 * @subpackage Structs
 */
class DetalleIVAEmitidaType extends AbstractStructBase
{
    /**
     * The TipoImpositivo
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
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
     * The CuotaRepercutida
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $CuotaRepercutida;
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
     * Constructor method for DetalleIVAEmitidaType
     * @uses DetalleIVAEmitidaType::setTipoImpositivo()
     * @uses DetalleIVAEmitidaType::setBaseImponible()
     * @uses DetalleIVAEmitidaType::setCuotaRepercutida()
     * @uses DetalleIVAEmitidaType::setTipoRecargoEquivalencia()
     * @uses DetalleIVAEmitidaType::setCuotaRecargoEquivalencia()
     * @param string $tipoImpositivo
     * @param string $baseImponible
     * @param string $cuotaRepercutida
     * @param string $tipoRecargoEquivalencia
     * @param string $cuotaRecargoEquivalencia
     */
    public function __construct($tipoImpositivo = null, $baseImponible = null, $cuotaRepercutida = null, $tipoRecargoEquivalencia = null, $cuotaRecargoEquivalencia = null)
    {
        $this
            ->setTipoImpositivo($tipoImpositivo)
            ->setBaseImponible($baseImponible)
            ->setCuotaRepercutida($cuotaRepercutida)
            ->setTipoRecargoEquivalencia($tipoRecargoEquivalencia)
            ->setCuotaRecargoEquivalencia($cuotaRecargoEquivalencia);
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
     * @return \ClonixDev\AeatSii\StructType\DetalleIVAEmitidaType
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
     * @return \ClonixDev\AeatSii\StructType\DetalleIVAEmitidaType
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
     * Get CuotaRepercutida value
     * @return string|null
     */
    public function getCuotaRepercutida()
    {
        return $this->CuotaRepercutida;
    }
    /**
     * Set CuotaRepercutida value
     * @param string $cuotaRepercutida
     * @return \ClonixDev\AeatSii\StructType\DetalleIVAEmitidaType
     */
    public function setCuotaRepercutida($cuotaRepercutida = null)
    {
        // validation for constraint: string
        if (!is_null($cuotaRepercutida) && !is_string($cuotaRepercutida)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuotaRepercutida, true), gettype($cuotaRepercutida)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($cuotaRepercutida) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $cuotaRepercutida)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($cuotaRepercutida, true)), __LINE__);
        }
        $this->CuotaRepercutida = $cuotaRepercutida;
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
     * @return \ClonixDev\AeatSii\StructType\DetalleIVAEmitidaType
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
     * @return \ClonixDev\AeatSii\StructType\DetalleIVAEmitidaType
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
}
