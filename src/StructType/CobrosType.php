<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CobrosType StructType
 * @subpackage Structs
 */
class CobrosType extends AbstractStructBase
{
    /**
     * The Cobro
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \ClonixDev\AeatSii\StructType\DatosPagoCobroType[]
     */
    public $Cobro;
    /**
     * Constructor method for CobrosType
     * @uses CobrosType::setCobro()
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType[] $cobro
     */
    public function __construct(array $cobro = array())
    {
        $this
            ->setCobro($cobro);
    }
    /**
     * Get Cobro value
     * @return \ClonixDev\AeatSii\StructType\DatosPagoCobroType[]|null
     */
    public function getCobro()
    {
        return $this->Cobro;
    }
    /**
     * This method is responsible for validating the values passed to the setCobro method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCobro method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCobroForArrayConstraintsFromSetCobro(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $cobrosTypeCobroItem) {
            // validation for constraint: itemType
            if (!$cobrosTypeCobroItem instanceof \ClonixDev\AeatSii\StructType\DatosPagoCobroType) {
                $invalidValues[] = is_object($cobrosTypeCobroItem) ? get_class($cobrosTypeCobroItem) : sprintf('%s(%s)', gettype($cobrosTypeCobroItem), var_export($cobrosTypeCobroItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Cobro property can only contain items of type \ClonixDev\AeatSii\StructType\DatosPagoCobroType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Cobro value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType[] $cobro
     * @return \ClonixDev\AeatSii\StructType\CobrosType
     */
    public function setCobro(array $cobro = array())
    {
        // validation for constraint: array
        if ('' !== ($cobroArrayErrorMessage = self::validateCobroForArrayConstraintsFromSetCobro($cobro))) {
            throw new \InvalidArgumentException($cobroArrayErrorMessage, __LINE__);
        }
        $this->Cobro = $cobro;
        return $this;
    }
    /**
     * Add item to Cobro value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType $item
     * @return \ClonixDev\AeatSii\StructType\CobrosType
     */
    public function addToCobro(\ClonixDev\AeatSii\StructType\DatosPagoCobroType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\DatosPagoCobroType) {
            throw new \InvalidArgumentException(sprintf('The Cobro property can only contain items of type \ClonixDev\AeatSii\StructType\DatosPagoCobroType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Cobro[] = $item;
        return $this;
    }
}
