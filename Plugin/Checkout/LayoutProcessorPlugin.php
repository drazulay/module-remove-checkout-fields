<?php

namespace Drazulay\RemoveCheckoutFields\Plugin\Checkout;

use Drazulay\RemoveCheckoutFields\Helper\Config as ConfigHelper;

class LayoutProcessorPlugin
{
    private ConfigHelper $config;

    public function __construct(ConfigHelper $config)
    {
        $this->config = $config;
    }

    public function afterProcess(\Magento\Checkout\Block\Checkout\LayoutProcessor $subject, array $result)
    {
        foreach ($this->config->getBillingAddressFields() as $field) {
            if (isset($result['components']['checkout']['children']['steps']['children']['billing-step']['children']
                ['payment']['children']['payments-list']['children'])) {
                foreach ($result['components']['checkout']['children']['steps']['children']['billing-step']['children']
                         ['payment']['children']['payments-list']['children'] as &$paymentGroup) {
                    if (isset($paymentGroup['children']['form-fields']['children'][$field])) {
                        unset($paymentGroup['children']['form-fields']['children'][$field]);
                    }
                }
            }
        }

        foreach ($this->config->getShippingAddressFields() as $field) {
            if (isset($result['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                ['shippingAddress']['children']['shipping-address-fieldset']['children'][$field])) {
                unset($result['components']['checkout']['children']['steps']['children']['shipping-step']['children']
                    ['shippingAddress']['children']['shipping-address-fieldset']['children'][$field]);
            }
        }

        return $result;
    }
}
