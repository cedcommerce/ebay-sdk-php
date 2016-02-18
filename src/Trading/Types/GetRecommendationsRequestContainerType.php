<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\ListingFlowCodeType $ListingFlow
 * @property \DTS\eBaySDK\Trading\Types\ItemType $Item
 * @property \DTS\eBaySDK\Trading\Enums\RecommendationEngineCodeType[] $RecommendationEngine
 * @property string $Query
 * @property string $CorrelationID
 * @property string[] $DeletedField
 * @property boolean $ExcludeRelationships
 * @property boolean $IncludeConfidence
 */
class GetRecommendationsRequestContainerType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'ListingFlow' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ListingFlow'
        ],
        'Item' => [
            'type' => 'DTS\eBaySDK\Trading\Types\ItemType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Item'
        ],
        'RecommendationEngine' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'RecommendationEngine'
        ],
        'Query' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Query'
        ],
        'CorrelationID' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'CorrelationID'
        ],
        'DeletedField' => [
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'DeletedField'
        ],
        'ExcludeRelationships' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ExcludeRelationships'
        ],
        'IncludeConfidence' => [
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeConfidence'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}