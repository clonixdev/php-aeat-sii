<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IDFacturaConsulta2Type StructType
 * Meta information extracted from the WSDL
 * - documentation: Datos de identificación de factura expedida para operaciones de baja y consulta
 * @subpackage Structs
 */
class IDFacturaConsulta2Type extends AbstractStructBase
{
    /**
     * The NumSerieFacturaEmisor
     * Meta information extracted from the WSDL
     * - documentation: Nº Serie+Nº Factura de la Factura del Emisor.
     * - base: string
     * - maxLength: 60
     * - minLength: 1
     * - minOccurs: 0
     * @var string
     */
    public $NumSerieFacturaEmisor;
    /**
     * The FechaExpedicionFacturaEmisor
     * Meta information extracted from the WSDL
     * - documentation: Fecha de emisión de la factura
     * - base: string
     * - length: 10
     * - minOccurs: 0
     * - pattern: \d{2,2}-\d{2,2}-\d{4,4}
     * @var string
     */
    public $FechaExpedicionFacturaEmisor;
    /**
     * Constructor method for IDFacturaConsulta2Type
     * @uses IDFacturaConsulta2Type::setNumSerieFacturaEmisor()
     * @uses IDFacturaConsulta2Type::setFechaExpedicionFacturaEmisor()
     * @param string $numSerieFacturaEmisor
     * @param string $fechaExpedicionFacturaEmisor
     */
    public function __construct($numSerieFacturaEmisor = null, $fechaExpedicionFacturaEmisor = null)
    {
        $this
            ->setNumSerieFacturaEmisor($numSerieFacturaEmisor)
            ->setFechaExpedicionFacturaEmisor($fechaExpedicionFacturaEmisor);
    }
    /**
     * Get NumSerieFacturaEmisor value
     * @return string|null
     */
    public function getNumSerieFacturaEmisor()
    {
        return $this->NumSerieFacturaEmisor;
    }
    /**
     * Set NumSerieFacturaEmisor value
     * @param string $numSerieFacturaEmisor
     * @return \ClonixDev\AeatSii\StructType\IDFacturaConsulta2Type
     */
    public function setNumSerieFacturaEmisor($numSerieFacturaEmisor = null)
    {
        // validation for constraint: string
        if (!is_null($numSerieFacturaEmisor) && !is_string($numSerieFacturaEmisor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($numSerieFacturaEmisor, true), gettype($numSerieFacturaEmisor)), __LINE__);
        }
        // validation for constraint: maxLength(60)
        if (!is_null($numSerieFacturaEmisor) && mb_strlen($numSerieFacturaEmisor) > 60) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 60', mb_strlen($numSerieFacturaEmisor)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($numSerieFacturaEmisor) && mb_strlen($numSerieFacturaEmisor) < 1) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen($numSerieFacturaEmisor)), __LINE__);
        }
        $this->NumSerieFacturaEmisor = $numSerieFacturaEmisor;
        return $this;
    }
    /**
     * Get FechaExpedicionFacturaEmisor value
     * @return string|null
     */
    public function getFechaExpedicionFacturaEmisor()
    {
        return $this->FechaExpedicionFacturaEmisor;
    }
    /**
     * Set FechaExpedicionFacturaEmisor value
     * @param string $fechaExpedicionFacturaEmisor
     * @return \ClonixDev\AeatSii\StructType\IDFacturaConsulta2Type
     */
    public function setFechaExpedicionFacturaEmisor($fechaExpedicionFacturaEmisor = null)
    {
        // validation for constraint: string
        if (!is_null($fechaExpedicionFacturaEmisor) && !is_string($fechaExpedicionFacturaEmisor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fechaExpedicionFacturaEmisor, true), gettype($fechaExpedicionFacturaEmisor)), __LINE__);
        }
        // validation for constraint: length(10)
        if (!is_null($fechaExpedicionFacturaEmisor) && mb_strlen($fechaExpedicionFacturaEmisor) !== 10) {
            throw new \InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 10', mb_strlen($fechaExpedicionFacturaEmisor)), __LINE__);
        }
        // validation for constraint: pattern(\d{2,2}-\d{2,2}-\d{4,4})
        if (!is_null($fechaExpedicionFacturaEmisor) && !preg_match('/\\d{2,2}-\\d{2,2}-\\d{4,4}/', $fechaExpedicionFacturaEmisor)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression \d{2,2}-\d{2,2}-\d{4,4}', var_export($fechaExpedicionFacturaEmisor, true)), __LINE__);
        }
        $this->FechaExpedicionFacturaEmisor = $fechaExpedicionFacturaEmisor;
        return $this;
    }
}
