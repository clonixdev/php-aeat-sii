<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRFactInformadasClienteType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRFactInformadasClienteType extends RespuestaConsultaLRFacturasClienteType
{
    /**
     * The RegistroRespuestaConsultaLRFactInformadasCliente
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType[]
     */
    public $RegistroRespuestaConsultaLRFactInformadasCliente;
    /**
     * Constructor method for RespuestaConsultaLRFactInformadasClienteType
     * @uses RespuestaConsultaLRFactInformadasClienteType::setRegistroRespuestaConsultaLRFactInformadasCliente()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType[] $registroRespuestaConsultaLRFactInformadasCliente
     */
    public function __construct(array $registroRespuestaConsultaLRFactInformadasCliente = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRFactInformadasCliente($registroRespuestaConsultaLRFactInformadasCliente);
    }
    /**
     * Get RegistroRespuestaConsultaLRFactInformadasCliente value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType[]|null
     */
    public function getRegistroRespuestaConsultaLRFactInformadasCliente()
    {
        return $this->RegistroRespuestaConsultaLRFactInformadasCliente;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRFactInformadasCliente method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRFactInformadasCliente method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRFactInformadasClienteForArrayConstraintsFromSetRegistroRespuestaConsultaLRFactInformadasCliente(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRFactInformadasClienteTypeRegistroRespuestaConsultaLRFactInformadasClienteItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRFactInformadasClienteTypeRegistroRespuestaConsultaLRFactInformadasClienteItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType) {
                $invalidValues[] = is_object($respuestaConsultaLRFactInformadasClienteTypeRegistroRespuestaConsultaLRFactInformadasClienteItem) ? get_class($respuestaConsultaLRFactInformadasClienteTypeRegistroRespuestaConsultaLRFactInformadasClienteItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRFactInformadasClienteTypeRegistroRespuestaConsultaLRFactInformadasClienteItem), var_export($respuestaConsultaLRFactInformadasClienteTypeRegistroRespuestaConsultaLRFactInformadasClienteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRFactInformadasCliente property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRFactInformadasCliente value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType[] $registroRespuestaConsultaLRFactInformadasCliente
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasClienteType
     */
    public function setRegistroRespuestaConsultaLRFactInformadasCliente(array $registroRespuestaConsultaLRFactInformadasCliente = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRFactInformadasClienteArrayErrorMessage = self::validateRegistroRespuestaConsultaLRFactInformadasClienteForArrayConstraintsFromSetRegistroRespuestaConsultaLRFactInformadasCliente($registroRespuestaConsultaLRFactInformadasCliente))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRFactInformadasClienteArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRFactInformadasCliente) && count($registroRespuestaConsultaLRFactInformadasCliente) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRFactInformadasCliente)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFactInformadasCliente = $registroRespuestaConsultaLRFactInformadasCliente;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRFactInformadasCliente value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasClienteType
     */
    public function addToRegistroRespuestaConsultaLRFactInformadasCliente(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRFactInformadasCliente property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasClienteType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRFactInformadasCliente) && count($this->RegistroRespuestaConsultaLRFactInformadasCliente) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRFactInformadasCliente)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFactInformadasCliente[] = $item;
        return $this;
    }
}
