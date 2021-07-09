<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for NoExenta StructType
 * @subpackage Structs
 */
class NoExenta extends AbstractStructBase
{
    /**
     * The TipoNoExenta
     * @var string
     */
    public $TipoNoExenta;
    /**
     * The DesgloseIVA
     * @var \ClonixDev\AeatSii\StructType\DesgloseIVA
     */
    public $DesgloseIVA;
    /**
     * Constructor method for NoExenta
     * @uses NoExenta::setTipoNoExenta()
     * @uses NoExenta::setDesgloseIVA()
     * @param string $tipoNoExenta
     * @param \ClonixDev\AeatSii\StructType\DesgloseIVA $desgloseIVA
     */
    public function __construct($tipoNoExenta = null, \ClonixDev\AeatSii\StructType\DesgloseIVA $desgloseIVA = null)
    {
        $this
            ->setTipoNoExenta($tipoNoExenta)
            ->setDesgloseIVA($desgloseIVA);
    }
    /**
     * Get TipoNoExenta value
     * @return string|null
     */
    public function getTipoNoExenta()
    {
        return $this->TipoNoExenta;
    }
    /**
     * Set TipoNoExenta value
     * @uses \ClonixDev\AeatSii\EnumType\TipoOperacionSujetaNoExentaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\TipoOperacionSujetaNoExentaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoNoExenta
     * @return \ClonixDev\AeatSii\StructType\NoExenta
     */
    public function setTipoNoExenta($tipoNoExenta = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\TipoOperacionSujetaNoExentaType::valueIsValid($tipoNoExenta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\TipoOperacionSujetaNoExentaType', is_array($tipoNoExenta) ? implode(', ', $tipoNoExenta) : var_export($tipoNoExenta, true), implode(', ', \ClonixDev\AeatSii\EnumType\TipoOperacionSujetaNoExentaType::getValidValues())), __LINE__);
        }
        $this->TipoNoExenta = $tipoNoExenta;
        return $this;
    }
    /**
     * Get DesgloseIVA value
     * @return \ClonixDev\AeatSii\StructType\DesgloseIVA|null
     */
    public function getDesgloseIVA()
    {
        return $this->DesgloseIVA;
    }
    /**
     * Set DesgloseIVA value
     * @param \ClonixDev\AeatSii\StructType\DesgloseIVA $desgloseIVA
     * @return \ClonixDev\AeatSii\StructType\NoExenta
     */
    public function setDesgloseIVA(\ClonixDev\AeatSii\StructType\DesgloseIVA $desgloseIVA = null)
    {
        $this->DesgloseIVA = $desgloseIVA;
        return $this;
    }
}
