<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaFacturaPagosType StructType
 * @subpackage Structs
 */
class RespuestaConsultaFacturaPagosType extends ConsultaInformacion
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType
     */
    public $IDFactura;
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
     * Constructor method for RespuestaConsultaFacturaPagosType
     * @uses RespuestaConsultaFacturaPagosType::setIDFactura()
     * @uses RespuestaConsultaFacturaPagosType::setIndicadorPaginacion()
     * @uses RespuestaConsultaFacturaPagosType::setResultadoConsulta()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura
     * @param string $indicadorPaginacion
     * @param string $resultadoConsulta
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura = null, $indicadorPaginacion = null, $resultadoConsulta = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setIndicadorPaginacion($indicadorPaginacion)
            ->setResultadoConsulta($resultadoConsulta);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaFacturaPagosType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaNombreBCType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaFacturaPagosType
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaFacturaPagosType
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
