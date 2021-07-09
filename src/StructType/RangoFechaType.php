<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RangoFechaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Rango de fechas
 * @subpackage Structs
 */
class RangoFechaType extends AbstractStructBase
{
    /**
     * The Desde
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - minOccurs: 0
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $Desde;
    /**
     * The Hasta
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - minOccurs: 0
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $Hasta;
    /**
     * Constructor method for RangoFechaType
     * @uses RangoFechaType::setDesde()
     * @uses RangoFechaType::setHasta()
     * @param string $desde
     * @param string $hasta
     */
    public function __construct($desde = null, $hasta = null)
    {
        $this
            ->setDesde($desde)
            ->setHasta($hasta);
    }
    /**
     * Get Desde value
     * @return string|null
     */
    public function getDesde()
    {
        return $this->Desde;
    }
    /**
     * Set Desde value
     * @param string $desde
     * @return \ClonixDev\AeatSii\StructType\RangoFechaType
     */
    public function setDesde($desde = null)
    {
        // validation for constraint: string
        if (!is_null($desde) && !is_string($desde)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($desde, true), gettype($desde)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($desde) && mb_strlen($desde) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($desde)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($desde) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $desde)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($desde, true)), __LINE__);
        }
        $this->Desde = $desde;
        return $this;
    }
    /**
     * Get Hasta value
     * @return string|null
     */
    public function getHasta()
    {
        return $this->Hasta;
    }
    /**
     * Set Hasta value
     * @param string $hasta
     * @return \ClonixDev\AeatSii\StructType\RangoFechaType
     */
    public function setHasta($hasta = null)
    {
        // validation for constraint: string
        if (!is_null($hasta) && !is_string($hasta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hasta, true), gettype($hasta)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($hasta) && mb_strlen($hasta) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($hasta)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($hasta) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $hasta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($hasta, true)), __LINE__);
        }
        $this->Hasta = $hasta;
        return $this;
    }
}
