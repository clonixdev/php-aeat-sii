<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacturasAgrupadas StructType
 * Meta information extracted from the WSDL
 * - documentation: El ID de los tickets agrupados, únicamente se rellena en el caso de agrupación de tickets en factura
 * @subpackage Structs
 */
class FacturasAgrupadas extends AbstractStructBase
{
    /**
     * The IDFacturaAgrupada
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \ClonixDev\AeatSii\StructType\IDFacturaARType[]
     */
    public $IDFacturaAgrupada;
    /**
     * Constructor method for FacturasAgrupadas
     * @uses FacturasAgrupadas::setIDFacturaAgrupada()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaARType[] $iDFacturaAgrupada
     */
    public function __construct(array $iDFacturaAgrupada = array())
    {
        $this
            ->setIDFacturaAgrupada($iDFacturaAgrupada);
    }
    /**
     * Get IDFacturaAgrupada value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaARType[]|null
     */
    public function getIDFacturaAgrupada()
    {
        return $this->IDFacturaAgrupada;
    }
    /**
     * This method is responsible for validating the values passed to the setIDFacturaAgrupada method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIDFacturaAgrupada method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIDFacturaAgrupadaForArrayConstraintsFromSetIDFacturaAgrupada(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $facturasAgrupadasIDFacturaAgrupadaItem) {
            // validation for constraint: itemType
            if (!$facturasAgrupadasIDFacturaAgrupadaItem instanceof \ClonixDev\AeatSii\StructType\IDFacturaARType) {
                $invalidValues[] = is_object($facturasAgrupadasIDFacturaAgrupadaItem) ? get_class($facturasAgrupadasIDFacturaAgrupadaItem) : sprintf('%s(%s)', gettype($facturasAgrupadasIDFacturaAgrupadaItem), var_export($facturasAgrupadasIDFacturaAgrupadaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IDFacturaAgrupada property can only contain items of type \ClonixDev\AeatSii\StructType\IDFacturaARType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set IDFacturaAgrupada value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\IDFacturaARType[] $iDFacturaAgrupada
     * @return \ClonixDev\AeatSii\StructType\FacturasAgrupadas
     */
    public function setIDFacturaAgrupada(array $iDFacturaAgrupada = array())
    {
        // validation for constraint: array
        if ('' !== ($iDFacturaAgrupadaArrayErrorMessage = self::validateIDFacturaAgrupadaForArrayConstraintsFromSetIDFacturaAgrupada($iDFacturaAgrupada))) {
            throw new \InvalidArgumentException($iDFacturaAgrupadaArrayErrorMessage, __LINE__);
        }
        $this->IDFacturaAgrupada = $iDFacturaAgrupada;
        return $this;
    }
    /**
     * Add item to IDFacturaAgrupada value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\IDFacturaARType $item
     * @return \ClonixDev\AeatSii\StructType\FacturasAgrupadas
     */
    public function addToIDFacturaAgrupada(\ClonixDev\AeatSii\StructType\IDFacturaARType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\IDFacturaARType) {
            throw new \InvalidArgumentException(sprintf('The IDFacturaAgrupada property can only contain items of type \ClonixDev\AeatSii\StructType\IDFacturaARType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->IDFacturaAgrupada[] = $item;
        return $this;
    }
}
