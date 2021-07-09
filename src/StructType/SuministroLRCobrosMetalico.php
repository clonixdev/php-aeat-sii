<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRCobrosMetalico StructType
 * @subpackage Structs
 */
class SuministroLRCobrosMetalico extends SuministroInformacion
{
    /**
     * The RegistroLRCobrosMetalico
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRCobrosMetalicoType[]
     */
    public $RegistroLRCobrosMetalico;
    /**
     * Constructor method for SuministroLRCobrosMetalico
     * @uses SuministroLRCobrosMetalico::setRegistroLRCobrosMetalico()
     * @param \ClonixDev\AeatSii\StructType\LRCobrosMetalicoType[] $registroLRCobrosMetalico
     */
    public function __construct(array $registroLRCobrosMetalico = array())
    {
        $this
            ->setRegistroLRCobrosMetalico($registroLRCobrosMetalico);
    }
    /**
     * Get RegistroLRCobrosMetalico value
     * @return \ClonixDev\AeatSii\StructType\LRCobrosMetalicoType[]|null
     */
    public function getRegistroLRCobrosMetalico()
    {
        return $this->RegistroLRCobrosMetalico;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRCobrosMetalico method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRCobrosMetalico method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRCobrosMetalicoForArrayConstraintsFromSetRegistroLRCobrosMetalico(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRCobrosMetalicoRegistroLRCobrosMetalicoItem) {
            // validation for constraint: itemType
            if (!$suministroLRCobrosMetalicoRegistroLRCobrosMetalicoItem instanceof \ClonixDev\AeatSii\StructType\LRCobrosMetalicoType) {
                $invalidValues[] = is_object($suministroLRCobrosMetalicoRegistroLRCobrosMetalicoItem) ? get_class($suministroLRCobrosMetalicoRegistroLRCobrosMetalicoItem) : sprintf('%s(%s)', gettype($suministroLRCobrosMetalicoRegistroLRCobrosMetalicoItem), var_export($suministroLRCobrosMetalicoRegistroLRCobrosMetalicoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRCobrosMetalico property can only contain items of type \ClonixDev\AeatSii\StructType\LRCobrosMetalicoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRCobrosMetalico value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRCobrosMetalicoType[] $registroLRCobrosMetalico
     * @return \ClonixDev\AeatSii\StructType\SuministroLRCobrosMetalico
     */
    public function setRegistroLRCobrosMetalico(array $registroLRCobrosMetalico = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRCobrosMetalicoArrayErrorMessage = self::validateRegistroLRCobrosMetalicoForArrayConstraintsFromSetRegistroLRCobrosMetalico($registroLRCobrosMetalico))) {
            throw new \InvalidArgumentException($registroLRCobrosMetalicoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRCobrosMetalico) && count($registroLRCobrosMetalico) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRCobrosMetalico)), __LINE__);
        }
        $this->RegistroLRCobrosMetalico = $registroLRCobrosMetalico;
        return $this;
    }
    /**
     * Add item to RegistroLRCobrosMetalico value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRCobrosMetalicoType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRCobrosMetalico
     */
    public function addToRegistroLRCobrosMetalico(\ClonixDev\AeatSii\StructType\LRCobrosMetalicoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRCobrosMetalicoType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRCobrosMetalico property can only contain items of type \ClonixDev\AeatSii\StructType\LRCobrosMetalicoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRCobrosMetalico) && count($this->RegistroLRCobrosMetalico) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRCobrosMetalico)), __LINE__);
        }
        $this->RegistroLRCobrosMetalico[] = $item;
        return $this;
    }
}
