<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BajaLRCobrosMetalico StructType
 * @subpackage Structs
 */
class BajaLRCobrosMetalico extends SuministroInformacionBaja
{
    /**
     * The RegistroLRBajaCobrosMetalico
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType[]
     */
    public $RegistroLRBajaCobrosMetalico;
    /**
     * Constructor method for BajaLRCobrosMetalico
     * @uses BajaLRCobrosMetalico::setRegistroLRBajaCobrosMetalico()
     * @param \ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType[] $registroLRBajaCobrosMetalico
     */
    public function __construct(array $registroLRBajaCobrosMetalico = array())
    {
        $this
            ->setRegistroLRBajaCobrosMetalico($registroLRBajaCobrosMetalico);
    }
    /**
     * Get RegistroLRBajaCobrosMetalico value
     * @return \ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType[]|null
     */
    public function getRegistroLRBajaCobrosMetalico()
    {
        return $this->RegistroLRBajaCobrosMetalico;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRBajaCobrosMetalico method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRBajaCobrosMetalico method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRBajaCobrosMetalicoForArrayConstraintsFromSetRegistroLRBajaCobrosMetalico(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bajaLRCobrosMetalicoRegistroLRBajaCobrosMetalicoItem) {
            // validation for constraint: itemType
            if (!$bajaLRCobrosMetalicoRegistroLRBajaCobrosMetalicoItem instanceof \ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType) {
                $invalidValues[] = is_object($bajaLRCobrosMetalicoRegistroLRBajaCobrosMetalicoItem) ? get_class($bajaLRCobrosMetalicoRegistroLRBajaCobrosMetalicoItem) : sprintf('%s(%s)', gettype($bajaLRCobrosMetalicoRegistroLRBajaCobrosMetalicoItem), var_export($bajaLRCobrosMetalicoRegistroLRBajaCobrosMetalicoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRBajaCobrosMetalico property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRBajaCobrosMetalico value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType[] $registroLRBajaCobrosMetalico
     * @return \ClonixDev\AeatSii\StructType\BajaLRCobrosMetalico
     */
    public function setRegistroLRBajaCobrosMetalico(array $registroLRBajaCobrosMetalico = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRBajaCobrosMetalicoArrayErrorMessage = self::validateRegistroLRBajaCobrosMetalicoForArrayConstraintsFromSetRegistroLRBajaCobrosMetalico($registroLRBajaCobrosMetalico))) {
            throw new \InvalidArgumentException($registroLRBajaCobrosMetalicoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRBajaCobrosMetalico) && count($registroLRBajaCobrosMetalico) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRBajaCobrosMetalico)), __LINE__);
        }
        $this->RegistroLRBajaCobrosMetalico = $registroLRBajaCobrosMetalico;
        return $this;
    }
    /**
     * Add item to RegistroLRBajaCobrosMetalico value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType $item
     * @return \ClonixDev\AeatSii\StructType\BajaLRCobrosMetalico
     */
    public function addToRegistroLRBajaCobrosMetalico(\ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRBajaCobrosMetalico property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaCobrosMetalicoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRBajaCobrosMetalico) && count($this->RegistroLRBajaCobrosMetalico) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRBajaCobrosMetalico)), __LINE__);
        }
        $this->RegistroLRBajaCobrosMetalico[] = $item;
        return $this;
    }
}
