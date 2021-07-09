<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRVentaBienesConsignaType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRVentaBienesConsignaType extends RespuestaConsultaLRVentaBVType
{
    /**
     * The RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType[]
     */
    public $RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna;
    /**
     * Constructor method for RespuestaConsultaLRVentaBienesConsignaType
     * @uses RespuestaConsultaLRVentaBienesConsignaType::setRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType[] $registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna
     */
    public function __construct(array $registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna($registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna);
    }
    /**
     * Get RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna
     * value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType[]|null
     */
    public function getRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna()
    {
        return $this->RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaForArrayConstraintsFromSetRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRVentaBienesConsignaTypeRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRVentaBienesConsignaTypeRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType) {
                $invalidValues[] = is_object($respuestaConsultaLRVentaBienesConsignaTypeRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaItem) ? get_class($respuestaConsultaLRVentaBienesConsignaTypeRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRVentaBienesConsignaTypeRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaItem), var_export($respuestaConsultaLRVentaBienesConsignaTypeRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna
     * value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType[] $registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRVentaBienesConsignaType
     */
    public function setRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna(array $registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaArrayErrorMessage = self::validateRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaForArrayConstraintsFromSetRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna($registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsignaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna) && count($registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna = $registroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna;
        return $this;
    }
    /**
     * Add item to
     * RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRVentaBienesConsignaType
     */
    public function addToRegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaVentaBienesConsignaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna) && count($this->RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRDetOperacionIntracomunitariaVentasEnConsigna[] = $item;
        return $this;
    }
}
