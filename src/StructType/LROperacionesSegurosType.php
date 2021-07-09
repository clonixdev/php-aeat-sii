<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LROperacionesSegurosType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte de operaciones de seguros.
 * @subpackage Structs
 */
class LROperacionesSegurosType extends RegistroSii
{
    /**
     * The Contraparte
     * Meta information extracted from the WSDL
     * - documentation: Contraparte de la operación. Cliente en facturas emitidas. Proveedor en facturas recibidas.
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The ClaveOperacion
     * @var string
     */
    public $ClaveOperacion;
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
     * Constructor method for LROperacionesSegurosType
     * @uses LROperacionesSegurosType::setContraparte()
     * @uses LROperacionesSegurosType::setClaveOperacion()
     * @uses LROperacionesSegurosType::setImporteTotal()
     * @uses LROperacionesSegurosType::setEntidadSucedida()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param string $claveOperacion
     * @param string $importeTotal
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, $claveOperacion = null, $importeTotal = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this
            ->setContraparte($contraparte)
            ->setClaveOperacion($claveOperacion)
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
     * @return \ClonixDev\AeatSii\StructType\LROperacionesSegurosType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
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
     * @return \ClonixDev\AeatSii\StructType\LROperacionesSegurosType
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
     * @return \ClonixDev\AeatSii\StructType\LROperacionesSegurosType
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
     * @return \ClonixDev\AeatSii\StructType\LROperacionesSegurosType
     */
    public function setEntidadSucedida(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this->EntidadSucedida = $entidadSucedida;
        return $this;
    }
}
