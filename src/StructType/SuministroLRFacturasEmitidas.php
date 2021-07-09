<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRFacturasEmitidas StructType
 * @subpackage Structs
 */
class SuministroLRFacturasEmitidas extends SuministroInformacion
{
    /**
     * The RegistroLRFacturasEmitidas
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType[]
     */
    public $RegistroLRFacturasEmitidas;
    /**
     * Constructor method for SuministroLRFacturasEmitidas
     * @uses SuministroLRFacturasEmitidas::setRegistroLRFacturasEmitidas()
     * @param \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType[] $registroLRFacturasEmitidas
     */
    public function __construct(array $registroLRFacturasEmitidas = array())
    {
        $this
            ->setRegistroLRFacturasEmitidas($registroLRFacturasEmitidas);
    }
    /**
     * Get RegistroLRFacturasEmitidas value
     * @return \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType[]|null
     */
    public function getRegistroLRFacturasEmitidas()
    {
        return $this->RegistroLRFacturasEmitidas;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRFacturasEmitidas method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRFacturasEmitidas method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRFacturasEmitidasForArrayConstraintsFromSetRegistroLRFacturasEmitidas(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRFacturasEmitidasRegistroLRFacturasEmitidasItem) {
            // validation for constraint: itemType
            if (!$suministroLRFacturasEmitidasRegistroLRFacturasEmitidasItem instanceof \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType) {
                $invalidValues[] = is_object($suministroLRFacturasEmitidasRegistroLRFacturasEmitidasItem) ? get_class($suministroLRFacturasEmitidasRegistroLRFacturasEmitidasItem) : sprintf('%s(%s)', gettype($suministroLRFacturasEmitidasRegistroLRFacturasEmitidasItem), var_export($suministroLRFacturasEmitidasRegistroLRFacturasEmitidasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRFacturasEmitidas property can only contain items of type \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRFacturasEmitidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType[] $registroLRFacturasEmitidas
     * @return \ClonixDev\AeatSii\StructType\SuministroLRFacturasEmitidas
     */
    public function setRegistroLRFacturasEmitidas(array $registroLRFacturasEmitidas = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRFacturasEmitidasArrayErrorMessage = self::validateRegistroLRFacturasEmitidasForArrayConstraintsFromSetRegistroLRFacturasEmitidas($registroLRFacturasEmitidas))) {
            throw new \InvalidArgumentException($registroLRFacturasEmitidasArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRFacturasEmitidas) && count($registroLRFacturasEmitidas) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRFacturasEmitidas)), __LINE__);
        }
        $this->RegistroLRFacturasEmitidas = $registroLRFacturasEmitidas;
        return $this;
    }
    /**
     * Add item to RegistroLRFacturasEmitidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRFacturasEmitidas
     */
    public function addToRegistroLRFacturasEmitidas(\ClonixDev\AeatSii\StructType\LRfacturasEmitidasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRFacturasEmitidas property can only contain items of type \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRFacturasEmitidas) && count($this->RegistroLRFacturasEmitidas) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRFacturasEmitidas)), __LINE__);
        }
        $this->RegistroLRFacturasEmitidas[] = $item;
        return $this;
    }
}
