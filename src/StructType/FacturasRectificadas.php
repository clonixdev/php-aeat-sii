<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FacturasRectificadas StructType
 * Meta information extracted from the WSDL
 * - documentation: El ID de las facturas rectificadas, únicamente se rellena en el caso de rectificación de facturas
 * @subpackage Structs
 */
class FacturasRectificadas extends AbstractStructBase
{
    /**
     * The IDFacturaRectificada
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var \ClonixDev\AeatSii\StructType\IDFacturaARType[]
     */
    public $IDFacturaRectificada;
    /**
     * Constructor method for FacturasRectificadas
     * @uses FacturasRectificadas::setIDFacturaRectificada()
     * @param \ClonixDev\AeatSii\StructType\IDFacturaARType[] $iDFacturaRectificada
     */
    public function __construct(array $iDFacturaRectificada = array())
    {
        $this
            ->setIDFacturaRectificada($iDFacturaRectificada);
    }
    /**
     * Get IDFacturaRectificada value
     * @return \ClonixDev\AeatSii\StructType\IDFacturaARType[]|null
     */
    public function getIDFacturaRectificada()
    {
        return $this->IDFacturaRectificada;
    }
    /**
     * This method is responsible for validating the values passed to the setIDFacturaRectificada method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIDFacturaRectificada method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIDFacturaRectificadaForArrayConstraintsFromSetIDFacturaRectificada(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $facturasRectificadasIDFacturaRectificadaItem) {
            // validation for constraint: itemType
            if (!$facturasRectificadasIDFacturaRectificadaItem instanceof \ClonixDev\AeatSii\StructType\IDFacturaARType) {
                $invalidValues[] = is_object($facturasRectificadasIDFacturaRectificadaItem) ? get_class($facturasRectificadasIDFacturaRectificadaItem) : sprintf('%s(%s)', gettype($facturasRectificadasIDFacturaRectificadaItem), var_export($facturasRectificadasIDFacturaRectificadaItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IDFacturaRectificada property can only contain items of type \ClonixDev\AeatSii\StructType\IDFacturaARType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set IDFacturaRectificada value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\IDFacturaARType[] $iDFacturaRectificada
     * @return \ClonixDev\AeatSii\StructType\FacturasRectificadas
     */
    public function setIDFacturaRectificada(array $iDFacturaRectificada = array())
    {
        // validation for constraint: array
        if ('' !== ($iDFacturaRectificadaArrayErrorMessage = self::validateIDFacturaRectificadaForArrayConstraintsFromSetIDFacturaRectificada($iDFacturaRectificada))) {
            throw new \InvalidArgumentException($iDFacturaRectificadaArrayErrorMessage, __LINE__);
        }
        $this->IDFacturaRectificada = $iDFacturaRectificada;
        return $this;
    }
    /**
     * Add item to IDFacturaRectificada value
     * @throws \InvalidArgumentException
     * @param \ClonixDev\AeatSii\StructType\IDFacturaARType $item
     * @return \ClonixDev\AeatSii\StructType\FacturasRectificadas
     */
    public function addToIDFacturaRectificada(\ClonixDev\AeatSii\StructType\IDFacturaARType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \ClonixDev\AeatSii\StructType\IDFacturaARType) {
            throw new \InvalidArgumentException(sprintf('The IDFacturaRectificada property can only contain items of type \ClonixDev\AeatSii\StructType\IDFacturaARType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->IDFacturaRectificada[] = $item;
        return $this;
    }
}
