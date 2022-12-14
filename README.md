Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Applications that use Symfony Flex
----------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require j4nr6n/adif-bundle
```

### Step 2. Configure the Bundle

This bundle does not provide a recipe. You'll need to manually create the config file.

```
# config/packages/j4nr6n_adif.yaml

j4nr6n_adif:
    # Optional
    program_id: '%env('PROGRAM_ID')%'

    # Optional
    program_version: '%env('PROGRAM_VERSION')%'
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require j4nr6n/adif-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    j4nr6n\ADIFBundle\J4nr6nADIFBundle::class => ['all' => true],
];
```

### Step 3. Configure the Bundle

```
# config/packages/j4nr6n_adif.yaml

j4nr6n_adif:
    # Optional
    program_id: '%env('PROGRAM_ID')%'

    # Optional
    program_version: '%env('PROGRAM_VERSION')%'
```
