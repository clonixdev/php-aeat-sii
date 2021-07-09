<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRFactInformadasAgrupadasProveedorType
 * StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRFactInformadasAgrupadasProveedorType extends RespuestaConsultaLRFacturasAgrupadasProveedorType
{
    /**
     * The RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType[]
     */
    public $RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor;
    /**
     * Constructor method for RespuestaConsultaLRFactInformadasAgrupadasProveedorType
     * @uses RespuestaConsultaLRFactInformadasAgrupadasProveedorType::setRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType[] $registroRespuestaConsultaLRFactInformadasAgrupadasProveedor
     */
    public function __construct(array $registroRespuestaConsultaLRFactInformadasAgrupadasProveedor = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor($registroRespuestaConsultaLRFactInformadasAgrupadasProveedor);
    }
    /**
     * Get RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType[]|null
     */
    public function getRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor()
    {
        return $this->RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedorForArrayConstraintsFromSetRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRFactInformadasAgrupadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedorItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRFactInformadasAgrupadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedorItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType) {
                $invalidValues[] = is_object($respuestaConsultaLRFactInformadasAgrupadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedorItem) ? get_class($respuestaConsultaLRFactInformadasAgrupadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedorItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRFactInformadasAgrupadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedorItem), var_export($respuestaConsultaLRFactInformadasAgrupadasProveedorTypeRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType[] $registroRespuestaConsultaLRFactInformadasAgrupadasProveedor
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasAgrupadasProveedorType
     */
    public function setRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor(array $registroRespuestaConsultaLRFactInformadasAgrupadasProveedor = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRFactInformadasAgrupadasProveedorArrayErrorMessage = self::validateRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedorForArrayConstraintsFromSetRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor($registroRespuestaConsultaLRFactInformadasAgrupadasProveedor))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRFactInformadasAgrupadasProveedorArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRFactInformadasAgrupadasProveedor) && count($registroRespuestaConsultaLRFactInformadasAgrupadasProveedor) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRFactInformadasAgrupadasProveedor)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor = $registroRespuestaConsultaLRFactInformadasAgrupadasProveedor;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasAgrupadasProveedorType
     */
    public function addToRegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaFactInformadasAgrupadasProveedorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor) && count($this->RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFactInformadasAgrupadasProveedor[] = $item;
        return $this;
    }
}
