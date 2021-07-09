<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RespuestaCobrosPagosType StructType
 * Meta information extracted from the WSDL
 * - documentation: Respuesta a un envío Sii de baja
 * @subpackage Structs
 */
class RespuestaCobrosPagosType extends AbstractStructBase
{
    /**
     * The CSV
     * Meta information extracted from the WSDL
     * - documentation: CSV asociado al envío generado por AEAT. Solo se genera si no hay rechazo del envio
     * - minOccurs: 0
     * @var string
     */
    public $CSV;
    /**
     * The DatosPresentacion
     * Meta information extracted from the WSDL
     * - documentation: Se devuelven datos de la presentacion realizada. Solo se genera si no hay rechazo del envio
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacionType
     */
    public $DatosPresentacion;
    /**
     * The Cabecera
     * Meta information extracted from the WSDL
     * - documentation: Se devuelve la cabecera que se incluó en el envío.
     * @var \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos
     */
    public $Cabecera;
    /**
     * The EstadoEnvio
     * Meta information extracted from the WSDL
     * - documentation: Estado del envío en conjunto. Si los datos de cabecera y todos los registros son correctos,el estado es correcto. En caso de estructura y cabecera correctos donde todos los registros son incorrectos, el estado es incorrecto En caso
     * de estructura y cabecera correctos con al menos un registro incorrecto o aceptado con errores, el estado global es parcialmente correcto.
     * @var string
     */
    public $EstadoEnvio;
    /**
     * Constructor method for RespuestaCobrosPagosType
     * @uses RespuestaCobrosPagosType::setCSV()
     * @uses RespuestaCobrosPagosType::setDatosPresentacion()
     * @uses RespuestaCobrosPagosType::setCabecera()
     * @uses RespuestaCobrosPagosType::setEstadoEnvio()
     * @param string $cSV
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacionType $datosPresentacion
     * @param \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos $cabecera
     * @param string $estadoEnvio
     */
    public function __construct($cSV = null, \ClonixDev\AeatSii\StructType\DatosPresentacionType $datosPresentacion = null, \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos $cabecera = null, $estadoEnvio = null)
    {
        $this
            ->setCSV($cSV)
            ->setDatosPresentacion($datosPresentacion)
            ->setCabecera($cabecera)
            ->setEstadoEnvio($estadoEnvio);
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
     * @return \ClonixDev\AeatSii\StructType\RespuestaCobrosPagosType
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
     * Get DatosPresentacion value
     * @return \ClonixDev\AeatSii\StructType\DatosPresentacionType|null
     */
    public function getDatosPresentacion()
    {
        return $this->DatosPresentacion;
    }
    /**
     * Set DatosPresentacion value
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacionType $datosPresentacion
     * @return \ClonixDev\AeatSii\StructType\RespuestaCobrosPagosType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacionType $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
    /**
     * Get Cabecera value
     * @return \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos|null
     */
    public function getCabecera()
    {
        return $this->Cabecera;
    }
    /**
     * Set Cabecera value
     * @param \ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos $cabecera
     * @return \ClonixDev\AeatSii\StructType\RespuestaCobrosPagosType
     */
    public function setCabecera(\ClonixDev\AeatSii\StructType\CabeceraSiiCobrosPagos $cabecera = null)
    {
        $this->Cabecera = $cabecera;
        return $this;
    }
    /**
     * Get EstadoEnvio value
     * @return string|null
     */
    public function getEstadoEnvio()
    {
        return $this->EstadoEnvio;
    }
    /**
     * Set EstadoEnvio value
     * @uses \ClonixDev\AeatSii\EnumType\EstadoEnvioType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\EstadoEnvioType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $estadoEnvio
     * @return \ClonixDev\AeatSii\StructType\RespuestaCobrosPagosType
     */
    public function setEstadoEnvio($estadoEnvio = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\EstadoEnvioType::valueIsValid($estadoEnvio)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\EstadoEnvioType', is_array($estadoEnvio) ? implode(', ', $estadoEnvio) : var_export($estadoEnvio, true), implode(', ', \ClonixDev\AeatSii\EnumType\EstadoEnvioType::getValidValues())), __LINE__);
        }
        $this->EstadoEnvio = $estadoEnvio;
        return $this;
    }
}
