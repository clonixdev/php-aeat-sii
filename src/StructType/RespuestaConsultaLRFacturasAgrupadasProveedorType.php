<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaConsultaLRFacturasAgrupadasProveedorType
 * StructType
 * @subpackage Structs
 */
class RespuestaConsultaLRFacturasAgrupadasProveedorType extends ConsultaInformacionProveedor
{
    /**
     * The ResultadoConsulta
     * @var string
     */
    public $ResultadoConsulta;
    /**
     * Constructor method for RespuestaConsultaLRFacturasAgrupadasProveedorType
     * @uses RespuestaConsultaLRFacturasAgrupadasProveedorType::setResultadoConsulta()
     * @param string $resultadoConsulta
     */
    public function __construct($resultadoConsulta = null)
    {
        $this
            ->setResultadoConsulta($resultadoConsulta);
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFacturasAgrupadasProveedorType
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
