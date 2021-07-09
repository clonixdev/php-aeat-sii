<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRInmueblesAdicionales StructType
 * Meta information extracted from the WSDL
 * - documentation: Suministro de información de Inmuebles adicionales
 * @subpackage Structs
 */
class SuministroLRInmueblesAdicionales extends SuministroInformacionInmuebles
{
    /**
     * The RegistroLRInmueblesAdicionales
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRInmueblesType[]
     */
    public $RegistroLRInmueblesAdicionales;
    /**
     * Constructor method for SuministroLRInmueblesAdicionales
     * @uses SuministroLRInmueblesAdicionales::setRegistroLRInmueblesAdicionales()
     * @param \ClonixDev\AeatSii\StructType\LRInmueblesType[] $registroLRInmueblesAdicionales
     */
    public function __construct(array $registroLRInmueblesAdicionales = array())
    {
        $this
            ->setRegistroLRInmueblesAdicionales($registroLRInmueblesAdicionales);
    }
    /**
     * Get RegistroLRInmueblesAdicionales value
     * @return \ClonixDev\AeatSii\StructType\LRInmueblesType[]|null
     */
    public function getRegistroLRInmueblesAdicionales()
    {
        return $this->RegistroLRInmueblesAdicionales;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRInmueblesAdicionales method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRInmueblesAdicionales method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRInmueblesAdicionalesForArrayConstraintsFromSetRegistroLRInmueblesAdicionales(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRInmueblesAdicionalesRegistroLRInmueblesAdicionalesItem) {
            // validation for constraint: itemType
            if (!$suministroLRInmueblesAdicionalesRegistroLRInmueblesAdicionalesItem instanceof \ClonixDev\AeatSii\StructType\LRInmueblesType) {
                $invalidValues[] = is_object($suministroLRInmueblesAdicionalesRegistroLRInmueblesAdicionalesItem) ? get_class($suministroLRInmueblesAdicionalesRegistroLRInmueblesAdicionalesItem) : sprintf('%s(%s)', gettype($suministroLRInmueblesAdicionalesRegistroLRInmueblesAdicionalesItem), var_export($suministroLRInmueblesAdicionalesRegistroLRInmueblesAdicionalesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRInmueblesAdicionales property can only contain items of type \ClonixDev\AeatSii\StructType\LRInmueblesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRInmueblesAdicionales value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRInmueblesType[] $registroLRInmueblesAdicionales
     * @return \ClonixDev\AeatSii\StructType\SuministroLRInmueblesAdicionales
     */
    public function setRegistroLRInmueblesAdicionales(array $registroLRInmueblesAdicionales = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRInmueblesAdicionalesArrayErrorMessage = self::validateRegistroLRInmueblesAdicionalesForArrayConstraintsFromSetRegistroLRInmueblesAdicionales($registroLRInmueblesAdicionales))) {
            throw new \InvalidArgumentException($registroLRInmueblesAdicionalesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRInmueblesAdicionales) && count($registroLRInmueblesAdicionales) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRInmueblesAdicionales)), __LINE__);
        }
        $this->RegistroLRInmueblesAdicionales = $registroLRInmueblesAdicionales;
        return $this;
    }
    /**
     * Add item to RegistroLRInmueblesAdicionales value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRInmueblesType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRInmueblesAdicionales
     */
    public function addToRegistroLRInmueblesAdicionales(\ClonixDev\AeatSii\StructType\LRInmueblesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRInmueblesType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRInmueblesAdicionales property can only contain items of type \ClonixDev\AeatSii\StructType\LRInmueblesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRInmueblesAdicionales) && count($this->RegistroLRInmueblesAdicionales) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRInmueblesAdicionales)), __LINE__);
        }
        $this->RegistroLRInmueblesAdicionales[] = $item;
        return $this;
    }
}
