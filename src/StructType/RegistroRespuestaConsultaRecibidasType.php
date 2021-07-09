<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaRecibidasType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaRecibidasType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaRecibidaType
     */
    public $IDFactura;
    /**
     * The DatosFacturaRecibida
     * @var \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType
     */
    public $DatosFacturaRecibida;
    /**
     * The DatosPresentacion
     * @var \ClonixDev\AeatSii\StructType\DatosPresentacion2Type
     */
    public $DatosPresentacion;
    /**
     * The EstadoFactura
     * @var \ClonixDev\AeatSii\StructType\EstadoFacturaType
     */
    public $EstadoFactura;
    /**
     * The DatosDescuadreContraparte
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType
     */
    public $DatosDescuadreContraparte;
    /**
     * Constructor method for RegistroRespuestaConsultaRecibidasType
     * @uses RegistroRespuestaConsultaRecibidasType::setIDFactura()
     * @uses RegistroRespuestaConsultaRecibidasType::setDatosFacturaRecibida()
     * @uses RegistroRespuestaConsultaRecibidasType::setDatosPresentacion()
     * @uses RegistroRespuestaConsultaRecibidasType::setEstadoFactura()
     * @uses RegistroRespuestaConsultaRecibidasType::setDatosDescuadreContraparte()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType $datosFacturaRecibida
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @param \ClonixDev\AeatSii\StructType\EstadoFacturaType $estadoFactura
     * @param \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType $datosDescuadreContraparte
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaType $iDFactura = null, \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType $datosFacturaRecibida = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null, \ClonixDev\AeatSii\StructType\EstadoFacturaType $estadoFactura = null, \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType $datosDescuadreContraparte = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setDatosFacturaRecibida($datosFacturaRecibida)
            ->setDatosPresentacion($datosPresentacion)
            ->setEstadoFactura($estadoFactura)
            ->setDatosDescuadreContraparte($datosDescuadreContraparte);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaRecibidaType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaRecibidaType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaRecibidaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get DatosFacturaRecibida value
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType|null
     */
    public function getDatosFacturaRecibida()
    {
        return $this->DatosFacturaRecibida;
    }
    /**
     * Set DatosFacturaRecibida value
     * @param \ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType $datosFacturaRecibida
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType
     */
    public function setDatosFacturaRecibida(\ClonixDev\AeatSii\StructType\FacturaRespuestaRecibidaType $datosFacturaRecibida = null)
    {
        $this->DatosFacturaRecibida = $datosFacturaRecibida;
        return $this;
    }
    /**
     * Get DatosPresentacion value
     * @return \ClonixDev\AeatSii\StructType\DatosPresentacion2Type|null
     */
    public function getDatosPresentacion()
    {
        return $this->DatosPresentacion;
    }
    /**
     * Set DatosPresentacion value
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType
     */
    public function setDatosPresentacion(\ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null)
    {
        $this->DatosPresentacion = $datosPresentacion;
        return $this;
    }
    /**
     * Get EstadoFactura value
     * @return \ClonixDev\AeatSii\StructType\EstadoFacturaType|null
     */
    public function getEstadoFactura()
    {
        return $this->EstadoFactura;
    }
    /**
     * Set EstadoFactura value
     * @param \ClonixDev\AeatSii\StructType\EstadoFacturaType $estadoFactura
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType
     */
    public function setEstadoFactura(\ClonixDev\AeatSii\StructType\EstadoFacturaType $estadoFactura = null)
    {
        $this->EstadoFactura = $estadoFactura;
        return $this;
    }
    /**
     * Get DatosDescuadreContraparte value
     * @return \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType|null
     */
    public function getDatosDescuadreContraparte()
    {
        return $this->DatosDescuadreContraparte;
    }
    /**
     * Set DatosDescuadreContraparte value
     * @param \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType $datosDescuadreContraparte
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaRecibidasType
     */
    public function setDatosDescuadreContraparte(\ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType $datosDescuadreContraparte = null)
    {
        $this->DatosDescuadreContraparte = $datosDescuadreContraparte;
        return $this;
    }
}
