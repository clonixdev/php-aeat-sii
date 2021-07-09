<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRFacturasRecibidasType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRFacturasRecibidasType extends RespuestaConsultaLRFacturasType
{
    /**
     * The RegistroRespuestaConsultaLRFacturasRecibidas
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType[]
     */
    public $RegistroRespuestaConsultaLRFacturasRecibidas;
    /**
     * Constructor method for RespuestaConsultaLRFacturasRecibidasType
     * @uses RespuestaConsultaLRFacturasRecibidasType::setRegistroRespuestaConsultaLRFacturasRecibidas()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType[] $registroRespuestaConsultaLRFacturasRecibidas
     */
    public function __construct(array $registroRespuestaConsultaLRFacturasRecibidas = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRFacturasRecibidas($registroRespuestaConsultaLRFacturasRecibidas);
    }
    /**
     * Get RegistroRespuestaConsultaLRFacturasRecibidas value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType[]|null
     */
    public function getRegistroRespuestaConsultaLRFacturasRecibidas()
    {
        return $this->RegistroRespuestaConsultaLRFacturasRecibidas;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRFacturasRecibidas method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRFacturasRecibidas method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRFacturasRecibidasForArrayConstraintsFromSetRegistroRespuestaConsultaLRFacturasRecibidas(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRFacturasRecibidasTypeRegistroRespuestaConsultaLRFacturasRecibidasItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRFacturasRecibidasTypeRegistroRespuestaConsultaLRFacturasRecibidasItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType) {
                $invalidValues[] = is_object($respuestaConsultaLRFacturasRecibidasTypeRegistroRespuestaConsultaLRFacturasRecibidasItem) ? get_class($respuestaConsultaLRFacturasRecibidasTypeRegistroRespuestaConsultaLRFacturasRecibidasItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRFacturasRecibidasTypeRegistroRespuestaConsultaLRFacturasRecibidasItem), var_export($respuestaConsultaLRFacturasRecibidasTypeRegistroRespuestaConsultaLRFacturasRecibidasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRFacturasRecibidas property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRFacturasRecibidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType[] $registroRespuestaConsultaLRFacturasRecibidas
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFacturasRecibidasType
     */
    public function setRegistroRespuestaConsultaLRFacturasRecibidas(array $registroRespuestaConsultaLRFacturasRecibidas = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRFacturasRecibidasArrayErrorMessage = self::validateRegistroRespuestaConsultaLRFacturasRecibidasForArrayConstraintsFromSetRegistroRespuestaConsultaLRFacturasRecibidas($registroRespuestaConsultaLRFacturasRecibidas))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRFacturasRecibidasArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRFacturasRecibidas) && count($registroRespuestaConsultaLRFacturasRecibidas) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRFacturasRecibidas)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFacturasRecibidas = $registroRespuestaConsultaLRFacturasRecibidas;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRFacturasRecibidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFacturasRecibidasType
     */
    public function addToRegistroRespuestaConsultaLRFacturasRecibidas(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRFacturasRecibidas property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRFacturasRecibidas) && count($this->RegistroRespuestaConsultaLRFacturasRecibidas) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRFacturasRecibidas)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFacturasRecibidas[] = $item;
        return $this;
    }
}
