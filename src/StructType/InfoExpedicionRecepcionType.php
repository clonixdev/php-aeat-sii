<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InfoExpedicionRecepcionType StructType
 * @subpackage Structs
 */
class InfoExpedicionRecepcionType extends AbstractStructBase
{
    /**
     * The ValorBienes
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $ValorBienes;
    /**
     * The EmPartida
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EmPartida;
    /**
     * The EmLlegada
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EmLlegada;
    /**
     * The FechaExpedicion
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - minOccurs: 0
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaExpedicion;
    /**
     * The FechaLlegada
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - minOccurs: 0
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaLlegada;
    /**
     * The Cantidad
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 120
     * @var string
     */
    public $Cantidad;
    /**
     * The DescripBienes
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 120
     * @var string
     */
    public $DescripBienes;
    /**
     * The FechaSustitucion
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - minOccurs: 0
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaSustitucion;
    /**
     * Constructor method for InfoExpedicionRecepcionType
     * @uses InfoExpedicionRecepcionType::setValorBienes()
     * @uses InfoExpedicionRecepcionType::setEmPartida()
     * @uses InfoExpedicionRecepcionType::setEmLlegada()
     * @uses InfoExpedicionRecepcionType::setFechaExpedicion()
     * @uses InfoExpedicionRecepcionType::setFechaLlegada()
     * @uses InfoExpedicionRecepcionType::setCantidad()
     * @uses InfoExpedicionRecepcionType::setDescripBienes()
     * @uses InfoExpedicionRecepcionType::setFechaSustitucion()
     * @param string $valorBienes
     * @param string $emPartida
     * @param string $emLlegada
     * @param string $fechaExpedicion
     * @param string $fechaLlegada
     * @param string $cantidad
     * @param string $descripBienes
     * @param string $fechaSustitucion
     */
    public function __construct($valorBienes = null, $emPartida = null, $emLlegada = null, $fechaExpedicion = null, $fechaLlegada = null, $cantidad = null, $descripBienes = null, $fechaSustitucion = null)
    {
        $this
            ->setValorBienes($valorBienes)
            ->setEmPartida($emPartida)
            ->setEmLlegada($emLlegada)
            ->setFechaExpedicion($fechaExpedicion)
            ->setFechaLlegada($fechaLlegada)
            ->setCantidad($cantidad)
            ->setDescripBienes($descripBienes)
            ->setFechaSustitucion($fechaSustitucion);
    }
    /**
     * Get ValorBienes value
     * @return string|null
     */
    public function getValorBienes()
    {
        return $this->ValorBienes;
    }
    /**
     * Set ValorBienes value
     * @param string $valorBienes
     * @return \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType
     */
    public function setValorBienes($valorBienes = null)
    {
        // validation for constraint: string
        if (!is_null($valorBienes) && !is_string($valorBienes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($valorBienes, true), gettype($valorBienes)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($valorBienes) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $valorBienes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($valorBienes, true)), __LINE__);
        }
        $this->ValorBienes = $valorBienes;
        return $this;
    }
    /**
     * Get EmPartida value
     * @return string|null
     */
    public function getEmPartida()
    {
        return $this->EmPartida;
    }
    /**
     * Set EmPartida value
     * @uses \ClonixDev\AeatSii\EnumType\CountryMiembroType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\CountryMiembroType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $emPartida
     * @return \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType
     */
    public function setEmPartida($emPartida = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\CountryMiembroType::valueIsValid($emPartida)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\CountryMiembroType', is_array($emPartida) ? implode(', ', $emPartida) : var_export($emPartida, true), implode(', ', \ClonixDev\AeatSii\EnumType\CountryMiembroType::getValidValues())), __LINE__);
        }
        $this->EmPartida = $emPartida;
        return $this;
    }
    /**
     * Get EmLlegada value
     * @return string|null
     */
    public function getEmLlegada()
    {
        return $this->EmLlegada;
    }
    /**
     * Set EmLlegada value
     * @uses \ClonixDev\AeatSii\EnumType\CountryMiembroType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\CountryMiembroType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $emLlegada
     * @return \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType
     */
    public function setEmLlegada($emLlegada = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\CountryMiembroType::valueIsValid($emLlegada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\CountryMiembroType', is_array($emLlegada) ? implode(', ', $emLlegada) : var_export($emLlegada, true), implode(', ', \ClonixDev\AeatSii\EnumType\CountryMiembroType::getValidValues())), __LINE__);
        }
        $this->EmLlegada = $emLlegada;
        return $this;
    }
    /**
     * Get FechaExpedicion value
     * @return string|null
     */
    public function getFechaExpedicion()
    {
        return $this->FechaExpedicion;
    }
    /**
     * Set FechaExpedicion value
     * @param string $fechaExpedicion
     * @return \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType
     */
    public function setFechaExpedicion($fechaExpedicion = null)
    {
        // validation for constraint: string
        if (!is_null($fechaExpedicion) && !is_string($fechaExpedicion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaExpedicion, true), gettype($fechaExpedicion)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaExpedicion) && mb_strlen($fechaExpedicion) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaExpedicion)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaExpedicion) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaExpedicion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaExpedicion, true)), __LINE__);
        }
        $this->FechaExpedicion = $fechaExpedicion;
        return $this;
    }
    /**
     * Get FechaLlegada value
     * @return string|null
     */
    public function getFechaLlegada()
    {
        return $this->FechaLlegada;
    }
    /**
     * Set FechaLlegada value
     * @param string $fechaLlegada
     * @return \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType
     */
    public function setFechaLlegada($fechaLlegada = null)
    {
        // validation for constraint: string
        if (!is_null($fechaLlegada) && !is_string($fechaLlegada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaLlegada, true), gettype($fechaLlegada)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaLlegada) && mb_strlen($fechaLlegada) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaLlegada)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaLlegada) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaLlegada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaLlegada, true)), __LINE__);
        }
        $this->FechaLlegada = $fechaLlegada;
        return $this;
    }
    /**
     * Get Cantidad value
     * @return string|null
     */
    public function getCantidad()
    {
        return $this->Cantidad;
    }
    /**
     * Set Cantidad value
     * @param string $cantidad
     * @return \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType
     */
    public function setCantidad($cantidad = null)
    {
        // validation for constraint: string
        if (!is_null($cantidad) && !is_string($cantidad)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cantidad, true), gettype($cantidad)), __LINE__);
        }
        // validation for constraint: maxLength(120)
        if (!is_null($cantidad) && mb_strlen($cantidad) > 120) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 120', mb_strlen($cantidad)), __LINE__);
        }
        $this->Cantidad = $cantidad;
        return $this;
    }
    /**
     * Get DescripBienes value
     * @return string|null
     */
    public function getDescripBienes()
    {
        return $this->DescripBienes;
    }
    /**
     * Set DescripBienes value
     * @param string $descripBienes
     * @return \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType
     */
    public function setDescripBienes($descripBienes = null)
    {
        // validation for constraint: string
        if (!is_null($descripBienes) && !is_string($descripBienes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripBienes, true), gettype($descripBienes)), __LINE__);
        }
        // validation for constraint: maxLength(120)
        if (!is_null($descripBienes) && mb_strlen($descripBienes) > 120) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 120', mb_strlen($descripBienes)), __LINE__);
        }
        $this->DescripBienes = $descripBienes;
        return $this;
    }
    /**
     * Get FechaSustitucion value
     * @return string|null
     */
    public function getFechaSustitucion()
    {
        return $this->FechaSustitucion;
    }
    /**
     * Set FechaSustitucion value
     * @param string $fechaSustitucion
     * @return \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType
     */
    public function setFechaSustitucion($fechaSustitucion = null)
    {
        // validation for constraint: string
        if (!is_null($fechaSustitucion) && !is_string($fechaSustitucion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaSustitucion, true), gettype($fechaSustitucion)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaSustitucion) && mb_strlen($fechaSustitucion) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaSustitucion)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaSustitucion) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaSustitucion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaSustitucion, true)), __LINE__);
        }
        $this->FechaSustitucion = $fechaSustitucion;
        return $this;
    }
}
