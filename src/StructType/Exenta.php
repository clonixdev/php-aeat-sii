<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Exenta StructType
 * @subpackage Structs
 */
class Exenta extends AbstractStructBase
{
    /**
     * The DetalleExenta
     * Meta information extracted from the WSDL
     * - maxOccurs: 7
     * @var \ClonixDev\AeatSii\StructType\DetalleExentaType[]
     */
    public $DetalleExenta;
    /**
     * Constructor method for Exenta
     * @uses Exenta::setDetalleExenta()
     * @param \ClonixDev\AeatSii\StructType\DetalleExentaType[] $detalleExenta
     */
    public function __construct(array $detalleExenta = array())
    {
        $this
            ->setDetalleExenta($detalleExenta);
    }
    /**
     * Get DetalleExenta value
     * @return \ClonixDev\AeatSii\StructType\DetalleExentaType[]|null
     */
    public function getDetalleExenta()
    {
        return $this->DetalleExenta;
    }
    /**
     * This method is responsible for validating the values passed to the setDetalleExenta method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetalleExenta method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetalleExentaForArrayConstraintsFromSetDetalleExenta(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $exentaDetalleExentaItem) {
            // validation for constraint: itemType
            if (!$exentaDetalleExentaItem instanceof \ClonixDev\AeatSii\StructType\DetalleExentaType) {
                $invalidValues[] = is_object($exentaDetalleExentaItem) ? get_class($exentaDetalleExentaItem) : sprintf('%s(%s)', gettype($exentaDetalleExentaItem), var_export($exentaDetalleExentaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DetalleExenta property can only contain items of type \ClonixDev\AeatSii\StructType\DetalleExentaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DetalleExenta value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DetalleExentaType[] $detalleExenta
     * @return \ClonixDev\AeatSii\StructType\Exenta
     */
    public function setDetalleExenta(array $detalleExenta = array())
    {
        // validation for constraint: array
        if ('' !== ($detalleExentaArrayErrorMessage = self::validateDetalleExentaForArrayConstraintsFromSetDetalleExenta($detalleExenta))) {
            throw new \InvalidArgumentException($detalleExentaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(7)
        if (is_array($detalleExenta) && count($detalleExenta) > 7) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 7', count($detalleExenta)), __LINE__);
        }
        $this->DetalleExenta = $detalleExenta;
        return $this;
    }
    /**
     * Add item to DetalleExenta value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DetalleExentaType $item
     * @return \ClonixDev\AeatSii\StructType\Exenta
     */
    public function addToDetalleExenta(\ClonixDev\AeatSii\StructType\DetalleExentaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\DetalleExentaType) {
            throw new \InvalidArgumentException(sprintf('The DetalleExenta property can only contain items of type \ClonixDev\AeatSii\StructType\DetalleExentaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(7)
        if (is_array($this->DetalleExenta) && count($this->DetalleExenta) >= 7) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 7', count($this->DetalleExenta)), __LINE__);
        }
        $this->DetalleExenta[] = $item;
        return $this;
    }
}
