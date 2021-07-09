<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SuministroInformacion StructType
 * Meta information extracted from the WSDL
 * - documentation: Sii - Suministro Inmediato de Información, compuesto por datos de contexto y una secuencia de 1 o más registros.
 * @subpackage Structs
 */
class SuministroInformacion extends AbstractStructBase
{
    /**
     * The Cabecera
     * @var \ClonixDev\AeatSii\StructType\CabeceraSii
     */
    public $Cabecera;
    /**
     * Constructor method for SuministroInformacion
     * @uses SuministroInformacion::setCabecera()
     * @param \ClonixDev\AeatSii\StructType\CabeceraSii $cabecera
     */
    public function __construct(\ClonixDev\AeatSii\StructType\CabeceraSii $cabecera = null)
    {
        $this
            ->setCabecera($cabecera);
    }
    /**
     * Get Cabecera value
     * @return \ClonixDev\AeatSii\StructType\CabeceraSii|null
     */
    public function getCabecera()
    {
        return $this->Cabecera;
    }
    /**
     * Set Cabecera value
     * @param \ClonixDev\AeatSii\StructType\CabeceraSii $cabecera
     * @return \ClonixDev\AeatSii\StructType\SuministroInformacion
     */
    public function setCabecera(\ClonixDev\AeatSii\StructType\CabeceraSii $cabecera = null)
    {
        $this->Cabecera = $cabecera;
        return $this;
    }
}
