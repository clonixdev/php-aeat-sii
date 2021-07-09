<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRDetOperacionIntracomunitaria StructType
 * @subpackage Structs
 */
class SuministroLRDetOperacionIntracomunitaria extends SuministroInformacion
{
    /**
     * The RegistroLRDetOperacionIntracomunitaria
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType[]
     */
    public $RegistroLRDetOperacionIntracomunitaria;
    /**
     * Constructor method for SuministroLRDetOperacionIntracomunitaria
     * @uses SuministroLRDetOperacionIntracomunitaria::setRegistroLRDetOperacionIntracomunitaria()
     * @param \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType[] $registroLRDetOperacionIntracomunitaria
     */
    public function __construct(array $registroLRDetOperacionIntracomunitaria = array())
    {
        $this
            ->setRegistroLRDetOperacionIntracomunitaria($registroLRDetOperacionIntracomunitaria);
    }
    /**
     * Get RegistroLRDetOperacionIntracomunitaria value
     * @return \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType[]|null
     */
    public function getRegistroLRDetOperacionIntracomunitaria()
    {
        return $this->RegistroLRDetOperacionIntracomunitaria;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRDetOperacionIntracomunitaria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRDetOperacionIntracomunitaria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRDetOperacionIntracomunitariaForArrayConstraintsFromSetRegistroLRDetOperacionIntracomunitaria(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRDetOperacionIntracomunitariaRegistroLRDetOperacionIntracomunitariaItem) {
            // validation for constraint: itemType
            if (!$suministroLRDetOperacionIntracomunitariaRegistroLRDetOperacionIntracomunitariaItem instanceof \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType) {
                $invalidValues[] = is_object($suministroLRDetOperacionIntracomunitariaRegistroLRDetOperacionIntracomunitariaItem) ? get_class($suministroLRDetOperacionIntracomunitariaRegistroLRDetOperacionIntracomunitariaItem) : sprintf('%s(%s)', gettype($suministroLRDetOperacionIntracomunitariaRegistroLRDetOperacionIntracomunitariaItem), var_export($suministroLRDetOperacionIntracomunitariaRegistroLRDetOperacionIntracomunitariaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRDetOperacionIntracomunitaria property can only contain items of type \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRDetOperacionIntracomunitaria value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType[] $registroLRDetOperacionIntracomunitaria
     * @return \ClonixDev\AeatSii\StructType\SuministroLRDetOperacionIntracomunitaria
     */
    public function setRegistroLRDetOperacionIntracomunitaria(array $registroLRDetOperacionIntracomunitaria = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRDetOperacionIntracomunitariaArrayErrorMessage = self::validateRegistroLRDetOperacionIntracomunitariaForArrayConstraintsFromSetRegistroLRDetOperacionIntracomunitaria($registroLRDetOperacionIntracomunitaria))) {
            throw new \InvalidArgumentException($registroLRDetOperacionIntracomunitariaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRDetOperacionIntracomunitaria) && count($registroLRDetOperacionIntracomunitaria) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRDetOperacionIntracomunitaria)), __LINE__);
        }
        $this->RegistroLRDetOperacionIntracomunitaria = $registroLRDetOperacionIntracomunitaria;
        return $this;
    }
    /**
     * Add item to RegistroLRDetOperacionIntracomunitaria value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRDetOperacionIntracomunitaria
     */
    public function addToRegistroLRDetOperacionIntracomunitaria(\ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRDetOperacionIntracomunitaria property can only contain items of type \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRDetOperacionIntracomunitaria) && count($this->RegistroLRDetOperacionIntracomunitaria) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRDetOperacionIntracomunitaria)), __LINE__);
        }
        $this->RegistroLRDetOperacionIntracomunitaria[] = $item;
        return $this;
    }
}
