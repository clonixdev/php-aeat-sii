<?php

namespace ClonixDev\AeatSii\EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TipoOperacionType EnumType
 * @subpackage Enumerations
 */
class TipoOperacionType extends AbstractStructEnumBase
{
    /**
     * Constant for value '01'
     * @return string '01'
     */
    const VALUE_01 = '01';
    /**
     * Constant for value '02'
     * @return string '02'
     */
    const VALUE_02 = '02';
    /**
     * Constant for value '03'
     * @return string '03'
     */
    const VALUE_03 = '03';
    /**
     * Constant for value '04'
     * @return string '04'
     */
    const VALUE_04 = '04';
    /**
     * Constant for value '05'
     * @return string '05'
     */
    const VALUE_05 = '05';
    /**
     * Constant for value '06'
     * @return string '06'
     */
    const VALUE_06 = '06';
    /**
     * Constant for value '07'
     * @return string '07'
     */
    const VALUE_07 = '07';
    /**
     * Constant for value '08'
     * @return string '08'
     */
    const VALUE_08 = '08';
    /**
     * Constant for value '09'
     * @return string '09'
     */
    const VALUE_09 = '09';
    /**
     * Constant for value '10'
     * @return string '10'
     */
    const VALUE_10 = '10';
    /**
     * Constant for value '11'
     * @return string '11'
     */
    const VALUE_11 = '11';
    /**
     * Constant for value '12'
     * @return string '12'
     */
    const VALUE_12 = '12';
    /**
     * Return allowed values
     * @uses self::VALUE_01
     * @uses self::VALUE_02
     * @uses self::VALUE_03
     * @uses self::VALUE_04
     * @uses self::VALUE_05
     * @uses self::VALUE_06
     * @uses self::VALUE_07
     * @uses self::VALUE_08
     * @uses self::VALUE_09
     * @uses self::VALUE_10
     * @uses self::VALUE_11
     * @uses self::VALUE_12
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_01,
            self::VALUE_02,
            self::VALUE_03,
            self::VALUE_04,
            self::VALUE_05,
            self::VALUE_06,
            self::VALUE_07,
            self::VALUE_08,
            self::VALUE_09,
            self::VALUE_10,
            self::VALUE_11,
            self::VALUE_12,
        );
    }
}
