<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BajaLRVentaBienesConsigna StructType
 * @subpackage Structs
 */
class BajaLRVentaBienesConsigna extends SuministroInformacionBaja
{
    /**
     * The RegistroLRBajaVentaBienesConsigna
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType[]
     */
    public $RegistroLRBajaVentaBienesConsigna;
    /**
     * Constructor method for BajaLRVentaBienesConsigna
     * @uses BajaLRVentaBienesConsigna::setRegistroLRBajaVentaBienesConsigna()
     * @param \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType[] $registroLRBajaVentaBienesConsigna
     */
    public function __construct(array $registroLRBajaVentaBienesConsigna = array())
    {
        $this
            ->setRegistroLRBajaVentaBienesConsigna($registroLRBajaVentaBienesConsigna);
    }
    /**
     * Get RegistroLRBajaVentaBienesConsigna value
     * @return \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType[]|null
     */
    public function getRegistroLRBajaVentaBienesConsigna()
    {
        return $this->RegistroLRBajaVentaBienesConsigna;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRBajaVentaBienesConsigna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRBajaVentaBienesConsigna method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRBajaVentaBienesConsignaForArrayConstraintsFromSetRegistroLRBajaVentaBienesConsigna(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bajaLRVentaBienesConsignaRegistroLRBajaVentaBienesConsignaItem) {
            // validation for constraint: itemType
            if (!$bajaLRVentaBienesConsignaRegistroLRBajaVentaBienesConsignaItem instanceof \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType) {
                $invalidValues[] = is_object($bajaLRVentaBienesConsignaRegistroLRBajaVentaBienesConsignaItem) ? get_class($bajaLRVentaBienesConsignaRegistroLRBajaVentaBienesConsignaItem) : sprintf('%s(%s)', gettype($bajaLRVentaBienesConsignaRegistroLRBajaVentaBienesConsignaItem), var_export($bajaLRVentaBienesConsignaRegistroLRBajaVentaBienesConsignaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRBajaVentaBienesConsigna property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRBajaVentaBienesConsigna value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType[] $registroLRBajaVentaBienesConsigna
     * @return \ClonixDev\AeatSii\StructType\BajaLRVentaBienesConsigna
     */
    public function setRegistroLRBajaVentaBienesConsigna(array $registroLRBajaVentaBienesConsigna = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRBajaVentaBienesConsignaArrayErrorMessage = self::validateRegistroLRBajaVentaBienesConsignaForArrayConstraintsFromSetRegistroLRBajaVentaBienesConsigna($registroLRBajaVentaBienesConsigna))) {
            throw new \InvalidArgumentException($registroLRBajaVentaBienesConsignaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRBajaVentaBienesConsigna) && count($registroLRBajaVentaBienesConsigna) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRBajaVentaBienesConsigna)), __LINE__);
        }
        $this->RegistroLRBajaVentaBienesConsigna = $registroLRBajaVentaBienesConsigna;
        return $this;
    }
    /**
     * Add item to RegistroLRBajaVentaBienesConsigna value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType $item
     * @return \ClonixDev\AeatSii\StructType\BajaLRVentaBienesConsigna
     */
    public function addToRegistroLRBajaVentaBienesConsigna(\ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRBajaVentaBienesConsigna property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRBajaVentaBienesConsigna) && count($this->RegistroLRBajaVentaBienesConsigna) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRBajaVentaBienesConsigna)), __LINE__);
        }
        $this->RegistroLRBajaVentaBienesConsigna[] = $item;
        return $this;
    }
}
