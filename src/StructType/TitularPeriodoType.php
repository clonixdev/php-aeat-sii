<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TitularPeriodoType StructType
 * @subpackage Structs
 */
class TitularPeriodoType extends AbstractStructBase
{
    /**
     * The Cabecera
     * Meta information extracted from the WSDL
     * - documentation: Titular de los libros de registro que suministra la información
     * @var \ClonixDev\AeatSii\StructType\ConsultaInformacion
     */
    public $Cabecera;
    /**
     * The PeriodoLiquidacion
     * @var \ClonixDev\AeatSii\StructType\PeriodoLiquidacion
     */
    public $PeriodoLiquidacion;
    /**
     * The IndicadorPaginacion
     * @var string
     */
    public $IndicadorPaginacion;
    /**
     * The ResultadoConsulta
     * @var string
     */
    public $ResultadoConsulta;
    /**
     * Constructor method for TitularPeriodoType
     * @uses TitularPeriodoType::setCabecera()
     * @uses TitularPeriodoType::setPeriodoLiquidacion()
     * @uses TitularPeriodoType::setIndicadorPaginacion()
     * @uses TitularPeriodoType::setResultadoConsulta()
     * @param \ClonixDev\AeatSii\StructType\ConsultaInformacion $cabecera
     * @param \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion
     * @param string $indicadorPaginacion
     * @param string $resultadoConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\ConsultaInformacion $cabecera = null, \ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null, $indicadorPaginacion = null, $resultadoConsulta = null)
    {
        $this
            ->setCabecera($cabecera)
            ->setPeriodoLiquidacion($periodoLiquidacion)
            ->setIndicadorPaginacion($indicadorPaginacion)
            ->setResultadoConsulta($resultadoConsulta);
    }
    /**
     * Get Cabecera value
     * @return \ClonixDev\AeatSii\StructType\ConsultaInformacion|null
     */
    public function getCabecera()
    {
        return $this->Cabecera;
    }
    /**
     * Set Cabecera value
     * @param \ClonixDev\AeatSii\StructType\ConsultaInformacion $cabecera
     * @return \ClonixDev\AeatSii\StructType\TitularPeriodoType
     */
    public function setCabecera(\ClonixDev\AeatSii\StructType\ConsultaInformacion $cabecera = null)
    {
        $this->Cabecera = $cabecera;
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
     * @return \ClonixDev\AeatSii\StructType\TitularPeriodoType
     */
    public function setPeriodoLiquidacion(\ClonixDev\AeatSii\StructType\PeriodoLiquidacion $periodoLiquidacion = null)
    {
        $this->PeriodoLiquidacion = $periodoLiquidacion;
        return $this;
    }
    /**
     * Get IndicadorPaginacion value
     * @return string|null
     */
    public function getIndicadorPaginacion()
    {
        return $this->IndicadorPaginacion;
    }
    /**
     * Set IndicadorPaginacion value
     * @uses \ClonixDev\AeatSii\EnumType\IndicadorPaginacionType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\IndicadorPaginacionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $indicadorPaginacion
     * @return \ClonixDev\AeatSii\StructType\TitularPeriodoType
     */
    public function setIndicadorPaginacion($indicadorPaginacion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\IndicadorPaginacionType::valueIsValid($indicadorPaginacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\IndicadorPaginacionType', is_array($indicadorPaginacion) ? implode(', ', $indicadorPaginacion) : var_export($indicadorPaginacion, true), implode(', ', \ClonixDev\AeatSii\EnumType\IndicadorPaginacionType::getValidValues())), __LINE__);
        }
        $this->IndicadorPaginacion = $indicadorPaginacion;
        return $this;
    }
    /**
     * Get ResultadoConsulta value
     * @return string|null
     */
    public function getResultadoConsulta()
    {
        return $this->ResultadoConsulta;
    }
    /**
     * Set ResultadoConsulta value
     * @uses \ClonixDev\AeatSii\EnumType\ResultadoConsultaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\ResultadoConsultaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $resultadoConsulta
     * @return \ClonixDev\AeatSii\StructType\TitularPeriodoType
     */
    public function setResultadoConsulta($resultadoConsulta = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\ResultadoConsultaType::valueIsValid($resultadoConsulta)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\ResultadoConsultaType', is_array($resultadoConsulta) ? implode(', ', $resultadoConsulta) : var_export($resultadoConsulta, true), implode(', ', \ClonixDev\AeatSii\EnumType\ResultadoConsultaType::getValidValues())), __LINE__);
        }
        $this->ResultadoConsulta = $resultadoConsulta;
        return $this;
    }
}
