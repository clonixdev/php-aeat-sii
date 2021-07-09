<?php

namespace ClonixDev\AeatSii\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Consulta ServiceType
 * @subpackage Services
 */
class Consulta extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ConsultaLRFacturasEmitidas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ClonixDev\AeatSii\StructType\LRConsultaEmitidasType $consultaLRFacturasEmitidas
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFacturasEmitidasType|bool
     */
    public function ConsultaLRFacturasEmitidas(\ClonixDev\AeatSii\StructType\LRConsultaEmitidasType $consultaLRFacturasEmitidas)
    {
        try {
            $this->setResult($this->getSoapClient()->ConsultaLRFacturasEmitidas($consultaLRFacturasEmitidas));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
					echo'ERRORRR';
			die($this->getSoapClient()->__getLastResponse());
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConsultaLRFactInformadasCliente
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasClienteType $consultaLRFactInformadasCliente
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasClienteType|bool
     */
    public function ConsultaLRFactInformadasCliente(\ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasClienteType $consultaLRFactInformadasCliente)
    {
        try {
            $this->setResult($this->getSoapClient()->ConsultaLRFactInformadasCliente($consultaLRFactInformadasCliente));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ConsultaLRFactInformadasAgrupadasCliente
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasAgrupadasClienteType $consultaLRFactInformadasAgrupadasCliente
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasAgrupadasClienteType|bool
     */
    public function ConsultaLRFactInformadasAgrupadasCliente(\ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasAgrupadasClienteType $consultaLRFactInformadasAgrupadasCliente)
    {
        try {
            $this->setResult($this->getSoapClient()->ConsultaLRFactInformadasAgrupadasCliente($consultaLRFactInformadasAgrupadasCliente));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasAgrupadasClienteType|\ClonixDev\AeatSii\StructType\RespuestaConsultaLRFactInformadasClienteType|\ClonixDev\AeatSii\StructType\RespuestaConsultaLRFacturasEmitidasType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
