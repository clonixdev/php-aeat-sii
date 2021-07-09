<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRFacturasEmitidasType StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRFacturasEmitidasType extends RespuestaConsultaLRFacturasType
{
    /**
     * The RegistroRespuestaConsultaLRFacturasEmitidas
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType[]
     */
    public $RegistroRespuestaConsultaLRFacturasEmitidas;
    /**
     * Constructor method for RespuestaConsultaLRFacturasEmitidasType
     * @uses RespuestaConsultaLRFacturasEmitidasType::setRegistroRespuestaConsultaLRFacturasEmitidas()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType[] $registroRespuestaConsultaLRFacturasEmitidas
     */
    public function __construct(array $registroRespuestaConsultaLRFacturasEmitidas = array())
    {
        $this
            ->setRegistroRespuestaConsultaLRFacturasEmitidas($registroRespuestaConsultaLRFacturasEmitidas);
    }
    /**
     * Get RegistroRespuestaConsultaLRFacturasEmitidas value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType[]|null
     */
    public function getRegistroRespuestaConsultaLRFacturasEmitidas()
    {
        return $this->RegistroRespuestaConsultaLRFacturasEmitidas;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaLRFacturasEmitidas method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaLRFacturasEmitidas method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaLRFacturasEmitidasForArrayConstraintsFromSetRegistroRespuestaConsultaLRFacturasEmitidas(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaLRFacturasEmitidasTypeRegistroRespuestaConsultaLRFacturasEmitidasItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaLRFacturasEmitidasTypeRegistroRespuestaConsultaLRFacturasEmitidasItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType) {
                $invalidValues[] = is_object($respuestaConsultaLRFacturasEmitidasTypeRegistroRespuestaConsultaLRFacturasEmitidasItem) ? get_class($respuestaConsultaLRFacturasEmitidasTypeRegistroRespuestaConsultaLRFacturasEmitidasItem) : sprintf('%s(%s)', gettype($respuestaConsultaLRFacturasEmitidasTypeRegistroRespuestaConsultaLRFacturasEmitidasItem), var_export($respuestaConsultaLRFacturasEmitidasTypeRegistroRespuestaConsultaLRFacturasEmitidasItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaLRFacturasEmitidas property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaLRFacturasEmitidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType[] $registroRespuestaConsultaLRFacturasEmitidas
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFacturasEmitidasType
     */
    public function setRegistroRespuestaConsultaLRFacturasEmitidas(array $registroRespuestaConsultaLRFacturasEmitidas = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaLRFacturasEmitidasArrayErrorMessage = self::validateRegistroRespuestaConsultaLRFacturasEmitidasForArrayConstraintsFromSetRegistroRespuestaConsultaLRFacturasEmitidas($registroRespuestaConsultaLRFacturasEmitidas))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaLRFacturasEmitidasArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaLRFacturasEmitidas) && count($registroRespuestaConsultaLRFacturasEmitidas) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaLRFacturasEmitidas)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFacturasEmitidas = $registroRespuestaConsultaLRFacturasEmitidas;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaLRFacturasEmitidas value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFacturasEmitidasType
     */
    public function addToRegistroRespuestaConsultaLRFacturasEmitidas(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaLRFacturasEmitidas property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaLRFacturasEmitidas) && count($this->RegistroRespuestaConsultaLRFacturasEmitidas) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaLRFacturasEmitidas)), __LINE__);
        }
        $this->RegistroRespuestaConsultaLRFacturasEmitidas[] = $item;
        return $this;
    }
}
