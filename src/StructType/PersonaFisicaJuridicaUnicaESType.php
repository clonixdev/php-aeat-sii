<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PersonaFisicaJuridicaUnicaESType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de una persona física o jurídica Española con un NIF asociado
 * @subpackage Structs
 */
class PersonaFisicaJuridicaUnicaESType extends AbstractStructBase
{
    /**
     * The NombreRazon
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 120
     * @var string
     */
    public $NombreRazon;
    /**
     * The NIF
     * Meta information extracted from the WSDL
     * - documentation: NIF: Secuencia de 9 dígitos o letras mayúsculas
     * - base: string
     * - length: 9
     * - pattern: (([a-z|A-Z]{1}\d{7}[a-z|A-Z]{1})|(\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\d{8}))
     * @var string
     */
    public $NIF;
    /**
     * Constructor method for PersonaFisicaJuridicaUnicaESType
     * @uses PersonaFisicaJuridicaUnicaESType::setNombreRazon()
     * @uses PersonaFisicaJuridicaUnicaESType::setNIF()
     * @param string $nombreRazon
     * @param string $nIF
     */
    public function __construct($nombreRazon = null, $nIF = null)
    {
        $this
            ->setNombreRazon($nombreRazon)
            ->setNIF($nIF);
    }
    /**
     * Get NombreRazon value
     * @return string|null
     */
    public function getNombreRazon()
    {
        return $this->NombreRazon;
    }
    /**
     * Set NombreRazon value
     * @param string $nombreRazon
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public function setNombreRazon($nombreRazon = null)
    {
        // validation for constraint: string
        if (!is_null($nombreRazon) && !is_string($nombreRazon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nombreRazon, true), gettype($nombreRazon)), __LINE__);
        }
        // validation for constraint: maxLength(120)
        if (!is_null($nombreRazon) && mb_strlen($nombreRazon) > 120) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 120', mb_strlen($nombreRazon)), __LINE__);
        }
        $this->NombreRazon = $nombreRazon;
        return $this;
    }
    /**
     * Get NIF value
     * @return string|null
     */
    public function getNIF()
    {
        return $this->NIF;
    }
    /**
     * Set NIF value
     * @param string $nIF
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public function setNIF($nIF = null)
    {
        // validation for constraint: string
        if (!is_null($nIF) && !is_string($nIF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nIF, true), gettype($nIF)), __LINE__);
        }
        // validation for constraint: length(9)
        if (!is_null($nIF) && mb_strlen($nIF) !== 9) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 9', mb_strlen($nIF)), __LINE__);
        }
        // validation for constraint: pattern((([a-z|A-Z]{1}\d{7}[a-z|A-Z]{1})|(\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\d{8})))
        if (!is_null($nIF) && !preg_match('/(([a-z|A-Z]{1}\\d{7}[a-z|A-Z]{1})|(\\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\\d{8}))/', $nIF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (([a-z|A-Z]{1}\d{7}[a-z|A-Z]{1})|(\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\d{8}))', var_export($nIF, true)), __LINE__);
        }
        $this->NIF = $nIF;
        return $this;
    }
}
