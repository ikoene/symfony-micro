[![Build Status](https://travis-ci.org/ikoene/symfony-micro.svg?branch=master)](https://travis-ci.org/ikoene/symfony-micro)
[![SensioLabs Insight](https://img.shields.io/sensiolabs/i/7a556c44-8128-49e0-ac7e-d6f601d7fec7.svg)](https://insight.sensiolabs.com/projects/7a556c44-8128-49e0-ac7e-d6f601d7fec7)
[![Latest Stable Version](https://poser.pugx.org/ikoene/symfony-micro/v/stable)](https://packagist.org/packages/ikoene/symfony-micro)
[![Total Downloads](https://poser.pugx.org/ikoene/symfony-micro/downloads)](https://packagist.org/packages/ikoene/symfony-micro)
[![License](https://poser.pugx.org/ikoene/symfony-micro/license)](https://packagist.org/packages/ikoene/symfony-micro)

# Symfony micro-framework

Use Symfony as a microframework.

## Installation

Create a new project with [Composer](https://getcomposer.org/).

```bash
composer create-project ikoene/symfony-micro
```

## MicroKernelTrait

The **MicroKernelTrait** allows you to create a fully-functional Symfony application in as little as one file. It allows you to start with a tiny application, and then add features and structure as you need to. Its goal to give you the power to choose your bundles and structure.

## Bundles

These bundles are registered in the MicroKernel:

* [FrameworkBundle](https://github.com/]symfony/framework-bundle)
* [SensioFrameworkExtraBundle](https://github.com/sensiolabs/SensioFrameworkExtraBundle)
* [TwigBundle](https://github.com/symfony/twig-bundle)

While you could argue what exactly should and should not be included in a microframework, I found myself always using these bundles. So they're enabled by default. Don't want to use Twig as your template engine? Remove it here.

When working in a *dev* or *test* environment, the **MicroKernel** also registers the necesarry bundles to be able to debug you project:

* [WebProfilerBundle](https://github.com/symfony/web-profiler-bundle)
* [DebugBundle](https://github.com/symfony/debug-bundle)

## Usage

### Development

Build your application in the AppBundle. You're free to structure your application as you want, but following the typical Symfony bundle structure has it's advantages. For one, it would be easier to migrate to a full stack Symfony project if your application grows too big.

But, as I said, the choice is yours.

### Register bundles

Missing some features? Register your bundles in the MicroKernel:

```php
...
	$bundles = array(
		new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
		new Symfony\Bundle\TwigBundle\TwigBundle(),
        new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
        new AppBundle\AppBundle(),
	);
...
```

### Console

While this is a microframework, chances are you'll still need the console. Use it like this:

```bash
./console
```

### PHPUnit Testing

Run all tests with this command:

```bash
bin/phpunit -c .
```

# Additional info

[Building your own Framework with the MicroKernelTrait](https://symfony.com/doc/2.8/cookbook/configuration/micro-kernel-trait.html)
