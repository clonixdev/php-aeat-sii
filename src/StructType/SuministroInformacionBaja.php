<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroInformacionBaja StructType
 * Meta information extracted from the WSDL
 * - documentation: Sii - Suministro Inmediato de Información, compuesto por datos de contexto y una secuencia de 1 o más registros.
 * @subpackage Structs
 */
class SuministroInformacionBaja extends AbstractStructBase
{
    /**
     * The Cabecera
     * @var \ClonixDev\AeatSii\StructType\CabeceraSiiBaja
     */
    public $Cabecera;
    /**
     * Constructor method for SuministroInformacionBaja
     * @uses SuministroInformacionBaja::setCabecera()
     * @param \ClonixDev\AeatSii\StructType\CabeceraSiiBaja $cabecera
     */
    public function __construct(\ClonixDev\AeatSii\StructType\CabeceraSiiBaja $cabecera = null)
    {
        $this
            ->setCabecera($cabecera);
    }
    /**
     * Get Cabecera value
     * @return \ClonixDev\AeatSii\StructType\CabeceraSiiBaja|null
     */
    public function getCabecera()
    {
        return $this->Cabecera;
    }
    /**
     * Set Cabecera value
     * @param \ClonixDev\AeatSii\StructType\CabeceraSiiBaja $cabecera
     * @return \ClonixDev\AeatSii\StructType\SuministroInformacionBaja
     */
    public function setCabecera(\ClonixDev\AeatSii\StructType\CabeceraSiiBaja $cabecera = null)
    {
        $this->Cabecera = $cabecera;
        return $this;
    }
}
