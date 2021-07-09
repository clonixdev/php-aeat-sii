<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRBienesInversionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos correspondientes al libro de Bienes de inversión
 * @subpackage Structs
 */
class LRBienesInversionType extends RegistroSii
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType
     */
    public $IDFactura;
    /**
     * The BienesInversion
     * Meta information extracted from the WSDL
     * - documentation: Apunte correspondiente al libro de bienes de inversion.
     * @var \ClonixDev\AeatSii\StructType\BienDeInversionType
     */
    public $BienesInversion;
    /**
     * Constructor method for LRBienesInversionType
     * @uses LRBienesInversionType::setIDFactura()
     * @uses LRBienesInversionType::setBienesInversion()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\BienDeInversionType $bienesInversion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null, \ClonixDev\AeatSii\StructType\BienDeInversionType $bienesInversion = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setBienesInversion($bienesInversion);
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
     * @return \ClonixDev\AeatSii\StructType\LRBienesInversionType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get BienesInversion value
     * @return \ClonixDev\AeatSii\StructType\BienDeInversionType|null
     */
    public function getBienesInversion()
    {
        return $this->BienesInversion;
    }
    /**
     * Set BienesInversion value
     * @param \ClonixDev\AeatSii\StructType\BienDeInversionType $bienesInversion
     * @return \ClonixDev\AeatSii\StructType\LRBienesInversionType
     */
    public function setBienesInversion(\ClonixDev\AeatSii\StructType\BienDeInversionType $bienesInversion = null)
    {
        $this->BienesInversion = $bienesInversion;
        return $this;
    }
}
