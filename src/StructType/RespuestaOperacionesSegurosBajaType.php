<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaOperacionesSegurosBajaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Respuesta a un envío Sii
 * @subpackage Structs
 */
class RespuestaOperacionesSegurosBajaType extends AbstractStructBase
{
    /**
     * The PeriodoLiquidacion
     * @var \ClonixDev\AeatSii\StructType\PeriodoLiquidacion
     */
    public $PeriodoLiquidacion;
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
     * - documentation: CSV asociado al registro. Solo se suministra si el registro es rechazado porque ya está dada de baja
     * - minOccurs: 0
     * @var string
     */
    public $CSV;
    /**
     * Constructor method for RespuestaOperacionesSegurosBajaType
     * @uses RespuestaOperacionesSegurosBajaType::setPeriodoLiquidacion()
     * @uses RespuestaOperacionesSegurosBajaType::setContraparte()
     * @uses RespuestaOperacionesSegurosBajaType::setClaveOperacion()
     * @uses RespuestaOperacionesSegurosBajaType::setEstadoRegistro()
     * @uses RespuestaOperacionesSegurosBajaType::setCodigoErrorRegistro()
     * @uses RespuestaOperacionesSegurosBajaType::setDescripcionErrorRegistro()
     * @uses RespuestaOperacionesSegurosBajaType::setCSV()
     * @param \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param string $claveOperacion
     * @param string $estadoRegistro
     * @param int $codigoErrorRegistro
     * @param string $descripcionErrorRegistro
     * @param string $cSV
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, $claveOperacion = null, $estadoRegistro = null, $codigoErrorRegistro = null, $descripcionErrorRegistro = null, $cSV = null)
    {
        $this
            ->setPeriodoLiquidacion($periodoLiquidacion)
            ->setContraparte($contraparte)
            ->setClaveOperacion($claveOperacion)
            ->setEstadoRegistro($estadoRegistro)
            ->setCodigoErrorRegistro($codigoErrorRegistro)
            ->setDescripcionErrorRegistro($descripcionErrorRegistro)
            ->setCSV($cSV);
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosBajaType
     */
    public function setPeriodoLiquidacion(\ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null)
    {
        $this->PeriodoLiquidacion = $periodoLiquidacion;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosBajaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosBajaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosBajaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosBajaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosBajaType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaOperacionesSegurosBajaType
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
}
