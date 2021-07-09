<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DesgloseFacturaRecibidasType StructType
 * @subpackage Structs
 */
class DesgloseFacturaRecibidasType extends AbstractStructBase
{
    /**
     * The InversionSujetoPasivo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\InversionSujetoPasivo
     */
    public $InversionSujetoPasivo;
    /**
     * The DesgloseIVA
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\DesgloseIVA
     */
    public $DesgloseIVA;
    /**
     * Constructor method for DesgloseFacturaRecibidasType
     * @uses DesgloseFacturaRecibidasType::setInversionSujetoPasivo()
     * @uses DesgloseFacturaRecibidasType::setDesgloseIVA()
     * @param \ClonixDev\AeatSii\StructType\InversionSujetoPasivo $inversionSujetoPasivo
     * @param \ClonixDev\AeatSii\StructType\DesgloseIVA $desgloseIVA
     */
    public function __construct(\ClonixDev\AeatSii\StructType\InversionSujetoPasivo $inversionSujetoPasivo = null, \ClonixDev\AeatSii\StructType\DesgloseIVA $desgloseIVA = null)
    {
        $this
            ->setInversionSujetoPasivo($inversionSujetoPasivo)
            ->setDesgloseIVA($desgloseIVA);
    }
    /**
     * Get InversionSujetoPasivo value
     * @return \ClonixDev\AeatSii\StructType\InversionSujetoPasivo|null
     */
    public function getInversionSujetoPasivo()
    {
        return $this->InversionSujetoPasivo;
    }
    /**
     * Set InversionSujetoPasivo value
     * @param \ClonixDev\AeatSii\StructType\InversionSujetoPasivo $inversionSujetoPasivo
     * @return \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType
     */
    public function setInversionSujetoPasivo(\ClonixDev\AeatSii\StructType\InversionSujetoPasivo $inversionSujetoPasivo = null)
    {
        $this->InversionSujetoPasivo = $inversionSujetoPasivo;
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
     * @return \ClonixDev\AeatSii\StructType\DesgloseFacturaRecibidasType
     */
    public function setDesgloseIVA(\ClonixDev\AeatSii\StructType\DesgloseIVA $desgloseIVA = null)
    {
        $this->DesgloseIVA = $desgloseIVA;
        return $this;
    }
}
