<?php

if ( ! function_exists('g'))
{
	/**
	 * Translator helper.
	 *
	 * @param $string
	 * @param null $domain
	 * @param null $locale
	 * @internal param string $name
	 * @internal param string $parameters
	 * @return string
	 */
	function g($string, $domain = null, $locale = null)
	{
		return Glottos::translate($string, $domain, $locale);
	}

}

if ( ! function_exists('kk'))
{
	/**
	 * @param $data
	 */
	function kk($data)
	{
		k($data);
		
		die;
	}
}

if ( ! function_exists('k'))
{
	/**
	 * @param $data
	 */
	function k($data)
	{
		echo "<pre>";

		var_dump($data);

		echo "</pre>";
	}
}

if ( ! function_exists('getDefaultLanguage'))
{
	/**
	 * @param string $defaultLanguage
	 * @return string
	 */
	function getDefaultLanguage($defaultLanguage = 'en')
	{
		return ___parseDefaultLanguage(
			(isset($_SERVER["HTTP_ACCEPT_LANGUAGE"])
				? $_SERVER["HTTP_ACCEPT_LANGUAGE"]
				: null),
			$defaultLanguage
		);
	}

	/**
	 * @param $http_accept
	 * @param string $defaultLanguage
	 * @return string
	 */
	function ___parseDefaultLanguage($http_accept, $defaultLanguage)
	{
		if (isset($http_accept) && strlen($http_accept) > 1) {
			# Split possible languages into array
			$x = explode(",", $http_accept);
			foreach ($x as $val) {
				#check for q-value and create associative array. No q-value means 1 by rule
				if (preg_match("/(.*);q=([0-1]{0,1}.d{0,4})/i", $val, $matches))
					$lang[$matches[1]] = (float)$matches[2];
				else
					$lang[$val] = 1.0;
			}

			#return default language (highest q-value)
			$qval = 0.0;
			foreach ($lang as $key => $value) {
				if ($value > $qval) {
					$qval = (float)$value;
					$defaultLanguage = $key;
				}
			}
		}

		return strtolower($defaultLanguage);
	}
}