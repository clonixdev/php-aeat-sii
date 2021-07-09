<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacturaRespuestaInformadaProveedorType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente al libro de facturas expedidas.
 * @subpackage Structs
 */
class FacturaRespuestaInformadaProveedorType extends FacturaRespuestaType
{
    /**
     * The DatosInmueble
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\DatosInmueble
     */
    public $DatosInmueble;
    /**
     * The ImporteTransmisionInmueblesSujetoAIVA
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $ImporteTransmisionInmueblesSujetoAIVA;
    /**
     * The EmitidaPorTercerosODestinatario
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $EmitidaPorTercerosODestinatario;
    /**
     * The FacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas;
    /**
     * The VariosDestinatarios
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $VariosDestinatarios;
    /**
     * The Cupon
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $Cupon;
    /**
     * The FacturaSinIdentifDestinatarioAritculo6_1_d
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $FacturaSinIdentifDestinatarioAritculo6_1_d;
    /**
     * The TipoDesglose
     * @var \ClonixDev\AeatSii\StructType\TipoDesglose
     */
    public $TipoDesglose;
    /**
     * The Cobros
     * @var string
     */
    public $Cobros;
    /**
     * Constructor method for FacturaRespuestaInformadaProveedorType
     * @uses FacturaRespuestaInformadaProveedorType::setDatosInmueble()
     * @uses FacturaRespuestaInformadaProveedorType::setImporteTransmisionInmueblesSujetoAIVA()
     * @uses FacturaRespuestaInformadaProveedorType::setEmitidaPorTercerosODestinatario()
     * @uses FacturaRespuestaInformadaProveedorType::setFacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas()
     * @uses FacturaRespuestaInformadaProveedorType::setVariosDestinatarios()
     * @uses FacturaRespuestaInformadaProveedorType::setCupon()
     * @uses FacturaRespuestaInformadaProveedorType::setFacturaSinIdentifDestinatarioAritculo6_1_d()
     * @uses FacturaRespuestaInformadaProveedorType::setTipoDesglose()
     * @uses FacturaRespuestaInformadaProveedorType::setCobros()
     * @param \ClonixDev\AeatSii\StructType\DatosInmueble $datosInmueble
     * @param string $importeTransmisionInmueblesSujetoAIVA
     * @param string $emitidaPorTercerosODestinatario
     * @param string $facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas
     * @param string $variosDestinatarios
     * @param string $cupon
     * @param string $facturaSinIdentifDestinatarioAritculo6_1_d
     * @param \ClonixDev\AeatSii\StructType\TipoDesglose $tipoDesglose
     * @param string $cobros
     */
    public function __construct(\ClonixDev\AeatSii\StructType\DatosInmueble $datosInmueble = null, $importeTransmisionInmueblesSujetoAIVA = null, $emitidaPorTercerosODestinatario = null, $facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas = null, $variosDestinatarios = null, $cupon = null, $facturaSinIdentifDestinatarioAritculo6_1_d = null, \ClonixDev\AeatSii\StructType\TipoDesglose $tipoDesglose = null, $cobros = null)
    {
        $this
            ->setDatosInmueble($datosInmueble)
            ->setImporteTransmisionInmueblesSujetoAIVA($importeTransmisionInmueblesSujetoAIVA)
            ->setEmitidaPorTercerosODestinatario($emitidaPorTercerosODestinatario)
            ->setFacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas($facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas)
            ->setVariosDestinatarios($variosDestinatarios)
            ->setCupon($cupon)
            ->setFacturaSinIdentifDestinatarioAritculo6_1_d($facturaSinIdentifDestinatarioAritculo6_1_d)
            ->setTipoDesglose($tipoDesglose)
            ->setCobros($cobros);
    }
    /**
     * Get DatosInmueble value
     * @return \ClonixDev\AeatSii\StructType\DatosInmueble|null
     */
    public function getDatosInmueble()
    {
        return $this->DatosInmueble;
    }
    /**
     * Set DatosInmueble value
     * @param \ClonixDev\AeatSii\StructType\DatosInmueble $datosInmueble
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public function setDatosInmueble(\ClonixDev\AeatSii\StructType\DatosInmueble $datosInmueble = null)
    {
        $this->DatosInmueble = $datosInmueble;
        return $this;
    }
    /**
     * Get ImporteTransmisionInmueblesSujetoAIVA value
     * @return string|null
     */
    public function getImporteTransmisionInmueblesSujetoAIVA()
    {
        return $this->ImporteTransmisionInmueblesSujetoAIVA;
    }
    /**
     * Set ImporteTransmisionInmueblesSujetoAIVA value
     * @param string $importeTransmisionInmueblesSujetoAIVA
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public function setImporteTransmisionInmueblesSujetoAIVA($importeTransmisionInmueblesSujetoAIVA = null)
    {
        // validation for constraint: string
        if (!is_null($importeTransmisionInmueblesSujetoAIVA) && !is_string($importeTransmisionInmueblesSujetoAIVA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($importeTransmisionInmueblesSujetoAIVA, true), gettype($importeTransmisionInmueblesSujetoAIVA)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($importeTransmisionInmueblesSujetoAIVA) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $importeTransmisionInmueblesSujetoAIVA)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($importeTransmisionInmueblesSujetoAIVA, true)), __LINE__);
        }
        $this->ImporteTransmisionInmueblesSujetoAIVA = $importeTransmisionInmueblesSujetoAIVA;
        return $this;
    }
    /**
     * Get EmitidaPorTercerosODestinatario value
     * @return string|null
     */
    public function getEmitidaPorTercerosODestinatario()
    {
        return $this->EmitidaPorTercerosODestinatario;
    }
    /**
     * Set EmitidaPorTercerosODestinatario value
     * @uses \ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $emitidaPorTercerosODestinatario
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public function setEmitidaPorTercerosODestinatario($emitidaPorTercerosODestinatario = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType::valueIsValid($emitidaPorTercerosODestinatario)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType', is_array($emitidaPorTercerosODestinatario) ? implode(', ', $emitidaPorTercerosODestinatario) : var_export($emitidaPorTercerosODestinatario, true), implode(', ', \ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType::getValidValues())), __LINE__);
        }
        $this->EmitidaPorTercerosODestinatario = $emitidaPorTercerosODestinatario;
        return $this;
    }
    /**
     * Get FacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas value
     * @return string|null
     */
    public function getFacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas()
    {
        return $this->FacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas;
    }
    /**
     * Set FacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas value
     * @uses \ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public function setFacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas($facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType::valueIsValid($facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType', is_array($facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas) ? implode(', ', $facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas) : var_export($facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas, true), implode(', ', \ClonixDev\AeatSii\EnumType\EmitidaPorTercerosType::getValidValues())), __LINE__);
        }
        $this->FacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas = $facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas;
        return $this;
    }
    /**
     * Get VariosDestinatarios value
     * @return string|null
     */
    public function getVariosDestinatarios()
    {
        return $this->VariosDestinatarios;
    }
    /**
     * Set VariosDestinatarios value
     * @uses \ClonixDev\AeatSii\EnumType\VariosDestinatariosType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\VariosDestinatariosType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $variosDestinatarios
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public function setVariosDestinatarios($variosDestinatarios = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\VariosDestinatariosType::valueIsValid($variosDestinatarios)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\VariosDestinatariosType', is_array($variosDestinatarios) ? implode(', ', $variosDestinatarios) : var_export($variosDestinatarios, true), implode(', ', \ClonixDev\AeatSii\EnumType\VariosDestinatariosType::getValidValues())), __LINE__);
        }
        $this->VariosDestinatarios = $variosDestinatarios;
        return $this;
    }
    /**
     * Get Cupon value
     * @return string|null
     */
    public function getCupon()
    {
        return $this->Cupon;
    }
    /**
     * Set Cupon value
     * @uses \ClonixDev\AeatSii\EnumType\CuponType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\CuponType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cupon
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public function setCupon($cupon = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\CuponType::valueIsValid($cupon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\CuponType', is_array($cupon) ? implode(', ', $cupon) : var_export($cupon, true), implode(', ', \ClonixDev\AeatSii\EnumType\CuponType::getValidValues())), __LINE__);
        }
        $this->Cupon = $cupon;
        return $this;
    }
    /**
     * Get facturaSinIdentifDestinatarioAritculo6_d value
     * @return facturaSinIdentifDestinatarioAritculo6_d
     */
    public function getFacturaSinIdentifDestinatarioAritculo6_1_d()
    {
        return $this->{'FacturaSinIdentifDestinatarioAritculo6.1.d'};
    }
    /**
     * Set facturaSinIdentifDestinatarioAritculo6_d value
     * @param facturaSinIdentifDestinatarioAritculo6_d $facturaSinIdentifDestinatarioAritculo6_d
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public function setFacturaSinIdentifDestinatarioAritculo6_1_d($facturaSinIdentifDestinatarioAritculo6_1_d = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\CompletaSinDestinatarioType::valueIsValid($facturaSinIdentifDestinatarioAritculo6_1_d)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\CompletaSinDestinatarioType', is_array($facturaSinIdentifDestinatarioAritculo6_1_d) ? implode(', ', $facturaSinIdentifDestinatarioAritculo6_1_d) : var_export($facturaSinIdentifDestinatarioAritculo6_1_d, true), implode(', ', \ClonixDev\AeatSii\EnumType\CompletaSinDestinatarioType::getValidValues())), __LINE__);
        }
        $this->FacturaSinIdentifDestinatarioAritculo6_1_d = $this->{'FacturaSinIdentifDestinatarioAritculo6.1.d'} = $facturaSinIdentifDestinatarioAritculo6_1_d;
        return $this;
    }
    /**
     * Get TipoDesglose value
     * @return \ClonixDev\AeatSii\StructType\TipoDesglose|null
     */
    public function getTipoDesglose()
    {
        return $this->TipoDesglose;
    }
    /**
     * Set TipoDesglose value
     * @param \ClonixDev\AeatSii\StructType\TipoDesglose $tipoDesglose
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public function setTipoDesglose(\ClonixDev\AeatSii\StructType\TipoDesglose $tipoDesglose = null)
    {
        $this->TipoDesglose = $tipoDesglose;
        return $this;
    }
    /**
     * Get Cobros value
     * @return string|null
     */
    public function getCobros()
    {
        return $this->Cobros;
    }
    /**
     * Set Cobros value
     * @uses \ClonixDev\AeatSii\EnumType\FacturaARType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\FacturaARType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cobros
     * @return \ClonixDev\AeatSii\StructType\FacturaRespuestaInformadaProveedorType
     */
    public function setCobros($cobros = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\FacturaARType::valueIsValid($cobros)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\FacturaARType', is_array($cobros) ? implode(', ', $cobros) : var_export($cobros, true), implode(', ', \ClonixDev\AeatSii\EnumType\FacturaARType::getValidValues())), __LINE__);
        }
        $this->Cobros = $cobros;
        return $this;
    }
}
