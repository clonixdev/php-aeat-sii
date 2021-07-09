<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRBajaVentaBienesConsignaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente al libro venta de bienes en consigna.
 * @subpackage Structs
 */
class LRBajaVentaBienesConsignaType extends AbstractStructBase
{
    /**
     * The IdRegistroDeclarado
     * @var \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType
     */
    public $IdRegistroDeclarado;
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
     * Constructor method for LRBajaVentaBienesConsignaType
     * @uses LRBajaVentaBienesConsignaType::setIdRegistroDeclarado()
     * @uses LRBajaVentaBienesConsignaType::setRefExterna()
     * @param \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado
     * @param string $refExterna
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado = null, $refExterna = null)
    {
        $this
            ->setIdRegistroDeclarado($idRegistroDeclarado)
            ->setRefExterna($refExterna);
    }
    /**
     * Get IdRegistroDeclarado value
     * @return \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType|null
     */
    public function getIdRegistroDeclarado()
    {
        return $this->IdRegistroDeclarado;
    }
    /**
     * Set IdRegistroDeclarado value
     * @param \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado
     * @return \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType
     */
    public function setIdRegistroDeclarado(\ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado = null)
    {
        $this->IdRegistroDeclarado = $idRegistroDeclarado;
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
     * @return \ClonixDev\AeatSii\StructType\LRBajaVentaBienesConsignaType
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
