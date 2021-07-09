<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRBajaRegistroLROperacionesSegurosType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente a operaciones de seguros.
 * @subpackage Structs
 */
class LRBajaRegistroLROperacionesSegurosType extends RegistroSii
{
    /**
     * The Contraparte
     * Meta information extracted from the WSDL
     * - documentation: Contraparte de la operación. Cliente en facturas emitidas. Proveedor en facturas recibidas.
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The ClaveOperacion
     * @var string
     */
    public $ClaveOperacion;
    /**
     * Constructor method for LRBajaRegistroLROperacionesSegurosType
     * @uses LRBajaRegistroLROperacionesSegurosType::setContraparte()
     * @uses LRBajaRegistroLROperacionesSegurosType::setClaveOperacion()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param string $claveOperacion
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, $claveOperacion = null)
    {
        $this
            ->setContraparte($contraparte)
            ->setClaveOperacion($claveOperacion);
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
     * @return \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
        return $this;
    }
    /**
     * Get ClaveOperacion value
     * @return string|null
     */
    public function getClaveOperacion()
    {
        return $this->ClaveOperacion;
    }
    /**
     * Set ClaveOperacion value
     * @uses \ClonixDev\AeatSii\EnumType\ClaveOperacionType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\ClaveOperacionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claveOperacion
     * @return \ClonixDev\AeatSii\StructType\LRBajaRegistroLROperacionesSegurosType
     */
    public function setClaveOperacion($claveOperacion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\ClaveOperacionType::valueIsValid($claveOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\ClaveOperacionType', is_array($claveOperacion) ? implode(', ', $claveOperacion) : var_export($claveOperacion, true), implode(', ', \ClonixDev\AeatSii\EnumType\ClaveOperacionType::getValidValues())), __LINE__);
        }
        $this->ClaveOperacion = $claveOperacion;
        return $this;
    }
}
