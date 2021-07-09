<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaLRPagosRecibidasType StructType
 * Meta information extracted from the WSDL
 * - documentation: Respuesta a un envío Sii para suministro de Facturas Recibidas
 * @subpackage Structs
 */
class RespuestaLRPagosRecibidasType extends RespuestaCobrosPagosType
{
    /**
     * The RespuestaLinea
     * Meta information extracted from the WSDL
     * - documentation: Estado detallado de cada línea del suministro.
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType[]
     */
    public $RespuestaLinea;
    /**
     * Constructor method for RespuestaLRPagosRecibidasType
     * @uses RespuestaLRPagosRecibidasType::setRespuestaLinea()
     * @param \ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType[] $respuestaLinea
     */
    public function __construct(array $respuestaLinea = array())
    {
        $this
            ->setRespuestaLinea($respuestaLinea);
    }
    /**
     * Get RespuestaLinea value
     * @return \ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType[]|null
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
        foreach ($values as $respuestaLRPagosRecibidasTypeRespuestaLineaItem) {
            // validation for constraint: itemType
            if (!$respuestaLRPagosRecibidasTypeRespuestaLineaItem instanceof \ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType) {
                $invalidValues[] = is_object($respuestaLRPagosRecibidasTypeRespuestaLineaItem) ? get_class($respuestaLRPagosRecibidasTypeRespuestaLineaItem) : sprintf('%s(%s)', gettype($respuestaLRPagosRecibidasTypeRespuestaLineaItem), var_export($respuestaLRPagosRecibidasTypeRespuestaLineaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RespuestaLinea property can only contain items of type \ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RespuestaLinea value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType[] $respuestaLinea
     * @return \ClonixDev\AeatSii\StructType\RespuestaLRPagosRecibidasType
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
     * @param \ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaLRPagosRecibidasType
     */
    public function addToRespuestaLinea(\ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType) {
            throw new \InvalidArgumentException(sprintf('The RespuestaLinea property can only contain items of type \ClonixDev\AeatSii\StructType\RespuestaRecibidaPagoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RespuestaLinea) && count($this->RespuestaLinea) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RespuestaLinea)), __LINE__);
        }
        $this->RespuestaLinea[] = $item;
        return $this;
    }
}
