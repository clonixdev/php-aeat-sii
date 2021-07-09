<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRAgenciasViajes StructType
 * @subpackage Structs
 */
class SuministroLRAgenciasViajes extends SuministroInformacion
{
    /**
     * The RegistroLRAgenciasViajes
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRAgenciasViajesType[]
     */
    public $RegistroLRAgenciasViajes;
    /**
     * Constructor method for SuministroLRAgenciasViajes
     * @uses SuministroLRAgenciasViajes::setRegistroLRAgenciasViajes()
     * @param \ClonixDev\AeatSii\StructType\LRAgenciasViajesType[] $registroLRAgenciasViajes
     */
    public function __construct(array $registroLRAgenciasViajes = array())
    {
        $this
            ->setRegistroLRAgenciasViajes($registroLRAgenciasViajes);
    }
    /**
     * Get RegistroLRAgenciasViajes value
     * @return \ClonixDev\AeatSii\StructType\LRAgenciasViajesType[]|null
     */
    public function getRegistroLRAgenciasViajes()
    {
        return $this->RegistroLRAgenciasViajes;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRAgenciasViajes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRAgenciasViajes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRAgenciasViajesForArrayConstraintsFromSetRegistroLRAgenciasViajes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRAgenciasViajesRegistroLRAgenciasViajesItem) {
            // validation for constraint: itemType
            if (!$suministroLRAgenciasViajesRegistroLRAgenciasViajesItem instanceof \ClonixDev\AeatSii\StructType\LRAgenciasViajesType) {
                $invalidValues[] = is_object($suministroLRAgenciasViajesRegistroLRAgenciasViajesItem) ? get_class($suministroLRAgenciasViajesRegistroLRAgenciasViajesItem) : sprintf('%s(%s)', gettype($suministroLRAgenciasViajesRegistroLRAgenciasViajesItem), var_export($suministroLRAgenciasViajesRegistroLRAgenciasViajesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRAgenciasViajes property can only contain items of type \ClonixDev\AeatSii\StructType\LRAgenciasViajesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRAgenciasViajes value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRAgenciasViajesType[] $registroLRAgenciasViajes
     * @return \ClonixDev\AeatSii\StructType\SuministroLRAgenciasViajes
     */
    public function setRegistroLRAgenciasViajes(array $registroLRAgenciasViajes = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRAgenciasViajesArrayErrorMessage = self::validateRegistroLRAgenciasViajesForArrayConstraintsFromSetRegistroLRAgenciasViajes($registroLRAgenciasViajes))) {
            throw new \InvalidArgumentException($registroLRAgenciasViajesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRAgenciasViajes) && count($registroLRAgenciasViajes) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRAgenciasViajes)), __LINE__);
        }
        $this->RegistroLRAgenciasViajes = $registroLRAgenciasViajes;
        return $this;
    }
    /**
     * Add item to RegistroLRAgenciasViajes value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRAgenciasViajesType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRAgenciasViajes
     */
    public function addToRegistroLRAgenciasViajes(\ClonixDev\AeatSii\StructType\LRAgenciasViajesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRAgenciasViajesType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRAgenciasViajes property can only contain items of type \ClonixDev\AeatSii\StructType\LRAgenciasViajesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRAgenciasViajes) && count($this->RegistroLRAgenciasViajes) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRAgenciasViajes)), __LINE__);
        }
        $this->RegistroLRAgenciasViajes[] = $item;
        return $this;
    }
}
