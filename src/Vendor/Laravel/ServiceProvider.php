<?php

namespace PragmaRX\Glottos\Vendor\Laravel;

use PragmaRX\Glottos\Glottos;
use PragmaRX\Glottos\Support\Lang;
use PragmaRX\Glottos\Support\Mode;
use PragmaRX\Glottos\Support\Config;
use PragmaRX\Glottos\Support\Locale;
use PragmaRX\Glottos\Support\Finder;
use PragmaRX\Glottos\Support\Filesystem;
use PragmaRX\Glottos\Support\SentenceBag;
use PragmaRX\Glottos\Support\MessageSelector;
use PragmaRX\Glottos\Repositories\Cache\Cache;
use PragmaRX\Glottos\Repositories\DataRepository;
use PragmaRX\Glottos\Repositories\Locales\Country;
use PragmaRX\Glottos\Repositories\Locales\Language;
use PragmaRX\Glottos\Repositories\Messages\Message;
use PragmaRX\Glottos\Repositories\Messages\Translation;
use PragmaRX\Glottos\Vendor\Laravel\Artisan\ImportCommand;
use PragmaRX\Glottos\Repositories\Locales\CountryLanguage;
use PragmaRX\Glottos\Repositories\Locales\LocaleRepository;
use PragmaRX\Support\ServiceProvider as PragmaRXServiceProvider;

class ServiceProvider extends PragmaRXServiceProvider {

	protected $packageVendor = 'pragmarx';

	protected $packageVendorCapitalized = 'PragmaRX';

	protected $packageName = 'glottos';

	protected $packageNameCapitalized = 'Glottos';

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		parent::register();

		$this->registerFileSystem();

		$this->registerConfig();

		$this->registerLocale();

		$this->registerSentenceBag();
		
		$this->registerCache();

		$this->registerFinder();

		$this->registerDataRepository();

		$this->registerMode();

		$this->registerMessageSelector();

		$this->registerGlottos();

		$this->registerLang();

		$this->registerImportCommand();

		$this->commands('glottos.command.import');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	/**
	 * Register the Filesystem driver used by Glottos
	 * 
	 * @return void
	 */
	private function registerFileSystem()
	{
		$this->app['glottos.fileSystem'] = $this->app->share(function($app)
		{
			return new Filesystem;
		});
	}

	/**
	 * Register the Config driver used by Glottos
	 * 
	 * @return void
	 */
	private function registerConfig()
	{
		$this->app['glottos.config'] = $this->app->share(function($app)
		{
			return new Config($app['glottos.fileSystem'], $app);
		});
	}

	/**
	 * Register the Locale driver used by Glottos
	 * 
	 * @return void
	 */
	private function registerLocale()
	{
		$this->app['glottos.locale'] = $this->app->share(function($app)
		{
			return new Locale($this->getConfig('default_language_id'), $this->getConfig('default_country_id'));
		});
	}

	/**
	 * Register the ServiceBag driver used by Glottos
	 * 
	 * @return void
	 */
	private function registerSentenceBag()
	{
		$this->app['glottos.sentenceBag'] = $this->app->share(function($app)
		{
			return new SentenceBag($this->app['glottos.config']);
		});
	}

	/**
	 * Register the Cache driver used by Glottos
	 * 
	 * @return void
	 */
	private function registerCache()
	{
		$this->app['glottos.cache'] = $this->app->share(function($app)
		{
			return new Cache();
		});
	}

	/**
	 * Register the Data Repository driver used by Glottos
	 * 
	 * @return void
	 */
	private function registerDataRepository()
	{
		$this->app['glottos.dataRepository'] = $this->app->share(function($app)
		{
			$messageModel = $this->getConfig('message_model');

			$translationModel = $this->getConfig('translation_model');

			$languageModel = $this->getConfig('language_model');

			$countryModel = $this->getConfig('country_model');

			$countryLanguageModel = $this->getConfig('country_language_model');

			return new DataRepository(
										new Message(new $messageModel, $this->app['glottos.cache']),

										new Translation(new $translationModel, $this->app['glottos.cache']),

										new LocaleRepository(
														new Language(new $languageModel, $this->app['glottos.cache']), 
														new Country(new $countryModel, $this->app['glottos.cache']), 
														new CountryLanguage(new $countryLanguageModel, $this->app['glottos.cache'])
													),

										$this->app['glottos.config'],

										$this->app['glottos.fileSystem'],

										$this->app['glottos.finder']
									);
		});
	}

	/**
	 * Register the Mode driver used by Glottos
	 * 
	 * @return void
	 */
	private function registerMode()
	{
		$this->app['glottos.mode'] = $this->app->share(function($app)
		{
			return new Mode($this->getConfig('mode'));
		});
	}

	/**
	 * Register the Message Selector driver used by Glottos
	 * 
	 * @return void
	 */
	private function registerMessageSelector()
	{
		$this->app['glottos.selector'] = $this->app->share(function($app)
		{
			return new MessageSelector;
		});
	}

	/**
	 * Register the Finder driver used by Glottos
	 * 
	 * @return void
	 */
	private function registerFinder()
	{
		$this->app['glottos.finder'] = $this->app->share(function($app)
		{
			return new Finder;
		});
	}

	/**
	 * Takes all the components of Glottos and glues them
	 * together to create Glottos.
	 *
	 * @return void
	 */
	private function registerGlottos()
	{
		$this->app['glottos'] = $this->app->share(function($app)
		{
			$app['glottos.loaded'] = true;

			return new Glottos(
									$app['glottos.config'],
									$app['glottos.locale'],
									$app['glottos.sentenceBag'],
									$app['glottos.dataRepository'],
									$app['glottos.cache'],
									$app['glottos.mode'],
									$app['glottos.fileSystem'],
									$app['glottos.selector']
								);
		});
	}

	/**
	 * Register the Lang driver for the Lang Facade
	 *
	 * @return void
	 */	
	private function registerLang()
	{
		$this->app['glottos.laravel.lang'] = $this->app->share(function($app)
		{
			return new Lang($app['glottos']);
		});
	}

	/**
	 * Register the Import Artisan command
	 *
	 * @return void
	 */	
	private function registerImportCommand()
	{
		$this->app['glottos.command.import'] = $this->app->share(function($app)
		{
			return new ImportCommand;
		});
	}

	/**
	 * Get the full path of the stub config file.
	 *
	 * @return string
	 */
	public function getStubConfigPath()
	{
		$back = DIRECTORY_SEPARATOR.'..';

		return __DIR__.$back.$back.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php';
	}

}
