<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CabeceraSii StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de contexto de un suministro
 * @subpackage Structs
 */
class CabeceraSii extends AbstractStructBase
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
     * The TipoComunicacion
     * @var string
     */
    public $TipoComunicacion;
    /**
     * Constructor method for CabeceraSii
     * @uses CabeceraSii::setIDVersionSii()
     * @uses CabeceraSii::setTitular()
     * @uses CabeceraSii::setTipoComunicacion()
     * @param string $iDVersionSii
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType $titular
     * @param string $tipoComunicacion
     */
    public function __construct($iDVersionSii = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType $titular = null, $tipoComunicacion = null)
    {
        $this
            ->setIDVersionSii($iDVersionSii)
            ->setTitular($titular)
            ->setTipoComunicacion($tipoComunicacion);
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
     * @return \ClonixDev\AeatSii\StructType\CabeceraSii
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
     * @return \ClonixDev\AeatSii\StructType\CabeceraSii
     */
    public function setTitular(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType $titular = null)
    {
        $this->Titular = $titular;
        return $this;
    }
    /**
     * Get TipoComunicacion value
     * @return string|null
     */
    public function getTipoComunicacion()
    {
        return $this->TipoComunicacion;
    }
    /**
     * Set TipoComunicacion value
     * @uses \ClonixDev\AeatSii\EnumType\ClaveTipoComunicacionType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\ClaveTipoComunicacionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoComunicacion
     * @return \ClonixDev\AeatSii\StructType\CabeceraSii
     */
    public function setTipoComunicacion($tipoComunicacion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\ClaveTipoComunicacionType::valueIsValid($tipoComunicacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\ClaveTipoComunicacionType', is_array($tipoComunicacion) ? implode(', ', $tipoComunicacion) : var_export($tipoComunicacion, true), implode(', ', \ClonixDev\AeatSii\EnumType\ClaveTipoComunicacionType::getValidValues())), __LINE__);
        }
        $this->TipoComunicacion = $tipoComunicacion;
        return $this;
    }
}
