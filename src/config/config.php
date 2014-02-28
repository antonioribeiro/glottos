<?php
/**
 * Part of the Glottos package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Glottos
 * @version    1.0.0
 * @author     Antonio Carlos Ribeiro @ PragmaRX
 * @license    BSD License (3-clause)
 * @copyright  (c) 2013, PragmaRX
 * @link       http://pragmarx.com
 */

return array(

	/*
	|--------------------------------------------------------------------------
	| What is your default domain name?
	|--------------------------------------------------------------------------
	|
	*/

	'default_domain' => 'messages',

	/*
	|--------------------------------------------------------------------------
	| Do you want Glottos to create a Laravel alias automatically?
	|--------------------------------------------------------------------------
	|
	*/

	'create_glottos_alias' => true,

	/*
	|--------------------------------------------------------------------------
	| How should we call it?
	|--------------------------------------------------------------------------
	|
	*/

	'glottos_alias' => 'Glottos',

	/*
	|--------------------------------------------------------------------------
	| Which PHP Framework is your application using?
	|--------------------------------------------------------------------------
	|
	| 	Supported: "laravel", "none"
	|	
	*/

	'framework' => 'laravel',

	/*
	|--------------------------------------------------------------------------
	| Do not import those groups
	|--------------------------------------------------------------------------
	|
	*/

	'do_not_import_groups' => array(),

	/*
	|--------------------------------------------------------------------------
	| Glottos translation mode
	|--------------------------------------------------------------------------
	|
	| Glottos can work your translations in two different modes:
	|
	|   Key: 
	|  
	|        All strings are keys to a message, for instance:
	|       
	|        For the message 'Main Menu' your key could be 'mainMenu'
	|
	|        To show the main menu, in any language, you'll do
	|
	|          {{ g('mainMenu') }}
	|
	|        Pro: 
	|                - You won't risk having the same, but slightly different, message twice in the database
	|
	|        Cons: 
	|                - You'll need to remember the key every time you write a message 
	|                - You'll have to add translations for your keys including for your own language
	|
	|
	|   Natural: 
	|       
	|          Messages are stored in natural language, this is      
	|       
	|          The same Main Menu would be representeted simply as 
	|       
	|          {{ g('Main Menu') }}
	|           
	|          No need to add a key for it.
	|       
	|       
	|        Pro: 
	|              - No need to add translations for your own language
	|              - No need to remember the keys of your messages, just write it in natural language
    |
	|        Cons: 
	|              - You might risk having the same, but slightly different, message twice in the database
    |
    |
    |  Overriding: 
    |             
    |            At any time you can override any of those modes by doing
	|        
    |           {{ g('key::mainMenu') }}  
    |             
    |           or
    |             
    |           {{ g('natural::Main Menu') }}  
    |             
	*/

	'mode' => 'natural',  /// or 'key'

	/*
	|--------------------------------------------------------------------------
	| Debug mode
	|--------------------------------------------------------------------------
	|
	| Turning debug on will make all translated messages become a bunch of characters. 
	|
	| Example of debug mode:
	|
	|                     menu: Home Blog Contact
	|       menu in debug mode: ---- Blog -------
	|
	|   In this example, we are still missing a translation for 'Blog'
	|
	*/

	'debug' => false,

	'debug_character' => '-',

	/*
	|--------------------------------------------------------------------------
	| Default Language and Country
	|--------------------------------------------------------------------------
	|
	| This option sets the default language and country used by Glottos.
	|
	|
	*/

	'default_language_id' => 'en',

	'default_country_id' => '',

	/*
	|--------------------------------------------------------------------------
	| Default Delimiters
	|--------------------------------------------------------------------------
	|
	| This option sets the default delimiters for variables inside messages.
	|
	|
	*/

	'variable_delimiter_prefix' => '|-',

	'variable_delimiter_suffix' => '-|',

	/*
	|--------------------------------------------------------------------------
	| Prefix and Suffix Delimiters
	|--------------------------------------------------------------------------
	|
	| This option sets the characters that should be ignored if prefixing or suffixing a sentence
	|
	|
	*/

	'prefix_suffix_delimiters'  => array( 
												"!"=>1,"\\"=>1,"\""=>1,"#"=>1,"\$"=>1,"%"=>1,"&"=>1,"'"=>1,"("=>1,")"=>1,"*"=>1,"+"=>1,","=>1,"-"=>1,"."=>1,"/"=>1,":"=>1,";"=>1,"<"=>1,"="=>1,">"=>1,"?"=>1,"@"=>1,"["=>1,"]"=>1,"^"=>1,"_"=>1,"`"=>1,"{"=>1,"|"=>1," "=>1,"}"=>1 
											),

	/*
	|--------------------------------------------------------------------------
	| Default Database Driver
	|--------------------------------------------------------------------------
	|
	| This option controls the database driver that will be utilized.
	|
	|
	*/

	'driver' => 'eloquent',

	/*
	|--------------------------------------------------------------------------
	| Models
	|--------------------------------------------------------------------------
	|
	| When using the "eloquent" driver, we need to know which Eloquent models 
	| should be used.
	|
	*/

	'message_model' => 'PragmaRX\Glottos\Vendor\Laravel\Models\Message',

	'translation_model' => 'PragmaRX\Glottos\Vendor\Laravel\Models\Translation',

	'language_model' => 'PragmaRX\Glottos\Vendor\Laravel\Models\Language',

	'country_model' => 'PragmaRX\Glottos\Vendor\Laravel\Models\Country',

	'country_language_model' => 'PragmaRX\Glottos\Vendor\Laravel\Models\CountryLanguage',

);
