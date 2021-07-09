<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRDetOperIntracomunitariasType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRDetOperIntracomunitariasType extends RespuestaConsultaLRFacturasType
{
    /**
     * The RegistroRespuestaConsultaLRDetOperIntracomunitarias
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType[]
     */
    public $RegistroRespuestaConsultaLRDetOperIntracomunitarias;
    /**
     * Constructor method for RespuestaConsultaLRDetOperIntracomunitariasType
     * @uses RespuestaConsultaLRDetOperIntracomunitariasType::setRegistroRespuestaConsultaLRDetOperIntracomunitarias()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType[] $registroRespuestaConsultaLRDetOperIntracomunitarias
     */
    public function __construct(array $registroRespuestaConsultaLRDetOperIntracomunitarias = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRDetOperIntracomunitarias($registroRespuestaConsultaLRDetOperIntracomunitarias);
    }
    /**
     * Get RegistroRespuestaConsultaLRDetOperIntracomunitarias value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType[]|null
     */
    public function getRegistroRespuestaConsultaLRDetOperIntracomunitarias()
    {
        return $this->RegistroRespuestaConsultaLRDetOperIntracomunitarias;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRDetOperIntracomunitarias method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRDetOperIntracomunitarias method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRDetOperIntracomunitariasForArrayConstraintsFromSetRegistroRespuestaConsultaLRDetOperIntracomunitarias(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRDetOperIntracomunitariasTypeRegistroRespuestaConsultaLRDetOperIntracomunitariasItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRDetOperIntracomunitariasTypeRegistroRespuestaConsultaLRDetOperIntracomunitariasItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType) {
                $invalidValues[] = is_object($respuestaConsultaLRDetOperIntracomunitariasTypeRegistroRespuestaConsultaLRDetOperIntracomunitariasItem) ? get_class($respuestaConsultaLRDetOperIntracomunitariasTypeRegistroRespuestaConsultaLRDetOperIntracomunitariasItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRDetOperIntracomunitariasTypeRegistroRespuestaConsultaLRDetOperIntracomunitariasItem), var_export($respuestaConsultaLRDetOperIntracomunitariasTypeRegistroRespuestaConsultaLRDetOperIntracomunitariasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRDetOperIntracomunitarias property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRDetOperIntracomunitarias value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType[] $registroRespuestaConsultaLRDetOperIntracomunitarias
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRDetOperIntracomunitariasType
     */
    public function setRegistroRespuestaConsultaLRDetOperIntracomunitarias(array $registroRespuestaConsultaLRDetOperIntracomunitarias = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRDetOperIntracomunitariasArrayErrorMessage = self::validateRegistroRespuestaConsultaLRDetOperIntracomunitariasForArrayConstraintsFromSetRegistroRespuestaConsultaLRDetOperIntracomunitarias($registroRespuestaConsultaLRDetOperIntracomunitarias))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRDetOperIntracomunitariasArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRDetOperIntracomunitarias) && count($registroRespuestaConsultaLRDetOperIntracomunitarias) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRDetOperIntracomunitarias)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRDetOperIntracomunitarias = $registroRespuestaConsultaLRDetOperIntracomunitarias;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRDetOperIntracomunitarias value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRDetOperIntracomunitariasType
     */
    public function addToRegistroRespuestaConsultaLRDetOperIntracomunitarias(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRDetOperIntracomunitarias property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaDetOperIntracomunitariasType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRDetOperIntracomunitarias) && count($this->RegistroRespuestaConsultaLRDetOperIntracomunitarias) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRDetOperIntracomunitarias)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRDetOperIntracomunitarias[] = $item;
        return $this;
    }
}
