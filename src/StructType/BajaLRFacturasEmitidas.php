<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BajaLRFacturasEmitidas StructType
 * @subpackage Structs
 */
class BajaLRFacturasEmitidas extends SuministroInformacionBaja
{
    /**
     * The RegistroLRBajaExpedidas
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRBajaExpedidasType[]
     */
    public $RegistroLRBajaExpedidas;
    /**
     * Constructor method for BajaLRFacturasEmitidas
     * @uses BajaLRFacturasEmitidas::setRegistroLRBajaExpedidas()
     * @param \ClonixDev\AeatSii\StructType\LRBajaExpedidasType[] $registroLRBajaExpedidas
     */
    public function __construct(array $registroLRBajaExpedidas = array())
    {
        $this
            ->setRegistroLRBajaExpedidas($registroLRBajaExpedidas);
    }
    /**
     * Get RegistroLRBajaExpedidas value
     * @return \ClonixDev\AeatSii\StructType\LRBajaExpedidasType[]|null
     */
    public function getRegistroLRBajaExpedidas()
    {
        return $this->RegistroLRBajaExpedidas;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRBajaExpedidas method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRBajaExpedidas method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRBajaExpedidasForArrayConstraintsFromSetRegistroLRBajaExpedidas(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $bajaLRFacturasEmitidasRegistroLRBajaExpedidasItem) {
            // validation for constraint: itemType
            if (!$bajaLRFacturasEmitidasRegistroLRBajaExpedidasItem instanceof \ClonixDev\AeatSii\StructType\LRBajaExpedidasType) {
                $invalidValues[] = is_object($bajaLRFacturasEmitidasRegistroLRBajaExpedidasItem) ? get_class($bajaLRFacturasEmitidasRegistroLRBajaExpedidasItem) : sprintf('%s(%s)', gettype($bajaLRFacturasEmitidasRegistroLRBajaExpedidasItem), var_export($bajaLRFacturasEmitidasRegistroLRBajaExpedidasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRBajaExpedidas property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaExpedidasType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRBajaExpedidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaExpedidasType[] $registroLRBajaExpedidas
     * @return \ClonixDev\AeatSii\StructType\BajaLRFacturasEmitidas
     */
    public function setRegistroLRBajaExpedidas(array $registroLRBajaExpedidas = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRBajaExpedidasArrayErrorMessage = self::validateRegistroLRBajaExpedidasForArrayConstraintsFromSetRegistroLRBajaExpedidas($registroLRBajaExpedidas))) {
            throw new \InvalidArgumentException($registroLRBajaExpedidasArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRBajaExpedidas) && count($registroLRBajaExpedidas) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRBajaExpedidas)), __LINE__);
        }
        $this->RegistroLRBajaExpedidas = $registroLRBajaExpedidas;
        return $this;
    }
    /**
     * Add item to RegistroLRBajaExpedidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRBajaExpedidasType $item
     * @return \ClonixDev\AeatSii\StructType\BajaLRFacturasEmitidas
     */
    public function addToRegistroLRBajaExpedidas(\ClonixDev\AeatSii\StructType\LRBajaExpedidasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRBajaExpedidasType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRBajaExpedidas property can only contain items of type \ClonixDev\AeatSii\StructType\LRBajaExpedidasType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRBajaExpedidas) && count($this->RegistroLRBajaExpedidas) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRBajaExpedidas)), __LINE__);
        }
        $this->RegistroLRBajaExpedidas[] = $item;
        return $this;
    }
}
