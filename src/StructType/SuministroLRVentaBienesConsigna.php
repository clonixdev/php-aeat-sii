<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRVentaBienesConsigna StructType
 * @subpackage Structs
 */
class SuministroLRVentaBienesConsigna extends SuministroInformacion
{
    /**
     * The RegistroLRDetOperacionIntracomunitariaVentasEnConsigna
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType[]
     */
    public $RegistroLRDetOperacionIntracomunitariaVentasEnConsigna;
    /**
     * Constructor method for SuministroLRVentaBienesConsigna
     * @uses SuministroLRVentaBienesConsigna::setRegistroLRDetOperacionIntracomunitariaVentasEnConsigna()
     * @param \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType[] $registroLRDetOperacionIntracomunitariaVentasEnConsigna
     */
    public function __construct(array $registroLRDetOperacionIntracomunitariaVentasEnConsigna = array())
    {
        $this
            ->setRegistroLRDetOperacionIntracomunitariaVentasEnConsigna($registroLRDetOperacionIntracomunitariaVentasEnConsigna);
    }
    /**
     * Get RegistroLRDetOperacionIntracomunitariaVentasEnConsigna value
     * @return \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType[]|null
     */
    public function getRegistroLRDetOperacionIntracomunitariaVentasEnConsigna()
    {
        return $this->RegistroLRDetOperacionIntracomunitariaVentasEnConsigna;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRDetOperacionIntracomunitariaVentasEnConsigna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRDetOperacionIntracomunitariaVentasEnConsigna method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRDetOperacionIntracomunitariaVentasEnConsignaForArrayConstraintsFromSetRegistroLRDetOperacionIntracomunitariaVentasEnConsigna(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRVentaBienesConsignaRegistroLRDetOperacionIntracomunitariaVentasEnConsignaItem) {
            // validation for constraint: itemType
            if (!$suministroLRVentaBienesConsignaRegistroLRDetOperacionIntracomunitariaVentasEnConsignaItem instanceof \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType) {
                $invalidValues[] = is_object($suministroLRVentaBienesConsignaRegistroLRDetOperacionIntracomunitariaVentasEnConsignaItem) ? get_class($suministroLRVentaBienesConsignaRegistroLRDetOperacionIntracomunitariaVentasEnConsignaItem) : sprintf('%s(%s)', gettype($suministroLRVentaBienesConsignaRegistroLRDetOperacionIntracomunitariaVentasEnConsignaItem), var_export($suministroLRVentaBienesConsignaRegistroLRDetOperacionIntracomunitariaVentasEnConsignaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRDetOperacionIntracomunitariaVentasEnConsigna property can only contain items of type \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRDetOperacionIntracomunitariaVentasEnConsigna value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType[] $registroLRDetOperacionIntracomunitariaVentasEnConsigna
     * @return \ClonixDev\AeatSii\StructType\SuministroLRVentaBienesConsigna
     */
    public function setRegistroLRDetOperacionIntracomunitariaVentasEnConsigna(array $registroLRDetOperacionIntracomunitariaVentasEnConsigna = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRDetOperacionIntracomunitariaVentasEnConsignaArrayErrorMessage = self::validateRegistroLRDetOperacionIntracomunitariaVentasEnConsignaForArrayConstraintsFromSetRegistroLRDetOperacionIntracomunitariaVentasEnConsigna($registroLRDetOperacionIntracomunitariaVentasEnConsigna))) {
            throw new \InvalidArgumentException($registroLRDetOperacionIntracomunitariaVentasEnConsignaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRDetOperacionIntracomunitariaVentasEnConsigna) && count($registroLRDetOperacionIntracomunitariaVentasEnConsigna) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRDetOperacionIntracomunitariaVentasEnConsigna)), __LINE__);
        }
        $this->RegistroLRDetOperacionIntracomunitariaVentasEnConsigna = $registroLRDetOperacionIntracomunitariaVentasEnConsigna;
        return $this;
    }
    /**
     * Add item to RegistroLRDetOperacionIntracomunitariaVentasEnConsigna value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRVentaBienesConsigna
     */
    public function addToRegistroLRDetOperacionIntracomunitariaVentasEnConsigna(\ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRDetOperacionIntracomunitariaVentasEnConsigna property can only contain items of type \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRDetOperacionIntracomunitariaVentasEnConsigna) && count($this->RegistroLRDetOperacionIntracomunitariaVentasEnConsigna) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRDetOperacionIntracomunitariaVentasEnConsigna)), __LINE__);
        }
        $this->RegistroLRDetOperacionIntracomunitariaVentasEnConsigna[] = $item;
        return $this;
    }
}
