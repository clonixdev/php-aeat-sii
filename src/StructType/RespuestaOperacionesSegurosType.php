<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaOperacionesSegurosType StructType
 * Meta information extracted from the WSDL
 * - documentation: Respuesta a un envío Sii
 * @subpackage Structs
 */
class RespuestaOperacionesSegurosType extends AbstractStructBase
{
    /**
     * The Contraparte
     * Meta information extracted from the WSDL
     * - documentation: Permite identificar la factura línea del suministro a la que se refiere la respuesta.
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The ClaveOperacion
     * @var string
     */
    public $ClaveOperacion;
    /**
     * The ImporteTotal
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $ImporteTotal;
    /**
     * The EntidadSucedida
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $EntidadSucedida;
    /**
     * The PeriodoLiquidacion
     * @var \ClonixDev\AeatSii\StructType\PeriodoLiquidacion
     */
    public $PeriodoLiquidacion;
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
     * - documentation: CSV asociado a la operacion registrada previamente en el sistema. Solo se suministra si la operacion es rechazada por estar duplicada
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
     * Constructor method for RespuestaOperacionesSegurosType
     * @uses RespuestaOperacionesSegurosType::setContraparte()
     * @uses RespuestaOperacionesSegurosType::setClaveOperacion()
     * @uses RespuestaOperacionesSegurosType::setImporteTotal()
     * @uses RespuestaOperacionesSegurosType::setEntidadSucedida()
     * @uses RespuestaOperacionesSegurosType::setPeriodoLiquidacion()
     * @uses RespuestaOperacionesSegurosType::setEstadoRegistro()
     * @uses RespuestaOperacionesSegurosType::setCodigoErrorRegistro()
     * @uses RespuestaOperacionesSegurosType::setDescripcionErrorRegistro()
     * @uses RespuestaOperacionesSegurosType::setCSV()
     * @uses RespuestaOperacionesSegurosType::setRegistroDuplicado()
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param string $claveOperacion
     * @param string $importeTotal
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     * @param \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion
     * @param string $estadoRegistro
     * @param int $codigoErrorRegistro
     * @param string $descripcionErrorRegistro
     * @param string $cSV
     * @param \ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, $claveOperacion = null, $importeTotal = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null, \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null, $estadoRegistro = null, $codigoErrorRegistro = null, $descripcionErrorRegistro = null, $cSV = null, \ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado = null)
    {
        $this
            ->setContraparte($contraparte)
            ->setClaveOperacion($claveOperacion)
            ->setImporteTotal($importeTotal)
            ->setEntidadSucedida($entidadSucedida)
            ->setPeriodoLiquidacion($periodoLiquidacion)
            ->setEstadoRegistro($estadoRegistro)
            ->setCodigoErrorRegistro($codigoErrorRegistro)
            ->setDescripcionErrorRegistro($descripcionErrorRegistro)
            ->setCSV($cSV)
            ->setRegistroDuplicado($registroDuplicado);
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
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
    /**
     * Get ImporteTotal value
     * @return string|null
     */
    public function getImporteTotal()
    {
        return $this->ImporteTotal;
    }
    /**
     * Set ImporteTotal value
     * @param string $importeTotal
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
     */
    public function setImporteTotal($importeTotal = null)
    {
        // validation for constraint: string
        if (!is_null($importeTotal) && !is_string($importeTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeTotal, true), gettype($importeTotal)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($importeTotal) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $importeTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($importeTotal, true)), __LINE__);
        }
        $this->ImporteTotal = $importeTotal;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
     */
    public function setEntidadSucedida(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this->EntidadSucedida = $entidadSucedida;
        return $this;
    }
    /**
     * Get PeriodoLiquidacion value
     * @return \ClonixDev\AeatSii\StructType\PeriodoLiquidacion|null
     */
    public function getPeriodoLiquidacion()
    {
        return $this->PeriodoLiquidacion;
    }
    /**
     * Set PeriodoLiquidacion value
     * @param \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
     */
    public function setPeriodoLiquidacion(\ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null)
    {
        $this->PeriodoLiquidacion = $periodoLiquidacion;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosType
     */
    public function setRegistroDuplicado(\ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado = null)
    {
        $this->RegistroDuplicado = $registroDuplicado;
        return $this;
    }
}
