<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = array(
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www6.aeat.es/static_files/common/internet/dep/aplicaciones/es/aeat/ssii_1_1_bis/fact/ws/SuministroFactEmitidas.wsdl',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * );
 * etc...
 */

use ClonixDev\AeatSii\StructType\CabeceraConsultaSii;
use ClonixDev\AeatSii\StructType\CabeceraSii;
use ClonixDev\AeatSii\StructType\DesgloseIVA;
use ClonixDev\AeatSii\StructType\DetalleIVAEmitidaType;
use ClonixDev\AeatSii\StructType\DetalleIVARecibidaType;
use ClonixDev\AeatSii\StructType\IDEmisorFactura;
use ClonixDev\AeatSii\StructType\IDFacturaExpedidaType;
use ClonixDev\AeatSii\StructType\LRFiltroEmitidasType;
use ClonixDev\AeatSii\StructType\NoExenta;
use ClonixDev\AeatSii\StructType\NoSujetaType;
use ClonixDev\AeatSii\StructType\PeriodoLiquidacion;
use ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType;
use ClonixDev\AeatSii\StructType\SujetaPrestacionType;
use ClonixDev\AeatSii\StructType\SujetaType;
use ClonixDev\AeatSii\StructType\TipoDesglose;
use ClonixDev\AeatSii\StructType\TipoSinDesglosePrestacionType;
use ClonixDev\AeatSii\StructType\TipoSinDesgloseType;

require_once __DIR__ . '/vendor/autoload.php';

$local_cert = 'F:\laragon\www\package-7190\carthago.pem';
/**
 * Minimal options
 */
$options = array(
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://www6.aeat.es/static_files/common/internet/dep/aplicaciones/es/aeat/ssii_1_1_bis/fact/ws/SuministroFactEmitidas.wsdl',
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \ClonixDev\AeatSii\ClassMap::get(),
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOCAL_CERT => $local_cert ,
    \WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_SOAP_VERSION => SOAP_1_1
);
$persona_fisica_juridica = new \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaESType("CARTHAGO VELA SLU","B30847735","B30847735");
$persona_fisica_juridica_unica = new \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType("CARTHAGO VELA SLU","B30847735");


/**
 * Samples for Suministro ServiceType
 */



$suministro = new \ClonixDev\AeatSii\ServiceType\Suministro($options);
$suministro_cabecera = new CabeceraSii("1.1",$persona_fisica_juridica,'A0');
$params = new \ClonixDev\AeatSii\StructType\SuministroLRFacturasEmitidas();
$params->setCabecera($suministro_cabecera);


$facturas = [];

$contraparte_fisica_juridica = new PersonaFisicaJuridicaType("JOSE LLANOS Y DAVID CASTRO C.B.",null,"E74124199");



$excenta = null;


$detallesIVA = [];

$detallesIVA[] = new DetalleIVAEmitidaType("21","500","105");
$detallesIVA[] = new DetalleIVAEmitidaType("21","500","105");

$noExcenta = new NoExenta("S1",new DesgloseIVA($detallesIVA));
$tipo_desglose = new TipoDesglose(new TipoSinDesglosePrestacionType(new SujetaPrestacionType($excenta ,$noExcenta)));



$factura_expedida = new \ClonixDev\AeatSii\StructType\FacturaExpedidaType();

$factura_expedida->setTipoFactura("F1");
$factura_expedida->setClaveRegimenEspecialOTrascendencia("01");
$factura_expedida->setImporteTotal("1210");
$factura_expedida->setDescripcionOperacion('PRUEBA iport');
$factura_expedida->setFechaOperacion('08-07-2021');
$factura_expedida->setContraparte($contraparte_fisica_juridica);
$factura_expedida->setTipoDesglose($tipo_desglose);


$factura_expedida_id = new IDFacturaExpedidaType(new IDEmisorFactura("CARTHAGO VELA SLU","B30847735"),'SIIDEMO/1',null,'08-07-2021');

$factura =  new \ClonixDev\AeatSii\StructType\LRfacturasEmitidasType($factura_expedida_id,$factura_expedida);
$factura->setPeriodoLiquidacion(new PeriodoLiquidacion('2021','07'));
$facturas[] =  $factura;


/*
array (
  'PeriodoImpositivo' => 
  array (
    'Ejercicio' => '2021',
    'Periodo' => '7',
  ),
  'IDFactura' => 
  array (
    'IDEmisorFactura' => 
    array (
      'NIF' => 'X4378072E',
    ),
    'NumSerieFacturaEmisor' => 'SIIDEMO/1',
    'FechaExpedicionFacturaEmisor' => '31-12-2017',
  ),
  'FacturaExpedida' => 
  array (
    'TipoFactura' => 'F1',
    'ClaveRegimenEspecialOTrascendencia' => '01',
    'ImporteTotal' => 1210,
    'DescripcionOperacion' => 'Compra ordenador portátil',
    'FechaOperacion' => '31-12-2017',
    'Contraparte' => 
    array (
      'NombreRazon' => 'HeavyDots SL',
      'NIF' => 'B66544586',
    ),
    'TipoDesglose' => 
    array (
      'DesgloseFactura' => 
      array (
        'Sujeta' => 
        array (
          'NoExenta' => 
          array (
            'TipoNoExenta' => 'S1',
            'DesgloseIVA' => 
            array (
              'DetalleIVA' => 
              array (
                0 => 
                array (
                  'TipoImpositivo' => 21,
                  'BaseImponible' => 500,
                  'CuotaRepercutida' => 105,
                ),
                1 => 
                array (
                  'TipoImpositivo' => 21,
                  'BaseImponible' => 500,
                  'CuotaRepercutida' => 105,
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);*/

$params->setRegistroLRFacturasEmitidas($facturas);

if ($suministro->SuministroLRFacturasEmitidas($params) !== false) {
    print_r($suministro->getResult());
} else {
    print_r($suministro->getLastError());
}

die('end1');


$consulta = new \ClonixDev\AeatSii\ServiceType\Consulta($options);
$cabecera = new CabeceraConsultaSii("1.1",$persona_fisica_juridica_unica);

$params = new \ClonixDev\AeatSii\StructType\LRConsultaEmitidasType();
$params->setCabecera($cabecera);

$filtro = new LRFiltroEmitidasType();
$filtro->setPeriodoLiquidacion(new PeriodoLiquidacion("2021","01"));
$params->setFiltroConsulta($filtro);

if ($consulta->ConsultaLRFacturasEmitidas($params) !== false) {
	echo '<pre>'.print_r($consulta->getResult()).'</pre>';
} else {

		echo '<pre>ERROR'.print_r($consulta->getLastError()).'</pre>';
}

//echo '<pre>'.print_r($suministro,true).'</pre>';

die('end2');
/**
 * Sample call for SuministroLRFacturasEmitidas operation/method
 */

/**
 * Samples for Anulacion ServiceType
 */
$anulacion = new \ClonixDev\AeatSii\ServiceType\Anulacion($options);
/**
 * Sample call for AnulacionLRFacturasEmitidas operation/method
 */
if ($anulacion->AnulacionLRFacturasEmitidas(new \ClonixDev\AeatSii\StructType\BajaLRFacturasEmitidas()) !== false) {
    print_r($anulacion->getResult());
} else {
    print_r($anulacion->getLastError());
}
/**
 * Samples for Consulta ServiceType
 */
$consulta = new \ClonixDev\AeatSii\ServiceType\Consulta($options);
/**
 * Sample call for ConsultaLRFacturasEmitidas operation/method
 */
if ($consulta->ConsultaLRFacturasEmitidas(new \ClonixDev\AeatSii\StructType\LRConsultaEmitidasType()) !== false) {
    print_r($consulta->getResult());
} else {
    print_r($consulta->getLastError());
}
/**
 * Sample call for ConsultaLRFactInformadasCliente operation/method
 */
if ($consulta->ConsultaLRFactInformadasCliente(new \ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasClienteType()) !== false) {
    print_r($consulta->getResult());
} else {
    print_r($consulta->getLastError());
}
/**
 * Sample call for ConsultaLRFactInformadasAgrupadasCliente operation/method
 */
if ($consulta->ConsultaLRFactInformadasAgrupadasCliente(new \ClonixDev\AeatSii\StructType\ConsultaLRFactInformadasAgrupadasClienteType()) !== false) {
    print_r($consulta->getResult());
} else {
    print_r($consulta->getLastError());
}