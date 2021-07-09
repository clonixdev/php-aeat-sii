<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLROperacionesSeguros StructType
 * @subpackage Structs
 */
class SuministroLROperacionesSeguros extends SuministroInformacion
{
    /**
     * The RegistroLROperacionesSeguros
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LROperacionesSegurosType[]
     */
    public $RegistroLROperacionesSeguros;
    /**
     * Constructor method for SuministroLROperacionesSeguros
     * @uses SuministroLROperacionesSeguros::setRegistroLROperacionesSeguros()
     * @param \ClonixDev\AeatSii\StructType\LROperacionesSegurosType[] $registroLROperacionesSeguros
     */
    public function __construct(array $registroLROperacionesSeguros = array())
    {
        $this
            ->setRegistroLROperacionesSeguros($registroLROperacionesSeguros);
    }
    /**
     * Get RegistroLROperacionesSeguros value
     * @return \ClonixDev\AeatSii\StructType\LROperacionesSegurosType[]|null
     */
    public function getRegistroLROperacionesSeguros()
    {
        return $this->RegistroLROperacionesSeguros;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLROperacionesSeguros method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLROperacionesSeguros method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLROperacionesSegurosForArrayConstraintsFromSetRegistroLROperacionesSeguros(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLROperacionesSegurosRegistroLROperacionesSegurosItem) {
            // validation for constraint: itemType
            if (!$suministroLROperacionesSegurosRegistroLROperacionesSegurosItem instanceof \ClonixDev\AeatSii\StructType\LROperacionesSegurosType) {
                $invalidValues[] = is_object($suministroLROperacionesSegurosRegistroLROperacionesSegurosItem) ? get_class($suministroLROperacionesSegurosRegistroLROperacionesSegurosItem) : sprintf('%s(%s)', gettype($suministroLROperacionesSegurosRegistroLROperacionesSegurosItem), var_export($suministroLROperacionesSegurosRegistroLROperacionesSegurosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLROperacionesSeguros property can only contain items of type \ClonixDev\AeatSii\StructType\LROperacionesSegurosType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLROperacionesSeguros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LROperacionesSegurosType[] $registroLROperacionesSeguros
     * @return \ClonixDev\AeatSii\StructType\SuministroLROperacionesSeguros
     */
    public function setRegistroLROperacionesSeguros(array $registroLROperacionesSeguros = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLROperacionesSegurosArrayErrorMessage = self::validateRegistroLROperacionesSegurosForArrayConstraintsFromSetRegistroLROperacionesSeguros($registroLROperacionesSeguros))) {
            throw new \InvalidArgumentException($registroLROperacionesSegurosArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLROperacionesSeguros) && count($registroLROperacionesSeguros) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLROperacionesSeguros)), __LINE__);
        }
        $this->RegistroLROperacionesSeguros = $registroLROperacionesSeguros;
        return $this;
    }
    /**
     * Add item to RegistroLROperacionesSeguros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LROperacionesSegurosType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLROperacionesSeguros
     */
    public function addToRegistroLROperacionesSeguros(\ClonixDev\AeatSii\StructType\LROperacionesSegurosType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LROperacionesSegurosType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLROperacionesSeguros property can only contain items of type \ClonixDev\AeatSii\StructType\LROperacionesSegurosType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLROperacionesSeguros) && count($this->RegistroLROperacionesSeguros) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLROperacionesSeguros)), __LINE__);
        }
        $this->RegistroLROperacionesSeguros[] = $item;
        return $this;
    }
}
