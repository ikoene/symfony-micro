# Symfony Micro-Framework

## Info

Use Symfony as a microframework.

## Setup

```bash
composer create-project ikoene/symfony-micro:dev-master
```

## Bundles

The following bundles are registered in the *MicroKernel*:

* [FrameworkBundle](https://github.com/]symfony/framework-bundle)
* [SensioFrameworkExtraBundle](https://github.com/sensiolabs/SensioFrameworkExtraBundle)
* [TwigBundle](https://github.com/symfony/twig-bundle)

While you could argue what exactly should and should not be included in a microframework, I found myself always using these bundles. So they're enabled by default. Don't want to use Twig, remove the TwigBundle.

When working in a *dev* or *test* environment, the MicroKernel also registers the necesarry bundles to be able to debug you project:

* [WebProfilerBundle](https://github.com/symfony/web-profiler-bundle)
* [DebugBundle](https://github.com/symfony/debug-bundle)

## Usage

### Development

Build your application in the AppBundle. You're free to structure your application as you want, but following the typical Symfony bundle structure has it's advantages. For one, it would be easy to migrate to a full stack Symfony project if your application grows too big.

But, as I said, the choice is yours.

### Register bundles

Register your bundles in the MicroKernel:

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

While this is a microframework, you'll still need the console. For example to symlink CSS or Javascript files. Use it like this:

```bash
./console
```
