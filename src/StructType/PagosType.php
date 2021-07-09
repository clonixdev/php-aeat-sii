<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PagosType StructType
 * @subpackage Structs
 */
class PagosType extends AbstractStructBase
{
    /**
     * The Pago
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \ClonixDev\AeatSii\StructType\DatosPagoCobroType[]
     */
    public $Pago;
    /**
     * Constructor method for PagosType
     * @uses PagosType::setPago()
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType[] $pago
     */
    public function __construct(array $pago = array())
    {
        $this
            ->setPago($pago);
    }
    /**
     * Get Pago value
     * @return \ClonixDev\AeatSii\StructType\DatosPagoCobroType[]|null
     */
    public function getPago()
    {
        return $this->Pago;
    }
    /**
     * This method is responsible for validating the values passed to the setPago method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPago method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePagoForArrayConstraintsFromSetPago(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pagosTypePagoItem) {
            // validation for constraint: itemType
            if (!$pagosTypePagoItem instanceof \ClonixDev\AeatSii\StructType\DatosPagoCobroType) {
                $invalidValues[] = is_object($pagosTypePagoItem) ? get_class($pagosTypePagoItem) : sprintf('%s(%s)', gettype($pagosTypePagoItem), var_export($pagosTypePagoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pago property can only contain items of type \ClonixDev\AeatSii\StructType\DatosPagoCobroType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pago value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType[] $pago
     * @return \ClonixDev\AeatSii\StructType\PagosType
     */
    public function setPago(array $pago = array())
    {
        // validation for constraint: array
        if ('' !== ($pagoArrayErrorMessage = self::validatePagoForArrayConstraintsFromSetPago($pago))) {
            throw new \InvalidArgumentException($pagoArrayErrorMessage, __LINE__);
        }
        $this->Pago = $pago;
        return $this;
    }
    /**
     * Add item to Pago value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\DatosPagoCobroType $item
     * @return \ClonixDev\AeatSii\StructType\PagosType
     */
    public function addToPago(\ClonixDev\AeatSii\StructType\DatosPagoCobroType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\DatosPagoCobroType) {
            throw new \InvalidArgumentException(sprintf('The Pago property can only contain items of type \ClonixDev\AeatSii\StructType\DatosPagoCobroType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Pago[] = $item;
        return $this;
    }
}
