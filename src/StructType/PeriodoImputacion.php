<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PeriodoImputacion StructType
 * Meta information extracted from the WSDL
 * - documentation: Período de imputacion de la factura
 * @subpackage Structs
 */
class PeriodoImputacion extends AbstractStructBase
{
    /**
     * The EjercicioImputacion
     * Meta information extracted from the WSDL
     * - documentation: Año en formato YYYY
     * - base: string
     * - length: 4
     * - pattern: \d{4,4}
     * @var string
     */
    public $EjercicioImputacion;
    /**
     * The PeriodoImputacion
     * @var string
     */
    public $PeriodoImputacion;
    /**
     * Constructor method for PeriodoImputacion
     * @uses PeriodoImputacion::setEjercicioImputacion()
     * @uses PeriodoImputacion::setPeriodoImputacion()
     * @param string $ejercicioImputacion
     * @param string $periodoImputacion
     */
    public function __construct($ejercicioImputacion = null, $periodoImputacion = null)
    {
        $this
            ->setEjercicioImputacion($ejercicioImputacion)
            ->setPeriodoImputacion($periodoImputacion);
    }
    /**
     * Get EjercicioImputacion value
     * @return string|null
     */
    public function getEjercicioImputacion()
    {
        return $this->EjercicioImputacion;
    }
    /**
     * Set EjercicioImputacion value
     * @param string $ejercicioImputacion
     * @return \ClonixDev\AeatSii\StructType\PeriodoImputacion
     */
    public function setEjercicioImputacion($ejercicioImputacion = null)
    {
        // validation for constraint: string
        if (!is_null($ejercicioImputacion) && !is_string($ejercicioImputacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ejercicioImputacion, true), gettype($ejercicioImputacion)), __LINE__);
        }
        // validation for constraint: length(4)
        if (!is_null($ejercicioImputacion) && mb_strlen($ejercicioImputacion) !== 4) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 4', mb_strlen($ejercicioImputacion)), __LINE__);
        }
        // validation for constraint: pattern(\d{4,4})
        if (!is_null($ejercicioImputacion) && !preg_match('/\\d{4,4}/', $ejercicioImputacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{4,4}', var_export($ejercicioImputacion, true)), __LINE__);
        }
        $this->EjercicioImputacion = $ejercicioImputacion;
        return $this;
    }
    /**
     * Get PeriodoImputacion value
     * @return string|null
     */
    public function getPeriodoImputacion()
    {
        return $this->PeriodoImputacion;
    }
    /**
     * Set PeriodoImputacion value
     * @uses \ClonixDev\AeatSii\EnumType\TipoPeriodoType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\TipoPeriodoType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $periodoImputacion
     * @return \ClonixDev\AeatSii\StructType\PeriodoImputacion
     */
    public function setPeriodoImputacion($periodoImputacion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\TipoPeriodoType::valueIsValid($periodoImputacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\TipoPeriodoType', is_array($periodoImputacion) ? implode(', ', $periodoImputacion) : var_export($periodoImputacion, true), implode(', ', \ClonixDev\AeatSii\EnumType\TipoPeriodoType::getValidValues())), __LINE__);
        }
        $this->PeriodoImputacion = $periodoImputacion;
        return $this;
    }
}
