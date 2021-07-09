<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DesgloseIVA StructType
 * Meta information extracted from the WSDL
 * - documentation: Desglose por tipos de iva
 * @subpackage Structs
 */
class DesgloseIVA extends AbstractStructBase
{
    /**
     * The DetalleIVA
     * Meta information extracted from the WSDL
     * - maxOccurs: 6
     * @var \ClonixDev\AeatSii\StructType\DetalleIVARecibidaType[]
     */
    public $DetalleIVA;
    /**
     * Constructor method for DesgloseIVA
     * @uses DesgloseIVA::setDetalleIVA()
     * @param \ClonixDev\AeatSii\StructType\DetalleIVARecibidaType[] $detalleIVA
     */
    public function __construct(array $detalleIVA = array())
    {
        $this
            ->setDetalleIVA($detalleIVA);
    }
    /**
     * Get DetalleIVA value
     * @return \ClonixDev\AeatSii\StructType\DetalleIVARecibidaType[]|null
     */
    public function getDetalleIVA()
    {
        return $this->DetalleIVA;
    }
    /**
     * This method is responsible for validating the values passed to the setDetalleIVA method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetalleIVA method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetalleIVAForArrayConstraintsFromSetDetalleIVA(array $values = array())
    {
        $message = '';
        $invalidValues = [];

        unset($invalidValues);
        return $message;
    }
    /**
     * Set DetalleIVA value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DetalleIVARecibidaType[] $detalleIVA
     * @return \ClonixDev\AeatSii\StructType\DesgloseIVA
     */
    public function setDetalleIVA(array $detalleIVA = array())
    {
        // validation for constraint: array
        if ('' !== ($detalleIVAArrayErrorMessage = self::validateDetalleIVAForArrayConstraintsFromSetDetalleIVA($detalleIVA))) {
            throw new \InvalidArgumentException($detalleIVAArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($detalleIVA) && count($detalleIVA) > 6) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 6', count($detalleIVA)), __LINE__);
        }
        $this->DetalleIVA = $detalleIVA;
        return $this;
    }
    /**
     * Add item to DetalleIVA value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DetalleIVARecibidaType $item
     * @return \ClonixDev\AeatSii\StructType\DesgloseIVA
     */
    public function addToDetalleIVA(\ClonixDev\AeatSii\StructType\DetalleIVARecibidaType  $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\DetalleIVARecibidaType) {
            throw new \InvalidArgumentException(sprintf('The DetalleIVA property can only contain items of type \ClonixDev\AeatSii\StructType\DetalleIVARecibidaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(6)
        if (is_array($this->DetalleIVA) && count($this->DetalleIVA) >= 6) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 6', count($this->DetalleIVA)), __LINE__);
        }
        $this->DetalleIVA[] = $item;
        return $this;
    }
}
