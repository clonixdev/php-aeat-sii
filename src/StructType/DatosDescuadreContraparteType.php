<?php

namespace ClonixDev\AeatSii\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DatosDescuadreContraparteType StructType
 * @subpackage Structs
 */
class DatosDescuadreContraparteType extends AbstractStructBase
{
    /**
     * The SumBaseImponibleISP
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,14}(\.\d{0,2})?
     * @var string
     */
    public $SumBaseImponibleISP;
    /**
     * The SumBaseImponible
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,14}(\.\d{0,2})?
     * @var string
     */
    public $SumBaseImponible;
    /**
     * The SumCuota
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,14}(\.\d{0,2})?
     * @var string
     */
    public $SumCuota;
    /**
     * The SumCuotaRecargoEquivalencia
     * Meta information extracted from the WSDL
     * - base: string
     * - minOccurs: 0
     * - pattern: (\+|-)?\d{1,14}(\.\d{0,2})?
     * @var string
     */
    public $SumCuotaRecargoEquivalencia;
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
     * Constructor method for DatosDescuadreContraparteType
     * @uses DatosDescuadreContraparteType::setSumBaseImponibleISP()
     * @uses DatosDescuadreContraparteType::setSumBaseImponible()
     * @uses DatosDescuadreContraparteType::setSumCuota()
     * @uses DatosDescuadreContraparteType::setSumCuotaRecargoEquivalencia()
     * @uses DatosDescuadreContraparteType::setImporteTotal()
     * @param string $sumBaseImponibleISP
     * @param string $sumBaseImponible
     * @param string $sumCuota
     * @param string $sumCuotaRecargoEquivalencia
     * @param string $importeTotal
     */
    public function __construct($sumBaseImponibleISP = null, $sumBaseImponible = null, $sumCuota = null, $sumCuotaRecargoEquivalencia = null, $importeTotal = null)
    {
        $this
            ->setSumBaseImponibleISP($sumBaseImponibleISP)
            ->setSumBaseImponible($sumBaseImponible)
            ->setSumCuota($sumCuota)
            ->setSumCuotaRecargoEquivalencia($sumCuotaRecargoEquivalencia)
            ->setImporteTotal($importeTotal);
    }
    /**
     * Get SumBaseImponibleISP value
     * @return string|null
     */
    public function getSumBaseImponibleISP()
    {
        return $this->SumBaseImponibleISP;
    }
    /**
     * Set SumBaseImponibleISP value
     * @param string $sumBaseImponibleISP
     * @return \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType
     */
    public function setSumBaseImponibleISP($sumBaseImponibleISP = null)
    {
        // validation for constraint: string
        if (!is_null($sumBaseImponibleISP) && !is_string($sumBaseImponibleISP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sumBaseImponibleISP, true), gettype($sumBaseImponibleISP)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,14}(\.\d{0,2})?)
        if (!is_null($sumBaseImponibleISP) && !preg_match('/(\\+|-)?\\d{1,14}(\\.\\d{0,2})?/', $sumBaseImponibleISP)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,14}(\.\d{0,2})?', var_export($sumBaseImponibleISP, true)), __LINE__);
        }
        $this->SumBaseImponibleISP = $sumBaseImponibleISP;
        return $this;
    }
    /**
     * Get SumBaseImponible value
     * @return string|null
     */
    public function getSumBaseImponible()
    {
        return $this->SumBaseImponible;
    }
    /**
     * Set SumBaseImponible value
     * @param string $sumBaseImponible
     * @return \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType
     */
    public function setSumBaseImponible($sumBaseImponible = null)
    {
        // validation for constraint: string
        if (!is_null($sumBaseImponible) && !is_string($sumBaseImponible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sumBaseImponible, true), gettype($sumBaseImponible)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,14}(\.\d{0,2})?)
        if (!is_null($sumBaseImponible) && !preg_match('/(\\+|-)?\\d{1,14}(\\.\\d{0,2})?/', $sumBaseImponible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,14}(\.\d{0,2})?', var_export($sumBaseImponible, true)), __LINE__);
        }
        $this->SumBaseImponible = $sumBaseImponible;
        return $this;
    }
    /**
     * Get SumCuota value
     * @return string|null
     */
    public function getSumCuota()
    {
        return $this->SumCuota;
    }
    /**
     * Set SumCuota value
     * @param string $sumCuota
     * @return \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType
     */
    public function setSumCuota($sumCuota = null)
    {
        // validation for constraint: string
        if (!is_null($sumCuota) && !is_string($sumCuota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sumCuota, true), gettype($sumCuota)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,14}(\.\d{0,2})?)
        if (!is_null($sumCuota) && !preg_match('/(\\+|-)?\\d{1,14}(\\.\\d{0,2})?/', $sumCuota)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,14}(\.\d{0,2})?', var_export($sumCuota, true)), __LINE__);
        }
        $this->SumCuota = $sumCuota;
        return $this;
    }
    /**
     * Get SumCuotaRecargoEquivalencia value
     * @return string|null
     */
    public function getSumCuotaRecargoEquivalencia()
    {
        return $this->SumCuotaRecargoEquivalencia;
    }
    /**
     * Set SumCuotaRecargoEquivalencia value
     * @param string $sumCuotaRecargoEquivalencia
     * @return \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType
     */
    public function setSumCuotaRecargoEquivalencia($sumCuotaRecargoEquivalencia = null)
    {
        // validation for constraint: string
        if (!is_null($sumCuotaRecargoEquivalencia) && !is_string($sumCuotaRecargoEquivalencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sumCuotaRecargoEquivalencia, true), gettype($sumCuotaRecargoEquivalencia)), __LINE__);
        }
        // validation for constraint: pattern((\+|-)?\d{1,14}(\.\d{0,2})?)
        if (!is_null($sumCuotaRecargoEquivalencia) && !preg_match('/(\\+|-)?\\d{1,14}(\\.\\d{0,2})?/', $sumCuotaRecargoEquivalencia)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression (\+|-)?\d{1,14}(\.\d{0,2})?', var_export($sumCuotaRecargoEquivalencia, true)), __LINE__);
        }
        $this->SumCuotaRecargoEquivalencia = $sumCuotaRecargoEquivalencia;
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
     * @return \ClonixDev\AeatSii\StructType\DatosDescuadreContraparteType
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
}
