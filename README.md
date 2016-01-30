Pusher Bundle
==============

*By [endroid](http://endroid.nl/)*

[![Latest Stable Version](http://img.shields.io/packagist/v/endroid/pusher-bundle.svg)](https://packagist.org/packages/endroid/pusher-bundle)
[![Build Status](http://img.shields.io/travis/endroid/EndroidPusherBundle.svg)](http://travis-ci.org/endroid/EndroidPusherBundle)
[![Latest Stable Version](https://poser.pugx.org/endroid/pusher-bundle/v/stable.png)](https://packagist.org/packages/endroid/pusher-bundle)
[![Total Downloads](http://img.shields.io/packagist/dt/endroid/pusher-bundle.svg)](https://packagist.org/packages/endroid/pusher-bundle)
[![License](http://img.shields.io/packagist/l/endroid/pusher-bundle.svg)](https://packagist.org/packages/endroid/pusher-bundle)

This bundle enables you to quickly implement real-time features provided by [`Pusher`](https://pusher.com/).

[![knpbundles.com](http://knpbundles.com/endroid/EndroidPusherBundle/badge-short)](http://knpbundles.com/endroid/EndroidPusherBundle)

## Requirements

* Symfony
* Dependencies:
  * [`Pusher PHP Library`](https://github.com/pusher/pusher-http-php)

## Installation

Use [Composer](https://getcomposer.org/) to install the bundle.

``` bash
$ composer require endroid/pusher-bundle
```

Then enable the bundle via the kernel.

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Endroid\Bundle\PusherBundle\EndroidPusherBundle(),
    );
}
```

## Configuration

### config.yml

```yaml
endroid_pusher:
    app_id: ...
    key: ...
    secret: ...
```

## Usage

```php
<?php

$pusher = $container->get('endroid_pusher.server');
$pusher->trigger('my_channel', 'my_event', array('message' => 'my_message'));
```

The service returns the Pusher object as defined by the [`Pusher PHP Library`](https://github.com/pusher/pusher-http-php).

## Versioning

Version numbers follow the MAJOR.MINOR.PATCH scheme. Backwards compatible
changes will be kept to a minimum but be aware that these can occur. Lock
your dependencies for production and test your code when upgrading.

## License

This bundle is under the MIT license. For the full copyright and license
information please view the LICENSE file that was distributed with this source code.
