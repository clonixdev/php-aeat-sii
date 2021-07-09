<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DestinoFinalExpedRecepType StructType
 * @subpackage Structs
 */
class DestinoFinalExpedRecepType extends AbstractStructBase
{
    /**
     * The DescripBienes
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 120
     * @var string
     */
    public $DescripBienes;
    /**
     * The Cantidad
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 120
     * @var string
     */
    public $Cantidad;
    /**
     * The FechaOpDeclarada
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaOpDeclarada;
    /**
     * The DestinatarioFinal
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $DestinatarioFinal;
    /**
     * The BaseImponibleValor
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $BaseImponibleValor;
    /**
     * The PrecioUnitario
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $PrecioUnitario;
    /**
     * Constructor method for DestinoFinalExpedRecepType
     * @uses DestinoFinalExpedRecepType::setDescripBienes()
     * @uses DestinoFinalExpedRecepType::setCantidad()
     * @uses DestinoFinalExpedRecepType::setFechaOpDeclarada()
     * @uses DestinoFinalExpedRecepType::setDestinatarioFinal()
     * @uses DestinoFinalExpedRecepType::setBaseImponibleValor()
     * @uses DestinoFinalExpedRecepType::setPrecioUnitario()
     * @param string $descripBienes
     * @param string $cantidad
     * @param string $fechaOpDeclarada
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $destinatarioFinal
     * @param string $baseImponibleValor
     * @param string $precioUnitario
     */
    public function __construct($descripBienes = null, $cantidad = null, $fechaOpDeclarada = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $destinatarioFinal = null, $baseImponibleValor = null, $precioUnitario = null)
    {
        $this
            ->setDescripBienes($descripBienes)
            ->setCantidad($cantidad)
            ->setFechaOpDeclarada($fechaOpDeclarada)
            ->setDestinatarioFinal($destinatarioFinal)
            ->setBaseImponibleValor($baseImponibleValor)
            ->setPrecioUnitario($precioUnitario);
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
     * @return \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType
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
     * @return \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType
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
     * Get FechaOpDeclarada value
     * @return string|null
     */
    public function getFechaOpDeclarada()
    {
        return $this->FechaOpDeclarada;
    }
    /**
     * Set FechaOpDeclarada value
     * @param string $fechaOpDeclarada
     * @return \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType
     */
    public function setFechaOpDeclarada($fechaOpDeclarada = null)
    {
        // validation for constraint: string
        if (!is_null($fechaOpDeclarada) && !is_string($fechaOpDeclarada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaOpDeclarada, true), gettype($fechaOpDeclarada)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaOpDeclarada) && mb_strlen($fechaOpDeclarada) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaOpDeclarada)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaOpDeclarada) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaOpDeclarada)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaOpDeclarada, true)), __LINE__);
        }
        $this->FechaOpDeclarada = $fechaOpDeclarada;
        return $this;
    }
    /**
     * Get DestinatarioFinal value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType|null
     */
    public function getDestinatarioFinal()
    {
        return $this->DestinatarioFinal;
    }
    /**
     * Set DestinatarioFinal value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $destinatarioFinal
     * @return \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType
     */
    public function setDestinatarioFinal(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $destinatarioFinal = null)
    {
        $this->DestinatarioFinal = $destinatarioFinal;
        return $this;
    }
    /**
     * Get BaseImponibleValor value
     * @return string|null
     */
    public function getBaseImponibleValor()
    {
        return $this->BaseImponibleValor;
    }
    /**
     * Set BaseImponibleValor value
     * @param string $baseImponibleValor
     * @return \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType
     */
    public function setBaseImponibleValor($baseImponibleValor = null)
    {
        // validation for constraint: string
        if (!is_null($baseImponibleValor) && !is_string($baseImponibleValor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseImponibleValor, true), gettype($baseImponibleValor)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($baseImponibleValor) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $baseImponibleValor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($baseImponibleValor, true)), __LINE__);
        }
        $this->BaseImponibleValor = $baseImponibleValor;
        return $this;
    }
    /**
     * Get PrecioUnitario value
     * @return string|null
     */
    public function getPrecioUnitario()
    {
        return $this->PrecioUnitario;
    }
    /**
     * Set PrecioUnitario value
     * @param string $precioUnitario
     * @return \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType
     */
    public function setPrecioUnitario($precioUnitario = null)
    {
        // validation for constraint: string
        if (!is_null($precioUnitario) && !is_string($precioUnitario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($precioUnitario, true), gettype($precioUnitario)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($precioUnitario) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $precioUnitario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($precioUnitario, true)), __LINE__);
        }
        $this->PrecioUnitario = $precioUnitario;
        return $this;
    }
}
