<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConsultaInformacionProveedor StructType
 * Meta information extracted from the WSDL
 * - documentation: Sii - Suministro Inmediato de Información, compuesto por datos de contexto y una secuencia de 1 o más registros.
 * @subpackage Structs
 */
class ConsultaInformacionProveedor extends AbstractStructBase
{
    /**
     * The Cabecera
     * @var \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiProveedor
     */
    public $Cabecera;
    /**
     * Constructor method for ConsultaInformacionProveedor
     * @uses ConsultaInformacionProveedor::setCabecera()
     * @param \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiProveedor $cabecera
     */
    public function __construct(\ClonixDev\AeatSii\StructType\CabeceraConsultaSiiProveedor $cabecera = null)
    {
        $this
            ->setCabecera($cabecera);
    }
    /**
     * Get Cabecera value
     * @return \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiProveedor|null
     */
    public function getCabecera()
    {
        return $this->Cabecera;
    }
    /**
     * Set Cabecera value
     * @param \ClonixDev\AeatSii\StructType\CabeceraConsultaSiiProveedor $cabecera
     * @return \ClonixDev\AeatSii\StructType\ConsultaInformacionProveedor
     */
    public function setCabecera(\ClonixDev\AeatSii\StructType\CabeceraConsultaSiiProveedor $cabecera = null)
    {
        $this->Cabecera = $cabecera;
        return $this;
    }
}
