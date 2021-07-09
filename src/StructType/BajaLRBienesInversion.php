<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BajaLRBienesInversion StructType
 * @subpackage Structs
 */
class BajaLRBienesInversion extends SuministroInformacionBaja
{
    /**
     * The RegistroLRBajaBienesInversion
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType[]
     */
    public $RegistroLRBajaBienesInversion;
    /**
     * Constructor method for BajaLRBienesInversion
     * @uses BajaLRBienesInversion::setRegistroLRBajaBienesInversion()
     * @param \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType[] $registroLRBajaBienesInversion
     */
    public function __construct(array $registroLRBajaBienesInversion = array())
    {
        $this
            ->setRegistroLRBajaBienesInversion($registroLRBajaBienesInversion);
    }
    /**
     * Get RegistroLRBajaBienesInversion value
     * @return \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType[]|null
     */
    public function getRegistroLRBajaBienesInversion()
    {
        return $this->RegistroLRBajaBienesInversion;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRBajaBienesInversion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRBajaBienesInversion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRBajaBienesInversionForArrayConstraintsFromSetRegistroLRBajaBienesInversion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bajaLRBienesInversionRegistroLRBajaBienesInversionItem) {
            // validation for constraint: itemType
            if (!$bajaLRBienesInversionRegistroLRBajaBienesInversionItem instanceof \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType) {
                $invalidValues[] = is_object($bajaLRBienesInversionRegistroLRBajaBienesInversionItem) ? get_class($bajaLRBienesInversionRegistroLRBajaBienesInversionItem) : sprintf('%s(%s)', gettype($bajaLRBienesInversionRegistroLRBajaBienesInversionItem), var_export($bajaLRBienesInversionRegistroLRBajaBienesInversionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRBajaBienesInversion property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRBajaBienesInversion value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType[] $registroLRBajaBienesInversion
     * @return \ClonixDev\AeatSii\StructType\BajaLRBienesInversion
     */
    public function setRegistroLRBajaBienesInversion(array $registroLRBajaBienesInversion = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRBajaBienesInversionArrayErrorMessage = self::validateRegistroLRBajaBienesInversionForArrayConstraintsFromSetRegistroLRBajaBienesInversion($registroLRBajaBienesInversion))) {
            throw new \InvalidArgumentException($registroLRBajaBienesInversionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRBajaBienesInversion) && count($registroLRBajaBienesInversion) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRBajaBienesInversion)), __LINE__);
        }
        $this->RegistroLRBajaBienesInversion = $registroLRBajaBienesInversion;
        return $this;
    }
    /**
     * Add item to RegistroLRBajaBienesInversion value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType $item
     * @return \ClonixDev\AeatSii\StructType\BajaLRBienesInversion
     */
    public function addToRegistroLRBajaBienesInversion(\ClonixDev\AeatSii\StructType\LRBajaBienesInversionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRBajaBienesInversion property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRBajaBienesInversion) && count($this->RegistroLRBajaBienesInversion) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRBajaBienesInversion)), __LINE__);
        }
        $this->RegistroLRBajaBienesInversion[] = $item;
        return $this;
    }
}
