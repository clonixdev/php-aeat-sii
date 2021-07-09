<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaPagosType StructType
 * @subpackage Structs
 */
class RespuestaConsultaPagosType extends RespuestaConsultaFacturaPagosType
{
    /**
     * The RegistroRespuestaConsultaPagos
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType[]
     */
    public $RegistroRespuestaConsultaPagos;
    /**
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ClavePaginacion;
    /**
     * Constructor method for RespuestaConsultaPagosType
     * @uses RespuestaConsultaPagosType::setRegistroRespuestaConsultaPagos()
     * @uses RespuestaConsultaPagosType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType[] $registroRespuestaConsultaPagos
     * @param float $clavePaginacion
     */
    public function __construct(array $registroRespuestaConsultaPagos = array(), $clavePaginacion = null)
    {
        $this
            ->setRegistroRespuestaConsultaPagos($registroRespuestaConsultaPagos)
            ->setClavePaginacion($clavePaginacion);
    }
    /**
     * Get RegistroRespuestaConsultaPagos value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType[]|null
     */
    public function getRegistroRespuestaConsultaPagos()
    {
        return $this->RegistroRespuestaConsultaPagos;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaPagos method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaPagos method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaPagosForArrayConstraintsFromSetRegistroRespuestaConsultaPagos(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaPagosTypeRegistroRespuestaConsultaPagosItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaPagosTypeRegistroRespuestaConsultaPagosItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType) {
                $invalidValues[] = is_object($respuestaConsultaPagosTypeRegistroRespuestaConsultaPagosItem) ? get_class($respuestaConsultaPagosTypeRegistroRespuestaConsultaPagosItem) : sprintf('%s(%s)', gettype($respuestaConsultaPagosTypeRegistroRespuestaConsultaPagosItem), var_export($respuestaConsultaPagosTypeRegistroRespuestaConsultaPagosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaPagos property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaPagos value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType[] $registroRespuestaConsultaPagos
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaPagosType
     */
    public function setRegistroRespuestaConsultaPagos(array $registroRespuestaConsultaPagos = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaPagosArrayErrorMessage = self::validateRegistroRespuestaConsultaPagosForArrayConstraintsFromSetRegistroRespuestaConsultaPagos($registroRespuestaConsultaPagos))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaPagosArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaPagos) && count($registroRespuestaConsultaPagos) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaPagos)), __LINE__);
        }
        $this->RegistroRespuestaConsultaPagos = $registroRespuestaConsultaPagos;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaPagos value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaPagosType
     */
    public function addToRegistroRespuestaConsultaPagos(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaPagos property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaPagosType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaPagos) && count($this->RegistroRespuestaConsultaPagos) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaPagos)), __LINE__);
        }
        $this->RegistroRespuestaConsultaPagos[] = $item;
        return $this;
    }
    /**
     * Get ClavePaginacion value
     * @return float|null
     */
    public function getClavePaginacion()
    {
        return $this->ClavePaginacion;
    }
    /**
     * Set ClavePaginacion value
     * @param float $clavePaginacion
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaPagosType
     */
    public function setClavePaginacion($clavePaginacion = null)
    {
        // validation for constraint: float
        if (!is_null($clavePaginacion) && !(is_float($clavePaginacion) || is_numeric($clavePaginacion))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($clavePaginacion, true), gettype($clavePaginacion)), __LINE__);
        }
        $this->ClavePaginacion = $clavePaginacion;
        return $this;
    }
}
