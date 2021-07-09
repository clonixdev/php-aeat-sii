<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRAgenciasViajesType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRAgenciasViajesType extends RespuestaConsultaLRFacturasType
{
    /**
     * The RegistroRespuestaConsultaLRAgenciasViajes
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType[]
     */
    public $RegistroRespuestaConsultaLRAgenciasViajes;
    /**
     * Constructor method for RespuestaConsultaLRAgenciasViajesType
     * @uses RespuestaConsultaLRAgenciasViajesType::setRegistroRespuestaConsultaLRAgenciasViajes()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType[] $registroRespuestaConsultaLRAgenciasViajes
     */
    public function __construct(array $registroRespuestaConsultaLRAgenciasViajes = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRAgenciasViajes($registroRespuestaConsultaLRAgenciasViajes);
    }
    /**
     * Get RegistroRespuestaConsultaLRAgenciasViajes value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType[]|null
     */
    public function getRegistroRespuestaConsultaLRAgenciasViajes()
    {
        return $this->RegistroRespuestaConsultaLRAgenciasViajes;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRAgenciasViajes method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRAgenciasViajes method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRAgenciasViajesForArrayConstraintsFromSetRegistroRespuestaConsultaLRAgenciasViajes(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRAgenciasViajesTypeRegistroRespuestaConsultaLRAgenciasViajesItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRAgenciasViajesTypeRegistroRespuestaConsultaLRAgenciasViajesItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType) {
                $invalidValues[] = is_object($respuestaConsultaLRAgenciasViajesTypeRegistroRespuestaConsultaLRAgenciasViajesItem) ? get_class($respuestaConsultaLRAgenciasViajesTypeRegistroRespuestaConsultaLRAgenciasViajesItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRAgenciasViajesTypeRegistroRespuestaConsultaLRAgenciasViajesItem), var_export($respuestaConsultaLRAgenciasViajesTypeRegistroRespuestaConsultaLRAgenciasViajesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRAgenciasViajes property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRAgenciasViajes value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType[] $registroRespuestaConsultaLRAgenciasViajes
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRAgenciasViajesType
     */
    public function setRegistroRespuestaConsultaLRAgenciasViajes(array $registroRespuestaConsultaLRAgenciasViajes = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRAgenciasViajesArrayErrorMessage = self::validateRegistroRespuestaConsultaLRAgenciasViajesForArrayConstraintsFromSetRegistroRespuestaConsultaLRAgenciasViajes($registroRespuestaConsultaLRAgenciasViajes))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRAgenciasViajesArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRAgenciasViajes) && count($registroRespuestaConsultaLRAgenciasViajes) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRAgenciasViajes)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRAgenciasViajes = $registroRespuestaConsultaLRAgenciasViajes;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRAgenciasViajes value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRAgenciasViajesType
     */
    public function addToRegistroRespuestaConsultaLRAgenciasViajes(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRAgenciasViajes property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaAgenciasViajesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRAgenciasViajes) && count($this->RegistroRespuestaConsultaLRAgenciasViajes) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRAgenciasViajes)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRAgenciasViajes[] = $item;
        return $this;
    }
}
