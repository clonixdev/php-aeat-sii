<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaInformacion StructType
 * Meta information extracted from the WSDL
 * - documentation: Sii - Suministro Inmediato de Información, compuesto por datos de contexto y una secuencia de 1 o más registros.
 * @subpackage Structs
 */
class ConsultaInformacion extends AbstractStructBase
{
    /**
     * The Cabecera
     * @var \ClonixDev\AeatSii\StructType\CabeceraConsultaSii
     */
    public $Cabecera;
    /**
     * Constructor method for ConsultaInformacion
     * @uses ConsultaInformacion::setCabecera()
     * @param \ClonixDev\AeatSii\StructType\CabeceraConsultaSii $cabecera
     */
    public function __construct(\ClonixDev\AeatSii\StructType\CabeceraConsultaSii $cabecera = null)
    {
        $this
            ->setCabecera($cabecera);
    }
    /**
     * Get Cabecera value
     * @return \ClonixDev\AeatSii\StructType\CabeceraConsultaSii|null
     */
    public function getCabecera()
    {
        return $this->Cabecera;
    }
    /**
     * Set Cabecera value
     * @param \ClonixDev\AeatSii\StructType\CabeceraConsultaSii $cabecera
     * @return \ClonixDev\AeatSii\StructType\ConsultaInformacion
     */
    public function setCabecera(\ClonixDev\AeatSii\StructType\CabeceraConsultaSii $cabecera = null)
    {
        $this->Cabecera = $cabecera;
        return $this;
    }
}
