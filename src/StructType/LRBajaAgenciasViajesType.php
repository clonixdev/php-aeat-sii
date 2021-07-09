<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRBajaAgenciasViajesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente importes agencias viajes.
 * @subpackage Structs
 */
class LRBajaAgenciasViajesType extends RegistroSii
{
    /**
     * The Contraparte
     * Meta information extracted from the WSDL
     * - documentation: Contraparte de la operación. Cliente en facturas emitidas. Proveedor en facturas recibidas.
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * Constructor method for LRBajaAgenciasViajesType
     * @uses LRBajaAgenciasViajesType::setContraparte()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
    {
        $this
            ->setContraparte($contraparte);
    }
    /**
     * Get Contraparte value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType|null
     */
    public function getContraparte()
    {
        return $this->Contraparte;
    }
    /**
     * Set Contraparte value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @return \ClonixDev\AeatSii\StructType\LRBajaAgenciasViajesType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
        return $this;
    }
}
