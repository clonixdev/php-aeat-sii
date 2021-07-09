<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LRVentaBienesConsignaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente al libro de venta de bienes en consigna.
 * @subpackage Structs
 */
class LRVentaBienesConsignaType extends AbstractStructBase
{
    /**
     * The ClaveDeclarante
     * @var string
     */
    public $ClaveDeclarante;
    /**
     * The IdRegistroDeclarado
     * @var \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType
     */
    public $IdRegistroDeclarado;
    /**
     * The TipoOperacion
     * @var string
     */
    public $TipoOperacion;
    /**
     * The Contraparte
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The SustitutoDestinatarioInicial
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $SustitutoDestinatarioInicial;
    /**
     * The Deposito
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\DepositoType
     */
    public $Deposito;
    /**
     * The OperacionIntracomunitaria
     * @var \ClonixDev\AeatSii\StructType\VentaBienesConsignaType
     */
    public $OperacionIntracomunitaria;
    /**
     * Constructor method for LRVentaBienesConsignaType
     * @uses LRVentaBienesConsignaType::setClaveDeclarante()
     * @uses LRVentaBienesConsignaType::setIdRegistroDeclarado()
     * @uses LRVentaBienesConsignaType::setTipoOperacion()
     * @uses LRVentaBienesConsignaType::setContraparte()
     * @uses LRVentaBienesConsignaType::setSustitutoDestinatarioInicial()
     * @uses LRVentaBienesConsignaType::setDeposito()
     * @uses LRVentaBienesConsignaType::setOperacionIntracomunitaria()
     * @param string $claveDeclarante
     * @param \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado
     * @param string $tipoOperacion
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $sustitutoDestinatarioInicial
     * @param \ClonixDev\AeatSii\StructType\DepositoType $deposito
     * @param \ClonixDev\AeatSii\StructType\VentaBienesConsignaType $operacionIntracomunitaria
     */
    public function __construct($claveDeclarante = null, \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado = null, $tipoOperacion = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $sustitutoDestinatarioInicial = null, \ClonixDev\AeatSii\StructType\DepositoType $deposito = null, \ClonixDev\AeatSii\StructType\VentaBienesConsignaType $operacionIntracomunitaria = null)
    {
        $this
            ->setClaveDeclarante($claveDeclarante)
            ->setIdRegistroDeclarado($idRegistroDeclarado)
            ->setTipoOperacion($tipoOperacion)
            ->setContraparte($contraparte)
            ->setSustitutoDestinatarioInicial($sustitutoDestinatarioInicial)
            ->setDeposito($deposito)
            ->setOperacionIntracomunitaria($operacionIntracomunitaria);
    }
    /**
     * Get ClaveDeclarante value
     * @return string|null
     */
    public function getClaveDeclarante()
    {
        return $this->ClaveDeclarante;
    }
    /**
     * Set ClaveDeclarante value
     * @uses \ClonixDev\AeatSii\EnumType\TipoClaveDeclaranteType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\TipoClaveDeclaranteType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claveDeclarante
     * @return \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType
     */
    public function setClaveDeclarante($claveDeclarante = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\TipoClaveDeclaranteType::valueIsValid($claveDeclarante)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\TipoClaveDeclaranteType', is_array($claveDeclarante) ? implode(', ', $claveDeclarante) : var_export($claveDeclarante, true), implode(', ', \ClonixDev\AeatSii\EnumType\TipoClaveDeclaranteType::getValidValues())), __LINE__);
        }
        $this->ClaveDeclarante = $claveDeclarante;
        return $this;
    }
    /**
     * Get IdRegistroDeclarado value
     * @return \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType|null
     */
    public function getIdRegistroDeclarado()
    {
        return $this->IdRegistroDeclarado;
    }
    /**
     * Set IdRegistroDeclarado value
     * @param \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado
     * @return \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType
     */
    public function setIdRegistroDeclarado(\ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado = null)
    {
        $this->IdRegistroDeclarado = $idRegistroDeclarado;
        return $this;
    }
    /**
     * Get TipoOperacion value
     * @return string|null
     */
    public function getTipoOperacion()
    {
        return $this->TipoOperacion;
    }
    /**
     * Set TipoOperacion value
     * @uses \ClonixDev\AeatSii\EnumType\TipoOperacionType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\TipoOperacionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoOperacion
     * @return \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType
     */
    public function setTipoOperacion($tipoOperacion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\TipoOperacionType::valueIsValid($tipoOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\TipoOperacionType', is_array($tipoOperacion) ? implode(', ', $tipoOperacion) : var_export($tipoOperacion, true), implode(', ', \ClonixDev\AeatSii\EnumType\TipoOperacionType::getValidValues())), __LINE__);
        }
        $this->TipoOperacion = $tipoOperacion;
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
     * @return \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
        return $this;
    }
    /**
     * Get SustitutoDestinatarioInicial value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType|null
     */
    public function getSustitutoDestinatarioInicial()
    {
        return $this->SustitutoDestinatarioInicial;
    }
    /**
     * Set SustitutoDestinatarioInicial value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $sustitutoDestinatarioInicial
     * @return \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType
     */
    public function setSustitutoDestinatarioInicial(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $sustitutoDestinatarioInicial = null)
    {
        $this->SustitutoDestinatarioInicial = $sustitutoDestinatarioInicial;
        return $this;
    }
    /**
     * Get Deposito value
     * @return \ClonixDev\AeatSii\StructType\DepositoType|null
     */
    public function getDeposito()
    {
        return $this->Deposito;
    }
    /**
     * Set Deposito value
     * @param \ClonixDev\AeatSii\StructType\DepositoType $deposito
     * @return \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType
     */
    public function setDeposito(\ClonixDev\AeatSii\StructType\DepositoType $deposito = null)
    {
        $this->Deposito = $deposito;
        return $this;
    }
    /**
     * Get OperacionIntracomunitaria value
     * @return \ClonixDev\AeatSii\StructType\VentaBienesConsignaType|null
     */
    public function getOperacionIntracomunitaria()
    {
        return $this->OperacionIntracomunitaria;
    }
    /**
     * Set OperacionIntracomunitaria value
     * @param \ClonixDev\AeatSii\StructType\VentaBienesConsignaType $operacionIntracomunitaria
     * @return \ClonixDev\AeatSii\StructType\LRVentaBienesConsignaType
     */
    public function setOperacionIntracomunitaria(\ClonixDev\AeatSii\StructType\VentaBienesConsignaType $operacionIntracomunitaria = null)
    {
        $this->OperacionIntracomunitaria = $operacionIntracomunitaria;
        return $this;
    }
}
