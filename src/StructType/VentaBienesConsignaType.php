<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VentaBienesConsignaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente al libro de registro de ventas de bienes en consigna .
 * @subpackage Structs
 */
class VentaBienesConsignaType extends AbstractStructBase
{
    /**
     * The InfoExpedicionRecepcion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType
     */
    public $InfoExpedicionRecepcion;
    /**
     * The IdRegistroExpInicial
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\IdRegistroExpInicialType
     */
    public $IdRegistroExpInicial;
    /**
     * The DestinoFinalExpedRecep
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType
     */
    public $DestinoFinalExpedRecep;
    /**
     * The RefExterna
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 60
     * - minOccurs: 0
     * @var string
     */
    public $RefExterna;
    /**
     * The NumRegistroAcuerdoFacturacion
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 15
     * - minOccurs: 0
     * @var string
     */
    public $NumRegistroAcuerdoFacturacion;
    /**
     * The EntidadSucedida
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $EntidadSucedida;
    /**
     * The RegPrevioGGEEoREDEMEoCompetencia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RegPrevioGGEEoREDEMEoCompetencia;
    /**
     * Constructor method for VentaBienesConsignaType
     * @uses VentaBienesConsignaType::setInfoExpedicionRecepcion()
     * @uses VentaBienesConsignaType::setIdRegistroExpInicial()
     * @uses VentaBienesConsignaType::setDestinoFinalExpedRecep()
     * @uses VentaBienesConsignaType::setRefExterna()
     * @uses VentaBienesConsignaType::setNumRegistroAcuerdoFacturacion()
     * @uses VentaBienesConsignaType::setEntidadSucedida()
     * @uses VentaBienesConsignaType::setRegPrevioGGEEoREDEMEoCompetencia()
     * @param \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType $infoExpedicionRecepcion
     * @param \ClonixDev\AeatSii\StructType\IdRegistroExpInicialType $idRegistroExpInicial
     * @param \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType $destinoFinalExpedRecep
     * @param string $refExterna
     * @param string $numRegistroAcuerdoFacturacion
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     * @param string $regPrevioGGEEoREDEMEoCompetencia
     */
    public function __construct(\ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType $infoExpedicionRecepcion = null, \ClonixDev\AeatSii\StructType\IdRegistroExpInicialType $idRegistroExpInicial = null, \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType $destinoFinalExpedRecep = null, $refExterna = null, $numRegistroAcuerdoFacturacion = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null, $regPrevioGGEEoREDEMEoCompetencia = null)
    {
        $this
            ->setInfoExpedicionRecepcion($infoExpedicionRecepcion)
            ->setIdRegistroExpInicial($idRegistroExpInicial)
            ->setDestinoFinalExpedRecep($destinoFinalExpedRecep)
            ->setRefExterna($refExterna)
            ->setNumRegistroAcuerdoFacturacion($numRegistroAcuerdoFacturacion)
            ->setEntidadSucedida($entidadSucedida)
            ->setRegPrevioGGEEoREDEMEoCompetencia($regPrevioGGEEoREDEMEoCompetencia);
    }
    /**
     * Get InfoExpedicionRecepcion value
     * @return \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType|null
     */
    public function getInfoExpedicionRecepcion()
    {
        return $this->InfoExpedicionRecepcion;
    }
    /**
     * Set InfoExpedicionRecepcion value
     * @param \ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType $infoExpedicionRecepcion
     * @return \ClonixDev\AeatSii\StructType\VentaBienesConsignaType
     */
    public function setInfoExpedicionRecepcion(\ClonixDev\AeatSii\StructType\InfoExpedicionRecepcionType $infoExpedicionRecepcion = null)
    {
        $this->InfoExpedicionRecepcion = $infoExpedicionRecepcion;
        return $this;
    }
    /**
     * Get IdRegistroExpInicial value
     * @return \ClonixDev\AeatSii\StructType\IdRegistroExpInicialType|null
     */
    public function getIdRegistroExpInicial()
    {
        return $this->IdRegistroExpInicial;
    }
    /**
     * Set IdRegistroExpInicial value
     * @param \ClonixDev\AeatSii\StructType\IdRegistroExpInicialType $idRegistroExpInicial
     * @return \ClonixDev\AeatSii\StructType\VentaBienesConsignaType
     */
    public function setIdRegistroExpInicial(\ClonixDev\AeatSii\StructType\IdRegistroExpInicialType $idRegistroExpInicial = null)
    {
        $this->IdRegistroExpInicial = $idRegistroExpInicial;
        return $this;
    }
    /**
     * Get DestinoFinalExpedRecep value
     * @return \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType|null
     */
    public function getDestinoFinalExpedRecep()
    {
        return $this->DestinoFinalExpedRecep;
    }
    /**
     * Set DestinoFinalExpedRecep value
     * @param \ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType $destinoFinalExpedRecep
     * @return \ClonixDev\AeatSii\StructType\VentaBienesConsignaType
     */
    public function setDestinoFinalExpedRecep(\ClonixDev\AeatSii\StructType\DestinoFinalExpedRecepType $destinoFinalExpedRecep = null)
    {
        $this->DestinoFinalExpedRecep = $destinoFinalExpedRecep;
        return $this;
    }
    /**
     * Get RefExterna value
     * @return string|null
     */
    public function getRefExterna()
    {
        return $this->RefExterna;
    }
    /**
     * Set RefExterna value
     * @param string $refExterna
     * @return \ClonixDev\AeatSii\StructType\VentaBienesConsignaType
     */
    public function setRefExterna($refExterna = null)
    {
        // validation for constraint: string
        if (!is_null($refExterna) && !is_string($refExterna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refExterna, true), gettype($refExterna)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($refExterna) && mb_strlen($refExterna) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($refExterna)), __LINE__);
        }
        $this->RefExterna = $refExterna;
        return $this;
    }
    /**
     * Get NumRegistroAcuerdoFacturacion value
     * @return string|null
     */
    public function getNumRegistroAcuerdoFacturacion()
    {
        return $this->NumRegistroAcuerdoFacturacion;
    }
    /**
     * Set NumRegistroAcuerdoFacturacion value
     * @param string $numRegistroAcuerdoFacturacion
     * @return \ClonixDev\AeatSii\StructType\VentaBienesConsignaType
     */
    public function setNumRegistroAcuerdoFacturacion($numRegistroAcuerdoFacturacion = null)
    {
        // validation for constraint: string
        if (!is_null($numRegistroAcuerdoFacturacion) && !is_string($numRegistroAcuerdoFacturacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numRegistroAcuerdoFacturacion, true), gettype($numRegistroAcuerdoFacturacion)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($numRegistroAcuerdoFacturacion) && mb_strlen($numRegistroAcuerdoFacturacion) > 15) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen($numRegistroAcuerdoFacturacion)), __LINE__);
        }
        $this->NumRegistroAcuerdoFacturacion = $numRegistroAcuerdoFacturacion;
        return $this;
    }
    /**
     * Get EntidadSucedida value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType|null
     */
    public function getEntidadSucedida()
    {
        return $this->EntidadSucedida;
    }
    /**
     * Set EntidadSucedida value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     * @return \ClonixDev\AeatSii\StructType\VentaBienesConsignaType
     */
    public function setEntidadSucedida(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this->EntidadSucedida = $entidadSucedida;
        return $this;
    }
    /**
     * Get RegPrevioGGEEoREDEMEoCompetencia value
     * @return string|null
     */
    public function getRegPrevioGGEEoREDEMEoCompetencia()
    {
        return $this->RegPrevioGGEEoREDEMEoCompetencia;
    }
    /**
     * Set RegPrevioGGEEoREDEMEoCompetencia value
     * @uses \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regPrevioGGEEoREDEMEoCompetencia
     * @return \ClonixDev\AeatSii\StructType\VentaBienesConsignaType
     */
    public function setRegPrevioGGEEoREDEMEoCompetencia($regPrevioGGEEoREDEMEoCompetencia = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::valueIsValid($regPrevioGGEEoREDEMEoCompetencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType', is_array($regPrevioGGEEoREDEMEoCompetencia) ? implode(', ', $regPrevioGGEEoREDEMEoCompetencia) : var_export($regPrevioGGEEoREDEMEoCompetencia, true), implode(', ', \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::getValidValues())), __LINE__);
        }
        $this->RegPrevioGGEEoREDEMEoCompetencia = $regPrevioGGEEoREDEMEoCompetencia;
        return $this;
    }
}
