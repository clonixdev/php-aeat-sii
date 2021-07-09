<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatosPresentacionType StructType
 * @subpackage Structs
 */
class DatosPresentacionType extends AbstractStructBase
{
    /**
     * The NIFPresentador
     * Meta information extracted from the WSDL
     * - documentation: NIF: Secuencia de 9 dígitos o letras mayúsculas
     * - base: string
     * - length: 9
     * - pattern: (([a-z|A-Z]{1}\d{7}[a-z|A-Z]{1})|(\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\d{8}))
     * @var string
     */
    public $NIFPresentador;
    /**
     * The TimestampPresentacion
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 19
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4} \d{2,2}:\d{2,2}:\d{2,2}
     * @var string
     */
    public $TimestampPresentacion;
    /**
     * Constructor method for DatosPresentacionType
     * @uses DatosPresentacionType::setNIFPresentador()
     * @uses DatosPresentacionType::setTimestampPresentacion()
     * @param string $nIFPresentador
     * @param string $timestampPresentacion
     */
    public function __construct($nIFPresentador = null, $timestampPresentacion = null)
    {
        $this
            ->setNIFPresentador($nIFPresentador)
            ->setTimestampPresentacion($timestampPresentacion);
    }
    /**
     * Get NIFPresentador value
     * @return string|null
     */
    public function getNIFPresentador()
    {
        return $this->NIFPresentador;
    }
    /**
     * Set NIFPresentador value
     * @param string $nIFPresentador
     * @return \ClonixDev\AeatSii\StructType\DatosPresentacionType
     */
    public function setNIFPresentador($nIFPresentador = null)
    {
        // validation for constraint: string
        if (!is_null($nIFPresentador) && !is_string($nIFPresentador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nIFPresentador, true), gettype($nIFPresentador)), __LINE__);
        }
        // validation for constraint: length(9)
        if (!is_null($nIFPresentador) && mb_strlen($nIFPresentador) !== 9) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 9', mb_strlen($nIFPresentador)), __LINE__);
        }
        // validation for constraint: pattern((([a-z|A-Z]{1}\d{7}[a-z|A-Z]{1})|(\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\d{8})))
        if (!is_null($nIFPresentador) && !preg_match('/(([a-z|A-Z]{1}\\d{7}[a-z|A-Z]{1})|(\\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\\d{8}))/', $nIFPresentador)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (([a-z|A-Z]{1}\d{7}[a-z|A-Z]{1})|(\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\d{8}))', var_export($nIFPresentador, true)), __LINE__);
        }
        $this->NIFPresentador = $nIFPresentador;
        return $this;
    }
    /**
     * Get TimestampPresentacion value
     * @return string|null
     */
    public function getTimestampPresentacion()
    {
        return $this->TimestampPresentacion;
    }
    /**
     * Set TimestampPresentacion value
     * @param string $timestampPresentacion
     * @return \ClonixDev\AeatSii\StructType\DatosPresentacionType
     */
    public function setTimestampPresentacion($timestampPresentacion = null)
    {
        // validation for constraint: string
        if (!is_null($timestampPresentacion) && !is_string($timestampPresentacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timestampPresentacion, true), gettype($timestampPresentacion)), __LINE__);
        }
        // validation for constraint: length(19)
        if (!is_null($timestampPresentacion) && mb_strlen($timestampPresentacion) !== 19) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 19', mb_strlen($timestampPresentacion)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4} \d{2,2}:\d{2,2}:\d{2,2})
        if (!is_null($timestampPresentacion) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4} \\d{2,2}:\\d{2,2}:\\d{2,2}/', $timestampPresentacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4} \d{2,2}:\d{2,2}:\d{2,2}', var_export($timestampPresentacion, true)), __LINE__);
        }
        $this->TimestampPresentacion = $timestampPresentacion;
        return $this;
    }
}
