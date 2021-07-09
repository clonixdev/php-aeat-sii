<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for EstadoFacturaImputacionType StructType
 * @subpackage Structs
 */
class EstadoFacturaImputacionType extends AbstractStructBase
{
    /**
     * The EstadoCuadre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EstadoCuadre;
    /**
     * The TimestampEstadoCuadre
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 19
     * - minOccurs: 0
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4} \d{2,2}:\d{2,2}:\d{2,2}
     * @var string
     */
    public $TimestampEstadoCuadre;
    /**
     * Constructor method for EstadoFacturaImputacionType
     * @uses EstadoFacturaImputacionType::setEstadoCuadre()
     * @uses EstadoFacturaImputacionType::setTimestampEstadoCuadre()
     * @param string $estadoCuadre
     * @param string $timestampEstadoCuadre
     */
    public function __construct($estadoCuadre = null, $timestampEstadoCuadre = null)
    {
        $this
            ->setEstadoCuadre($estadoCuadre)
            ->setTimestampEstadoCuadre($timestampEstadoCuadre);
    }
    /**
     * Get EstadoCuadre value
     * @return string|null
     */
    public function getEstadoCuadre()
    {
        return $this->EstadoCuadre;
    }
    /**
     * Set EstadoCuadre value
     * @uses \ClonixDev\AeatSii\EnumType\EstadoCuadreType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\EstadoCuadreType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $estadoCuadre
     * @return \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType
     */
    public function setEstadoCuadre($estadoCuadre = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\EstadoCuadreType::valueIsValid($estadoCuadre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\EstadoCuadreType', is_array($estadoCuadre) ? implode(', ', $estadoCuadre) : var_export($estadoCuadre, true), implode(', ', \ClonixDev\AeatSii\EnumType\EstadoCuadreType::getValidValues())), __LINE__);
        }
        $this->EstadoCuadre = $estadoCuadre;
        return $this;
    }
    /**
     * Get TimestampEstadoCuadre value
     * @return string|null
     */
    public function getTimestampEstadoCuadre()
    {
        return $this->TimestampEstadoCuadre;
    }
    /**
     * Set TimestampEstadoCuadre value
     * @param string $timestampEstadoCuadre
     * @return \ClonixDev\AeatSii\StructType\EstadoFacturaImputacionType
     */
    public function setTimestampEstadoCuadre($timestampEstadoCuadre = null)
    {
        // validation for constraint: string
        if (!is_null($timestampEstadoCuadre) && !is_string($timestampEstadoCuadre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestampEstadoCuadre, true), gettype($timestampEstadoCuadre)), __LINE__);
        }
        // validation for constraint: length(19)
        if (!is_null($timestampEstadoCuadre) && mb_strlen($timestampEstadoCuadre) !== 19) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 19', mb_strlen($timestampEstadoCuadre)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4} \d{2,2}:\d{2,2}:\d{2,2})
        if (!is_null($timestampEstadoCuadre) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4} \\d{2,2}:\\d{2,2}:\\d{2,2}/', $timestampEstadoCuadre)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4} \d{2,2}:\d{2,2}:\d{2,2}', var_export($timestampEstadoCuadre, true)), __LINE__);
        }
        $this->TimestampEstadoCuadre = $timestampEstadoCuadre;
        return $this;
    }
}
