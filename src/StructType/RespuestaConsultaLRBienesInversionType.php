<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRBienesInversionType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRBienesInversionType extends RespuestaConsultaLRFacturasType
{
    /**
     * The RegistroRespuestaConsultaLRBienesInversion
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType[]
     */
    public $RegistroRespuestaConsultaLRBienesInversion;
    /**
     * Constructor method for RespuestaConsultaLRBienesInversionType
     * @uses RespuestaConsultaLRBienesInversionType::setRegistroRespuestaConsultaLRBienesInversion()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType[] $registroRespuestaConsultaLRBienesInversion
     */
    public function __construct(array $registroRespuestaConsultaLRBienesInversion = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRBienesInversion($registroRespuestaConsultaLRBienesInversion);
    }
    /**
     * Get RegistroRespuestaConsultaLRBienesInversion value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType[]|null
     */
    public function getRegistroRespuestaConsultaLRBienesInversion()
    {
        return $this->RegistroRespuestaConsultaLRBienesInversion;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRBienesInversion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRBienesInversion method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRBienesInversionForArrayConstraintsFromSetRegistroRespuestaConsultaLRBienesInversion(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRBienesInversionTypeRegistroRespuestaConsultaLRBienesInversionItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRBienesInversionTypeRegistroRespuestaConsultaLRBienesInversionItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType) {
                $invalidValues[] = is_object($respuestaConsultaLRBienesInversionTypeRegistroRespuestaConsultaLRBienesInversionItem) ? get_class($respuestaConsultaLRBienesInversionTypeRegistroRespuestaConsultaLRBienesInversionItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRBienesInversionTypeRegistroRespuestaConsultaLRBienesInversionItem), var_export($respuestaConsultaLRBienesInversionTypeRegistroRespuestaConsultaLRBienesInversionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRBienesInversion property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRBienesInversion value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType[] $registroRespuestaConsultaLRBienesInversion
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRBienesInversionType
     */
    public function setRegistroRespuestaConsultaLRBienesInversion(array $registroRespuestaConsultaLRBienesInversion = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRBienesInversionArrayErrorMessage = self::validateRegistroRespuestaConsultaLRBienesInversionForArrayConstraintsFromSetRegistroRespuestaConsultaLRBienesInversion($registroRespuestaConsultaLRBienesInversion))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRBienesInversionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRBienesInversion) && count($registroRespuestaConsultaLRBienesInversion) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRBienesInversion)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRBienesInversion = $registroRespuestaConsultaLRBienesInversion;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRBienesInversion value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRBienesInversionType
     */
    public function addToRegistroRespuestaConsultaLRBienesInversion(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRBienesInversion property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaBienesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRBienesInversion) && count($this->RegistroRespuestaConsultaLRBienesInversion) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRBienesInversion)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRBienesInversion[] = $item;
        return $this;
    }
}
