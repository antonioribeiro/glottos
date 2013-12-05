# Glottos 

[![Latest Stable Version](https://poser.pugx.org/pragmarx/glottos/v/stable.png)](https://packagist.org/packages/pragmarx/glottos) [![Build Status](https://travis-ci.org/antonioribeiro/glottos.png)](https://travis-ci.org/antonioribeiro/glottos)

#### An Online Translation/Localization System for Laravel Web Artisans

##### Check out [Glottos Admin](https://github.com/antonioribeiro/glottosAdmin), a full featured site translation system built with Glottos.

A quick overview of what you are able to do with it:

```php

// Use the Facade to set a locale

Glottos::setLocale('pt_BR');

// And just use it

Glottos::translate('Laravel is a PHP Framework');

// There's a helper

g('Laravel is a PHP Framework');

// Choose a particular locale

Glottos::translate('Laravel is a PHP Framework', 'pt_BR')

// or 

Glottos::translate('Laravel is a PHP Framework', 'pt-br')

// Glottos let you choose between keys and natural language:

Glottos::translate('key::home.describe.laravel') 
Glottos::translate('natural::Laravel is a PHP Framework') 

// or you can just define your default as natural and use:

Glottos::translate('Laravel is a PHP Framework') 

// It will break your paragraphs in sentences

Glottos::translate('Laravel is a PHP Framework. Laravel was written by Taylor Otwell.')

// To not repeat itself, it will it will store those two sentences in your database:

'Laravel is a PHP Framework'
'Laravel was written by Taylor Otwell'

// Removing punctuation and special chars.

// With a simple blade trick 

Blade::extend(function ($view) {

	return preg_replace(
		                 '/{{\'((.|\s)*?)\'}}/', 
	                     '<?php echo Glottos::translate("$1"); ?>', $view
	                   );

});

// You can use it beautifully in your Views:

<p>{{'Laravel is a PHP Framework'}}</p>

// You can still use the Lang Facade, Glottos has a compatible one

Lang::trans('Photography')

// And use choice

Lang::choice('Photography|Photographies', 100, array(), 'pt_BR')

Glottos::choice('Photography|Photographies', 100, array(), 'pt_BR')

// And dozens of other features, like importing your current language files

```

The idea behind this package is very simple: you need your web app to become multi-language fast so you better translate it all online, with some help from co-workers or the community.

### Schema

Basically Glottos will create and sometimes populate a bunch of tables for

- Countries - 127
- Languages - 129
- Locales - 323 - Each one with its proper regional language name
- Messages - (is stores hashes of the primary message)
- Translations - one row for each message x locale

Here's a view of how Laravel's messages are stored in the Admin site:

![Laravel site messages in Glottos](http://puu.sh/5CWYM.png)

### Installation

#### Requirements

- Any flavour of PHP 5.3.7+ should do
- [optional] PHPUnit to execute the test suite

#### Frameworks

Since Glottos depends on data layer it is a Laravel 4.x ready package, but it was coded to be as much agnostic as possible, so you can create new drivers and use it on your own frameworks. You can even send me PRs to add them to the main code.

#### With Composer

`composer require pragmarx/glottos dev-master`

Once this operation completes, add the service provider to your app/config/app.php:

```
'PragmaRX\Glottos\Vendor\Laravel\ServiceProvider',
```

Migrate Glottos tables:

```
php artisan migrate --package=pragmarx/glottos
```

Import your current language files:

```
php artisan glottos:import
```

And you should be good to go. Enjoy!

<a name="about-author"/>
### Author

Antonio Carlos Ribeiro - <acr@antoniocarlosribeiro.com> - <http://twitter.com/iantonioribeiro>

<a name="about-license"/>
### License

Glottos is licensed under the MIT License - see the `LICENSE` file for details

### Contributing

Pull requests and issues are more than welcome.