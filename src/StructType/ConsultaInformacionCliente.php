<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaInformacionCliente StructType
 * Meta information extracted from the WSDL
 * - documentation: Sii - Suministro Inmediato de Información, compuesto por datos de contexto y una secuencia de 1 o más registros.
 * @subpackage Structs
 */
class ConsultaInformacionCliente extends AbstractStructBase
{
    /**
     * The Cabecera
     * @var \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiCliente
     */
    public $Cabecera;
    /**
     * Constructor method for ConsultaInformacionCliente
     * @uses ConsultaInformacionCliente::setCabecera()
     * @param \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiCliente $cabecera
     */
    public function __construct(\ClonixDev\AeatSii\StructType\CabeceraConsultaSiiCliente $cabecera = null)
    {
        $this
            ->setCabecera($cabecera);
    }
    /**
     * Get Cabecera value
     * @return \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiCliente|null
     */
    public function getCabecera()
    {
        return $this->Cabecera;
    }
    /**
     * Set Cabecera value
     * @param \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiCliente $cabecera
     * @return \ClonixDev\AeatSii\StructType\ConsultaInformacionCliente
     */
    public function setCabecera(\ClonixDev\AeatSii\StructType\CabeceraConsultaSiiCliente $cabecera = null)
    {
        $this->Cabecera = $cabecera;
        return $this;
    }
}
