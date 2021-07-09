<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabeceraConsultaSiiProveedor StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de contexto de un suministro sin especificar el tipo de comunicacion
 * @subpackage Structs
 */
class CabeceraConsultaSiiProveedor extends AbstractStructBase
{
    /**
     * The IDVersionSii
     * @var string
     */
    public $IDVersionSii;
    /**
     * The TitularLRFR
     * Meta information extracted from the WSDL
     * - documentation: Titular del libro de registro de facturas recibidas
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $TitularLRFR;
    /**
     * Constructor method for CabeceraConsultaSiiProveedor
     * @uses CabeceraConsultaSiiProveedor::setIDVersionSii()
     * @uses CabeceraConsultaSiiProveedor::setTitularLRFR()
     * @param string $iDVersionSii
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titularLRFR
     */
    public function __construct($iDVersionSii = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titularLRFR = null)
    {
        $this
            ->setIDVersionSii($iDVersionSii)
            ->setTitularLRFR($titularLRFR);
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
     * @return \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiProveedor
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
     * Get TitularLRFR value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType|null
     */
    public function getTitularLRFR()
    {
        return $this->TitularLRFR;
    }
    /**
     * Set TitularLRFR value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titularLRFR
     * @return \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiProveedor
     */
    public function setTitularLRFR(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titularLRFR = null)
    {
        $this->TitularLRFR = $titularLRFR;
        return $this;
    }
}
