<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SujetaPrestacionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Tipo de Operacion Sujeta
 * @subpackage Structs
 */
class SujetaPrestacionType extends AbstractStructBase
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
     * Constructor method for SujetaPrestacionType
     * @uses SujetaPrestacionType::setExenta()
     * @uses SujetaPrestacionType::setNoExenta()
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
     * @return \ClonixDev\AeatSii\StructType\SujetaPrestacionType
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
     * @return \ClonixDev\AeatSii\StructType\SujetaPrestacionType
     */
    public function setNoExenta(\ClonixDev\AeatSii\StructType\NoExenta $noExenta = null)
    {
        $this->NoExenta = $noExenta;
        return $this;
    }
}
