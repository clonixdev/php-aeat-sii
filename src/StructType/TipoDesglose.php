<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TipoDesglose StructType
 * @subpackage Structs
 */
class TipoDesglose extends AbstractStructBase
{
    /**
     * The DesgloseFactura
     * Meta information extracted from the WSDL
     * - choice: DesgloseFactura | DesgloseTipoOperacion | DesgloseFactura | DesgloseTipoOperacion | DesgloseFactura | DesgloseTipoOperacion
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \ClonixDev\AeatSii\StructType\TipoSinDesgloseType
     */
    public $DesgloseFactura;
    /**
     * The DesgloseTipoOperacion
     * Meta information extracted from the WSDL
     * - choice: DesgloseFactura | DesgloseTipoOperacion | DesgloseFactura | DesgloseTipoOperacion | DesgloseFactura | DesgloseTipoOperacion
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \ClonixDev\AeatSii\StructType\TipoConDesgloseType
     */
    public $DesgloseTipoOperacion;
    /**
     * Constructor method for TipoDesglose
     * @uses TipoDesglose::setDesgloseFactura()
     * @uses TipoDesglose::setDesgloseTipoOperacion()
     * @param \ClonixDev\AeatSii\StructType\TipoSinDesgloseType $desgloseFactura
     * @param \ClonixDev\AeatSii\StructType\TipoConDesgloseType $desgloseTipoOperacion
     */
    public function __construct( $desgloseFactura = null, \ClonixDev\AeatSii\StructType\TipoConDesgloseType $desgloseTipoOperacion = null)
    {
        $this
            ->setDesgloseFactura($desgloseFactura)
            ->setDesgloseTipoOperacion($desgloseTipoOperacion);
    }
    /**
     * Get DesgloseFactura value
     * @return \ClonixDev\AeatSii\StructType\TipoSinDesgloseType|null
     */
    public function getDesgloseFactura()
    {
        return isset($this->DesgloseFactura) ? $this->DesgloseFactura : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDesgloseFactura method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDesgloseFactura method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDesgloseFacturaForChoiceConstraintsFromSetDesgloseFactura($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DesgloseTipoOperacion',
            'DesgloseTipoOperacion',
            'DesgloseTipoOperacion',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DesgloseFactura can\'t be set as the property %s is already set. Only one property must be set among these properties: DesgloseFactura, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DesgloseFactura value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\TipoSinDesgloseType $desgloseFactura
     * @return \ClonixDev\AeatSii\StructType\TipoDesglose
     */
    public function setDesgloseFactura( $desgloseFactura = null)
    {
        // validation for constraint: choice(DesgloseFactura, DesgloseTipoOperacion, DesgloseFactura, DesgloseTipoOperacion, DesgloseFactura, DesgloseTipoOperacion)
        if ('' !== ($desgloseFacturaChoiceErrorMessage = self::validateDesgloseFacturaForChoiceConstraintsFromSetDesgloseFactura($desgloseFactura))) {
            throw new \InvalidArgumentException($desgloseFacturaChoiceErrorMessage, __LINE__);
        }
        if (is_null($desgloseFactura) || (is_array($desgloseFactura) && empty($desgloseFactura))) {
            unset($this->DesgloseFactura);
        } else {
            $this->DesgloseFactura = $desgloseFactura;
        }
        return $this;
    }
    /**
     * Get DesgloseTipoOperacion value
     * @return \ClonixDev\AeatSii\StructType\TipoConDesgloseType|null
     */
    public function getDesgloseTipoOperacion()
    {
        return isset($this->DesgloseTipoOperacion) ? $this->DesgloseTipoOperacion : null;
    }
    /**
     * This method is responsible for validating the value passed to the setDesgloseTipoOperacion method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDesgloseTipoOperacion method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateDesgloseTipoOperacionForChoiceConstraintsFromSetDesgloseTipoOperacion($value)
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'DesgloseFactura',
            'DesgloseFactura',
            'DesgloseFactura',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new \InvalidArgumentException(sprintf('The property DesgloseTipoOperacion can\'t be set as the property %s is already set. Only one property must be set among these properties: DesgloseTipoOperacion, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (\InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        return $message;
    }
    /**
     * Set DesgloseTipoOperacion value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\TipoConDesgloseType $desgloseTipoOperacion
     * @return \ClonixDev\AeatSii\StructType\TipoDesglose
     */
    public function setDesgloseTipoOperacion(\ClonixDev\AeatSii\StructType\TipoConDesgloseType $desgloseTipoOperacion = null)
    {
        // validation for constraint: choice(DesgloseFactura, DesgloseTipoOperacion, DesgloseFactura, DesgloseTipoOperacion, DesgloseFactura, DesgloseTipoOperacion)
        if ('' !== ($desgloseTipoOperacionChoiceErrorMessage = self::validateDesgloseTipoOperacionForChoiceConstraintsFromSetDesgloseTipoOperacion($desgloseTipoOperacion))) {
            throw new \InvalidArgumentException($desgloseTipoOperacionChoiceErrorMessage, __LINE__);
        }
        if (is_null($desgloseTipoOperacion) || (is_array($desgloseTipoOperacion) && empty($desgloseTipoOperacion))) {
            unset($this->DesgloseTipoOperacion);
        } else {
            $this->DesgloseTipoOperacion = $desgloseTipoOperacion;
        }
        return $this;
    }
}
