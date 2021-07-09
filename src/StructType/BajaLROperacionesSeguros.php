<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BajaLROperacionesSeguros StructType
 * @subpackage Structs
 */
class BajaLROperacionesSeguros extends SuministroInformacionBaja
{
    /**
     * The RegistroLRBajaOperacionesSeguros
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType[]
     */
    public $RegistroLRBajaOperacionesSeguros;
    /**
     * Constructor method for BajaLROperacionesSeguros
     * @uses BajaLROperacionesSeguros::setRegistroLRBajaOperacionesSeguros()
     * @param \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType[] $registroLRBajaOperacionesSeguros
     */
    public function __construct(array $registroLRBajaOperacionesSeguros = array())
    {
        $this
            ->setRegistroLRBajaOperacionesSeguros($registroLRBajaOperacionesSeguros);
    }
    /**
     * Get RegistroLRBajaOperacionesSeguros value
     * @return \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType[]|null
     */
    public function getRegistroLRBajaOperacionesSeguros()
    {
        return $this->RegistroLRBajaOperacionesSeguros;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRBajaOperacionesSeguros method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRBajaOperacionesSeguros method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRBajaOperacionesSegurosForArrayConstraintsFromSetRegistroLRBajaOperacionesSeguros(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bajaLROperacionesSegurosRegistroLRBajaOperacionesSegurosItem) {
            // validation for constraint: itemType
            if (!$bajaLROperacionesSegurosRegistroLRBajaOperacionesSegurosItem instanceof \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType) {
                $invalidValues[] = is_object($bajaLROperacionesSegurosRegistroLRBajaOperacionesSegurosItem) ? get_class($bajaLROperacionesSegurosRegistroLRBajaOperacionesSegurosItem) : sprintf('%s(%s)', gettype($bajaLROperacionesSegurosRegistroLRBajaOperacionesSegurosItem), var_export($bajaLROperacionesSegurosRegistroLRBajaOperacionesSegurosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRBajaOperacionesSeguros property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRBajaOperacionesSeguros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType[] $registroLRBajaOperacionesSeguros
     * @return \ClonixDev\AeatSii\StructType\BajaLROperacionesSeguros
     */
    public function setRegistroLRBajaOperacionesSeguros(array $registroLRBajaOperacionesSeguros = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRBajaOperacionesSegurosArrayErrorMessage = self::validateRegistroLRBajaOperacionesSegurosForArrayConstraintsFromSetRegistroLRBajaOperacionesSeguros($registroLRBajaOperacionesSeguros))) {
            throw new \InvalidArgumentException($registroLRBajaOperacionesSegurosArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRBajaOperacionesSeguros) && count($registroLRBajaOperacionesSeguros) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRBajaOperacionesSeguros)), __LINE__);
        }
        $this->RegistroLRBajaOperacionesSeguros = $registroLRBajaOperacionesSeguros;
        return $this;
    }
    /**
     * Add item to RegistroLRBajaOperacionesSeguros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType $item
     * @return \ClonixDev\AeatSii\StructType\BajaLROperacionesSeguros
     */
    public function addToRegistroLRBajaOperacionesSeguros(\ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRBajaOperacionesSeguros property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRBajaOperacionesSeguros) && count($this->RegistroLRBajaOperacionesSeguros) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRBajaOperacionesSeguros)), __LINE__);
        }
        $this->RegistroLRBajaOperacionesSeguros[] = $item;
        return $this;
    }
}
