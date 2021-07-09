<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaLRBajaVentaBienesConsignaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Respuesta a un envío Sii
 * @subpackage Structs
 */
class RespuestaLRBajaVentaBienesConsignaType extends RespuestaComunBajaType
{
    /**
     * The RespuestaLinea
     * Meta information extracted from the WSDL
     * - documentation: Estado detallado de cada línea del suministro.
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType[]
     */
    public $RespuestaLinea;
    /**
     * Constructor method for RespuestaLRBajaVentaBienesConsignaType
     * @uses RespuestaLRBajaVentaBienesConsignaType::setRespuestaLinea()
     * @param \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType[] $respuestaLinea
     */
    public function __construct(array $respuestaLinea = array())
    {
        $this
            ->setRespuestaLinea($respuestaLinea);
    }
    /**
     * Get RespuestaLinea value
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType[]|null
     */
    public function getRespuestaLinea()
    {
        return $this->RespuestaLinea;
    }
    /**
     * This method is responsible for validating the values passed to the setRespuestaLinea method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRespuestaLinea method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRespuestaLineaForArrayConstraintsFromSetRespuestaLinea(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaLRBajaVentaBienesConsignaTypeRespuestaLineaItem) {
            // validation for constraint: itemType
            if (!$respuestaLRBajaVentaBienesConsignaTypeRespuestaLineaItem instanceof \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType) {
                $invalidValues[] = is_object($respuestaLRBajaVentaBienesConsignaTypeRespuestaLineaItem) ? get_class($respuestaLRBajaVentaBienesConsignaTypeRespuestaLineaItem) : sprintf('%s(%s)', gettype($respuestaLRBajaVentaBienesConsignaTypeRespuestaLineaItem), var_export($respuestaLRBajaVentaBienesConsignaTypeRespuestaLineaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RespuestaLinea property can only contain items of type \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RespuestaLinea value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType[] $respuestaLinea
     * @return \ClonixDev\AeatSii\StructType\RespuestaLRBajaVentaBienesConsignaType
     */
    public function setRespuestaLinea(array $respuestaLinea = array())
    {
        // validation for constraint: array
        if ('' !== ($respuestaLineaArrayErrorMessage = self::validateRespuestaLineaForArrayConstraintsFromSetRespuestaLinea($respuestaLinea))) {
            throw new \InvalidArgumentException($respuestaLineaArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($respuestaLinea) && count($respuestaLinea) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($respuestaLinea)), __LINE__);
        }
        $this->RespuestaLinea = $respuestaLinea;
        return $this;
    }
    /**
     * Add item to RespuestaLinea value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaLRBajaVentaBienesConsignaType
     */
    public function addToRespuestaLinea(\ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType) {
            throw new \InvalidArgumentException(sprintf('The RespuestaLinea property can only contain items of type \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaBajaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RespuestaLinea) && count($this->RespuestaLinea) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RespuestaLinea)), __LINE__);
        }
        $this->RespuestaLinea[] = $item;
        return $this;
    }
}
