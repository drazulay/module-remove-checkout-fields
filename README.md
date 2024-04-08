# Drazulay RemoveCheckoutFields

## Description
Removes specified fields from billing and shipping checkout forms.

## Installation
1. Download the plugin from the [GitHub repository](git@github.com:drazulay/magento2-remove-checkout-fields.git).
2. Extract the downloaded archive.
3. Copy the extracted folder to the `app/code` directory of your Magento installation.

Alternatively, you can install the plugin using Composer:

1. Add the plugin repository to your `composer.json` file:
    ```json
    {
        "repositories": [
            {
                "type": "vcs",
                "url": "git@github.com:drazulay/magento2-remove-checkout-fields.git"
               }
           ]
    }   
    ```
2. Require the plugin by running the following command from the root of your Magento installation:
    ```bash
    composer require drazulay/magento2-remove-checkout-fields
    ```
3. Install the plugin by running:
    ```bash
    composer install
    ```

## Enable the plugin

1. Enable the plugin by running the following commands from the root of your Magento installation:
    ```bash
    php bin/magento setup:upgrade
    php bin/magento setup:di:compile
    php bin/magento setup:static-content:deploy
    ```
2. Flush the Magento cache by running:
    ```bash
    php bin/magento cache:flush
    ```
3. That's it! The plugin is now installed and enabled.

## Configuration
To configure the plugin, navigate to `Stores > Configuration > Sales > Checkout > Remove Checkout Fields` in the Magento Admin Panel.
1. Select the fields you want to remove from the billing and shipping checkout forms.
2. Save the configuration.
3. The selected fields will no longer be displayed in the checkout forms.
4. If you want to revert the changes, simply unselect the fields you want to display again and save the configuration.
5. The selected fields will now be displayed in the checkout forms again.
6. Enjoy!

If you have any questions or need help, feel free to contact me at [daniel@danielazulay.eu](mailto:daniel@danielazulay.eu).

If you like the plugin, please consider leaving a review on the [GitHub repository](git@github.com:drazulay/magento2-remove-checkout-fields.git).
