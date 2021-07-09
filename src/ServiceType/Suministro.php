<?php

namespace ClonixDev\AeatSii\ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Suministro ServiceType
 * @subpackage Services
 */
class Suministro extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SuministroLRFacturasEmitidas
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \ClonixDev\AeatSii\StructType\SuministroLRFacturasEmitidas $suministroLRFacturasEmitidas
     * @return \ClonixDev\AeatSii\StructType\RespuestaLRFEmitidasType|bool
     */
    public function SuministroLRFacturasEmitidas(\ClonixDev\AeatSii\StructType\SuministroLRFacturasEmitidas $suministroLRFacturasEmitidas)
    {
        try {
            $this->setResult($this->getSoapClient()->SuministroLRFacturasEmitidas($suministroLRFacturasEmitidas));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \ClonixDev\AeatSii\StructType\RespuestaLRFEmitidasType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
