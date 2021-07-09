<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLROperacionesSegurosType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLROperacionesSegurosType extends RespuestaConsultaLRFacturasType
{
    /**
     * The RegistroRespuestaConsultaLROperacionesSeguros
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType[]
     */
    public $RegistroRespuestaConsultaLROperacionesSeguros;
    /**
     * Constructor method for RespuestaConsultaLROperacionesSegurosType
     * @uses RespuestaConsultaLROperacionesSegurosType::setRegistroRespuestaConsultaLROperacionesSeguros()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType[] $registroRespuestaConsultaLROperacionesSeguros
     */
    public function __construct(array $registroRespuestaConsultaLROperacionesSeguros = array())
    {
        $this
            ->setRegistroRespuestaConsultaLROperacionesSeguros($registroRespuestaConsultaLROperacionesSeguros);
    }
    /**
     * Get RegistroRespuestaConsultaLROperacionesSeguros value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType[]|null
     */
    public function getRegistroRespuestaConsultaLROperacionesSeguros()
    {
        return $this->RegistroRespuestaConsultaLROperacionesSeguros;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLROperacionesSeguros method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLROperacionesSeguros method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLROperacionesSegurosForArrayConstraintsFromSetRegistroRespuestaConsultaLROperacionesSeguros(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLROperacionesSegurosTypeRegistroRespuestaConsultaLROperacionesSegurosItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLROperacionesSegurosTypeRegistroRespuestaConsultaLROperacionesSegurosItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType) {
                $invalidValues[] = is_object($respuestaConsultaLROperacionesSegurosTypeRegistroRespuestaConsultaLROperacionesSegurosItem) ? get_class($respuestaConsultaLROperacionesSegurosTypeRegistroRespuestaConsultaLROperacionesSegurosItem) : sprintf('%s(%s)', gettype($respuestaConsultaLROperacionesSegurosTypeRegistroRespuestaConsultaLROperacionesSegurosItem), var_export($respuestaConsultaLROperacionesSegurosTypeRegistroRespuestaConsultaLROperacionesSegurosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLROperacionesSeguros property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLROperacionesSeguros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType[] $registroRespuestaConsultaLROperacionesSeguros
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLROperacionesSegurosType
     */
    public function setRegistroRespuestaConsultaLROperacionesSeguros(array $registroRespuestaConsultaLROperacionesSeguros = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLROperacionesSegurosArrayErrorMessage = self::validateRegistroRespuestaConsultaLROperacionesSegurosForArrayConstraintsFromSetRegistroRespuestaConsultaLROperacionesSeguros($registroRespuestaConsultaLROperacionesSeguros))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLROperacionesSegurosArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLROperacionesSeguros) && count($registroRespuestaConsultaLROperacionesSeguros) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLROperacionesSeguros)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLROperacionesSeguros = $registroRespuestaConsultaLROperacionesSeguros;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLROperacionesSeguros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLROperacionesSegurosType
     */
    public function addToRegistroRespuestaConsultaLROperacionesSeguros(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLROperacionesSeguros property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaOperacionesSegurosType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLROperacionesSeguros) && count($this->RegistroRespuestaConsultaLROperacionesSeguros) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLROperacionesSeguros)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLROperacionesSeguros[] = $item;
        return $this;
    }
}
