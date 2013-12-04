<?php

if ( ! function_exists('g'))
{
	/**
	 * Translator helper.
	 *
	 * @param  string  $name
	 * @param  string  $parameters
	 * @return string
	 */
	function g($string, $domain = null, $locale = null)
	{
		return Glottos::translate($string, $domain, $locale);
	}

}

if ( ! function_exists('kk'))
{
	function kk($data)
	{
		k($data);
		
		die;
	}

	function k($data)
	{
		echo "<pre>";

		var_dump($data);

		echo "</pre>";
	}
}
