<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TipoSinDesgloseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Tipo de Operacion sin calificar si se trata de una Prestacin de Servicios o una Entrega de Bienes
 * @subpackage Structs
 */
class TipoSinDesgloseType extends AbstractStructBase
{
    /**
     * The Sujeta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\SujetaType
     */
    public $Sujeta;
    /**
     * The NoSujeta
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\NoSujetaType
     */
    public $NoSujeta;
    /**
     * Constructor method for TipoSinDesgloseType
     * @uses TipoSinDesgloseType::setSujeta()
     * @uses TipoSinDesgloseType::setNoSujeta()
     * @param \ClonixDev\AeatSii\StructType\SujetaType $sujeta
     * @param \ClonixDev\AeatSii\StructType\NoSujetaType $noSujeta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\SujetaType $sujeta = null, \ClonixDev\AeatSii\StructType\NoSujetaType $noSujeta = null)
    {
        $this
            ->setSujeta($sujeta)
            ->setNoSujeta($noSujeta);
    }
    /**
     * Get Sujeta value
     * @return \ClonixDev\AeatSii\StructType\SujetaType|null
     */
    public function getSujeta()
    {
        return $this->Sujeta;
    }
    /**
     * Set Sujeta value
     * @param \ClonixDev\AeatSii\StructType\SujetaType $sujeta
     * @return \ClonixDev\AeatSii\StructType\TipoSinDesgloseType
     */
    public function setSujeta(\ClonixDev\AeatSii\StructType\SujetaType $sujeta = null)
    {
        $this->Sujeta = $sujeta;
        return $this;
    }
    /**
     * Get NoSujeta value
     * @return \ClonixDev\AeatSii\StructType\NoSujetaType|null
     */
    public function getNoSujeta()
    {
        return $this->NoSujeta;
    }
    /**
     * Set NoSujeta value
     * @param \ClonixDev\AeatSii\StructType\NoSujetaType $noSujeta
     * @return \ClonixDev\AeatSii\StructType\TipoSinDesgloseType
     */
    public function setNoSujeta(\ClonixDev\AeatSii\StructType\NoSujetaType $noSujeta = null)
    {
        $this->NoSujeta = $noSujeta;
        return $this;
    }
}
