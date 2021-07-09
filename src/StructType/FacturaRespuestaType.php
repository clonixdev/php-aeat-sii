<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacturaRespuestaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos comunes de facturas emitidas y recibidas
 * @subpackage Structs
 */
class FacturaRespuestaType extends AbstractStructBase
{
    /**
     * The TipoFactura
     * Meta information extracted from the WSDL
     * - documentation: Clave del tipo de factura
     * @var string
     */
    public $TipoFactura;
    /**
     * The TipoRectificativa
     * Meta information extracted from the WSDL
     * - documentation: Clave del tipo de factura
     * - minOccurs: 0
     * @var string
     */
    public $TipoRectificativa;
    /**
     * The FacturasAgrupadas
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\FacturasAgrupadas
     */
    public $FacturasAgrupadas;
    /**
     * The FacturasRectificadas
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\FacturasRectificadas
     */
    public $FacturasRectificadas;
    /**
     * The ImporteRectificacion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\DesgloseRectificacionType
     */
    public $ImporteRectificacion;
    /**
     * The FechaOperacion
     * Meta information extracted from the WSDL
     * - base: string
     * - length: 10
     * - minOccurs: 0
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaOperacion;
    /**
     * The ClaveRegimenEspecialOTrascendencia
     * @var string
     */
    public $ClaveRegimenEspecialOTrascendencia;
    /**
     * The ClaveRegimenEspecialOTrascendenciaAdicional1
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaveRegimenEspecialOTrascendenciaAdicional1;
    /**
     * The ClaveRegimenEspecialOTrascendenciaAdicional2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $ClaveRegimenEspecialOTrascendenciaAdicional2;
    /**
     * The NumRegistroAcuerdoFacturacion
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 15
     * - minOccurs: 0
     * @var string
     */
    public $NumRegistroAcuerdoFacturacion;
    /**
     * The ImporteTotal
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $ImporteTotal;
    /**
     * The BaseImponibleACoste
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $BaseImponibleACoste;
    /**
     * The DescripcionOperacion
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 500
     * @var string
     */
    public $DescripcionOperacion;
    /**
     * The RefExterna
     * Meta information extracted from the WSDL
     * - base: string
     * - maxLength: 60
     * - minOccurs: 0
     * @var string
     */
    public $RefExterna;
    /**
     * The FacturaSimplificadaArticulos7_2_7_3
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FacturaSimplificadaArticulos7_2_7_3;
    /**
     * The EntidadSucedida
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType
     */
    public $EntidadSucedida;
    /**
     * The RegPrevioGGEEoREDEMEoCompetencia
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $RegPrevioGGEEoREDEMEoCompetencia;
    /**
     * The Macrodato
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Macrodato;
    /**
     * Constructor method for FacturaRespuestaType
     * @uses FacturaRespuestaType::setTipoFactura()
     * @uses FacturaRespuestaType::setTipoRectificativa()
     * @uses FacturaRespuestaType::setFacturasAgrupadas()
     * @uses FacturaRespuestaType::setFacturasRectificadas()
     * @uses FacturaRespuestaType::setImporteRectificacion()
     * @uses FacturaRespuestaType::setFechaOperacion()
     * @uses FacturaRespuestaType::setClaveRegimenEspecialOTrascendencia()
     * @uses FacturaRespuestaType::setClaveRegimenEspecialOTrascendenciaAdicional1()
     * @uses FacturaRespuestaType::setClaveRegimenEspecialOTrascendenciaAdicional2()
     * @uses FacturaRespuestaType::setNumRegistroAcuerdoFacturacion()
     * @uses FacturaRespuestaType::setImporteTotal()
     * @uses FacturaRespuestaType::setBaseImponibleACoste()
     * @uses FacturaRespuestaType::setDescripcionOperacion()
     * @uses FacturaRespuestaType::setRefExterna()
     * @uses FacturaRespuestaType::setFacturaSimplificadaArticulos7_2_7_3()
     * @uses FacturaRespuestaType::setEntidadSucedida()
     * @uses FacturaRespuestaType::setRegPrevioGGEEoREDEMEoCompetencia()
     * @uses FacturaRespuestaType::setMacrodato()
     * @param string $tipoFactura
     * @param string $tipoRectificativa
     * @param \ClonixDev\AeatSii\StructType\FacturasAgrupadas $facturasAgrupadas
     * @param \ClonixDev\AeatSii\StructType\FacturasRectificadas $facturasRectificadas
     * @param \ClonixDev\AeatSii\StructType\DesgloseRectificacionType $importeRectificacion
     * @param string $fechaOperacion
     * @param string $claveRegimenEspecialOTrascendencia
     * @param string $claveRegimenEspecialOTrascendenciaAdicional1
     * @param string $claveRegimenEspecialOTrascendenciaAdicional2
     * @param string $numRegistroAcuerdoFacturacion
     * @param string $importeTotal
     * @param string $baseImponibleACoste
     * @param string $descripcionOperacion
     * @param string $refExterna
     * @param string $facturaSimplificadaArticulos7_2_7_3
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     * @param string $regPrevioGGEEoREDEMEoCompetencia
     * @param string $macrodato
     */
    public function __construct($tipoFactura = null, $tipoRectificativa = null, \ClonixDev\AeatSii\StructType\FacturasAgrupadas $facturasAgrupadas = null, \ClonixDev\AeatSii\StructType\FacturasRectificadas $facturasRectificadas = null, \ClonixDev\AeatSii\StructType\DesgloseRectificacionType $importeRectificacion = null, $fechaOperacion = null, $claveRegimenEspecialOTrascendencia = null, $claveRegimenEspecialOTrascendenciaAdicional1 = null, $claveRegimenEspecialOTrascendenciaAdicional2 = null, $numRegistroAcuerdoFacturacion = null, $importeTotal = null, $baseImponibleACoste = null, $descripcionOperacion = null, $refExterna = null, $facturaSimplificadaArticulos7_2_7_3 = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null, $regPrevioGGEEoREDEMEoCompetencia = null, $macrodato = null)
    {
        $this
            ->setTipoFactura($tipoFactura)
            ->setTipoRectificativa($tipoRectificativa)
            ->setFacturasAgrupadas($facturasAgrupadas)
            ->setFacturasRectificadas($facturasRectificadas)
            ->setImporteRectificacion($importeRectificacion)
            ->setFechaOperacion($fechaOperacion)
            ->setClaveRegimenEspecialOTrascendencia($claveRegimenEspecialOTrascendencia)
            ->setClaveRegimenEspecialOTrascendenciaAdicional1($claveRegimenEspecialOTrascendenciaAdicional1)
            ->setClaveRegimenEspecialOTrascendenciaAdicional2($claveRegimenEspecialOTrascendenciaAdicional2)
            ->setNumRegistroAcuerdoFacturacion($numRegistroAcuerdoFacturacion)
            ->setImporteTotal($importeTotal)
            ->setBaseImponibleACoste($baseImponibleACoste)
            ->setDescripcionOperacion($descripcionOperacion)
            ->setRefExterna($refExterna)
            ->setFacturaSimplificadaArticulos7_2_7_3($facturaSimplificadaArticulos7_2_7_3)
            ->setEntidadSucedida($entidadSucedida)
            ->setRegPrevioGGEEoREDEMEoCompetencia($regPrevioGGEEoREDEMEoCompetencia)
            ->setMacrodato($macrodato);
    }
    /**
     * Get TipoFactura value
     * @return string|null
     */
    public function getTipoFactura()
    {
        return $this->TipoFactura;
    }
    /**
     * Set TipoFactura value
     * @uses \ClonixDev\AeatSii\EnumType\ClaveTipoFacturaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\ClaveTipoFacturaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoFactura
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setTipoFactura($tipoFactura = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\ClaveTipoFacturaType::valueIsValid($tipoFactura)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\ClaveTipoFacturaType', is_array($tipoFactura) ? implode(', ', $tipoFactura) : var_export($tipoFactura, true), implode(', ', \ClonixDev\AeatSii\EnumType\ClaveTipoFacturaType::getValidValues())), __LINE__);
        }
        $this->TipoFactura = $tipoFactura;
        return $this;
    }
    /**
     * Get TipoRectificativa value
     * @return string|null
     */
    public function getTipoRectificativa()
    {
        return $this->TipoRectificativa;
    }
    /**
     * Set TipoRectificativa value
     * @uses \ClonixDev\AeatSii\EnumType\ClaveTipoRectificativaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\ClaveTipoRectificativaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $tipoRectificativa
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setTipoRectificativa($tipoRectificativa = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\ClaveTipoRectificativaType::valueIsValid($tipoRectificativa)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\ClaveTipoRectificativaType', is_array($tipoRectificativa) ? implode(', ', $tipoRectificativa) : var_export($tipoRectificativa, true), implode(', ', \ClonixDev\AeatSii\EnumType\ClaveTipoRectificativaType::getValidValues())), __LINE__);
        }
        $this->TipoRectificativa = $tipoRectificativa;
        return $this;
    }
    /**
     * Get FacturasAgrupadas value
     * @return \ClonixDev\AeatSii\StructType\FacturasAgrupadas|null
     */
    public function getFacturasAgrupadas()
    {
        return $this->FacturasAgrupadas;
    }
    /**
     * Set FacturasAgrupadas value
     * @param \ClonixDev\AeatSii\StructType\FacturasAgrupadas $facturasAgrupadas
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setFacturasAgrupadas(\ClonixDev\AeatSii\StructType\FacturasAgrupadas $facturasAgrupadas = null)
    {
        $this->FacturasAgrupadas = $facturasAgrupadas;
        return $this;
    }
    /**
     * Get FacturasRectificadas value
     * @return \ClonixDev\AeatSii\StructType\FacturasRectificadas|null
     */
    public function getFacturasRectificadas()
    {
        return $this->FacturasRectificadas;
    }
    /**
     * Set FacturasRectificadas value
     * @param \ClonixDev\AeatSii\StructType\FacturasRectificadas $facturasRectificadas
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setFacturasRectificadas(\ClonixDev\AeatSii\StructType\FacturasRectificadas $facturasRectificadas = null)
    {
        $this->FacturasRectificadas = $facturasRectificadas;
        return $this;
    }
    /**
     * Get ImporteRectificacion value
     * @return \ClonixDev\AeatSii\StructType\DesgloseRectificacionType|null
     */
    public function getImporteRectificacion()
    {
        return $this->ImporteRectificacion;
    }
    /**
     * Set ImporteRectificacion value
     * @param \ClonixDev\AeatSii\StructType\DesgloseRectificacionType $importeRectificacion
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setImporteRectificacion(\ClonixDev\AeatSii\StructType\DesgloseRectificacionType $importeRectificacion = null)
    {
        $this->ImporteRectificacion = $importeRectificacion;
        return $this;
    }
    /**
     * Get FechaOperacion value
     * @return string|null
     */
    public function getFechaOperacion()
    {
        return $this->FechaOperacion;
    }
    /**
     * Set FechaOperacion value
     * @param string $fechaOperacion
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setFechaOperacion($fechaOperacion = null)
    {
        // validation for constraint: string
        if (!is_null($fechaOperacion) && !is_string($fechaOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaOperacion, true), gettype($fechaOperacion)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaOperacion) && mb_strlen($fechaOperacion) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaOperacion)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaOperacion) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaOperacion, true)), __LINE__);
        }
        $this->FechaOperacion = $fechaOperacion;
        return $this;
    }
    /**
     * Get ClaveRegimenEspecialOTrascendencia value
     * @return string|null
     */
    public function getClaveRegimenEspecialOTrascendencia()
    {
        return $this->ClaveRegimenEspecialOTrascendencia;
    }
    /**
     * Set ClaveRegimenEspecialOTrascendencia value
     * @uses \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claveRegimenEspecialOTrascendencia
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setClaveRegimenEspecialOTrascendencia($claveRegimenEspecialOTrascendencia = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::valueIsValid($claveRegimenEspecialOTrascendencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType', is_array($claveRegimenEspecialOTrascendencia) ? implode(', ', $claveRegimenEspecialOTrascendencia) : var_export($claveRegimenEspecialOTrascendencia, true), implode(', ', \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::getValidValues())), __LINE__);
        }
        $this->ClaveRegimenEspecialOTrascendencia = $claveRegimenEspecialOTrascendencia;
        return $this;
    }
    /**
     * Get ClaveRegimenEspecialOTrascendenciaAdicional1 value
     * @return string|null
     */
    public function getClaveRegimenEspecialOTrascendenciaAdicional1()
    {
        return $this->ClaveRegimenEspecialOTrascendenciaAdicional1;
    }
    /**
     * Set ClaveRegimenEspecialOTrascendenciaAdicional1 value
     * @uses \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claveRegimenEspecialOTrascendenciaAdicional1
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setClaveRegimenEspecialOTrascendenciaAdicional1($claveRegimenEspecialOTrascendenciaAdicional1 = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::valueIsValid($claveRegimenEspecialOTrascendenciaAdicional1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType', is_array($claveRegimenEspecialOTrascendenciaAdicional1) ? implode(', ', $claveRegimenEspecialOTrascendenciaAdicional1) : var_export($claveRegimenEspecialOTrascendenciaAdicional1, true), implode(', ', \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::getValidValues())), __LINE__);
        }
        $this->ClaveRegimenEspecialOTrascendenciaAdicional1 = $claveRegimenEspecialOTrascendenciaAdicional1;
        return $this;
    }
    /**
     * Get ClaveRegimenEspecialOTrascendenciaAdicional2 value
     * @return string|null
     */
    public function getClaveRegimenEspecialOTrascendenciaAdicional2()
    {
        return $this->ClaveRegimenEspecialOTrascendenciaAdicional2;
    }
    /**
     * Set ClaveRegimenEspecialOTrascendenciaAdicional2 value
     * @uses \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $claveRegimenEspecialOTrascendenciaAdicional2
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setClaveRegimenEspecialOTrascendenciaAdicional2($claveRegimenEspecialOTrascendenciaAdicional2 = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::valueIsValid($claveRegimenEspecialOTrascendenciaAdicional2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType', is_array($claveRegimenEspecialOTrascendenciaAdicional2) ? implode(', ', $claveRegimenEspecialOTrascendenciaAdicional2) : var_export($claveRegimenEspecialOTrascendenciaAdicional2, true), implode(', ', \ClonixDev\AeatSii\EnumType\IdOperacionesTrascendenciaTributariaType::getValidValues())), __LINE__);
        }
        $this->ClaveRegimenEspecialOTrascendenciaAdicional2 = $claveRegimenEspecialOTrascendenciaAdicional2;
        return $this;
    }
    /**
     * Get NumRegistroAcuerdoFacturacion value
     * @return string|null
     */
    public function getNumRegistroAcuerdoFacturacion()
    {
        return $this->NumRegistroAcuerdoFacturacion;
    }
    /**
     * Set NumRegistroAcuerdoFacturacion value
     * @param string $numRegistroAcuerdoFacturacion
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setNumRegistroAcuerdoFacturacion($numRegistroAcuerdoFacturacion = null)
    {
        // validation for constraint: string
        if (!is_null($numRegistroAcuerdoFacturacion) && !is_string($numRegistroAcuerdoFacturacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numRegistroAcuerdoFacturacion, true), gettype($numRegistroAcuerdoFacturacion)), __LINE__);
        }
        // validation for constraint: maxLength(15)
        if (!is_null($numRegistroAcuerdoFacturacion) && mb_strlen($numRegistroAcuerdoFacturacion) > 15) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 15', mb_strlen($numRegistroAcuerdoFacturacion)), __LINE__);
        }
        $this->NumRegistroAcuerdoFacturacion = $numRegistroAcuerdoFacturacion;
        return $this;
    }
    /**
     * Get ImporteTotal value
     * @return string|null
     */
    public function getImporteTotal()
    {
        return $this->ImporteTotal;
    }
    /**
     * Set ImporteTotal value
     * @param string $importeTotal
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setImporteTotal($importeTotal = null)
    {
        // validation for constraint: string
        if (!is_null($importeTotal) && !is_string($importeTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeTotal, true), gettype($importeTotal)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($importeTotal) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $importeTotal)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($importeTotal, true)), __LINE__);
        }
        $this->ImporteTotal = $importeTotal;
        return $this;
    }
    /**
     * Get BaseImponibleACoste value
     * @return string|null
     */
    public function getBaseImponibleACoste()
    {
        return $this->BaseImponibleACoste;
    }
    /**
     * Set BaseImponibleACoste value
     * @param string $baseImponibleACoste
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setBaseImponibleACoste($baseImponibleACoste = null)
    {
        // validation for constraint: string
        if (!is_null($baseImponibleACoste) && !is_string($baseImponibleACoste)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseImponibleACoste, true), gettype($baseImponibleACoste)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($baseImponibleACoste) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $baseImponibleACoste)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($baseImponibleACoste, true)), __LINE__);
        }
        $this->BaseImponibleACoste = $baseImponibleACoste;
        return $this;
    }
    /**
     * Get DescripcionOperacion value
     * @return string|null
     */
    public function getDescripcionOperacion()
    {
        return $this->DescripcionOperacion;
    }
    /**
     * Set DescripcionOperacion value
     * @param string $descripcionOperacion
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setDescripcionOperacion($descripcionOperacion = null)
    {
        // validation for constraint: string
        if (!is_null($descripcionOperacion) && !is_string($descripcionOperacion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descripcionOperacion, true), gettype($descripcionOperacion)), __LINE__);
        }
        // validation for constraint: maxLength(500)
        if (!is_null($descripcionOperacion) && mb_strlen($descripcionOperacion) > 500) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 500', mb_strlen($descripcionOperacion)), __LINE__);
        }
        $this->DescripcionOperacion = $descripcionOperacion;
        return $this;
    }
    /**
     * Get RefExterna value
     * @return string|null
     */
    public function getRefExterna()
    {
        return $this->RefExterna;
    }
    /**
     * Set RefExterna value
     * @param string $refExterna
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setRefExterna($refExterna = null)
    {
        // validation for constraint: string
        if (!is_null($refExterna) && !is_string($refExterna)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refExterna, true), gettype($refExterna)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($refExterna) && mb_strlen($refExterna) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($refExterna)), __LINE__);
        }
        $this->RefExterna = $refExterna;
        return $this;
    }
    /**
     * Get facturaSimplificadaArticulos7 value
     * @return facturaSimplificadaArticulos7
     */
    public function getFacturaSimplificadaArticulos7_2_7_3()
    {
        return $this->{'FacturaSimplificadaArticulos7.2_7.3'};
    }
    /**
     * Set facturaSimplificadaArticulos7 value
     * @param facturaSimplificadaArticulos7 $facturaSimplificadaArticulos7
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setFacturaSimplificadaArticulos7_2_7_3($facturaSimplificadaArticulos7_2_7_3 = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\SimplificadaCualificadaType::valueIsValid($facturaSimplificadaArticulos7_2_7_3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\SimplificadaCualificadaType', is_array($facturaSimplificadaArticulos7_2_7_3) ? implode(', ', $facturaSimplificadaArticulos7_2_7_3) : var_export($facturaSimplificadaArticulos7_2_7_3, true), implode(', ', \ClonixDev\AeatSii\EnumType\SimplificadaCualificadaType::getValidValues())), __LINE__);
        }
        $this->FacturaSimplificadaArticulos7_2_7_3 = $this->{'FacturaSimplificadaArticulos7.2_7.3'} = $facturaSimplificadaArticulos7_2_7_3;
        return $this;
    }
    /**
     * Get EntidadSucedida value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType|null
     */
    public function getEntidadSucedida()
    {
        return $this->EntidadSucedida;
    }
    /**
     * Set EntidadSucedida value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setEntidadSucedida(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaUnicaESType $entidadSucedida = null)
    {
        $this->EntidadSucedida = $entidadSucedida;
        return $this;
    }
    /**
     * Get RegPrevioGGEEoREDEMEoCompetencia value
     * @return string|null
     */
    public function getRegPrevioGGEEoREDEMEoCompetencia()
    {
        return $this->RegPrevioGGEEoREDEMEoCompetencia;
    }
    /**
     * Set RegPrevioGGEEoREDEMEoCompetencia value
     * @uses \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regPrevioGGEEoREDEMEoCompetencia
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setRegPrevioGGEEoREDEMEoCompetencia($regPrevioGGEEoREDEMEoCompetencia = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::valueIsValid($regPrevioGGEEoREDEMEoCompetencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType', is_array($regPrevioGGEEoREDEMEoCompetencia) ? implode(', ', $regPrevioGGEEoREDEMEoCompetencia) : var_export($regPrevioGGEEoREDEMEoCompetencia, true), implode(', ', \ClonixDev\AeatSii\EnumType\RegPrevioGGEEoREDEMEoCompetenciaType::getValidValues())), __LINE__);
        }
        $this->RegPrevioGGEEoREDEMEoCompetencia = $regPrevioGGEEoREDEMEoCompetencia;
        return $this;
    }
    /**
     * Get Macrodato value
     * @return string|null
     */
    public function getMacrodato()
    {
        return $this->Macrodato;
    }
    /**
     * Set Macrodato value
     * @uses \ClonixDev\AeatSii\EnumType\MacrodatoType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\MacrodatoType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $macrodato
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaType
     */
    public function setMacrodato($macrodato = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\MacrodatoType::valueIsValid($macrodato)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\MacrodatoType', is_array($macrodato) ? implode(', ', $macrodato) : var_export($macrodato, true), implode(', ', \ClonixDev\AeatSii\EnumType\MacrodatoType::getValidValues())), __LINE__);
        }
        $this->Macrodato = $macrodato;
        return $this;
    }
}
