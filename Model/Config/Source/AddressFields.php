<?php

namespace Drazulay\RemoveCheckoutFields\Model\Config\Source;

class AddressFields implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => 'firstname', 'label' => __('First Name')],
            ['value' => 'lastname', 'label' => __('Last Name')],
            ['value' => 'company', 'label' => __('Company')],
            ['value' => 'street', 'label' => __('Street Address')],
            ['value' => 'city', 'label' => __('City')],
            ['value' => 'country_id', 'label' => __('Country')],
            ['value' => 'region', 'label' => __('State/Province')],
            ['value' => 'postcode', 'label' => __('Zip/Postal Code')],
            ['value' => 'telephone', 'label' => __('Phone Number')],
            ['value' => 'fax', 'label' => __('Fax Number')],
            ['value' => 'vat_id', 'label' => __('VAT Number')]
            // Add more fields as needed
        ];
    }
}
