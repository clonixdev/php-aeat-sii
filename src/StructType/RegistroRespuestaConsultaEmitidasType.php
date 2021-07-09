<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegistroRespuestaConsultaEmitidasType StructType
 * @subpackage Structs
 */
class RegistroRespuestaConsultaEmitidasType extends AbstractStructBase
{
    /**
     * The IDFactura
     * @var \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType
     */
    public $IDFactura;
    /**
     * The DatosFacturaEmitida
     * @var \ClonixDev\AeatSii\StructType\FacturaRespuestaExpedidaType
     */
    public $DatosFacturaEmitida;
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
     * Constructor method for RegistroRespuestaConsultaEmitidasType
     * @uses RegistroRespuestaConsultaEmitidasType::setIDFactura()
     * @uses RegistroRespuestaConsultaEmitidasType::setDatosFacturaEmitida()
     * @uses RegistroRespuestaConsultaEmitidasType::setDatosPresentacion()
     * @uses RegistroRespuestaConsultaEmitidasType::setEstadoFactura()
     * @uses RegistroRespuestaConsultaEmitidasType::setDatosDescuadreContraparte()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura
     * @param \ClonixDev\AeatSii\StructType\FacturaRespuestaExpedidaType $datosFacturaEmitida
     * @param \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion
     * @param \ClonixDev\AeatSii\StructType\EstadoFacturaType $estadoFactura
     * @param \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType $datosDescuadreContraparte
     */
    public function __construct(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura = null, \ClonixDev\AeatSii\StructType\FacturaRespuestaExpedidaType $datosFacturaEmitida = null, \ClonixDev\AeatSii\StructType\DatosPresentacion2Type $datosPresentacion = null, \ClonixDev\AeatSii\StructType\EstadoFacturaType $estadoFactura = null, \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType $datosDescuadreContraparte = null)
    {
        $this
            ->setIDFactura($iDFactura)
            ->setDatosFacturaEmitida($datosFacturaEmitida)
            ->setDatosPresentacion($datosPresentacion)
            ->setEstadoFactura($estadoFactura)
            ->setDatosDescuadreContraparte($datosDescuadreContraparte);
    }
    /**
     * Get IDFactura value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType|null
     */
    public function getIDFactura()
    {
        return $this->IDFactura;
    }
    /**
     * Set IDFactura value
     * @param \ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType
     */
    public function setIDFactura(\ClonixDev\AeatSii\StructType\IDFacturaExpedidaType $iDFactura = null)
    {
        $this->IDFactura = $iDFactura;
        return $this;
    }
    /**
     * Get DatosFacturaEmitida value
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaExpedidaType|null
     */
    public function getDatosFacturaEmitida()
    {
        return $this->DatosFacturaEmitida;
    }
    /**
     * Set DatosFacturaEmitida value
     * @param \ClonixDev\AeatSii\StructType\FacturaRespuestaExpedidaType $datosFacturaEmitida
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType
     */
    public function setDatosFacturaEmitida(\ClonixDev\AeatSii\StructType\FacturaRespuestaExpedidaType $datosFacturaEmitida = null)
    {
        $this->DatosFacturaEmitida = $datosFacturaEmitida;
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType
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
     * @return \ClonixDev\AeatSii\StructType\RegistroRespuestaConsultaEmitidasType
     */
    public function setDatosDescuadreContraparte(\ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType $datosDescuadreContraparte = null)
    {
        $this->DatosDescuadreContraparte = $datosDescuadreContraparte;
        return $this;
    }
}
