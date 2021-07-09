<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacturaExpedidaType StructType
 * Meta information extracted from the WSDL
 * - documentation: Apunte correspondiente al libro de facturas expedidas.
 * @subpackage Structs
 */
class FacturaExpedidaType extends FacturaType
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
     * The Contraparte
     * Meta information extracted from the WSDL
     * - documentation: Contraparte de la operación. Cliente (Opcional en tiquets) en facturas emitidas.
     * - minOccurs: 0
     * @var \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType
     */
    public $Contraparte;
    /**
     * The TipoDesglose
     * @var \ClonixDev\AeatSii\StructType\TipoDesglose
     */
    public $TipoDesglose;
    /**
     * Constructor method for FacturaExpedidaType
     * @uses FacturaExpedidaType::setDatosInmueble()
     * @uses FacturaExpedidaType::setImporteTransmisionInmueblesSujetoAIVA()
     * @uses FacturaExpedidaType::setEmitidaPorTercerosODestinatario()
     * @uses FacturaExpedidaType::setFacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas()
     * @uses FacturaExpedidaType::setVariosDestinatarios()
     * @uses FacturaExpedidaType::setCupon()
     * @uses FacturaExpedidaType::setFacturaSinIdentifDestinatarioAritculo6_1_d()
     * @uses FacturaExpedidaType::setContraparte()
     * @uses FacturaExpedidaType::setTipoDesglose()
     * @param \ClonixDev\AeatSii\StructType\DatosInmueble $datosInmueble
     * @param string $importeTransmisionInmueblesSujetoAIVA
     * @param string $emitidaPorTercerosODestinatario
     * @param string $facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas
     * @param string $variosDestinatarios
     * @param string $cupon
     * @param string $facturaSinIdentifDestinatarioAritculo6_1_d
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @param \ClonixDev\AeatSii\StructType\TipoDesglose $tipoDesglose
     */
    public function __construct(\ClonixDev\AeatSii\StructType\DatosInmueble $datosInmueble = null, $importeTransmisionInmueblesSujetoAIVA = null, $emitidaPorTercerosODestinatario = null, $facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas = null, $variosDestinatarios = null, $cupon = null, $facturaSinIdentifDestinatarioAritculo6_1_d = null, \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null, \ClonixDev\AeatSii\StructType\TipoDesglose $tipoDesglose = null)
    {
        $this
            ->setDatosInmueble($datosInmueble)
            ->setImporteTransmisionInmueblesSujetoAIVA($importeTransmisionInmueblesSujetoAIVA)
            ->setEmitidaPorTercerosODestinatario($emitidaPorTercerosODestinatario)
            ->setFacturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas($facturacionDispAdicionalTerceraYsextayDelMercadoOrganizadoDelGas)
            ->setVariosDestinatarios($variosDestinatarios)
            ->setCupon($cupon)
            ->setFacturaSinIdentifDestinatarioAritculo6_1_d($facturaSinIdentifDestinatarioAritculo6_1_d)
            ->setContraparte($contraparte)
            ->setTipoDesglose($tipoDesglose);
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
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType
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
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType
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
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType
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
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType
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
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType
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
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType
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
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType
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
     * Get Contraparte value
     * @return \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType|null
     */
    public function getContraparte()
    {
        return $this->Contraparte;
    }
    /**
     * Set Contraparte value
     * @param \ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType
     */
    public function setContraparte(\ClonixDev\AeatSii\StructType\PersonaFisicaJuridicaType $contraparte = null)
    {
        $this->Contraparte = $contraparte;
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
     * @return \ClonixDev\AeatSii\StructType\FacturaExpedidaType
     */
    public function setTipoDesglose(\ClonixDev\AeatSii\StructType\TipoDesglose $tipoDesglose = null)
    {
        $this->TipoDesglose = $tipoDesglose;
        return $this;
    }
}
