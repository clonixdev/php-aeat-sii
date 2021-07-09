<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DesgloseRectificacionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Desglose de Base y Cuota sustituida en las Facturas Rectificativas sustitutivas
 * @subpackage Structs
 */
class DesgloseRectificacionType extends AbstractStructBase
{
    /**
     * The BaseRectificada
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $BaseRectificada;
    /**
     * The CuotaRectificada
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $CuotaRectificada;
    /**
     * The CuotaRecargoRectificado
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $CuotaRecargoRectificado;
    /**
     * Constructor method for DesgloseRectificacionType
     * @uses DesgloseRectificacionType::setBaseRectificada()
     * @uses DesgloseRectificacionType::setCuotaRectificada()
     * @uses DesgloseRectificacionType::setCuotaRecargoRectificado()
     * @param string $baseRectificada
     * @param string $cuotaRectificada
     * @param string $cuotaRecargoRectificado
     */
    public function __construct($baseRectificada = null, $cuotaRectificada = null, $cuotaRecargoRectificado = null)
    {
        $this
            ->setBaseRectificada($baseRectificada)
            ->setCuotaRectificada($cuotaRectificada)
            ->setCuotaRecargoRectificado($cuotaRecargoRectificado);
    }
    /**
     * Get BaseRectificada value
     * @return string|null
     */
    public function getBaseRectificada()
    {
        return $this->BaseRectificada;
    }
    /**
     * Set BaseRectificada value
     * @param string $baseRectificada
     * @return \ClonixDev\AeatSii\StructType\DesgloseRectificacionType
     */
    public function setBaseRectificada($baseRectificada = null)
    {
        // validation for constraint: string
        if (!is_null($baseRectificada) && !is_string($baseRectificada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseRectificada, true), gettype($baseRectificada)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($baseRectificada) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $baseRectificada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($baseRectificada, true)), __LINE__);
        }
        $this->BaseRectificada = $baseRectificada;
        return $this;
    }
    /**
     * Get CuotaRectificada value
     * @return string|null
     */
    public function getCuotaRectificada()
    {
        return $this->CuotaRectificada;
    }
    /**
     * Set CuotaRectificada value
     * @param string $cuotaRectificada
     * @return \ClonixDev\AeatSii\StructType\DesgloseRectificacionType
     */
    public function setCuotaRectificada($cuotaRectificada = null)
    {
        // validation for constraint: string
        if (!is_null($cuotaRectificada) && !is_string($cuotaRectificada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuotaRectificada, true), gettype($cuotaRectificada)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($cuotaRectificada) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $cuotaRectificada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($cuotaRectificada, true)), __LINE__);
        }
        $this->CuotaRectificada = $cuotaRectificada;
        return $this;
    }
    /**
     * Get CuotaRecargoRectificado value
     * @return string|null
     */
    public function getCuotaRecargoRectificado()
    {
        return $this->CuotaRecargoRectificado;
    }
    /**
     * Set CuotaRecargoRectificado value
     * @param string $cuotaRecargoRectificado
     * @return \ClonixDev\AeatSii\StructType\DesgloseRectificacionType
     */
    public function setCuotaRecargoRectificado($cuotaRecargoRectificado = null)
    {
        // validation for constraint: string
        if (!is_null($cuotaRecargoRectificado) && !is_string($cuotaRecargoRectificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuotaRecargoRectificado, true), gettype($cuotaRecargoRectificado)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($cuotaRecargoRectificado) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $cuotaRecargoRectificado)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($cuotaRecargoRectificado, true)), __LINE__);
        }
        $this->CuotaRecargoRectificado = $cuotaRecargoRectificado;
        return $this;
    }
}
