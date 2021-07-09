<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabeceraConsultaSii StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de contexto de un suministro sin especificar el tipo de comunicacion
 * @subpackage Structs
 */
class CabeceraConsultaSii extends AbstractStructBase
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
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $Titular;
    /**
     * Constructor method for CabeceraConsultaSii
     * @uses CabeceraConsultaSii::setIDVersionSii()
     * @uses CabeceraConsultaSii::setTitular()
     * @param string $iDVersionSii
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titular
     */
    public function __construct($iDVersionSii = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titular = null)
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
     * @return \ClonixDev\AeatSii\StructType\CabeceraConsultaSii
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
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType|null
     */
    public function getTitular()
    {
        return $this->Titular;
    }
    /**
     * Set Titular value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titular
     * @return \ClonixDev\AeatSii\StructType\CabeceraConsultaSii
     */
    public function setTitular(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titular = null)
    {
        $this->Titular = $titular;
        return $this;
    }
}
