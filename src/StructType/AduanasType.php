<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AduanasType StructType
 * Meta information extracted from the WSDL
 * - documentation: Desglose cuando corresponda de la información asociada a los documentos de aduanas
 * @subpackage Structs
 */
class AduanasType extends AbstractStructBase
{
    /**
     * The NumeroDUA
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 40
     * - minOccurs: 0
     * @var string
     */
    public $NumeroDUA;
    /**
     * The FechaRegContableDUA
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - minOccurs: 0
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaRegContableDUA;
    /**
     * Constructor method for AduanasType
     * @uses AduanasType::setNumeroDUA()
     * @uses AduanasType::setFechaRegContableDUA()
     * @param string $numeroDUA
     * @param string $fechaRegContableDUA
     */
    public function __construct($numeroDUA = null, $fechaRegContableDUA = null)
    {
        $this
            ->setNumeroDUA($numeroDUA)
            ->setFechaRegContableDUA($fechaRegContableDUA);
    }
    /**
     * Get NumeroDUA value
     * @return string|null
     */
    public function getNumeroDUA()
    {
        return $this->NumeroDUA;
    }
    /**
     * Set NumeroDUA value
     * @param string $numeroDUA
     * @return \ClonixDev\AeatSii\StructType\AduanasType
     */
    public function setNumeroDUA($numeroDUA = null)
    {
        // validation for constraint: string
        if (!is_null($numeroDUA) && !is_string($numeroDUA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numeroDUA, true), gettype($numeroDUA)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($numeroDUA) && mb_strlen($numeroDUA) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($numeroDUA)), __LINE__);
        }
        $this->NumeroDUA = $numeroDUA;
        return $this;
    }
    /**
     * Get FechaRegContableDUA value
     * @return string|null
     */
    public function getFechaRegContableDUA()
    {
        return $this->FechaRegContableDUA;
    }
    /**
     * Set FechaRegContableDUA value
     * @param string $fechaRegContableDUA
     * @return \ClonixDev\AeatSii\StructType\AduanasType
     */
    public function setFechaRegContableDUA($fechaRegContableDUA = null)
    {
        // validation for constraint: string
        if (!is_null($fechaRegContableDUA) && !is_string($fechaRegContableDUA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaRegContableDUA, true), gettype($fechaRegContableDUA)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaRegContableDUA) && mb_strlen($fechaRegContableDUA) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaRegContableDUA)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaRegContableDUA) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaRegContableDUA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaRegContableDUA, true)), __LINE__);
        }
        $this->FechaRegContableDUA = $fechaRegContableDUA;
        return $this;
    }
}
