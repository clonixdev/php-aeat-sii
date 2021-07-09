<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRBienesInversion StructType
 * @subpackage Structs
 */
class SuministroLRBienesInversion extends SuministroInformacion
{
    /**
     * The RegistroLRBienesInversion
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRBienesInversionType[]
     */
    public $RegistroLRBienesInversion;
    /**
     * Constructor method for SuministroLRBienesInversion
     * @uses SuministroLRBienesInversion::setRegistroLRBienesInversion()
     * @param \ClonixDev\AeatSii\StructType\LRBienesInversionType[] $registroLRBienesInversion
     */
    public function __construct(array $registroLRBienesInversion = array())
    {
        $this
            ->setRegistroLRBienesInversion($registroLRBienesInversion);
    }
    /**
     * Get RegistroLRBienesInversion value
     * @return \ClonixDev\AeatSii\StructType\LRBienesInversionType[]|null
     */
    public function getRegistroLRBienesInversion()
    {
        return $this->RegistroLRBienesInversion;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRBienesInversion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRBienesInversion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRBienesInversionForArrayConstraintsFromSetRegistroLRBienesInversion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRBienesInversionRegistroLRBienesInversionItem) {
            // validation for constraint: itemType
            if (!$suministroLRBienesInversionRegistroLRBienesInversionItem instanceof \ClonixDev\AeatSii\StructType\LRBienesInversionType) {
                $invalidValues[] = is_object($suministroLRBienesInversionRegistroLRBienesInversionItem) ? get_class($suministroLRBienesInversionRegistroLRBienesInversionItem) : sprintf('%s(%s)', gettype($suministroLRBienesInversionRegistroLRBienesInversionItem), var_export($suministroLRBienesInversionRegistroLRBienesInversionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRBienesInversion property can only contain items of type \ClonixDev\AeatSii\StructType\LRBienesInversionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRBienesInversion value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBienesInversionType[] $registroLRBienesInversion
     * @return \ClonixDev\AeatSii\StructType\SuministroLRBienesInversion
     */
    public function setRegistroLRBienesInversion(array $registroLRBienesInversion = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRBienesInversionArrayErrorMessage = self::validateRegistroLRBienesInversionForArrayConstraintsFromSetRegistroLRBienesInversion($registroLRBienesInversion))) {
            throw new \InvalidArgumentException($registroLRBienesInversionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRBienesInversion) && count($registroLRBienesInversion) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRBienesInversion)), __LINE__);
        }
        $this->RegistroLRBienesInversion = $registroLRBienesInversion;
        return $this;
    }
    /**
     * Add item to RegistroLRBienesInversion value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBienesInversionType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRBienesInversion
     */
    public function addToRegistroLRBienesInversion(\ClonixDev\AeatSii\StructType\LRBienesInversionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRBienesInversionType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRBienesInversion property can only contain items of type \ClonixDev\AeatSii\StructType\LRBienesInversionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRBienesInversion) && count($this->RegistroLRBienesInversion) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRBienesInversion)), __LINE__);
        }
        $this->RegistroLRBienesInversion[] = $item;
        return $this;
    }
}
