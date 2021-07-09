<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ClavePaginacion StructType
 * @subpackage Structs
 */
class ClavePaginacion extends AbstractStructBase
{
    /**
     * The Contraparte
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The ClaveOperacion
     * @var string
     */
    public $ClaveOperacion;
    /**
     * The IdRegistro
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 60
     * @var string
     */
    public $IdRegistro;
    /**
     * Constructor method for ClavePaginacion
     * @uses ClavePaginacion::setContraparte()
     * @uses ClavePaginacion::setClaveOperacion()
     * @uses ClavePaginacion::setIdRegistro()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param string $claveOperacion
     * @param string $idRegistro
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, $claveOperacion = null, $idRegistro = null)
    {
        $this
            ->setContraparte($contraparte)
            ->setClaveOperacion($claveOperacion)
            ->setIdRegistro($idRegistro);
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
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacion
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
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacion
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
     * Get IdRegistro value
     * @return string|null
     */
    public function getIdRegistro()
    {
        return $this->IdRegistro;
    }
    /**
     * Set IdRegistro value
     * @param string $idRegistro
     * @return \ClonixDev\AeatSii\StructType\ClavePaginacion
     */
    public function setIdRegistro($idRegistro = null)
    {
        // validation for constraint: string
        if (!is_null($idRegistro) && !is_string($idRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idRegistro, true), gettype($idRegistro)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($idRegistro) && mb_strlen($idRegistro) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($idRegistro)), __LINE__);
        }
        $this->IdRegistro = $idRegistro;
        return $this;
    }
}
