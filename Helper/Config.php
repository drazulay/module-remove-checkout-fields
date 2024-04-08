<?php

namespace Drazulay\RemoveCheckoutFields\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\ScopeInterface;

class Config extends AbstractHelper
{
    const XML_PATH_SHIPPING_FIELDS = 'drazulay_removecheckoutfields/address_fields/shipping_address_fields';
    const XML_PATH_BILLING_FIELDS = 'drazulay_removecheckoutfields/address_fields/billing_address_fields';

    public function __construct(Context $context)
    {
        parent::__construct($context);
    }

    /**
     * Get selected shipping address fields from the system configuration.
     *
     * @param null|int|string $store
     * @return array
     */
    public function getShippingAddressFields($store = null)
    {
        $value = $this->scopeConfig->getValue(
            self::XML_PATH_SHIPPING_FIELDS,
            ScopeInterface::SCOPE_STORE,
            $store
        );

        return $value ? explode(',', $value) : [];
    }

    /**
     * Get selected billing address fields from the system configuration.
     *
     * @param null|int|string $store
     * @return array
     */
    public function getBillingAddressFields($store = null)
    {
        $value = $this->scopeConfig->getValue(
            self::XML_PATH_BILLING_FIELDS,
            ScopeInterface::SCOPE_STORE,
            $store
        );

        return $value ? explode(',', $value) : [];
    }
}
