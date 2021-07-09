<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaCobrosType StructType
 * @subpackage Structs
 */
class RespuestaConsultaCobrosType extends RespuestaConsultaFacturaCobrosType
{
    /**
     * The RegistroRespuestaConsultaCobros
     * Meta information extracted from the WSDL
     * - maxOccurs: 10000
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType[]
     */
    public $RegistroRespuestaConsultaCobros;
    /**
     * The ClavePaginacion
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $ClavePaginacion;
    /**
     * Constructor method for RespuestaConsultaCobrosType
     * @uses RespuestaConsultaCobrosType::setRegistroRespuestaConsultaCobros()
     * @uses RespuestaConsultaCobrosType::setClavePaginacion()
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType[] $registroRespuestaConsultaCobros
     * @param float $clavePaginacion
     */
    public function __construct(array $registroRespuestaConsultaCobros = array(), $clavePaginacion = null)
    {
        $this
            ->setRegistroRespuestaConsultaCobros($registroRespuestaConsultaCobros)
            ->setClavePaginacion($clavePaginacion);
    }
    /**
     * Get RegistroRespuestaConsultaCobros value
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType[]|null
     */
    public function getRegistroRespuestaConsultaCobros()
    {
        return $this->RegistroRespuestaConsultaCobros;
    }
    /**
     * This method is responsible for validating the values passed to the setRegistroRespuestaConsultaCobros method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistroRespuestaConsultaCobros method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistroRespuestaConsultaCobrosForArrayConstraintsFromSetRegistroRespuestaConsultaCobros(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $respuestaConsultaCobrosTypeRegistroRespuestaConsultaCobrosItem) {
            // validation for constraint: itemType
            if (!$respuestaConsultaCobrosTypeRegistroRespuestaConsultaCobrosItem instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType) {
                $invalidValues[] = is_object($respuestaConsultaCobrosTypeRegistroRespuestaConsultaCobrosItem) ? get_class($respuestaConsultaCobrosTypeRegistroRespuestaConsultaCobrosItem) : sprintf('%s(%s)', gettype($respuestaConsultaCobrosTypeRegistroRespuestaConsultaCobrosItem), var_export($respuestaConsultaCobrosTypeRegistroRespuestaConsultaCobrosItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RegistroRespuestaConsultaCobros property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set RegistroRespuestaConsultaCobros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType[] $registroRespuestaConsultaCobros
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaCobrosType
     */
    public function setRegistroRespuestaConsultaCobros(array $registroRespuestaConsultaCobros = array())
    {
        // validation for constraint: array
        if ('' !== ($registroRespuestaConsultaCobrosArrayErrorMessage = self::validateRegistroRespuestaConsultaCobrosForArrayConstraintsFromSetRegistroRespuestaConsultaCobros($registroRespuestaConsultaCobros))) {
            throw new \InvalidArgumentException($registroRespuestaConsultaCobrosArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($registroRespuestaConsultaCobros) && count($registroRespuestaConsultaCobros) > 10000) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 10000', count($registroRespuestaConsultaCobros)), __LINE__);
        }
        $this->RegistroRespuestaConsultaCobros = $registroRespuestaConsultaCobros;
        return $this;
    }
    /**
     * Add item to RegistroRespuestaConsultaCobros value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType $item
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaCobrosType
     */
    public function addToRegistroRespuestaConsultaCobros(\ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType) {
            throw new \InvalidArgumentException(sprintf('The RegistroRespuestaConsultaCobros property can only contain items of type \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaCobrosType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(10000)
        if (is_array($this->RegistroRespuestaConsultaCobros) && count($this->RegistroRespuestaConsultaCobros) >= 10000) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 10000', count($this->RegistroRespuestaConsultaCobros)), __LINE__);
        }
        $this->RegistroRespuestaConsultaCobros[] = $item;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaCobrosType
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
