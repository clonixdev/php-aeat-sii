<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRBajaBienesInversionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos correspondientes al libro de Bienes de inversión
 * @subpackage Structs
 */
class LRBajaBienesInversionType extends RegistroSii
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType
     */
    public $IDFactura;
    /**
     * The IdentificacionBien
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 40
     * @var string
     */
    public $IdentificacionBien;
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
     * Constructor method for LRBajaBienesInversionType
     * @uses LRBajaBienesInversionType::setIDFactura()
     * @uses LRBajaBienesInversionType::setIdentificacionBien()
     * @uses LRBajaBienesInversionType::setRefExterna()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura
     * @param string $identificacionBien
     * @param string $refExterna
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null, $identificacionBien = null, $refExterna = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setIdentificacionBien($identificacionBien)
            ->setRefExterna($refExterna);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get IdentificacionBien value
     * @return string|null
     */
    public function getIdentificacionBien()
    {
        return $this->IdentificacionBien;
    }
    /**
     * Set IdentificacionBien value
     * @param string $identificacionBien
     * @return \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType
     */
    public function setIdentificacionBien($identificacionBien = null)
    {
        // validation for constraint: string
        if (!is_null($identificacionBien) && !is_string($identificacionBien)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificacionBien, true), gettype($identificacionBien)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($identificacionBien) && mb_strlen($identificacionBien) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($identificacionBien)), __LINE__);
        }
        $this->IdentificacionBien = $identificacionBien;
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
     * @return \ClonixDev\AeatSii\StructType\LRBajaBienesInversionType
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
