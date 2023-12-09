<?php
/**
 * @category    M2Commerce Enterprise
 * @package     M2Commerce_HyvaCheckoutGoogleAddressAutoComplete
 * @copyright   Copyright (c) 2023 M2Commerce Enterprise
 * @author      dawoodgondaldev@gmail.com
 */

namespace M2Commerce\HyvaCheckoutGoogleAddressAutoComplete\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class FieldMapping implements ArgumentInterface
{
    public function __construct(private readonly array $fieldMapping = [])
    {
    }

    public function get() : array
    {
        return $this->fieldMapping;
    }
}
