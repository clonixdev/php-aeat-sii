<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdRegistroDeclaradoType StructType
 * @subpackage Structs
 */
class IdRegistroDeclaradoType extends AbstractStructBase
{
    /**
     * The Ejercicio
     * Meta information extracted from the WSDL
     * - documentation: Año en formato YYYY
     * - base: string
     * - length: 4
     * - pattern: \d{4,4}
     * @var string
     */
    public $Ejercicio;
    /**
     * The Periodo
     * @var string
     */
    public $Periodo;
    /**
     * The IdRegistro
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 60
     * @var string
     */
    public $IdRegistro;
    /**
     * Constructor method for IdRegistroDeclaradoType
     * @uses IdRegistroDeclaradoType::setEjercicio()
     * @uses IdRegistroDeclaradoType::setPeriodo()
     * @uses IdRegistroDeclaradoType::setIdRegistro()
     * @param string $ejercicio
     * @param string $periodo
     * @param string $idRegistro
     */
    public function __construct($ejercicio = null, $periodo = null, $idRegistro = null)
    {
        $this
            ->setEjercicio($ejercicio)
            ->setPeriodo($periodo)
            ->setIdRegistro($idRegistro);
    }
    /**
     * Get Ejercicio value
     * @return string|null
     */
    public function getEjercicio()
    {
        return $this->Ejercicio;
    }
    /**
     * Set Ejercicio value
     * @param string $ejercicio
     * @return \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType
     */
    public function setEjercicio($ejercicio = null)
    {
        // validation for constraint: string
        if (!is_null($ejercicio) && !is_string($ejercicio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ejercicio, true), gettype($ejercicio)), __LINE__);
        }
        // validation for constraint: length(4)
        if (!is_null($ejercicio) && mb_strlen($ejercicio) !== 4) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 4', mb_strlen($ejercicio)), __LINE__);
        }
        // validation for constraint: pattern(\d{4,4})
        if (!is_null($ejercicio) && !preg_match('/\\d{4,4}/', $ejercicio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{4,4}', var_export($ejercicio, true)), __LINE__);
        }
        $this->Ejercicio = $ejercicio;
        return $this;
    }
    /**
     * Get Periodo value
     * @return string|null
     */
    public function getPeriodo()
    {
        return $this->Periodo;
    }
    /**
     * Set Periodo value
     * @uses \ClonixDev\AeatSii\EnumType\TipoPeriodoType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\TipoPeriodoType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $periodo
     * @return \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType
     */
    public function setPeriodo($periodo = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\TipoPeriodoType::valueIsValid($periodo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\TipoPeriodoType', is_array($periodo) ? implode(', ', $periodo) : var_export($periodo, true), implode(', ', \ClonixDev\AeatSii\EnumType\TipoPeriodoType::getValidValues())), __LINE__);
        }
        $this->Periodo = $periodo;
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
     * @return \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType
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
