<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaVentaBienesConsignaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Respuesta a un envío Sii | Datos de ventas de bienes en consigna
 * @subpackage Structs
 */
class RespuestaVentaBienesConsignaType extends AbstractStructBase
{
    /**
     * The ClaveDeclarante
     * @var string
     */
    public $ClaveDeclarante;
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
     * The IdRegistroDeclarado
     * @var \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType
     */
    public $IdRegistroDeclarado;
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
     * The EstadoRegistro
     * Meta information extracted from the WSDL
     * - documentation: Estado del registro. Correcto, erróneo o aceptado con errores
     * @var string
     */
    public $EstadoRegistro;
    /**
     * The CodigoErrorRegistro
     * Meta information extracted from the WSDL
     * - documentation: Código del error de registro, en su caso.
     * - base: integer
     * - minOccurs: 0
     * @var int
     */
    public $CodigoErrorRegistro;
    /**
     * The DescripcionErrorRegistro
     * Meta information extracted from the WSDL
     * - documentation: Descripción detallada del error de registro, en su caso.
     * - base: string
     * - maxLength: 500
     * - minOccurs: 0
     * @var string
     */
    public $DescripcionErrorRegistro;
    /**
     * The CSV
     * Meta information extracted from the WSDL
     * - documentation: CSV asociado a la factura registrada previamente en el sistema. Solo se suministra si la factura es rechazada por estar duplicada
     * - minOccurs: 0
     * @var string
     */
    public $CSV;
    /**
     * The RegistroDuplicado
     * Meta information extracted from the WSDL
     * - documentation: Solo en el caso de que se rechace el registro por duplicado se devuelve este nodo con la informacion regisrada en el SII para este registro
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\RegistroDuplicadoType
     */
    public $RegistroDuplicado;
    /**
     * Constructor method for RespuestaVentaBienesConsignaType
     * @uses RespuestaVentaBienesConsignaType::setClaveDeclarante()
     * @uses RespuestaVentaBienesConsignaType::setTipoOperacion()
     * @uses RespuestaVentaBienesConsignaType::setContraparte()
     * @uses RespuestaVentaBienesConsignaType::setSustitutoDestinatarioInicial()
     * @uses RespuestaVentaBienesConsignaType::setDeposito()
     * @uses RespuestaVentaBienesConsignaType::setOperacionIntracomunitaria()
     * @uses RespuestaVentaBienesConsignaType::setIdRegistroDeclarado()
     * @uses RespuestaVentaBienesConsignaType::setRefExterna()
     * @uses RespuestaVentaBienesConsignaType::setEstadoRegistro()
     * @uses RespuestaVentaBienesConsignaType::setCodigoErrorRegistro()
     * @uses RespuestaVentaBienesConsignaType::setDescripcionErrorRegistro()
     * @uses RespuestaVentaBienesConsignaType::setCSV()
     * @uses RespuestaVentaBienesConsignaType::setRegistroDuplicado()
     * @param string $claveDeclarante
     * @param string $tipoOperacion
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $sustitutoDestinatarioInicial
     * @param \ClonixDev\AeatSii\StructType\DepositoType $deposito
     * @param \ClonixDev\AeatSii\StructType\VentaBienesConsignaType $operacionIntracomunitaria
     * @param \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado
     * @param string $refExterna
     * @param string $estadoRegistro
     * @param int $codigoErrorRegistro
     * @param string $descripcionErrorRegistro
     * @param string $cSV
     * @param \ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado
     */
    public function __construct($claveDeclarante = null, $tipoOperacion = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $sustitutoDestinatarioInicial = null, \ClonixDev\AeatSii\StructType\DepositoType $deposito = null, \ClonixDev\AeatSii\StructType\VentaBienesConsignaType $operacionIntracomunitaria = null, \ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado = null, $refExterna = null, $estadoRegistro = null, $codigoErrorRegistro = null, $descripcionErrorRegistro = null, $cSV = null, \ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado = null)
    {
        $this
            ->setClaveDeclarante($claveDeclarante)
            ->setTipoOperacion($tipoOperacion)
            ->setContraparte($contraparte)
            ->setSustitutoDestinatarioInicial($sustitutoDestinatarioInicial)
            ->setDeposito($deposito)
            ->setOperacionIntracomunitaria($operacionIntracomunitaria)
            ->setIdRegistroDeclarado($idRegistroDeclarado)
            ->setRefExterna($refExterna)
            ->setEstadoRegistro($estadoRegistro)
            ->setCodigoErrorRegistro($codigoErrorRegistro)
            ->setDescripcionErrorRegistro($descripcionErrorRegistro)
            ->setCSV($cSV)
            ->setRegistroDuplicado($registroDuplicado);
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
     */
    public function setOperacionIntracomunitaria(\ClonixDev\AeatSii\StructType\VentaBienesConsignaType $operacionIntracomunitaria = null)
    {
        $this->OperacionIntracomunitaria = $operacionIntracomunitaria;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
     */
    public function setIdRegistroDeclarado(\ClonixDev\AeatSii\StructType\IdRegistroDeclaradoType $idRegistroDeclarado = null)
    {
        $this->IdRegistroDeclarado = $idRegistroDeclarado;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
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
     * Get EstadoRegistro value
     * @return string|null
     */
    public function getEstadoRegistro()
    {
        return $this->EstadoRegistro;
    }
    /**
     * Set EstadoRegistro value
     * @uses \ClonixDev\AeatSii\EnumType\EstadoRegistroType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\EstadoRegistroType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $estadoRegistro
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
     */
    public function setEstadoRegistro($estadoRegistro = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\EstadoRegistroType::valueIsValid($estadoRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\EstadoRegistroType', is_array($estadoRegistro) ? implode(', ', $estadoRegistro) : var_export($estadoRegistro, true), implode(', ', \ClonixDev\AeatSii\EnumType\EstadoRegistroType::getValidValues())), __LINE__);
        }
        $this->EstadoRegistro = $estadoRegistro;
        return $this;
    }
    /**
     * Get CodigoErrorRegistro value
     * @return int|null
     */
    public function getCodigoErrorRegistro()
    {
        return $this->CodigoErrorRegistro;
    }
    /**
     * Set CodigoErrorRegistro value
     * @param int $codigoErrorRegistro
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
     */
    public function setCodigoErrorRegistro($codigoErrorRegistro = null)
    {
        // validation for constraint: int
        if (!is_null($codigoErrorRegistro) && !(is_int($codigoErrorRegistro) || ctype_digit($codigoErrorRegistro))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codigoErrorRegistro, true), gettype($codigoErrorRegistro)), __LINE__);
        }
        $this->CodigoErrorRegistro = $codigoErrorRegistro;
        return $this;
    }
    /**
     * Get DescripcionErrorRegistro value
     * @return string|null
     */
    public function getDescripcionErrorRegistro()
    {
        return $this->DescripcionErrorRegistro;
    }
    /**
     * Set DescripcionErrorRegistro value
     * @param string $descripcionErrorRegistro
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
     */
    public function setDescripcionErrorRegistro($descripcionErrorRegistro = null)
    {
        // validation for constraint: string
        if (!is_null($descripcionErrorRegistro) && !is_string($descripcionErrorRegistro)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionErrorRegistro, true), gettype($descripcionErrorRegistro)), __LINE__);
        }
        // validation for constraint: maxLength(500)
        if (!is_null($descripcionErrorRegistro) && mb_strlen($descripcionErrorRegistro) > 500) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 500', mb_strlen($descripcionErrorRegistro)), __LINE__);
        }
        $this->DescripcionErrorRegistro = $descripcionErrorRegistro;
        return $this;
    }
    /**
     * Get CSV value
     * @return string|null
     */
    public function getCSV()
    {
        return $this->CSV;
    }
    /**
     * Set CSV value
     * @param string $cSV
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
     */
    public function setCSV($cSV = null)
    {
        // validation for constraint: string
        if (!is_null($cSV) && !is_string($cSV)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cSV, true), gettype($cSV)), __LINE__);
        }
        $this->CSV = $cSV;
        return $this;
    }
    /**
     * Get RegistroDuplicado value
     * @return \ClonixDev\AeatSii\StructType\RegistroDuplicadoType|null
     */
    public function getRegistroDuplicado()
    {
        return $this->RegistroDuplicado;
    }
    /**
     * Set RegistroDuplicado value
     * @param \ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado
     * @return \ClonixDev\AeatSii\StructType\RespuestaVentaBienesConsignaType
     */
    public function setRegistroDuplicado(\ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado = null)
    {
        $this->RegistroDuplicado = $registroDuplicado;
        return $this;
    }
}
