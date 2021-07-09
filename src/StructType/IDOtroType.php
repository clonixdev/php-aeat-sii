<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IDOtroType StructType
 * Meta information extracted from the WSDL
 * - documentation: Identificador de persona Física o jurídica distinto del NIF (Código pais, Tipo de Identificador, y hasta 15 caractéres) No se permite CodigoPais=ES e IDType=01-NIFContraparte para ese caso, debe utilizarse NIF en lugar de IDOtro.
 * @subpackage Structs
 */
class IDOtroType extends AbstractStructBase
{
    /**
     * The CodigoPais
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CodigoPais;
    /**
     * The IDType
     * @var string
     */
    public $IDType;
    /**
     * The ID
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 20
     * @var string
     */
    public $ID;
    /**
     * Constructor method for IDOtroType
     * @uses IDOtroType::setCodigoPais()
     * @uses IDOtroType::setIDType()
     * @uses IDOtroType::setID()
     * @param string $codigoPais
     * @param string $iDType
     * @param string $iD
     */
    public function __construct($codigoPais = null, $iDType = null, $iD = null)
    {
        $this
            ->setCodigoPais($codigoPais)
            ->setIDType($iDType)
            ->setID($iD);
    }
    /**
     * Get CodigoPais value
     * @return string|null
     */
    public function getCodigoPais()
    {
        return $this->CodigoPais;
    }
    /**
     * Set CodigoPais value
     * @uses \ClonixDev\AeatSii\EnumType\CountryType2::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\CountryType2::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $codigoPais
     * @return \ClonixDev\AeatSii\StructType\IDOtroType
     */
    public function setCodigoPais($codigoPais = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\CountryType2::valueIsValid($codigoPais)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\CountryType2', is_array($codigoPais) ? implode(', ', $codigoPais) : var_export($codigoPais, true), implode(', ', \ClonixDev\AeatSii\EnumType\CountryType2::getValidValues())), __LINE__);
        }
        $this->CodigoPais = $codigoPais;
        return $this;
    }
    /**
     * Get IDType value
     * @return string|null
     */
    public function getIDType()
    {
        return $this->IDType;
    }
    /**
     * Set IDType value
     * @uses \ClonixDev\AeatSii\EnumType\PersonaFisicaJuridicaIDTypeType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\PersonaFisicaJuridicaIDTypeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $iDType
     * @return \ClonixDev\AeatSii\StructType\IDOtroType
     */
    public function setIDType($iDType = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\PersonaFisicaJuridicaIDTypeType::valueIsValid($iDType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\PersonaFisicaJuridicaIDTypeType', is_array($iDType) ? implode(', ', $iDType) : var_export($iDType, true), implode(', ', \ClonixDev\AeatSii\EnumType\PersonaFisicaJuridicaIDTypeType::getValidValues())), __LINE__);
        }
        $this->IDType = $iDType;
        return $this;
    }
    /**
     * Get ID value
     * @return string|null
     */
    public function getID()
    {
        return $this->ID;
    }
    /**
     * Set ID value
     * @param string $iD
     * @return \ClonixDev\AeatSii\StructType\IDOtroType
     */
    public function setID($iD = null)
    {
        // validation for constraint: string
        if (!is_null($iD) && !is_string($iD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iD, true), gettype($iD)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($iD) && mb_strlen($iD) > 20) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen($iD)), __LINE__);
        }
        $this->ID = $iD;
        return $this;
    }
}
