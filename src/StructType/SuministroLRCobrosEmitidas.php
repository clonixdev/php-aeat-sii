<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroLRCobrosEmitidas StructType
 * Meta information extracted from the WSDL
 * - documentation: Suministro de información de Cobros sobre el libro de registro de facturas expedidas
 * @subpackage Structs
 */
class SuministroLRCobrosEmitidas extends SuministroInformacionCobrosPagos
{
    /**
     * The RegistroLRCobros
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * @var \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType[]
     */
    public $RegistroLRCobros;
    /**
     * Constructor method for SuministroLRCobrosEmitidas
     * @uses SuministroLRCobrosEmitidas::setRegistroLRCobros()
     * @param \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType[] $registroLRCobros
     */
    public function __construct(array $registroLRCobros = array())
    {
        $this
            ->setRegistroLRCobros($registroLRCobros);
    }
    /**
     * Get RegistroLRCobros value
     * @return \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType[]|null
     */
    public function getRegistroLRCobros()
    {
        return $this->RegistroLRCobros;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroLRCobros method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroLRCobros method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroLRCobrosForArrayConstraintsFromSetRegistroLRCobros(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $suministroLRCobrosEmitidasRegistroLRCobrosItem) {
            // validation for constraint: itemType
            if (!$suministroLRCobrosEmitidasRegistroLRCobrosItem instanceof \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType) {
                $invalidValues[] = is_object($suministroLRCobrosEmitidasRegistroLRCobrosItem) ? get_class($suministroLRCobrosEmitidasRegistroLRCobrosItem) : sprintf('%s(%s)', gettype($suministroLRCobrosEmitidasRegistroLRCobrosItem), var_export($suministroLRCobrosEmitidasRegistroLRCobrosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroLRCobros property can only contain items of type \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroLRCobros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType[] $registroLRCobros
     * @return \ClonixDev\AeatSii\StructType\SuministroLRCobrosEmitidas
     */
    public function setRegistroLRCobros(array $registroLRCobros = array())
    {
        // validation for constraint: array
        if ('' !== ($registroLRCobrosArrayErrorMessage = self::validateRegistroLRCobrosForArrayConstraintsFromSetRegistroLRCobros($registroLRCobros))) {
            throw new \InvalidArgumentException($registroLRCobrosArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroLRCobros) && count($registroLRCobros) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroLRCobros)), __LINE__);
        }
        $this->RegistroLRCobros = $registroLRCobros;
        return $this;
    }
    /**
     * Add item to RegistroLRCobros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType $item
     * @return \ClonixDev\AeatSii\StructType\SuministroLRCobrosEmitidas
     */
    public function addToRegistroLRCobros(\ClonixDev\AeatSii\StructType\LRCobrosEmitidasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType) {
            throw new \InvalidArgumentException(sprintf('The RegistroLRCobros property can only contain items of type \ClonixDev\AeatSii\StructType\LRCobrosEmitidasType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroLRCobros) && count($this->RegistroLRCobros) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroLRCobros)), __LINE__);
        }
        $this->RegistroLRCobros[] = $item;
        return $this;
    }
}
