<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaDetOperIntracomunitariaType StructType
 * @subpackage Structs
 */
class RespuestaDetOperIntracomunitariaType extends AbstractStructBase
{
    /**
     * The Contraparte
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The DetOperIntracomunitarias
     * @var \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType
     */
    public $DetOperIntracomunitarias;
    /**
     * Constructor method for RespuestaDetOperIntracomunitariaType
     * @uses RespuestaDetOperIntracomunitariaType::setContraparte()
     * @uses RespuestaDetOperIntracomunitariaType::setDetOperIntracomunitarias()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType $detOperIntracomunitarias
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType $detOperIntracomunitarias = null)
    {
        $this
            ->setContraparte($contraparte)
            ->setDetOperIntracomunitarias($detOperIntracomunitarias);
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaDetOperIntracomunitariaType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
        return $this;
    }
    /**
     * Get DetOperIntracomunitarias value
     * @return \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType|null
     */
    public function getDetOperIntracomunitarias()
    {
        return $this->DetOperIntracomunitarias;
    }
    /**
     * Set DetOperIntracomunitarias value
     * @param \ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType $detOperIntracomunitarias
     * @return \ClonixDev\AeatSii\StructType\RespuestaDetOperIntracomunitariaType
     */
    public function setDetOperIntracomunitarias(\ClonixDev\AeatSii\StructType\OperacionIntracomunitariaType $detOperIntracomunitarias = null)
    {
        $this->DetOperIntracomunitarias = $detOperIntracomunitarias;
        return $this;
    }
}
