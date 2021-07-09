<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabeceraSiiBaja StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de contexto de un suministro sin especificar el timpo de comunicacion
 * @subpackage Structs
 */
class CabeceraSiiBaja extends AbstractStructBase
{
    /**
     * The IDVersionSii
     * @var string
     */
    public $IDVersionSii;
    /**
     * The Titular
     * Meta information extracted from the WSDL
     * - documentation: Titular de los libros de registro que suministra la información
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType
     */
    public $Titular;
    /**
     * Constructor method for CabeceraSiiBaja
     * @uses CabeceraSiiBaja::setIDVersionSii()
     * @uses CabeceraSiiBaja::setTitular()
     * @param string $iDVersionSii
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType $titular
     */
    public function __construct($iDVersionSii = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType $titular = null)
    {
        $this
            ->setIDVersionSii($iDVersionSii)
            ->setTitular($titular);
    }
    /**
     * Get IDVersionSii value
     * @return string|null
     */
    public function getIDVersionSii()
    {
        return $this->IDVersionSii;
    }
    /**
     * Set IDVersionSii value
     * @uses \ClonixDev\AeatSii\EnumType\VersionSiiType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\VersionSiiType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $iDVersionSii
     * @return \ClonixDev\AeatSii\StructType\CabeceraSiiBaja
     */
    public function setIDVersionSii($iDVersionSii = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\VersionSiiType::valueIsValid($iDVersionSii)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\VersionSiiType', is_array($iDVersionSii) ? implode(', ', $iDVersionSii) : var_export($iDVersionSii, true), implode(', ', \ClonixDev\AeatSii\EnumType\VersionSiiType::getValidValues())), __LINE__);
        }
        $this->IDVersionSii = $iDVersionSii;
        return $this;
    }
    /**
     * Get Titular value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType|null
     */
    public function getTitular()
    {
        return $this->Titular;
    }
    /**
     * Set Titular value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType $titular
     * @return \ClonixDev\AeatSii\StructType\CabeceraSiiBaja
     */
    public function setTitular(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType $titular = null)
    {
        $this->Titular = $titular;
        return $this;
    }
}
