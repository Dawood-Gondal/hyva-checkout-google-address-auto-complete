# M2Commerce: Magento 2 HYVA Checkout Google Address Auto Complete

## Summary
The extension provides compatibility of [Google Address Auto Complete](https://github.com/Dawood-Gondal/google-address-auto-complete) extension with Hyva Checkout.

**Note**: The Google Places API offers 150,000 FREE daily lookup requests for users that validate their account and add billing information. If you require more than 150,000 lookup requests daily then you can register to a paid plan. [See Usage Tiers & Pricing](https://developers.google.com/places/web-service/usage#verify_your_identity_by_enabling_billing)

## Installation
### Magento® Marketplace

This extension will also be available on the Magento® Marketplace when approved.

1. Go to Magento® 2 root folder
2. Require/Download this extension:

   Enter following commands to install extension.

   ```
   composer require m2commerce/hyva-checkout-google-address-auto-complete"
   ```

   Wait while composer is updated.

   #### OR

   You can also download code from this repo under Magento® 2 following directory:

    ```
    app/code/M2Commerce/HyvaCheckoutGoogleAddressAutoComplete
    ```    

3. Enter following commands to enable the module:

   ```
   php bin/magento module:enable M2Commerce_HyvaCheckoutGoogleAddressAutoComplete
   php bin/magento setup:upgrade
   php bin/magento setup:di:compile
   php bin/magento cache:clean
   php bin/magento cache:flush
   ```

4. If Magento® is running in production mode, deploy static content:

   ```
   php bin/magento setup:static-content:deploy
   ```
