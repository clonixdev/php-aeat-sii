<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatosPagoCobroType StructType
 * @subpackage Structs
 */
class DatosPagoCobroType extends AbstractStructBase
{
    /**
     * The Fecha
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $Fecha;
    /**
     * The Importe
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $Importe;
    /**
     * The Medio
     * @var string
     */
    public $Medio;
    /**
     * The Cuenta_O_Medio
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 34
     * - minOccurs: 0
     * @var string
     */
    public $Cuenta_O_Medio;
    /**
     * Constructor method for DatosPagoCobroType
     * @uses DatosPagoCobroType::setFecha()
     * @uses DatosPagoCobroType::setImporte()
     * @uses DatosPagoCobroType::setMedio()
     * @uses DatosPagoCobroType::setCuenta_O_Medio()
     * @param string $fecha
     * @param string $importe
     * @param string $medio
     * @param string $cuenta_O_Medio
     */
    public function __construct($fecha = null, $importe = null, $medio = null, $cuenta_O_Medio = null)
    {
        $this
            ->setFecha($fecha)
            ->setImporte($importe)
            ->setMedio($medio)
            ->setCuenta_O_Medio($cuenta_O_Medio);
    }
    /**
     * Get Fecha value
     * @return string|null
     */
    public function getFecha()
    {
        return $this->Fecha;
    }
    /**
     * Set Fecha value
     * @param string $fecha
     * @return \ClonixDev\AeatSii\StructType\DatosPagoCobroType
     */
    public function setFecha($fecha = null)
    {
        // validation for constraint: string
        if (!is_null($fecha) && !is_string($fecha)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fecha, true), gettype($fecha)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fecha) && mb_strlen($fecha) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fecha)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fecha) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fecha)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fecha, true)), __LINE__);
        }
        $this->Fecha = $fecha;
        return $this;
    }
    /**
     * Get Importe value
     * @return string|null
     */
    public function getImporte()
    {
        return $this->Importe;
    }
    /**
     * Set Importe value
     * @param string $importe
     * @return \ClonixDev\AeatSii\StructType\DatosPagoCobroType
     */
    public function setImporte($importe = null)
    {
        // validation for constraint: string
        if (!is_null($importe) && !is_string($importe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importe, true), gettype($importe)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($importe) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $importe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($importe, true)), __LINE__);
        }
        $this->Importe = $importe;
        return $this;
    }
    /**
     * Get Medio value
     * @return string|null
     */
    public function getMedio()
    {
        return $this->Medio;
    }
    /**
     * Set Medio value
     * @uses \ClonixDev\AeatSii\EnumType\MedioPagoType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\MedioPagoType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $medio
     * @return \ClonixDev\AeatSii\StructType\DatosPagoCobroType
     */
    public function setMedio($medio = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\MedioPagoType::valueIsValid($medio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\MedioPagoType', is_array($medio) ? implode(', ', $medio) : var_export($medio, true), implode(', ', \ClonixDev\AeatSii\EnumType\MedioPagoType::getValidValues())), __LINE__);
        }
        $this->Medio = $medio;
        return $this;
    }
    /**
     * Get Cuenta_O_Medio value
     * @return string|null
     */
    public function getCuenta_O_Medio()
    {
        return $this->Cuenta_O_Medio;
    }
    /**
     * Set Cuenta_O_Medio value
     * @param string $cuenta_O_Medio
     * @return \ClonixDev\AeatSii\StructType\DatosPagoCobroType
     */
    public function setCuenta_O_Medio($cuenta_O_Medio = null)
    {
        // validation for constraint: string
        if (!is_null($cuenta_O_Medio) && !is_string($cuenta_O_Medio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cuenta_O_Medio, true), gettype($cuenta_O_Medio)), __LINE__);
        }
        // validation for constraint: maxLength(34)
        if (!is_null($cuenta_O_Medio) && mb_strlen($cuenta_O_Medio) > 34) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 34', mb_strlen($cuenta_O_Medio)), __LINE__);
        }
        $this->Cuenta_O_Medio = $cuenta_O_Medio;
        return $this;
    }
}
