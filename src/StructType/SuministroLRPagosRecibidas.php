<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRPagosRecibidas StructType
 * Meta information extracted from the WSDL
 * - documentation: Suministro de información de Pagos sobre el libro de registro de facturas recibidas
 * @subpackage Structs
 */
class SuministroLRPagosRecibidas extends SuministroInformacionCobrosPagos
{
    /**
     * The RegistroLRPagos
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRPagosEmitidasType[]
     */
    public $RegistroLRPagos;
    /**
     * Constructor method for SuministroLRPagosRecibidas
     * @uses SuministroLRPagosRecibidas::setRegistroLRPagos()
     * @param \ClonixDev\AeatSii\StructType\LRPagosEmitidasType[] $registroLRPagos
     */
    public function __construct(array $registroLRPagos = array())
    {
        $this
            ->setRegistroLRPagos($registroLRPagos);
    }
    /**
     * Get RegistroLRPagos value
     * @return \ClonixDev\AeatSii\StructType\LRPagosEmitidasType[]|null
     */
    public function getRegistroLRPagos()
    {
        return $this->RegistroLRPagos;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRPagos method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRPagos method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRPagosForArrayConstraintsFromSetRegistroLRPagos(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRPagosRecibidasRegistroLRPagosItem) {
            // validation for constraint: itemType
            if (!$suministroLRPagosRecibidasRegistroLRPagosItem instanceof \ClonixDev\AeatSii\StructType\LRPagosEmitidasType) {
                $invalidValues[] = is_object($suministroLRPagosRecibidasRegistroLRPagosItem) ? get_class($suministroLRPagosRecibidasRegistroLRPagosItem) : sprintf('%s(%s)', gettype($suministroLRPagosRecibidasRegistroLRPagosItem), var_export($suministroLRPagosRecibidasRegistroLRPagosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRPagos property can only contain items of type \ClonixDev\AeatSii\StructType\LRPagosEmitidasType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRPagos value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRPagosEmitidasType[] $registroLRPagos
     * @return \ClonixDev\AeatSii\StructType\SuministroLRPagosRecibidas
     */
    public function setRegistroLRPagos(array $registroLRPagos = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRPagosArrayErrorMessage = self::validateRegistroLRPagosForArrayConstraintsFromSetRegistroLRPagos($registroLRPagos))) {
            throw new \InvalidArgumentException($registroLRPagosArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRPagos) && count($registroLRPagos) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRPagos)), __LINE__);
        }
        $this->RegistroLRPagos = $registroLRPagos;
        return $this;
    }
    /**
     * Add item to RegistroLRPagos value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRPagosEmitidasType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRPagosRecibidas
     */
    public function addToRegistroLRPagos(\ClonixDev\AeatSii\StructType\LRPagosEmitidasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRPagosEmitidasType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRPagos property can only contain items of type \ClonixDev\AeatSii\StructType\LRPagosEmitidasType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRPagos) && count($this->RegistroLRPagos) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRPagos)), __LINE__);
        }
        $this->RegistroLRPagos[] = $item;
        return $this;
    }
}
