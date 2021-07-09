<?php

namespace ClonixDev\AeatSii\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Anulacion ServiceType
 * @subpackage Services
 */
class Anulacion extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AnulacionLRFacturasEmitidas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ClonixDev\AeatSii\StructType\BajaLRFacturasEmitidas $anulacionLRFacturasEmitidas
     * @return \ClonixDev\AeatSii\StructType\RespuestaLRBajaFEmitidasType|bool
     */
    public function AnulacionLRFacturasEmitidas(\ClonixDev\AeatSii\StructType\BajaLRFacturasEmitidas $anulacionLRFacturasEmitidas)
    {
        try {
            $this->setResult($this->getSoapClient()->AnulacionLRFacturasEmitidas($anulacionLRFacturasEmitidas));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ClonixDev\AeatSii\StructType\RespuestaLRBajaFEmitidasType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
