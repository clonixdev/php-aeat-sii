<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRCobrosMetalicoType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRCobrosMetalicoType extends RespuestaConsultaLRFacturasType
{
    /**
     * The RegistroRespuestaConsultaLRCobrosMetalico
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType[]
     */
    public $RegistroRespuestaConsultaLRCobrosMetalico;
    /**
     * Constructor method for RespuestaConsultaLRCobrosMetalicoType
     * @uses RespuestaConsultaLRCobrosMetalicoType::setRegistroRespuestaConsultaLRCobrosMetalico()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType[] $registroRespuestaConsultaLRCobrosMetalico
     */
    public function __construct(array $registroRespuestaConsultaLRCobrosMetalico = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRCobrosMetalico($registroRespuestaConsultaLRCobrosMetalico);
    }
    /**
     * Get RegistroRespuestaConsultaLRCobrosMetalico value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType[]|null
     */
    public function getRegistroRespuestaConsultaLRCobrosMetalico()
    {
        return $this->RegistroRespuestaConsultaLRCobrosMetalico;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRCobrosMetalico method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRCobrosMetalico method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRCobrosMetalicoForArrayConstraintsFromSetRegistroRespuestaConsultaLRCobrosMetalico(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRCobrosMetalicoTypeRegistroRespuestaConsultaLRCobrosMetalicoItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRCobrosMetalicoTypeRegistroRespuestaConsultaLRCobrosMetalicoItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType) {
                $invalidValues[] = is_object($respuestaConsultaLRCobrosMetalicoTypeRegistroRespuestaConsultaLRCobrosMetalicoItem) ? get_class($respuestaConsultaLRCobrosMetalicoTypeRegistroRespuestaConsultaLRCobrosMetalicoItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRCobrosMetalicoTypeRegistroRespuestaConsultaLRCobrosMetalicoItem), var_export($respuestaConsultaLRCobrosMetalicoTypeRegistroRespuestaConsultaLRCobrosMetalicoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRCobrosMetalico property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRCobrosMetalico value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType[] $registroRespuestaConsultaLRCobrosMetalico
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRCobrosMetalicoType
     */
    public function setRegistroRespuestaConsultaLRCobrosMetalico(array $registroRespuestaConsultaLRCobrosMetalico = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRCobrosMetalicoArrayErrorMessage = self::validateRegistroRespuestaConsultaLRCobrosMetalicoForArrayConstraintsFromSetRegistroRespuestaConsultaLRCobrosMetalico($registroRespuestaConsultaLRCobrosMetalico))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRCobrosMetalicoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRCobrosMetalico) && count($registroRespuestaConsultaLRCobrosMetalico) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRCobrosMetalico)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRCobrosMetalico = $registroRespuestaConsultaLRCobrosMetalico;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRCobrosMetalico value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRCobrosMetalicoType
     */
    public function addToRegistroRespuestaConsultaLRCobrosMetalico(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRCobrosMetalico property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosMetalicoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRCobrosMetalico) && count($this->RegistroRespuestaConsultaLRCobrosMetalico) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRCobrosMetalico)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRCobrosMetalico[] = $item;
        return $this;
    }
}
