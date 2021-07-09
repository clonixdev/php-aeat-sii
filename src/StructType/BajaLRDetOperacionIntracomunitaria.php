<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BajaLRDetOperacionIntracomunitaria StructType
 * @subpackage Structs
 */
class BajaLRDetOperacionIntracomunitaria extends SuministroInformacionBaja
{
    /**
     * The RegistroLRBajaDetOperacionIntracomunitaria
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType[]
     */
    public $RegistroLRBajaDetOperacionIntracomunitaria;
    /**
     * Constructor method for BajaLRDetOperacionIntracomunitaria
     * @uses BajaLRDetOperacionIntracomunitaria::setRegistroLRBajaDetOperacionIntracomunitaria()
     * @param \ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType[] $registroLRBajaDetOperacionIntracomunitaria
     */
    public function __construct(array $registroLRBajaDetOperacionIntracomunitaria = array())
    {
        $this
            ->setRegistroLRBajaDetOperacionIntracomunitaria($registroLRBajaDetOperacionIntracomunitaria);
    }
    /**
     * Get RegistroLRBajaDetOperacionIntracomunitaria value
     * @return \ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType[]|null
     */
    public function getRegistroLRBajaDetOperacionIntracomunitaria()
    {
        return $this->RegistroLRBajaDetOperacionIntracomunitaria;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRBajaDetOperacionIntracomunitaria method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRBajaDetOperacionIntracomunitaria method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRBajaDetOperacionIntracomunitariaForArrayConstraintsFromSetRegistroLRBajaDetOperacionIntracomunitaria(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bajaLRDetOperacionIntracomunitariaRegistroLRBajaDetOperacionIntracomunitariaItem) {
            // validation for constraint: itemType
            if (!$bajaLRDetOperacionIntracomunitariaRegistroLRBajaDetOperacionIntracomunitariaItem instanceof \ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType) {
                $invalidValues[] = is_object($bajaLRDetOperacionIntracomunitariaRegistroLRBajaDetOperacionIntracomunitariaItem) ? get_class($bajaLRDetOperacionIntracomunitariaRegistroLRBajaDetOperacionIntracomunitariaItem) : sprintf('%s(%s)', gettype($bajaLRDetOperacionIntracomunitariaRegistroLRBajaDetOperacionIntracomunitariaItem), var_export($bajaLRDetOperacionIntracomunitariaRegistroLRBajaDetOperacionIntracomunitariaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRBajaDetOperacionIntracomunitaria property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRBajaDetOperacionIntracomunitaria value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType[] $registroLRBajaDetOperacionIntracomunitaria
     * @return \ClonixDev\AeatSii\StructType\BajaLRDetOperacionIntracomunitaria
     */
    public function setRegistroLRBajaDetOperacionIntracomunitaria(array $registroLRBajaDetOperacionIntracomunitaria = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRBajaDetOperacionIntracomunitariaArrayErrorMessage = self::validateRegistroLRBajaDetOperacionIntracomunitariaForArrayConstraintsFromSetRegistroLRBajaDetOperacionIntracomunitaria($registroLRBajaDetOperacionIntracomunitaria))) {
            throw new \InvalidArgumentException($registroLRBajaDetOperacionIntracomunitariaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRBajaDetOperacionIntracomunitaria) && count($registroLRBajaDetOperacionIntracomunitaria) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRBajaDetOperacionIntracomunitaria)), __LINE__);
        }
        $this->RegistroLRBajaDetOperacionIntracomunitaria = $registroLRBajaDetOperacionIntracomunitaria;
        return $this;
    }
    /**
     * Add item to RegistroLRBajaDetOperacionIntracomunitaria value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType $item
     * @return \ClonixDev\AeatSii\StructType\BajaLRDetOperacionIntracomunitaria
     */
    public function addToRegistroLRBajaDetOperacionIntracomunitaria(\ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRBajaDetOperacionIntracomunitaria property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaOperacionIntracomunitariaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRBajaDetOperacionIntracomunitaria) && count($this->RegistroLRBajaDetOperacionIntracomunitaria) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRBajaDetOperacionIntracomunitaria)), __LINE__);
        }
        $this->RegistroLRBajaDetOperacionIntracomunitaria[] = $item;
        return $this;
    }
}
