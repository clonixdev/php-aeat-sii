<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaCobrosMetalicoType StructType
 * @subpackage Structs
 */
class RespuestaCobrosMetalicoType extends AbstractStructBase
{
    /**
     * The Contraparte
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The ImporteTotal
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $ImporteTotal;
    /**
     * The EntidadSucedida
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $EntidadSucedida;
    /**
     * Constructor method for RespuestaCobrosMetalicoType
     * @uses RespuestaCobrosMetalicoType::setContraparte()
     * @uses RespuestaCobrosMetalicoType::setImporteTotal()
     * @uses RespuestaCobrosMetalicoType::setEntidadSucedida()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param string $importeTotal
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, $importeTotal = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this
            ->setContraparte($contraparte)
            ->setImporteTotal($importeTotal)
            ->setEntidadSucedida($entidadSucedida);
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
        return $this;
    }
    /**
     * Get ImporteTotal value
     * @return string|null
     */
    public function getImporteTotal()
    {
        return $this->ImporteTotal;
    }
    /**
     * Set ImporteTotal value
     * @param string $importeTotal
     * @return \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType
     */
    public function setImporteTotal($importeTotal = null)
    {
        // validation for constraint: string
        if (!is_null($importeTotal) && !is_string($importeTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeTotal, true), gettype($importeTotal)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($importeTotal) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $importeTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($importeTotal, true)), __LINE__);
        }
        $this->ImporteTotal = $importeTotal;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaCobrosMetalicoType
     */
    public function setEntidadSucedida(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this->EntidadSucedida = $entidadSucedida;
        return $this;
    }
}
