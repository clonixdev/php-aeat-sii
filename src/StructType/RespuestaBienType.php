<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaBienType StructType
 * Meta information extracted from the WSDL
 * - documentation: Respuesta a un envío Sii
 * @subpackage Structs
 */
class RespuestaBienType extends AbstractStructBase
{
    /**
     * The PeriodoLiquidacion
     * @var \ClonixDev\AeatSii\StructType\PeriodoLiquidacion
     */
    public $PeriodoLiquidacion;
    /**
     * The IDFactura
     * Meta information extracted from the WSDL
     * - documentation: Contraparte
     * @var \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType
     */
    public $IDFactura;
    /**
     * The IdentificacionBien
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 40
     * @var string
     */
    public $IdentificacionBien;
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
     * Constructor method for RespuestaBienType
     * @uses RespuestaBienType::setPeriodoLiquidacion()
     * @uses RespuestaBienType::setIDFactura()
     * @uses RespuestaBienType::setIdentificacionBien()
     * @uses RespuestaBienType::setRefExterna()
     * @uses RespuestaBienType::setEstadoRegistro()
     * @uses RespuestaBienType::setCodigoErrorRegistro()
     * @uses RespuestaBienType::setDescripcionErrorRegistro()
     * @uses RespuestaBienType::setCSV()
     * @uses RespuestaBienType::setRegistroDuplicado()
     * @param \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion
     * @param \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura
     * @param string $identificacionBien
     * @param string $refExterna
     * @param string $estadoRegistro
     * @param int $codigoErrorRegistro
     * @param string $descripcionErrorRegistro
     * @param string $cSV
     * @param \ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado
     */
    public function __construct(\ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null, \ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null, $identificacionBien = null, $refExterna = null, $estadoRegistro = null, $codigoErrorRegistro = null, $descripcionErrorRegistro = null, $cSV = null, \ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado = null)
    {
        $this
            ->setPeriodoLiquidacion($periodoLiquidacion)
            ->setIDFactura($iDFactura)
            ->setIdentificacionBien($identificacionBien)
            ->setRefExterna($refExterna)
            ->setEstadoRegistro($estadoRegistro)
            ->setCodigoErrorRegistro($codigoErrorRegistro)
            ->setDescripcionErrorRegistro($descripcionErrorRegistro)
            ->setCSV($cSV)
            ->setRegistroDuplicado($registroDuplicado);
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaBienType
     */
    public function setPeriodoLiquidacion(\ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null)
    {
        $this->PeriodoLiquidacion = $periodoLiquidacion;
        return $this;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaBienType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaComunitariaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get IdentificacionBien value
     * @return string|null
     */
    public function getIdentificacionBien()
    {
        return $this->IdentificacionBien;
    }
    /**
     * Set IdentificacionBien value
     * @param string $identificacionBien
     * @return \ClonixDev\AeatSii\StructType\RespuestaBienType
     */
    public function setIdentificacionBien($identificacionBien = null)
    {
        // validation for constraint: string
        if (!is_null($identificacionBien) && !is_string($identificacionBien)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($identificacionBien, true), gettype($identificacionBien)), __LINE__);
        }
        // validation for constraint: maxLength(40)
        if (!is_null($identificacionBien) && mb_strlen($identificacionBien) > 40) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 40', mb_strlen($identificacionBien)), __LINE__);
        }
        $this->IdentificacionBien = $identificacionBien;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaBienType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaBienType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaBienType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaBienType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaBienType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaBienType
     */
    public function setRegistroDuplicado(\ClonixDev\AeatSii\StructType\RegistroDuplicadoType $registroDuplicado = null)
    {
        $this->RegistroDuplicado = $registroDuplicado;
        return $this;
    }
}
