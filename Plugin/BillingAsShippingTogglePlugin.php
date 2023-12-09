<?php
/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_HyvaCheckoutGoogleAddressAutoComplete
 * @copyright   Copyright (c) 2023 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace M2Commerce\HyvaCheckoutGoogleAddressAutoComplete\Plugin;

use Hyva\Checkout\Magewire\Checkout\AddressView\BillingDetails;

class BillingAsShippingTogglePlugin
{
    /**
     * @param BillingDetails $subject
     * @param $result
     * @return mixed
     */
    public function afterToggleBillingAsShipping(BillingDetails $subject, $result)
    {
        $subject->dispatchBrowserEvent('billing-as-shipping-toggled', $result);
        return $result;
    }
}
