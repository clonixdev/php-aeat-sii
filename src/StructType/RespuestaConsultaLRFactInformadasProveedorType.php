<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRFactInformadasProveedorType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRFactInformadasProveedorType extends RespuestaConsultaLRFacturasProveedorType
{
    /**
     * The RegistroRespuestaConsultaLRFactInformadasProveedor
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType[]
     */
    public $RegistroRespuestaConsultaLRFactInformadasProveedor;
    /**
     * Constructor method for RespuestaConsultaLRFactInformadasProveedorType
     * @uses RespuestaConsultaLRFactInformadasProveedorType::setRegistroRespuestaConsultaLRFactInformadasProveedor()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType[] $registroRespuestaConsultaLRFactInformadasProveedor
     */
    public function __construct(array $registroRespuestaConsultaLRFactInformadasProveedor = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRFactInformadasProveedor($registroRespuestaConsultaLRFactInformadasProveedor);
    }
    /**
     * Get RegistroRespuestaConsultaLRFactInformadasProveedor value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType[]|null
     */
    public function getRegistroRespuestaConsultaLRFactInformadasProveedor()
    {
        return $this->RegistroRespuestaConsultaLRFactInformadasProveedor;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRFactInformadasProveedor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRFactInformadasProveedor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRFactInformadasProveedorForArrayConstraintsFromSetRegistroRespuestaConsultaLRFactInformadasProveedor(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRFactInformadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasProveedorItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRFactInformadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasProveedorItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType) {
                $invalidValues[] = is_object($respuestaConsultaLRFactInformadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasProveedorItem) ? get_class($respuestaConsultaLRFactInformadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasProveedorItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRFactInformadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasProveedorItem), var_export($respuestaConsultaLRFactInformadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasProveedorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRFactInformadasProveedor property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRFactInformadasProveedor value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType[] $registroRespuestaConsultaLRFactInformadasProveedor
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasProveedorType
     */
    public function setRegistroRespuestaConsultaLRFactInformadasProveedor(array $registroRespuestaConsultaLRFactInformadasProveedor = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRFactInformadasProveedorArrayErrorMessage = self::validateRegistroRespuestaConsultaLRFactInformadasProveedorForArrayConstraintsFromSetRegistroRespuestaConsultaLRFactInformadasProveedor($registroRespuestaConsultaLRFactInformadasProveedor))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRFactInformadasProveedorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRFactInformadasProveedor) && count($registroRespuestaConsultaLRFactInformadasProveedor) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRFactInformadasProveedor)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFactInformadasProveedor = $registroRespuestaConsultaLRFactInformadasProveedor;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRFactInformadasProveedor value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasProveedorType
     */
    public function addToRegistroRespuestaConsultaLRFactInformadasProveedor(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRFactInformadasProveedor property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasProveedorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRFactInformadasProveedor) && count($this->RegistroRespuestaConsultaLRFactInformadasProveedor) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRFactInformadasProveedor)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFactInformadasProveedor[] = $item;
        return $this;
    }
}
