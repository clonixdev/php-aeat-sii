<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ContraparteConsultaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de una persona física o jurídica Española o Extranjera
 * @subpackage Structs
 */
class ContraparteConsultaType extends AbstractStructBase
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
     * - choice: NIF | IDOtro
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - length: 9
     * - pattern: (([a-z|A-Z]{1}\d{7}[a-z|A-Z]{1})|(\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\d{8}))
     * @var string
     */
    public $NIF;
    /**
     * The IDOtro
     * Meta information extracted from the WSDL
     * - choice: NIF | IDOtro
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \ClonixDev\AeatSii\StructType\IDOtroType
     */
    public $IDOtro;
    /**
     * Constructor method for ContraparteConsultaType
     * @uses ContraparteConsultaType::setNombreRazon()
     * @uses ContraparteConsultaType::setNIF()
     * @uses ContraparteConsultaType::setIDOtro()
     * @param string $nombreRazon
     * @param string $nIF
     * @param \ClonixDev\AeatSii\StructType\IDOtroType $iDOtro
     */
    public function __construct($nombreRazon = null, $nIF = null, \ClonixDev\AeatSii\StructType\IDOtroType $iDOtro = null)
    {
        $this
            ->setNombreRazon($nombreRazon)
            ->setNIF($nIF)
            ->setIDOtro($iDOtro);
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
     * @return \ClonixDev\AeatSii\StructType\ContraparteConsultaType
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
        return isset($this->NIF) ? $this->NIF : null;
    }
    /**
     * This method is responsible for validating the value passed to the setNIF method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNIF method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateNIFForChoiceConstraintsFromSetNIF($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'IDOtro',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property NIF can\'t be set as the property %s is already set. Only one property must be set among these properties: NIF, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set NIF value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param string $nIF
     * @return \ClonixDev\AeatSii\StructType\ContraparteConsultaType
     */
    public function setNIF($nIF = null)
    {
        // validation for constraint: string
        if (!is_null($nIF) && !is_string($nIF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nIF, true), gettype($nIF)), __LINE__);
        }
        // validation for constraint: choice(NIF, IDOtro)
        if ('' !== ($nIFChoiceErrorMessage = self::validateNIFForChoiceConstraintsFromSetNIF($nIF))) {
            throw new \InvalidArgumentException($nIFChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: length(9)
        if (!is_null($nIF) && mb_strlen($nIF) !== 9) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 9', mb_strlen($nIF)), __LINE__);
        }
        // validation for constraint: pattern((([a-z|A-Z]{1}\d{7}[a-z|A-Z]{1})|(\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\d{8})))
        if (!is_null($nIF) && !preg_match('/(([a-z|A-Z]{1}\\d{7}[a-z|A-Z]{1})|(\\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\\d{8}))/', $nIF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (([a-z|A-Z]{1}\d{7}[a-z|A-Z]{1})|(\d{8}[a-z|A-Z]{1})|([a-z|A-Z]{1}\d{8}))', var_export($nIF, true)), __LINE__);
        }
        if (is_null($nIF) || (is_array($nIF) && empty($nIF))) {
            unset($this->NIF);
        } else {
            $this->NIF = $nIF;
        }
        return $this;
    }
    /**
     * Get IDOtro value
     * @return \ClonixDev\AeatSii\StructType\IDOtroType|null
     */
    public function getIDOtro()
    {
        return isset($this->IDOtro) ? $this->IDOtro : null;
    }
    /**
     * This method is responsible for validating the value passed to the setIDOtro method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIDOtro method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateIDOtroForChoiceConstraintsFromSetIDOtro($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'NIF',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property IDOtro can\'t be set as the property %s is already set. Only one property must be set among these properties: IDOtro, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set IDOtro value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\IDOtroType $iDOtro
     * @return \ClonixDev\AeatSii\StructType\ContraparteConsultaType
     */
    public function setIDOtro(\ClonixDev\AeatSii\StructType\IDOtroType $iDOtro = null)
    {
        // validation for constraint: choice(NIF, IDOtro)
        if ('' !== ($iDOtroChoiceErrorMessage = self::validateIDOtroForChoiceConstraintsFromSetIDOtro($iDOtro))) {
            throw new \InvalidArgumentException($iDOtroChoiceErrorMessage, __LINE__);
        }
        if (is_null($iDOtro) || (is_array($iDOtro) && empty($iDOtro))) {
            unset($this->IDOtro);
        } else {
            $this->IDOtro = $iDOtro;
        }
        return $this;
    }
}
