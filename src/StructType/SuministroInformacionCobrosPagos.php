<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroInformacionCobrosPagos StructType
 * Meta information extracted from the WSDL
 * - documentation: Sii - Suministro Inmediato de Información, compuesto por datos de contexto y una secuencia de 1 o más registros.
 * @subpackage Structs
 */
class SuministroInformacionCobrosPagos extends AbstractStructBase
{
    /**
     * The Cabecera
     * @var \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos
     */
    public $Cabecera;
    /**
     * Constructor method for SuministroInformacionCobrosPagos
     * @uses SuministroInformacionCobrosPagos::setCabecera()
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
     * @return \ClonixDev\AeatSii\StructType\SuministroInformacionCobrosPagos
     */
    public function setCabecera(\ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos $cabecera = null)
    {
        $this->Cabecera = $cabecera;
        return $this;
    }
}
