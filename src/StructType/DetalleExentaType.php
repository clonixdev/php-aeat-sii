<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetalleExentaType StructType
 * @subpackage Structs
 */
class DetalleExentaType extends AbstractStructBase
{
    /**
     * The CausaExencion
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string
     */
    public $CausaExencion;
    /**
     * The BaseImponible
     * Meta information extracted from the WSDL
     * - base: string
     * - pattern: (\+|-)?\d{1,12}(\.\d{0,2})?
     * @var string
     */
    public $BaseImponible;
    /**
     * Constructor method for DetalleExentaType
     * @uses DetalleExentaType::setCausaExencion()
     * @uses DetalleExentaType::setBaseImponible()
     * @param string $causaExencion
     * @param string $baseImponible
     */
    public function __construct($causaExencion = null, $baseImponible = null)
    {
        $this
            ->setCausaExencion($causaExencion)
            ->setBaseImponible($baseImponible);
    }
    /**
     * Get CausaExencion value
     * @return string|null
     */
    public function getCausaExencion()
    {
        return $this->CausaExencion;
    }
    /**
     * Set CausaExencion value
     * @uses \ClonixDev\AeatSii\EnumType\CausaExencionType::valueIsValid()
     * @uses \ClonixDev\AeatSii\EnumType\CausaExencionType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $causaExencion
     * @return \ClonixDev\AeatSii\StructType\DetalleExentaType
     */
    public function setCausaExencion($causaExencion = null)
    {
        // validation for constraint: enumeration
        if (!\ClonixDev\AeatSii\EnumType\CausaExencionType::valueIsValid($causaExencion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \ClonixDev\AeatSii\EnumType\CausaExencionType', is_array($causaExencion) ? implode(', ', $causaExencion) : var_export($causaExencion, true), implode(', ', \ClonixDev\AeatSii\EnumType\CausaExencionType::getValidValues())), __LINE__);
        }
        $this->CausaExencion = $causaExencion;
        return $this;
    }
    /**
     * Get BaseImponible value
     * @return string|null
     */
    public function getBaseImponible()
    {
        return $this->BaseImponible;
    }
    /**
     * Set BaseImponible value
     * @param string $baseImponible
     * @return \ClonixDev\AeatSii\StructType\DetalleExentaType
     */
    public function setBaseImponible($baseImponible = null)
    {
        // validation for constraint: string
        if (!is_null($baseImponible) && !is_string($baseImponible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($baseImponible, true), gettype($baseImponible)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,12}(\.\d{0,2})?)
        if (!is_null($baseImponible) && !preg_match('/(\\+|-)?\\d{1,12}(\\.\\d{0,2})?/', $baseImponible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,12}(\.\d{0,2})?', var_export($baseImponible, true)), __LINE__);
        }
        $this->BaseImponible = $baseImponible;
        return $this;
    }
}
