# Mage2 Module Zagonico SitemapExcludeCmsPage

    ``zagonico/module-sitemapexcludecmspage``

- [Mage2 Module Zagonico SitemapExcludeCmsPage](#mage2-module-zagonico-sitemapexcludecmspage)
  - [Main Functionalities](#main-functionalities)
  - [Installation](#installation)
    - [Type 1: Zip file](#type-1-zip-file)
    - [Type 2: Composer](#type-2-composer)
  - [Configuration](#configuration)
  - [Specifications](#specifications)
  - [Attributes](#attributes)


## Main Functionalities
This module adds a flag "Exclude from sitemap" in SEO section of Magento CMS pages (in Content > Pages).

The CMS Pages for which the flag is enabled will be excluded by Sitemap.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/Zagonico`
 - Enable the module by running `php bin/magento module:enable Zagonico_SitemapExcludeCmsPage`
 - Apply database updates by running `php bin/magento setup:upgrade`
 - Compile classes by running `php bin/magento setup:di:compile`
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require zagonico/module-sitemapexcludecmspage`
 - enable the module by running `php bin/magento module:enable Zagonico_SitemapExcludeCmsPage`
 - apply database updates by running `php bin/magento setup:upgrade`
 - Compile classes by running `php bin/magento setup:di:compile`
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications




## Attributes



