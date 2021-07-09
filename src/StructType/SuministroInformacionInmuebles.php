<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroInformacionInmuebles StructType
 * Meta information extracted from the WSDL
 * - documentation: Sii - Suministro Inmediato de Información, compuesto por datos de contexto y una secuencia de 1 o más registros.
 * @subpackage Structs
 */
class SuministroInformacionInmuebles extends AbstractStructBase
{
    /**
     * The Cabecera
     * @var \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos
     */
    public $Cabecera;
    /**
     * Constructor method for SuministroInformacionInmuebles
     * @uses SuministroInformacionInmuebles::setCabecera()
     * @param \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos $cabecera
     */
    public function __construct(\ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos $cabecera = null)
    {
        $this
            ->setCabecera($cabecera);
    }
    /**
     * Get Cabecera value
     * @return \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos|null
     */
    public function getCabecera()
    {
        return $this->Cabecera;
    }
    /**
     * Set Cabecera value
     * @param \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos $cabecera
     * @return \ClonixDev\AeatSii\StructType\SuministroInformacionInmuebles
     */
    public function setCabecera(\ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos $cabecera = null)
    {
        $this->Cabecera = $cabecera;
        return $this;
    }
}
