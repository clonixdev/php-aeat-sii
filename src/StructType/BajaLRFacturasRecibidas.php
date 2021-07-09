<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BajaLRFacturasRecibidas StructType
 * @subpackage Structs
 */
class BajaLRFacturasRecibidas extends SuministroInformacionBaja
{
    /**
     * The RegistroLRBajaRecibidas
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRBajaRecibidasType[]
     */
    public $RegistroLRBajaRecibidas;
    /**
     * Constructor method for BajaLRFacturasRecibidas
     * @uses BajaLRFacturasRecibidas::setRegistroLRBajaRecibidas()
     * @param \ClonixDev\AeatSii\StructType\LRBajaRecibidasType[] $registroLRBajaRecibidas
     */
    public function __construct(array $registroLRBajaRecibidas = array())
    {
        $this
            ->setRegistroLRBajaRecibidas($registroLRBajaRecibidas);
    }
    /**
     * Get RegistroLRBajaRecibidas value
     * @return \ClonixDev\AeatSii\StructType\LRBajaRecibidasType[]|null
     */
    public function getRegistroLRBajaRecibidas()
    {
        return $this->RegistroLRBajaRecibidas;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRBajaRecibidas method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRBajaRecibidas method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRBajaRecibidasForArrayConstraintsFromSetRegistroLRBajaRecibidas(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bajaLRFacturasRecibidasRegistroLRBajaRecibidasItem) {
            // validation for constraint: itemType
            if (!$bajaLRFacturasRecibidasRegistroLRBajaRecibidasItem instanceof \ClonixDev\AeatSii\StructType\LRBajaRecibidasType) {
                $invalidValues[] = is_object($bajaLRFacturasRecibidasRegistroLRBajaRecibidasItem) ? get_class($bajaLRFacturasRecibidasRegistroLRBajaRecibidasItem) : sprintf('%s(%s)', gettype($bajaLRFacturasRecibidasRegistroLRBajaRecibidasItem), var_export($bajaLRFacturasRecibidasRegistroLRBajaRecibidasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRBajaRecibidas property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaRecibidasType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRBajaRecibidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaRecibidasType[] $registroLRBajaRecibidas
     * @return \ClonixDev\AeatSii\StructType\BajaLRFacturasRecibidas
     */
    public function setRegistroLRBajaRecibidas(array $registroLRBajaRecibidas = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRBajaRecibidasArrayErrorMessage = self::validateRegistroLRBajaRecibidasForArrayConstraintsFromSetRegistroLRBajaRecibidas($registroLRBajaRecibidas))) {
            throw new \InvalidArgumentException($registroLRBajaRecibidasArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRBajaRecibidas) && count($registroLRBajaRecibidas) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRBajaRecibidas)), __LINE__);
        }
        $this->RegistroLRBajaRecibidas = $registroLRBajaRecibidas;
        return $this;
    }
    /**
     * Add item to RegistroLRBajaRecibidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaRecibidasType $item
     * @return \ClonixDev\AeatSii\StructType\BajaLRFacturasRecibidas
     */
    public function addToRegistroLRBajaRecibidas(\ClonixDev\AeatSii\StructType\LRBajaRecibidasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRBajaRecibidasType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRBajaRecibidas property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaRecibidasType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRBajaRecibidas) && count($this->RegistroLRBajaRecibidas) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRBajaRecibidas)), __LINE__);
        }
        $this->RegistroLRBajaRecibidas[] = $item;
        return $this;
    }
}
