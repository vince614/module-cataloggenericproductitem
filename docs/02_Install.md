
**Install instructions**
------------------------

> **CAUTION** - Make sure that you have active credentials on packages.agence-soon.fr for downloading Kaliop_* extensions. Please read https://confluence.kaliop.net/pages/viewpage.action?pageId=35009827

## Update your project's composer.json file

Edit the `composer.json` file at the root of your installation and, in the `repositories` section, make sure that you find the following:

```
{
    "type": "composer",
    "url": "http://packages.agence-soon.fr/"
}
```

## Get the extension and deploy it

- Require the extension: `composer require "kaliop/module-cataloggenericproductitem"`
- Enable the extension: `php bin/magento module:enable Kaliop_CatalogGenericProductItem`
- Run system upgrade: `php bin/magento setup:upgrade`

## Dependencies ( optional )
Consider the following resources for external dependencies:
( fill a list )
