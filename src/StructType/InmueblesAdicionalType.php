<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InmueblesAdicionalType StructType
 * @subpackage Structs
 */
class InmueblesAdicionalType extends AbstractStructBase
{
    /**
     * The DetalleInmueble
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\DatosInmuebleType[]
     */
    public $DetalleInmueble;
    /**
     * Constructor method for InmueblesAdicionalType
     * @uses InmueblesAdicionalType::setDetalleInmueble()
     * @param \ClonixDev\AeatSii\StructType\DatosInmuebleType[] $detalleInmueble
     */
    public function __construct(array $detalleInmueble = array())
    {
        $this
            ->setDetalleInmueble($detalleInmueble);
    }
    /**
     * Get DetalleInmueble value
     * @return \ClonixDev\AeatSii\StructType\DatosInmuebleType[]|null
     */
    public function getDetalleInmueble()
    {
        return $this->DetalleInmueble;
    }
    /**
     * This method is responsible for validating the values passed to the setDetalleInmueble method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDetalleInmueble method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDetalleInmuebleForArrayConstraintsFromSetDetalleInmueble(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $inmueblesAdicionalTypeDetalleInmuebleItem) {
            // validation for constraint: itemType
            if (!$inmueblesAdicionalTypeDetalleInmuebleItem instanceof \ClonixDev\AeatSii\StructType\DatosInmuebleType) {
                $invalidValues[] = is_object($inmueblesAdicionalTypeDetalleInmuebleItem) ? get_class($inmueblesAdicionalTypeDetalleInmuebleItem) : sprintf('%s(%s)', gettype($inmueblesAdicionalTypeDetalleInmuebleItem), var_export($inmueblesAdicionalTypeDetalleInmuebleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DetalleInmueble property can only contain items of type \ClonixDev\AeatSii\StructType\DatosInmuebleType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DetalleInmueble value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DatosInmuebleType[] $detalleInmueble
     * @return \ClonixDev\AeatSii\StructType\InmueblesAdicionalType
     */
    public function setDetalleInmueble(array $detalleInmueble = array())
    {
        // validation for constraint: array
        if ('' !== ($detalleInmuebleArrayErrorMessage = self::validateDetalleInmuebleForArrayConstraintsFromSetDetalleInmueble($detalleInmueble))) {
            throw new \InvalidArgumentException($detalleInmuebleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($detalleInmueble) && count($detalleInmueble) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($detalleInmueble)), __LINE__);
        }
        $this->DetalleInmueble = $detalleInmueble;
        return $this;
    }
    /**
     * Add item to DetalleInmueble value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DatosInmuebleType $item
     * @return \ClonixDev\AeatSii\StructType\InmueblesAdicionalType
     */
    public function addToDetalleInmueble(\ClonixDev\AeatSii\StructType\DatosInmuebleType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\DatosInmuebleType) {
            throw new \InvalidArgumentException(sprintf('The DetalleInmueble property can only contain items of type \ClonixDev\AeatSii\StructType\DatosInmuebleType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->DetalleInmueble) && count($this->DetalleInmueble) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->DetalleInmueble)), __LINE__);
        }
        $this->DetalleInmueble[] = $item;
        return $this;
    }
}
