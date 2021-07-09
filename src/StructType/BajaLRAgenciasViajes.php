<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BajaLRAgenciasViajes StructType
 * @subpackage Structs
 */
class BajaLRAgenciasViajes extends SuministroInformacionBaja
{
    /**
     * The RegistroLRBajaAgenciasViajes
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType[]
     */
    public $RegistroLRBajaAgenciasViajes;
    /**
     * Constructor method for BajaLRAgenciasViajes
     * @uses BajaLRAgenciasViajes::setRegistroLRBajaAgenciasViajes()
     * @param \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType[] $registroLRBajaAgenciasViajes
     */
    public function __construct(array $registroLRBajaAgenciasViajes = array())
    {
        $this
            ->setRegistroLRBajaAgenciasViajes($registroLRBajaAgenciasViajes);
    }
    /**
     * Get RegistroLRBajaAgenciasViajes value
     * @return \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType[]|null
     */
    public function getRegistroLRBajaAgenciasViajes()
    {
        return $this->RegistroLRBajaAgenciasViajes;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRBajaAgenciasViajes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRBajaAgenciasViajes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRBajaAgenciasViajesForArrayConstraintsFromSetRegistroLRBajaAgenciasViajes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bajaLRAgenciasViajesRegistroLRBajaAgenciasViajesItem) {
            // validation for constraint: itemType
            if (!$bajaLRAgenciasViajesRegistroLRBajaAgenciasViajesItem instanceof \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType) {
                $invalidValues[] = is_object($bajaLRAgenciasViajesRegistroLRBajaAgenciasViajesItem) ? get_class($bajaLRAgenciasViajesRegistroLRBajaAgenciasViajesItem) : sprintf('%s(%s)', gettype($bajaLRAgenciasViajesRegistroLRBajaAgenciasViajesItem), var_export($bajaLRAgenciasViajesRegistroLRBajaAgenciasViajesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRBajaAgenciasViajes property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRBajaAgenciasViajes value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType[] $registroLRBajaAgenciasViajes
     * @return \ClonixDev\AeatSii\StructType\BajaLRAgenciasViajes
     */
    public function setRegistroLRBajaAgenciasViajes(array $registroLRBajaAgenciasViajes = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRBajaAgenciasViajesArrayErrorMessage = self::validateRegistroLRBajaAgenciasViajesForArrayConstraintsFromSetRegistroLRBajaAgenciasViajes($registroLRBajaAgenciasViajes))) {
            throw new \InvalidArgumentException($registroLRBajaAgenciasViajesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRBajaAgenciasViajes) && count($registroLRBajaAgenciasViajes) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRBajaAgenciasViajes)), __LINE__);
        }
        $this->RegistroLRBajaAgenciasViajes = $registroLRBajaAgenciasViajes;
        return $this;
    }
    /**
     * Add item to RegistroLRBajaAgenciasViajes value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType $item
     * @return \ClonixDev\AeatSii\StructType\BajaLRAgenciasViajes
     */
    public function addToRegistroLRBajaAgenciasViajes(\ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRBajaAgenciasViajes property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRBajaAgenciasViajes) && count($this->RegistroLRBajaAgenciasViajes) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRBajaAgenciasViajes)), __LINE__);
        }
        $this->RegistroLRBajaAgenciasViajes[] = $item;
        return $this;
    }
}
