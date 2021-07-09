<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TipoConDesgloseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Desglose de Tipo de Operacion diferenciando entre Entrega de Bienes o Prestacion de Servicios
 * @subpackage Structs
 */
class TipoConDesgloseType extends AbstractStructBase
{
    /**
     * The PrestacionServicios
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\TipoSinDesglosePrestacionType
     */
    public $PrestacionServicios;
    /**
     * The Entrega
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\TipoSinDesgloseType
     */
    public $Entrega;
    /**
     * Constructor method for TipoConDesgloseType
     * @uses TipoConDesgloseType::setPrestacionServicios()
     * @uses TipoConDesgloseType::setEntrega()
     * @param \ClonixDev\AeatSii\StructType\TipoSinDesglosePrestacionType $prestacionServicios
     * @param \ClonixDev\AeatSii\StructType\TipoSinDesgloseType $entrega
     */
    public function __construct(\ClonixDev\AeatSii\StructType\TipoSinDesglosePrestacionType $prestacionServicios = null, \ClonixDev\AeatSii\StructType\TipoSinDesgloseType $entrega = null)
    {
        $this
            ->setPrestacionServicios($prestacionServicios)
            ->setEntrega($entrega);
    }
    /**
     * Get PrestacionServicios value
     * @return \ClonixDev\AeatSii\StructType\TipoSinDesglosePrestacionType|null
     */
    public function getPrestacionServicios()
    {
        return $this->PrestacionServicios;
    }
    /**
     * Set PrestacionServicios value
     * @param \ClonixDev\AeatSii\StructType\TipoSinDesglosePrestacionType $prestacionServicios
     * @return \ClonixDev\AeatSii\StructType\TipoConDesgloseType
     */
    public function setPrestacionServicios(\ClonixDev\AeatSii\StructType\TipoSinDesglosePrestacionType $prestacionServicios = null)
    {
        $this->PrestacionServicios = $prestacionServicios;
        return $this;
    }
    /**
     * Get Entrega value
     * @return \ClonixDev\AeatSii\StructType\TipoSinDesgloseType|null
     */
    public function getEntrega()
    {
        return $this->Entrega;
    }
    /**
     * Set Entrega value
     * @param \ClonixDev\AeatSii\StructType\TipoSinDesgloseType $entrega
     * @return \ClonixDev\AeatSii\StructType\TipoConDesgloseType
     */
    public function setEntrega(\ClonixDev\AeatSii\StructType\TipoSinDesgloseType $entrega = null)
    {
        $this->Entrega = $entrega;
        return $this;
    }
}
