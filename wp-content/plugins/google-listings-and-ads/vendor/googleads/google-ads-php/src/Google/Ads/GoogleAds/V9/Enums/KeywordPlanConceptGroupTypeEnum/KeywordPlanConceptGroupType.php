<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/enums/keyword_plan_concept_group_type.proto

namespace Google\Ads\GoogleAds\V9\Enums\KeywordPlanConceptGroupTypeEnum;

use UnexpectedValueException;

/**
 * Enumerates keyword plan concept group types.
 *
 * Protobuf type <code>google.ads.googleads.v9.enums.KeywordPlanConceptGroupTypeEnum.KeywordPlanConceptGroupType</code>
 */
class KeywordPlanConceptGroupType
{
    /**
     * The concept group classification different from brand/non-brand.
     * This is a catch all bucket for all classifications that are none of the
     * below.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The concept group classification is based on BRAND.
     *
     * Generated from protobuf enum <code>BRAND = 2;</code>
     */
    const BRAND = 2;
    /**
     * The concept group classification based on BRAND, that didn't fit well
     * with the BRAND classifications. These are generally outliers and can have
     * very few keywords in this type of classification.
     *
     * Generated from protobuf enum <code>OTHER_BRANDS = 3;</code>
     */
    const OTHER_BRANDS = 3;
    /**
     * These concept group classification is not based on BRAND. This is
     * returned for generic keywords that don't have a brand association.
     *
     * Generated from protobuf enum <code>NON_BRAND = 4;</code>
     */
    const NON_BRAND = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BRAND => 'BRAND',
        self::OTHER_BRANDS => 'OTHER_BRANDS',
        self::NON_BRAND => 'NON_BRAND',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KeywordPlanConceptGroupType::class, \Google\Ads\GoogleAds\V9\Enums\KeywordPlanConceptGroupTypeEnum_KeywordPlanConceptGroupType::class);

