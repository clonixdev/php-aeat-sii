<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NoSujetaType StructType
 * @subpackage Structs
 */
class NoSujetaType extends AbstractStructBase
{
    /**
     * The ImportePorArticulos7_14_Otros
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $ImportePorArticulos7_14_Otros;
    /**
     * The ImporteTAIReglasLocalizacion
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $ImporteTAIReglasLocalizacion;
    /**
     * Constructor method for NoSujetaType
     * @uses NoSujetaType::setImportePorArticulos7_14_Otros()
     * @uses NoSujetaType::setImporteTAIReglasLocalizacion()
     * @param string $importePorArticulos7_14_Otros
     * @param string $importeTAIReglasLocalizacion
     */
    public function __construct($importePorArticulos7_14_Otros = null, $importeTAIReglasLocalizacion = null)
    {
        $this
            ->setImportePorArticulos7_14_Otros($importePorArticulos7_14_Otros)
            ->setImporteTAIReglasLocalizacion($importeTAIReglasLocalizacion);
    }
    /**
     * Get importePorArticulos7_Otros value
     * @return importePorArticulos7_Otros
     */
    public function getImportePorArticulos7_14_Otros()
    {
        return $this->ImportePorArticulos7_14_Otros;
    }
    /**
     * Set importePorArticulos7_Otros value
     * @param importePorArticulos7_Otros $importePorArticulos7_Otros
     * @return \ClonixDev\AeatSii\StructType\NoSujetaType
     */
    public function setImportePorArticulos7_14_Otros($importePorArticulos7_14_Otros = null)
    {
        // validation for constraint: string
        if (!is_null($importePorArticulos7_14_Otros) && !is_string($importePorArticulos7_14_Otros)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importePorArticulos7_14_Otros, true), gettype($importePorArticulos7_14_Otros)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($importePorArticulos7_14_Otros) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $importePorArticulos7_14_Otros)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($importePorArticulos7_14_Otros, true)), __LINE__);
        }
        $this->ImportePorArticulos7_14_Otros = $importePorArticulos7_14_Otros;
        return $this;
    }
    /**
     * Get ImporteTAIReglasLocalizacion value
     * @return string|null
     */
    public function getImporteTAIReglasLocalizacion()
    {
        return $this->ImporteTAIReglasLocalizacion;
    }
    /**
     * Set ImporteTAIReglasLocalizacion value
     * @param string $importeTAIReglasLocalizacion
     * @return \ClonixDev\AeatSii\StructType\NoSujetaType
     */
    public function setImporteTAIReglasLocalizacion($importeTAIReglasLocalizacion = null)
    {
        // validation for constraint: string
        if (!is_null($importeTAIReglasLocalizacion) && !is_string($importeTAIReglasLocalizacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeTAIReglasLocalizacion, true), gettype($importeTAIReglasLocalizacion)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($importeTAIReglasLocalizacion) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $importeTAIReglasLocalizacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($importeTAIReglasLocalizacion, true)), __LINE__);
        }
        $this->ImporteTAIReglasLocalizacion = $importeTAIReglasLocalizacion;
        return $this;
    }
}
