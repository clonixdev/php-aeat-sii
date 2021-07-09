<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SujetaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Tipo de Operacion Sujeta
 * @subpackage Structs
 */
class SujetaType extends AbstractStructBase
{
    /**
     * The Exenta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\Exenta
     */
    public $Exenta;
    /**
     * The NoExenta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\NoExenta
     */
    public $NoExenta;
    /**
     * Constructor method for SujetaType
     * @uses SujetaType::setExenta()
     * @uses SujetaType::setNoExenta()
     * @param \ClonixDev\AeatSii\StructType\Exenta $exenta
     * @param \ClonixDev\AeatSii\StructType\NoExenta $noExenta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\Exenta $exenta = null, \ClonixDev\AeatSii\StructType\NoExenta $noExenta = null)
    {
        $this
            ->setExenta($exenta)
            ->setNoExenta($noExenta);
    }
    /**
     * Get Exenta value
     * @return \ClonixDev\AeatSii\StructType\Exenta|null
     */
    public function getExenta()
    {
        return $this->Exenta;
    }
    /**
     * Set Exenta value
     * @param \ClonixDev\AeatSii\StructType\Exenta $exenta
     * @return \ClonixDev\AeatSii\StructType\SujetaType
     */
    public function setExenta(\ClonixDev\AeatSii\StructType\Exenta $exenta = null)
    {
        $this->Exenta = $exenta;
        return $this;
    }
    /**
     * Get NoExenta value
     * @return \ClonixDev\AeatSii\StructType\NoExenta|null
     */
    public function getNoExenta()
    {
        return $this->NoExenta;
    }
    /**
     * Set NoExenta value
     * @param \ClonixDev\AeatSii\StructType\NoExenta $noExenta
     * @return \ClonixDev\AeatSii\StructType\SujetaType
     */
    public function setNoExenta(\ClonixDev\AeatSii\StructType\NoExenta $noExenta = null)
    {
        $this->NoExenta = $noExenta;
        return $this;
    }
}
