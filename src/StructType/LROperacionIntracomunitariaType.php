<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LROperacionIntracomunitariaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente al libro de operaciones intracomunitarias.
 * @subpackage Structs
 */
class LROperacionIntracomunitariaType extends RegistroSii
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType
     */
    public $IDFactura;
    /**
     * The Contraparte
     * Meta information extracted from the WSDL
     * - documentation: Contraparte de la operación. Cliente en facturas emitidas. Proveedor en facturas recibidas.
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The OperacionIntracomunitaria
     * Meta information extracted from the WSDL
     * - documentation: Apunte correspondiente al libro de operaciones intracomunitarias.
     * @var \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public $OperacionIntracomunitaria;
    /**
     * Constructor method for LROperacionIntracomunitariaType
     * @uses LROperacionIntracomunitariaType::setIDFactura()
     * @uses LROperacionIntracomunitariaType::setContraparte()
     * @uses LROperacionIntracomunitariaType::setOperacionIntracomunitaria()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType $operacionIntracomunitaria
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType $operacionIntracomunitaria = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setContraparte($contraparte)
            ->setOperacionIntracomunitaria($operacionIntracomunitaria);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
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
     * @return \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
        return $this;
    }
    /**
     * Get OperacionIntracomunitaria value
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType|null
     */
    public function getOperacionIntracomunitaria()
    {
        return $this->OperacionIntracomunitaria;
    }
    /**
     * Set OperacionIntracomunitaria value
     * @param \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType $operacionIntracomunitaria
     * @return \ClonixDev\AeatSii\StructType\LROperacionIntracomunitariaType
     */
    public function setOperacionIntracomunitaria(\ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType $operacionIntracomunitaria = null)
    {
        $this->OperacionIntracomunitaria = $operacionIntracomunitaria;
        return $this;
    }
}
