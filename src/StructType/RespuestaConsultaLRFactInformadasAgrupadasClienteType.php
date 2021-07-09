<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRFactInformadasAgrupadasClienteType
 * StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRFactInformadasAgrupadasClienteType extends RespuestaConsultaLRFacturasAgrupadasClienteType
{
    /**
     * The RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType[]
     */
    public $RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente;
    /**
     * Constructor method for RespuestaConsultaLRFactInformadasAgrupadasClienteType
     * @uses RespuestaConsultaLRFactInformadasAgrupadasClienteType::setRegistroRespuestaConsultaLRFactInformadasAgrupadasCliente()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType[] $registroRespuestaConsultaLRFactInformadasAgrupadasCliente
     */
    public function __construct(array $registroRespuestaConsultaLRFactInformadasAgrupadasCliente = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRFactInformadasAgrupadasCliente($registroRespuestaConsultaLRFactInformadasAgrupadasCliente);
    }
    /**
     * Get RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType[]|null
     */
    public function getRegistroRespuestaConsultaLRFactInformadasAgrupadasCliente()
    {
        return $this->RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRFactInformadasAgrupadasCliente method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRFactInformadasAgrupadasCliente method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRFactInformadasAgrupadasClienteForArrayConstraintsFromSetRegistroRespuestaConsultaLRFactInformadasAgrupadasCliente(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRFactInformadasAgrupadasClienteTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasClienteItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRFactInformadasAgrupadasClienteTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasClienteItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType) {
                $invalidValues[] = is_object($respuestaConsultaLRFactInformadasAgrupadasClienteTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasClienteItem) ? get_class($respuestaConsultaLRFactInformadasAgrupadasClienteTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasClienteItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRFactInformadasAgrupadasClienteTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasClienteItem), var_export($respuestaConsultaLRFactInformadasAgrupadasClienteTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasClienteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType[] $registroRespuestaConsultaLRFactInformadasAgrupadasCliente
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasAgrupadasClienteType
     */
    public function setRegistroRespuestaConsultaLRFactInformadasAgrupadasCliente(array $registroRespuestaConsultaLRFactInformadasAgrupadasCliente = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRFactInformadasAgrupadasClienteArrayErrorMessage = self::validateRegistroRespuestaConsultaLRFactInformadasAgrupadasClienteForArrayConstraintsFromSetRegistroRespuestaConsultaLRFactInformadasAgrupadasCliente($registroRespuestaConsultaLRFactInformadasAgrupadasCliente))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRFactInformadasAgrupadasClienteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRFactInformadasAgrupadasCliente) && count($registroRespuestaConsultaLRFactInformadasAgrupadasCliente) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRFactInformadasAgrupadasCliente)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente = $registroRespuestaConsultaLRFactInformadasAgrupadasCliente;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasAgrupadasClienteType
     */
    public function addToRegistroRespuestaConsultaLRFactInformadasAgrupadasCliente(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasClienteType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente) && count($this->RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFactInformadasAgrupadasCliente[] = $item;
        return $this;
    }
}
