<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaInmueblesAdicionalesType StructType
 * @subpackage Structs
 */
class RespuestaConsultaInmueblesAdicionalesType extends RespuestaConsultaInmueblesType
{
    /**
     * The RegistroRespuestaConsultaInmueblesAdicionales
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType[]
     */
    public $RegistroRespuestaConsultaInmueblesAdicionales;
    /**
     * Constructor method for RespuestaConsultaInmueblesAdicionalesType
     * @uses RespuestaConsultaInmueblesAdicionalesType::setRegistroRespuestaConsultaInmueblesAdicionales()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType[] $registroRespuestaConsultaInmueblesAdicionales
     */
    public function __construct(array $registroRespuestaConsultaInmueblesAdicionales = array())
    {
        $this
            ->setRegistroRespuestaConsultaInmueblesAdicionales($registroRespuestaConsultaInmueblesAdicionales);
    }
    /**
     * Get RegistroRespuestaConsultaInmueblesAdicionales value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType[]|null
     */
    public function getRegistroRespuestaConsultaInmueblesAdicionales()
    {
        return $this->RegistroRespuestaConsultaInmueblesAdicionales;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaInmueblesAdicionales method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaInmueblesAdicionales method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaInmueblesAdicionalesForArrayConstraintsFromSetRegistroRespuestaConsultaInmueblesAdicionales(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaInmueblesAdicionalesTypeRegistroRespuestaConsultaInmueblesAdicionalesItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaInmueblesAdicionalesTypeRegistroRespuestaConsultaInmueblesAdicionalesItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType) {
                $invalidValues[] = is_object($respuestaConsultaInmueblesAdicionalesTypeRegistroRespuestaConsultaInmueblesAdicionalesItem) ? get_class($respuestaConsultaInmueblesAdicionalesTypeRegistroRespuestaConsultaInmueblesAdicionalesItem) : sprintf('%s(%s)', gettype($respuestaConsultaInmueblesAdicionalesTypeRegistroRespuestaConsultaInmueblesAdicionalesItem), var_export($respuestaConsultaInmueblesAdicionalesTypeRegistroRespuestaConsultaInmueblesAdicionalesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaInmueblesAdicionales property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaInmueblesAdicionales value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType[] $registroRespuestaConsultaInmueblesAdicionales
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaInmueblesAdicionalesType
     */
    public function setRegistroRespuestaConsultaInmueblesAdicionales(array $registroRespuestaConsultaInmueblesAdicionales = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaInmueblesAdicionalesArrayErrorMessage = self::validateRegistroRespuestaConsultaInmueblesAdicionalesForArrayConstraintsFromSetRegistroRespuestaConsultaInmueblesAdicionales($registroRespuestaConsultaInmueblesAdicionales))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaInmueblesAdicionalesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaInmueblesAdicionales) && count($registroRespuestaConsultaInmueblesAdicionales) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaInmueblesAdicionales)), __LINE__);
        }
        $this->RegistroRespuestaConsultaInmueblesAdicionales = $registroRespuestaConsultaInmueblesAdicionales;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaInmueblesAdicionales value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaInmueblesAdicionalesType
     */
    public function addToRegistroRespuestaConsultaInmueblesAdicionales(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaInmueblesAdicionales property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaInmueblesAdicionalesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaInmueblesAdicionales) && count($this->RegistroRespuestaConsultaInmueblesAdicionales) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaInmueblesAdicionales)), __LINE__);
        }
        $this->RegistroRespuestaConsultaInmueblesAdicionales[] = $item;
        return $this;
    }
}
