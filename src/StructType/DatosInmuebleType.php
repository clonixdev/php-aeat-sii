<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatosInmuebleType StructType
 * @subpackage Structs
 */
class DatosInmuebleType extends AbstractStructBase
{
    /**
     * The SituacionInmueble
     * @var string
     */
    public $SituacionInmueble;
    /**
     * The ReferenciaCatastral
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 25
     * - minOccurs: 0
     * @var string
     */
    public $ReferenciaCatastral;
    /**
     * Constructor method for DatosInmuebleType
     * @uses DatosInmuebleType::setSituacionInmueble()
     * @uses DatosInmuebleType::setReferenciaCatastral()
     * @param string $situacionInmueble
     * @param string $referenciaCatastral
     */
    public function __construct($situacionInmueble = null, $referenciaCatastral = null)
    {
        $this
            ->setSituacionInmueble($situacionInmueble)
            ->setReferenciaCatastral($referenciaCatastral);
    }
    /**
     * Get SituacionInmueble value
     * @return string|null
     */
    public function getSituacionInmueble()
    {
        return $this->SituacionInmueble;
    }
    /**
     * Set SituacionInmueble value
     * @uses \ClonixDev\AeatSii\EnumType\SituacionInmuebleType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\SituacionInmuebleType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $situacionInmueble
     * @return \ClonixDev\AeatSii\StructType\DatosInmuebleType
     */
    public function setSituacionInmueble($situacionInmueble = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\SituacionInmuebleType::valueIsValid($situacionInmueble)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\SituacionInmuebleType', is_array($situacionInmueble) ? implode(', ', $situacionInmueble) : var_export($situacionInmueble, true), implode(', ', \ClonixDev\AeatSii\EnumType\SituacionInmuebleType::getValidValues())), __LINE__);
        }
        $this->SituacionInmueble = $situacionInmueble;
        return $this;
    }
    /**
     * Get ReferenciaCatastral value
     * @return string|null
     */
    public function getReferenciaCatastral()
    {
        return $this->ReferenciaCatastral;
    }
    /**
     * Set ReferenciaCatastral value
     * @param string $referenciaCatastral
     * @return \ClonixDev\AeatSii\StructType\DatosInmuebleType
     */
    public function setReferenciaCatastral($referenciaCatastral = null)
    {
        // validation for constraint: string
        if (!is_null($referenciaCatastral) && !is_string($referenciaCatastral)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenciaCatastral, true), gettype($referenciaCatastral)), __LINE__);
        }
        // validation for constraint: maxLength(25)
        if (!is_null($referenciaCatastral) && mb_strlen($referenciaCatastral) > 25) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 25', mb_strlen($referenciaCatastral)), __LINE__);
        }
        $this->ReferenciaCatastral = $referenciaCatastral;
        return $this;
    }
}
