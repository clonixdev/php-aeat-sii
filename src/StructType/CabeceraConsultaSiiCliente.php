<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabeceraConsultaSiiCliente StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de contexto de un suministro sin especificar el timpo de comunicacion
 * @subpackage Structs
 */
class CabeceraConsultaSiiCliente extends AbstractStructBase
{
    /**
     * The IDVersionSii
     * @var string
     */
    public $IDVersionSii;
    /**
     * The TitularLRFE
     * Meta information extracted from the WSDL
     * - documentation: Titular del libro de registro de facturas emitidas
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $TitularLRFE;
    /**
     * Constructor method for CabeceraConsultaSiiCliente
     * @uses CabeceraConsultaSiiCliente::setIDVersionSii()
     * @uses CabeceraConsultaSiiCliente::setTitularLRFE()
     * @param string $iDVersionSii
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titularLRFE
     */
    public function __construct($iDVersionSii = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titularLRFE = null)
    {
        $this
            ->setIDVersionSii($iDVersionSii)
            ->setTitularLRFE($titularLRFE);
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
     * @return \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiCliente
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
     * Get TitularLRFE value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType|null
     */
    public function getTitularLRFE()
    {
        return $this->TitularLRFE;
    }
    /**
     * Set TitularLRFE value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titularLRFE
     * @return \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiCliente
     */
    public function setTitularLRFE(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $titularLRFE = null)
    {
        $this->TitularLRFE = $titularLRFE;
        return $this;
    }
}
