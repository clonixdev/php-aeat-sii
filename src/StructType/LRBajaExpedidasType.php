<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRBajaExpedidasType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos correspondientes a la baja de Facturas emitidas
 * @subpackage Structs
 */
class LRBajaExpedidasType extends RegistroSii
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType
     */
    public $IDFactura;
    /**
     * The RefExterna
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 60
     * - minOccurs: 0
     * @var string
     */
    public $RefExterna;
    /**
     * Constructor method for LRBajaExpedidasType
     * @uses LRBajaExpedidasType::setIDFactura()
     * @uses LRBajaExpedidasType::setRefExterna()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura
     * @param string $refExterna
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null, $refExterna = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setRefExterna($refExterna);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\LRBajaExpedidasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaBCType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get RefExterna value
     * @return string|null
     */
    public function getRefExterna()
    {
        return $this->RefExterna;
    }
    /**
     * Set RefExterna value
     * @param string $refExterna
     * @return \ClonixDev\AeatSii\StructType\LRBajaExpedidasType
     */
    public function setRefExterna($refExterna = null)
    {
        // validation for constraint: string
        if (!is_null($refExterna) && !is_string($refExterna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refExterna, true), gettype($refExterna)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($refExterna) && mb_strlen($refExterna) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($refExterna)), __LINE__);
        }
        $this->RefExterna = $refExterna;
        return $this;
    }
}
