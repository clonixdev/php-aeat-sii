<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRFacturasRecibidas StructType
 * @subpackage Structs
 */
class SuministroLRFacturasRecibidas extends SuministroInformacion
{
    /**
     * The RegistroLRFacturasRecibidas
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType[]
     */
    public $RegistroLRFacturasRecibidas;
    /**
     * Constructor method for SuministroLRFacturasRecibidas
     * @uses SuministroLRFacturasRecibidas::setRegistroLRFacturasRecibidas()
     * @param \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType[] $registroLRFacturasRecibidas
     */
    public function __construct(array $registroLRFacturasRecibidas = array())
    {
        $this
            ->setRegistroLRFacturasRecibidas($registroLRFacturasRecibidas);
    }
    /**
     * Get RegistroLRFacturasRecibidas value
     * @return \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType[]|null
     */
    public function getRegistroLRFacturasRecibidas()
    {
        return $this->RegistroLRFacturasRecibidas;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRFacturasRecibidas method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRFacturasRecibidas method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRFacturasRecibidasForArrayConstraintsFromSetRegistroLRFacturasRecibidas(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRFacturasRecibidasRegistroLRFacturasRecibidasItem) {
            // validation for constraint: itemType
            if (!$suministroLRFacturasRecibidasRegistroLRFacturasRecibidasItem instanceof \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType) {
                $invalidValues[] = is_object($suministroLRFacturasRecibidasRegistroLRFacturasRecibidasItem) ? get_class($suministroLRFacturasRecibidasRegistroLRFacturasRecibidasItem) : sprintf('%s(%s)', gettype($suministroLRFacturasRecibidasRegistroLRFacturasRecibidasItem), var_export($suministroLRFacturasRecibidasRegistroLRFacturasRecibidasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRFacturasRecibidas property can only contain items of type \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRFacturasRecibidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType[] $registroLRFacturasRecibidas
     * @return \ClonixDev\AeatSii\StructType\SuministroLRFacturasRecibidas
     */
    public function setRegistroLRFacturasRecibidas(array $registroLRFacturasRecibidas = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRFacturasRecibidasArrayErrorMessage = self::validateRegistroLRFacturasRecibidasForArrayConstraintsFromSetRegistroLRFacturasRecibidas($registroLRFacturasRecibidas))) {
            throw new \InvalidArgumentException($registroLRFacturasRecibidasArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRFacturasRecibidas) && count($registroLRFacturasRecibidas) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRFacturasRecibidas)), __LINE__);
        }
        $this->RegistroLRFacturasRecibidas = $registroLRFacturasRecibidas;
        return $this;
    }
    /**
     * Add item to RegistroLRFacturasRecibidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRFacturasRecibidas
     */
    public function addToRegistroLRFacturasRecibidas(\ClonixDev\AeatSii\StructType\LRFacturasRecibidasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRFacturasRecibidas property can only contain items of type \ClonixDev\AeatSii\StructType\LRFacturasRecibidasType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRFacturasRecibidas) && count($this->RegistroLRFacturasRecibidas) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRFacturasRecibidas)), __LINE__);
        }
        $this->RegistroLRFacturasRecibidas[] = $item;
        return $this;
    }
}
