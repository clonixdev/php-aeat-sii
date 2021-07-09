<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DepositoType StructType
 * @subpackage Structs
 */
class DepositoType extends AbstractStructBase
{
    /**
     * The Depositario
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Depositario;
    /**
     * The DireccionAlmacen
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 120
     * @var string
     */
    public $DireccionAlmacen;
    /**
     * Constructor method for DepositoType
     * @uses DepositoType::setDepositario()
     * @uses DepositoType::setDireccionAlmacen()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $depositario
     * @param string $direccionAlmacen
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $depositario = null, $direccionAlmacen = null)
    {
        $this
            ->setDepositario($depositario)
            ->setDireccionAlmacen($direccionAlmacen);
    }
    /**
     * Get Depositario value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType|null
     */
    public function getDepositario()
    {
        return $this->Depositario;
    }
    /**
     * Set Depositario value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $depositario
     * @return \ClonixDev\AeatSii\StructType\DepositoType
     */
    public function setDepositario(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $depositario = null)
    {
        $this->Depositario = $depositario;
        return $this;
    }
    /**
     * Get DireccionAlmacen value
     * @return string|null
     */
    public function getDireccionAlmacen()
    {
        return $this->DireccionAlmacen;
    }
    /**
     * Set DireccionAlmacen value
     * @param string $direccionAlmacen
     * @return \ClonixDev\AeatSii\StructType\DepositoType
     */
    public function setDireccionAlmacen($direccionAlmacen = null)
    {
        // validation for constraint: string
        if (!is_null($direccionAlmacen) && !is_string($direccionAlmacen)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($direccionAlmacen, true), gettype($direccionAlmacen)), __LINE__);
        }
        // validation for constraint: maxLength(120)
        if (!is_null($direccionAlmacen) && mb_strlen($direccionAlmacen) > 120) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 120', mb_strlen($direccionAlmacen)), __LINE__);
        }
        $this->DireccionAlmacen = $direccionAlmacen;
        return $this;
    }
}
