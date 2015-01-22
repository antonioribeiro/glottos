<?php

use Illuminate\Database\Migrations\Migration;

class GlottosTableSeeds extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		DB::table('glottos_domains')->insert(
			[
				'name'=>'Application',
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			]
		);

		$glottos_countries_rows =
		[
			['id'=>'029', 'name'=>'Caribbean', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'AE' , 'name'=>'U.A.E.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'AF' , 'name'=>'Afghanistan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'AL' , 'name'=>'Albania', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'AM' , 'name'=>'Armenia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'AR' , 'name'=>'Argentina', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'AT' , 'name'=>'Austria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'AU' , 'name'=>'Australia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'AZ' , 'name'=>'Azerbaijan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BA' , 'name'=>'Bosnia and Herzegovina', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BD' , 'name'=>'Bangladesh', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BE' , 'name'=>'Belgium', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BG' , 'name'=>'Bulgaria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BH' , 'name'=>'Bahrain', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BN' , 'name'=>'Brunei Darussalam', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BO' , 'name'=>'Bolivia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BR' , 'name'=>'Brazil', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BY' , 'name'=>'Belarus', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'BZ' , 'name'=>'Belize', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'CA' , 'name'=>'Canada', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'CH' , 'name'=>'Switzerland', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'CL' , 'name'=>'Chile', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'CN' , 'name'=>'People\'s Republic of China', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'CO' , 'name'=>'Colombia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'CR' , 'name'=>'Costa Rica', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'CS' , 'name'=>'Serbia and Montenegro (Former)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'CZ' , 'name'=>'Czech Republic', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'DE' , 'name'=>'Germany', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'DK' , 'name'=>'Denmark', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'DO' , 'name'=>'Dominican Republic', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'DZ' , 'name'=>'Algeria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'EC' , 'name'=>'Ecuador', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'EE' , 'name'=>'Estonia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'EG' , 'name'=>'Egypt', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ES' , 'name'=>'Spain', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ET' , 'name'=>'Ethiopia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'FI' , 'name'=>'Finland', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'FO' , 'name'=>'Faroe Islands', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'FR' , 'name'=>'France', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'GB' , 'name'=>'United Kingdom', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'GE' , 'name'=>'Georgia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'GL' , 'name'=>'Greenland', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'GR' , 'name'=>'Greece', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'GT' , 'name'=>'Guatemala', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'HK' , 'name'=>'Hong Kong S.A.R.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'HN' , 'name'=>'Honduras', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'HR' , 'name'=>'Croatia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'HU' , 'name'=>'Hungary', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ID' , 'name'=>'Indonesia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'IE' , 'name'=>'Ireland', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'IL' , 'name'=>'Israel', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'IN' , 'name'=>'India', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'IQ' , 'name'=>'Iraq', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'IR' , 'name'=>'Iran', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'IS' , 'name'=>'Iceland', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'IT' , 'name'=>'Italy', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'JM' , 'name'=>'Jamaica', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'JO' , 'name'=>'Jordan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'JP' , 'name'=>'Japan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'KE' , 'name'=>'Kenya', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'KG' , 'name'=>'Kyrgyzstan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'KH' , 'name'=>'Cambodia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'KR' , 'name'=>'Korea', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'KW' , 'name'=>'Kuwait', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'KZ' , 'name'=>'Kazakhstan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'LA' , 'name'=>'Lao P.D.R.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'LB' , 'name'=>'Lebanon', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'LI' , 'name'=>'Liechtenstein', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'LK' , 'name'=>'Sri Lanka', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'LT' , 'name'=>'Lithuania', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'LU' , 'name'=>'Luxembourg', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'LV' , 'name'=>'Latvia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'LY' , 'name'=>'Libya', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'MA' , 'name'=>'Morocco', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'MC' , 'name'=>'Principality of Monaco', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ME' , 'name'=>'Montenegro', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'MK' , 'name'=>'Macedonia (FYROM)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'MN' , 'name'=>'Mongolia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'MO' , 'name'=>'Macao S.A.R.', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'MT' , 'name'=>'Malta', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'MV' , 'name'=>'Maldives', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'MX' , 'name'=>'Mexico', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'MY' , 'name'=>'Malaysia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'NG' , 'name'=>'Nigeria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'NI' , 'name'=>'Nicaragua', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'NL' , 'name'=>'Netherlands', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'NO' , 'name'=>'Norway', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'NP' , 'name'=>'Nepal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'NZ' , 'name'=>'New Zealand', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'OM' , 'name'=>'Oman', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'PA' , 'name'=>'Panama', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'PE' , 'name'=>'Peru', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'PH' , 'name'=>'Republic of the Philippines', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'PK' , 'name'=>'Islamic Republic of Pakistan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'PL' , 'name'=>'Poland', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'PR' , 'name'=>'Puerto Rico', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'PT' , 'name'=>'Portugal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'PY' , 'name'=>'Paraguay', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'QA' , 'name'=>'Qatar', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'RO' , 'name'=>'Romania', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'RS' , 'name'=>'Serbia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'RU' , 'name'=>'Russia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'RW' , 'name'=>'Rwanda', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'SA' , 'name'=>'Saudi Arabia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'SE' , 'name'=>'Sweden', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'SG' , 'name'=>'Singapore', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'SI' , 'name'=>'Slovenia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'SK' , 'name'=>'Slovakia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'SN' , 'name'=>'Senegal', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'SV' , 'name'=>'El Salvador', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'SY' , 'name'=>'Syria', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'TH' , 'name'=>'Thailand', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'TJ' , 'name'=>'Tajikistan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'TM' , 'name'=>'Turkmenistan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'TN' , 'name'=>'Tunisia', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'TR' , 'name'=>'Turkey', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'TT' , 'name'=>'Trinidad and Tobago', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'TW' , 'name'=>'Taiwan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'UA' , 'name'=>'Ukraine', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'US' , 'name'=>'United States', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'UY' , 'name'=>'Uruguay', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'UZ' , 'name'=>'Uzbekistan', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'VE' , 'name'=>'Bolivarian Republic of Venezuela', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'VN' , 'name'=>'Vietnam', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'YE' , 'name'=>'Yemen', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ZA' , 'name'=>'South Africa', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ZW' , 'name'=>'Zimbabwe', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		];

		DB::table('glottos_countries')->insert($glottos_countries_rows);

		$glottos_currencies_rows =
		[
			['id' => 'AED', 'code' => 'AED', 'name' => 'United Arab Emirates Dirham', 'symbol' => 'د.إ', 'fractional_unit' => 'Fils', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AFN', 'code' => 'AFN', 'name' => 'Afghan Afghani', 'symbol' => '؋', 'fractional_unit' => 'Pul', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ALL', 'code' => 'ALL', 'name' => 'Albanian Lek', 'symbol' => 'L', 'fractional_unit' => 'Qindarkë', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AMD', 'code' => 'AMD', 'name' => 'Armenian Dram', 'symbol' => 'http://en.wikipedia.org/wiki/File:Armenian_dram_sign.svg', 'fractional_unit' => 'Luma', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ANG', 'code' => 'ANG', 'name' => 'Netherlands Antillean Guilder', 'symbol' => 'ƒ', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AOA', 'code' => 'AOA', 'name' => 'Angolan Kwanza', 'symbol' => 'Kz', 'fractional_unit' => 'Cêntimo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ARS', 'code' => 'ARS', 'name' => 'Argentine Peso', 'symbol' => '$', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AUD', 'code' => 'AUD', 'name' => 'Australian Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AWG', 'code' => 'AWG', 'name' => 'Aruban Florin',  'symbol' => 'ƒ', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AZN', 'code' => 'AZN', 'name' => 'Azerbaijani Manat', 'symbol' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/94/Azeri_manat_symbol.svg/18px-Azeri_manat_symbol.svg.png', 'fractional_unit' => 'Qəpik', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BAM', 'code' => 'BAM', 'name' => 'Bosnia-Herzegovina Convertible Mark', 'symbol' => 'KM', 'fractional_unit' => 'Fening', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BBD', 'code' => 'BBD', 'name' => 'Barbadian Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BDT', 'code' => 'BDT', 'name' => 'Bangladeshi Taka', 'symbol' => '৳', 'fractional_unit' => 'Paisa', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BGN', 'code' => 'BGN', 'name' => 'Bulgarian Lev', 'symbol' => 'лв', 'fractional_unit' => 'Stotinka', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BHD', 'code' => 'BHD', 'name' => 'Bahraini Dinar', 'symbol' => '.د.ب', 'fractional_unit' => 'Fils', 'number_to_basic' => '1000', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BIF', 'code' => 'BIF', 'name' => 'Burundian Franc', 'symbol' => 'Fr', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BMD', 'code' => 'BMD', 'name' => 'Bermudan Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BND', 'code' => 'BND', 'name' => 'Brunei Dollar', 'symbol' => '$', 'fractional_unit' => 'Sen', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BOB', 'code' => 'BOB', 'name' => 'Bolivian Boliviano', 'symbol' => 'Bs.', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BRL', 'code' => 'BRL', 'name' => 'Brazilian Real', 'symbol' => 'R$', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BSD', 'code' => 'BSD', 'name' => 'Bahamian Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BTN', 'code' => 'BTN', 'name' => 'Bhutanese Ngultrum', 'symbol' => 'Nu.', 'fractional_unit' => 'Chetrum', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BWP', 'code' => 'BWP', 'name' => 'Botswanan Pula', 'symbol' => 'P', 'fractional_unit' => 'Thebe', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BYR', 'code' => 'BYR', 'name' => 'Belarusian Ruble', 'symbol' => 'Br', 'fractional_unit' => 'Kapyeyka', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BZD', 'code' => 'BZD', 'name' => 'Belize Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CAD', 'code' => 'CAD', 'name' => 'Canadian Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CDF', 'code' => 'CDF', 'name' => 'Congolese Franc', 'symbol' => 'Fr', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CHF', 'code' => 'CHF', 'name' => 'Swiss Franc', 'symbol' => 'Fr', 'fractional_unit' => 'Rappen', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CLF', 'code' => 'CLF', 'name' => 'Chilean Unit of Account (UF)', 'symbol' => 'UF', 'fractional_unit' => null, 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CLP', 'code' => 'CLP', 'name' => 'Chilean Peso', 'symbol' => '$', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CNY', 'code' => 'CNY', 'name' => 'Chinese Yuan', 'symbol' => '¥', 'fractional_unit' => 'Fen', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'COP', 'code' => 'COP', 'name' => 'Colombian Peso', 'symbol' => '$', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CRC', 'code' => 'CRC', 'name' => 'Costa Rican Colón', 'symbol' => '₡', 'fractional_unit' => 'Céntimo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CUC', 'code' => 'CUP', 'name' => 'Cuban Convertible Peso', 'symbol' => '$', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CUP', 'code' => 'CUP', 'name' => 'Cuban Peso', 'symbol' => '$', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CVE', 'code' => 'CVE', 'name' => 'Cape Verdean Escudo', 'symbol' => 'Esc', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CZK', 'code' => 'CZK', 'name' => 'Czech Republic Koruna', 'symbol' => 'Kč', 'fractional_unit' => 'Haléř', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DJF', 'code' => 'DJF', 'name' => 'Djiboutian Franc', 'symbol' => 'Fr', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DKK', 'code' => 'DKK', 'name' => 'Danish Krone', 'symbol' => 'kr', 'fractional_unit' => 'Øre', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DOP', 'code' => 'DOP', 'name' => 'Dominican Peso', 'symbol' => '$', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DZD', 'code' => 'DZD', 'name' => 'Algerian Dinar', 'symbol' => 'د.ج', 'fractional_unit' => 'Santeem', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'EEK', 'code' => 'EEK', 'name' => 'Estonian Kroon', 'symbol' => 'kroon', 'fractional_unit' => 'sent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'EGP', 'code' => 'EGP', 'name' => 'Egyptian Pound', 'symbol' => '£', 'fractional_unit' => 'Piastre', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ETB', 'code' => 'ETB', 'name' => 'Ethiopian Birr', 'symbol' => 'Br', 'fractional_unit' => 'Santim', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ERN', 'code' => 'EUR', 'name' => 'Eritrean Nakfa', 'symbol' => 'Nfk', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'EUR', 'code' => 'EUR', 'name' => 'Euro', 'symbol' => '€', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'FJD', 'code' => 'FJD', 'name' => 'Fijian Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'FKP', 'code' => 'FKP', 'name' => 'Falkland Islands Pound', 'symbol' => '£', 'fractional_unit' => 'Penny', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GBP', 'code' => 'GBP', 'name' => 'British Pound Sterling', 'symbol' => '£', 'fractional_unit' => 'Penny', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GGP', 'code' => 'GGP', 'name' => 'Guernsey pound', 'symbol' => '£', 'fractional_unit' => 'Penny', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GEL', 'code' => 'GEL', 'name' => 'Georgian Lari', 'symbol' => 'ლ', 'fractional_unit' => 'Tetri', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GHS', 'code' => 'GHS', 'name' => 'Ghanaian Cedi', 'symbol' => '₵', 'fractional_unit' => 'Pesewa', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GIP', 'code' => 'GIP', 'name' => 'Gibraltar Pound', 'symbol' => '£', 'fractional_unit' => 'Penny', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GMD', 'code' => 'GMD', 'name' => 'Gambian Dalasi', 'symbol' => 'D', 'fractional_unit' => 'Butut', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GNF', 'code' => 'GNF', 'name' => 'Guinean Franc', 'symbol' => 'Fr', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GTQ', 'code' => 'GTQ', 'name' => 'Guatemalan Quetzal', 'symbol' => 'Q', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GYD', 'code' => 'GYD', 'name' => 'Guyanaese Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HKD', 'code' => 'HKD', 'name' => 'Hong Kong Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HNL', 'code' => 'HNL', 'name' => 'Honduran Lempira', 'symbol' => 'L', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HRK', 'code' => 'HRK', 'name' => 'Croatian Kuna', 'symbol' => 'kn', 'fractional_unit' => 'Lipa', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HTG', 'code' => 'HTG', 'name' => 'Haitian Gourde', 'symbol' => 'G', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HUF', 'code' => 'HUF', 'name' => 'Hungarian Forint', 'symbol' => 'Ft', 'fractional_unit' => 'Fillér', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IDR', 'code' => 'IDR', 'name' => 'Indonesian Rupiah', 'symbol' => 'Rp', 'fractional_unit' => 'Sen', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ILS', 'code' => 'ILS', 'name' => 'Israeli New Sheqel', 'symbol' => '₪', 'fractional_unit' => 'Agora', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IMP', 'code' => 'IMP', 'name' => 'Manx pound', 'symbol' => '£', 'fractional_unit' => 'Penny', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'INR', 'code' => 'INR', 'name' => 'Indian Rupee', 'symbol' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/e/ee/Indian_Rupee_symbol.svg/11px-Indian_Rupee_symbol.svg.png', 'fractional_unit' => 'Paisa', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IQD', 'code' => 'IQD', 'name' => 'Iraqi Dinar', 'symbol' => 'ع.د', 'fractional_unit' => 'Fils', 'number_to_basic' => '1000', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IRR', 'code' => 'IRR', 'name' => 'Iranian Rial', 'symbol' => '﷼', 'fractional_unit' => 'Dinar', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ISK', 'code' => 'ISK', 'name' => 'Icelandic Króna', 'symbol' => 'kr', 'fractional_unit' => 'Eyrir', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'JEP', 'code' => 'JEP', 'name' => 'Jersey Pound', 'symbol' => '£', 'fractional_unit' => 'Penny', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'JMD', 'code' => 'JMD', 'name' => 'Jamaican Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'JOD', 'code' => 'JOD', 'name' => 'Jordanian Dinar', 'symbol' => 'د.ا', 'fractional_unit' => 'Piastre', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'JPY', 'code' => 'JPY', 'name' => 'Japanese Yen', 'symbol' => '¥', 'fractional_unit' => 'Sen', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KES', 'code' => 'KES', 'name' => 'Kenyan Shilling', 'symbol' => 'Sh', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KGS', 'code' => 'KGS', 'name' => 'Kyrgystani Som', 'symbol' => 'лв', 'fractional_unit' => 'Tyiyn', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KHR', 'code' => 'KHR', 'name' => 'Cambodian Riel', 'symbol' => '៛', 'fractional_unit' => 'Sen', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KMF', 'code' => 'KMF', 'name' => 'Comorian Franc', 'symbol' => 'Fr', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KPW', 'code' => 'KPW', 'name' => 'North Korean Won', 'symbol' => '₩', 'fractional_unit' => 'Chon', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KRW', 'code' => 'KRW', 'name' => 'South Korean Won', 'symbol' => '₩', 'fractional_unit' => 'Chon', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KWD', 'code' => 'KWD', 'name' => 'Kuwaiti Dinar', 'symbol' => 'د.ك', 'fractional_unit' => 'Fils', 'number_to_basic' => '1000', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KYD', 'code' => 'KYD', 'name' => 'Cayman Islands Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KZT', 'code' => 'KZT', 'name' => 'Kazakhstani Tenge', 'symbol' => '₸', 'fractional_unit' => 'Tïın', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LAK', 'code' => 'LAK', 'name' => 'Laotian Kip', 'symbol' => '₭', 'fractional_unit' => 'Att', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LBP', 'code' => 'LBP', 'name' => 'Lebanese Pound', 'symbol' => 'ل.ل', 'fractional_unit' => 'Piastre', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LKR', 'code' => 'LKR', 'name' => 'Sri Lankan Rupee', 'symbol' => 'Rs', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LRD', 'code' => 'LRD', 'name' => 'Liberian Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LSL', 'code' => 'LSL', 'name' => 'Lesotho Loti', 'symbol' => 'K', 'fractional_unit' => 'Sente', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LTL', 'code' => 'LTL', 'name' => 'Lithuanian Litas', 'symbol' => 'Lt', 'fractional_unit' => 'Centas', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LVL', 'code' => 'LVL', 'name' => 'Latvian Lats', 'symbol' => 'Ls', 'fractional_unit' => 'santīmu', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LYD', 'code' => 'LYD', 'name' => 'Libyan Dinar', 'symbol' => 'ل.د', 'fractional_unit' => 'Dirham', 'number_to_basic' => '1000', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MAD', 'code' => 'MAD', 'name' => 'Moroccan Dirham', 'symbol' => 'د.م.', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MDL', 'code' => 'MDL', 'name' => 'Moldovan Leu', 'symbol' => 'L', 'fractional_unit' => 'Ban', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MGA', 'code' => 'MGA', 'name' => 'Malagasy Ariary', 'symbol' => 'Ar', 'fractional_unit' => 'Iraimbilanja', 'number_to_basic' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MKD', 'code' => 'MKD', 'name' => 'Macedonian Denar', 'symbol' => 'ден', 'fractional_unit' => 'Deni', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MMK', 'code' => 'MMK', 'name' => 'Myanma Kyat', 'symbol' => 'Ks', 'fractional_unit' => 'Pya', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MNT', 'code' => 'MNT', 'name' => 'Mongolian Tugrik', 'symbol' => '₮', 'fractional_unit' => 'Möngö', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MOP', 'code' => 'MOP', 'name' => 'Macanese Pataca', 'symbol' => 'P', 'fractional_unit' => 'Avo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MRO', 'code' => 'MRO', 'name' => 'Mauritanian Ouguiya', 'symbol' => 'UM', 'fractional_unit' => 'Khoums', 'number_to_basic' => '5', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MUR', 'code' => 'MUR', 'name' => 'Mauritian Rupee', 'symbol' => '₨', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MVR', 'code' => 'MVR', 'name' => 'Maldivian Rufiyaa', 'symbol' => '.ރ', 'fractional_unit' => 'Laari', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MWK', 'code' => 'MWK', 'name' => 'Malawian Kwacha', 'symbol' => 'MK', 'fractional_unit' => 'Tambala', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MXN', 'code' => 'MXN', 'name' => 'Mexican Peso', 'symbol' => '$', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MYR', 'code' => 'MYR', 'name' => 'Malaysian Ringgit', 'symbol' => 'RM', 'fractional_unit' => 'Sen', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MZN', 'code' => 'MZN', 'name' => 'Mozambican Metical', 'symbol' => 'MT', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NAD', 'code' => 'NAD', 'name' => 'Namibian Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NGN', 'code' => 'NGN', 'name' => 'Nigerian Naira', 'symbol' => '₦', 'fractional_unit' => 'Kobo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NIO', 'code' => 'NIO', 'name' => 'Nicaraguan Córdoba', 'symbol' => 'C$', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NOK', 'code' => 'NOK', 'name' => 'Norwegian Krone', 'symbol' => 'kr', 'fractional_unit' => 'Øre', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NPR', 'code' => 'NPR', 'name' => 'Nepalese Rupee', 'symbol' => '₨', 'fractional_unit' => 'Paisa', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NZD', 'code' => 'NZD', 'name' => 'New Zealand Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'OMR', 'code' => 'OMR', 'name' => 'Omani Rial', 'symbol' => 'ر.ع.', 'fractional_unit' => 'Baisa', 'number_to_basic' => '1000', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PAB', 'code' => 'PAB', 'name' => 'Panamanian Balboa', 'symbol' => 'B/.', 'fractional_unit' => 'Centésimo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PEN', 'code' => 'PEN', 'name' => 'Peruvian Nuevo Sol', 'symbol' => 'S/.', 'fractional_unit' => 'Céntimo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PGK', 'code' => 'PGK', 'name' => 'Papua New Guinean Kina', 'symbol' => 'K', 'fractional_unit' => 'Toea', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PHP', 'code' => 'PHP', 'name' => 'Philippine Peso', 'symbol' => '₱', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PKR', 'code' => 'PKR', 'name' => 'Pakistani Rupee', 'symbol' => '₨', 'fractional_unit' => 'Paisa', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PLN', 'code' => 'PLN', 'name' => 'Polish Zloty', 'symbol' => 'zł', 'fractional_unit' => 'Grosz', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PRB', 'code' => 'PRB', 'name' => 'Transnistrian Ruble', 'symbol' => 'р.', 'fractional_unit' => 'Kopek', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PYG', 'code' => 'PYG', 'name' => 'Paraguayan Guarani', 'symbol' => '₲', 'fractional_unit' => 'Céntimo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'QAR', 'code' => 'QAR', 'name' => 'Qatari Rial', 'symbol' => 'ر.ق', 'fractional_unit' => 'Dirham', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'RON', 'code' => 'RON', 'name' => 'Romanian Leu', 'symbol' => 'lei', 'fractional_unit' => 'Ban', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'RSD', 'code' => 'RSD', 'name' => 'Serbian Dinar', 'symbol' => 'дин.', 'fractional_unit' => 'Para', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'RUB', 'code' => 'RUB', 'name' => 'Russian Ruble', 'symbol' => 'http://en.wikipedia.org/wiki/Russian_ruble#mediaviewer/File:Ruble_sign.svg', 'fractional_unit' => 'Kopek', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'RWF', 'code' => 'RWF', 'name' => 'Rwandan Franc', 'symbol' => 'Fr', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SAR', 'code' => 'SAR', 'name' => 'Saudi Riyal', 'symbol' => '﷼‎', 'fractional_unit' => 'halala', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SBD', 'code' => 'SBD', 'name' => 'Solomon Islands Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SCR', 'code' => 'SCR', 'name' => 'Seychellois Rupee', 'symbol' => 'Rs', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SDG', 'code' => 'SDG', 'name' => 'Sudanese Pound', 'symbol' => '£', 'fractional_unit' => 'Piastre', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SEK', 'code' => 'SEK', 'name' => 'Swedish Krona', 'symbol' => 'kr', 'fractional_unit' => 'Öre', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SGD', 'code' => 'SGD', 'name' => 'Singapore Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SHP', 'code' => 'SHP', 'name' => 'Saint Helena Pound', 'symbol' => '£', 'fractional_unit' => 'Penny', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SLL', 'code' => 'SLL', 'name' => 'Sierra Leonean Leone', 'symbol' => 'Le', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SOS', 'code' => 'SOS', 'name' => 'Somali Shilling', 'symbol' => 'Sh', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SRD', 'code' => 'SRD', 'name' => 'Surinamese Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SSP', 'code' => 'SSP', 'name' => 'South Sudanese Pound', 'symbol' => '£', 'fractional_unit' => 'Piastre', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'STD', 'code' => 'STD', 'name' => 'São Tomé and Príncipe Dobra', 'symbol' => 'ر.س', 'fractional_unit' => 'Halala', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SVC', 'code' => 'SVC', 'name' => 'Salvadoran Colón', 'symbol' => '₡', 'fractional_unit' => 'Centavo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SYP', 'code' => 'SYP', 'name' => 'Syrian Pound', 'symbol' => '£', 'fractional_unit' => 'Piastre', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SZL', 'code' => 'SZL', 'name' => 'Swazi Lilangeni', 'symbol' => 'L', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'THB', 'code' => 'THB', 'name' => 'Thai Baht', 'symbol' => '฿', 'fractional_unit' => 'Satang', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TJS', 'code' => 'TJS', 'name' => 'Tajikistani Somoni', 'symbol' => 'SM', 'fractional_unit' => 'Diram', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TMT', 'code' => 'TMT', 'name' => 'Turkmenistani Manat', 'symbol' => 'Sh', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TND', 'code' => 'TND', 'name' => 'Tunisian Dinar', 'symbol' => 'د.ت', 'fractional_unit' => 'Millime', 'number_to_basic' => '1000', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TOP', 'code' => 'TOP', 'name' => 'Tongan Paʻanga', 'symbol' => 'T$', 'fractional_unit' => 'Seniti', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TRY', 'code' => 'TRY', 'name' => 'Turkish Lira', 'symbol' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Turkish_lira_symbol_black.svg/15px-Turkish_lira_symbol_black.svg.png', 'fractional_unit' => 'Kuruş', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TTD', 'code' => 'TTD', 'name' => 'Trinidad and Tobago Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TWD', 'code' => 'TWD', 'name' => 'New Taiwan Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TZS', 'code' => 'TZS', 'name' => 'Tanzanian Shilling', 'symbol' => 'x/y', 'fractional_unit' => 'shilingi', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'UAH', 'code' => 'UAH', 'name' => 'Ukrainian Hryvnia', 'symbol' => '₴', 'fractional_unit' => 'Kopiyka', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'UGX', 'code' => 'UGX', 'name' => 'Ugandan Shilling', 'symbol' => 'Sh', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'USD', 'code' => 'USD', 'name' => 'United States Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'UYU', 'code' => 'UYU', 'name' => 'Uruguayan Peso', 'symbol' => '$', 'fractional_unit' => 'Centésimo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'UZS', 'code' => 'UZS', 'name' => 'Uzbekistan Som', 'symbol' => 'лв', 'fractional_unit' => 'Tiyin', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VEF', 'code' => 'VEF', 'name' => 'Venezuelan Bolívar', 'symbol' => 'Bs F', 'fractional_unit' => 'Céntimo', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VND', 'code' => 'VND', 'name' => 'Vietnamese Dong', 'symbol' => '₫', 'fractional_unit' => 'Hào', 'number_to_basic' => '10', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VUV', 'code' => 'VUV', 'name' => 'Vanuatu Vatu', 'symbol' => 'Vt', 'fractional_unit' => null, 'number_to_basic' => null, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'WST', 'code' => 'WST', 'name' => 'Samoan Tala', 'symbol' => 'T', 'fractional_unit' => 'Sene', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'XAF', 'code' => 'XAF', 'name' => 'CFA Franc BEAC', 'symbol' => 'Fr', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'XCD', 'code' => 'XCD', 'name' => 'East Caribbean Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'XDR', 'code' => 'XDR', 'name' => 'Special Drawing Rights', 'symbol' => 'XDR', 'fractional_unit' => null, 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'XOF', 'code' => 'XOF', 'name' => 'CFA Franc BCEAO', 'symbol' => 'Fr', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'XPF', 'code' => 'XPF', 'name' => 'CFP Franc', 'symbol' => 'Fr', 'fractional_unit' => 'Centime', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'YER', 'code' => 'YER', 'name' => 'Yemeni Rial', 'symbol' => '﷼', 'fractional_unit' => 'Fils', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ZAR', 'code' => 'ZAR', 'name' => 'South African Rand', 'symbol' => 'R', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ZMW', 'code' => 'ZMW', 'name' => 'Zambian Kwacha', 'symbol' => 'ZK', 'fractional_unit' => 'Ngwee', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ZWL', 'code' => 'ZWL', 'name' => 'Zimbabwean Dollar', 'symbol' => '$', 'fractional_unit' => 'Cent', 'number_to_basic' => '100', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		];

	    DB::table('glottos_currencies')->insert($glottos_currencies_rows);

		$glottos_languages_rows =
		[
			['id'=>'af', 'name'=>'Afrikaans', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'am', 'name'=>'Amharic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ar', 'name'=>'Arabic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'arn', 'name'=>'Mapudungun', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'as', 'name'=>'Assamese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'az', 'name'=>'Azeri', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'az', 'name'=>'Azeri', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ba', 'name'=>'Bashkir', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'be', 'name'=>'Belarusian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'bg', 'name'=>'Bulgarian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'bn', 'name'=>'Bengali', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'bo', 'name'=>'Tibetan', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'br', 'name'=>'Breton', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'bs', 'name'=>'Bosnian', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'bs', 'name'=>'Bosnian', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ca', 'name'=>'Catalan', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'co', 'name'=>'Corsican', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'cs', 'name'=>'Czech', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'cy', 'name'=>'Welsh', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'da', 'name'=>'Danish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'de', 'name'=>'German', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'dsb', 'name'=>'Lower Sorbian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'dv', 'name'=>'Divehi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'el', 'name'=>'Greek', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'en', 'name'=>'English', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'es', 'name'=>'Spanish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'et', 'name'=>'Estonian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'eu', 'name'=>'Basque', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'fa', 'name'=>'Persian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'fi', 'name'=>'Finnish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'fil', 'name'=>'Filipino', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'fo', 'name'=>'Faroese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'fr', 'name'=>'French', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'fy', 'name'=>'Frisian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ga', 'name'=>'Irish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'gd', 'name'=>'Scottish Gaelic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'gl', 'name'=>'Galician', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'gsw', 'name'=>'Alsatian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'gu', 'name'=>'Gujarati', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ha', 'name'=>'Hausa (Latin)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'he', 'name'=>'Hebrew', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'hi', 'name'=>'Hindi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'hr', 'name'=>'Croatian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'hsb', 'name'=>'Upper Sorbian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'hu', 'name'=>'Hungarian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'hy', 'name'=>'Armenian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'id', 'name'=>'Indonesian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ig', 'name'=>'Igbo', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ii', 'name'=>'Yi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'is', 'name'=>'Icelandic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'it', 'name'=>'Italian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'iu', 'name'=>'Inuktitut', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'iu', 'name'=>'Inuktitut', 'alphabet' => 'Syllabics', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ja', 'name'=>'Japanese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ka', 'name'=>'Georgian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'kk', 'name'=>'Kazakh', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'kl', 'name'=>'Greenlandic', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'km', 'name'=>'Khmer', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'kn', 'name'=>'Kannada', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ko', 'name'=>'Korean', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'kok', 'name'=>'Konkani', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ky', 'name'=>'Kyrgyz', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'lb', 'name'=>'Luxembourgish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'lo', 'name'=>'Lao', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'lt', 'name'=>'Lithuanian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'lv', 'name'=>'Latvian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'mi', 'name'=>'Maori', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'mk', 'name'=>'Macedonian (FYROM)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ml', 'name'=>'Malayalam', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'mn', 'name'=>'Mongolian', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'mn', 'name'=>'Mongolian', 'alphabet' => 'Traditional Mongolian', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'moh', 'name'=>'Mohawk', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'mr', 'name'=>'Marathi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ms', 'name'=>'Malay', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'mt', 'name'=>'Maltese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'nb', 'name'=>'Norwegian (Bokmal)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ne', 'name'=>'Nepali', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'nl', 'name'=>'Dutch', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'nn', 'name'=>'Norwegian (Nynorsk)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'nso', 'name'=>'Sesotho sa Leboa', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'oc', 'name'=>'Occitan', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'or', 'name'=>'Oriya', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'pa', 'name'=>'Punjabi', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'pl', 'name'=>'Polish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ps', 'name'=>'Pashto', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'pt', 'name'=>'Portuguese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'qut', 'name'=>'K\'iche', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'quz', 'name'=>'Quechua', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'rm', 'name'=>'Romansh', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ro', 'name'=>'Romanian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ru', 'name'=>'Russian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'rw', 'name'=>'Kinyarwanda', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sa', 'name'=>'Sanskrit', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sah', 'name'=>'Yakut', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'se', 'name'=>'Sami (Northern)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'si', 'name'=>'Sinhala', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sk', 'name'=>'Slovak', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sl', 'name'=>'Slovenian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sma', 'name'=>'Sami (Southern)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'smj', 'name'=>'Sami (Lule)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'smn', 'name'=>'Sami (Inari)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sms', 'name'=>'Sami (Skolt)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sq', 'name'=>'Albanian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sr', 'name'=>'Serbian', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sr', 'name'=>'Serbian', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sv', 'name'=>'Swedish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'sw', 'name'=>'Kiswahili', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'syr', 'name'=>'Syriac', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ta', 'name'=>'Tamil', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'te', 'name'=>'Telugu', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'tg', 'name'=>'Tajik (Cyrillic)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'th', 'name'=>'Thai', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'tk', 'name'=>'Turkmen', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'tn', 'name'=>'Setswana', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'tr', 'name'=>'Turkish', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'tt', 'name'=>'Tatar', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'tzm', 'name'=>'Tamazight (Latin)', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ug', 'name'=>'Uyghur', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'uk', 'name'=>'Ukrainian', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'ur', 'name'=>'Urdu', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'uz', 'name'=>'Uzbek', 'alphabet' => 'Cyrillic', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'uz', 'name'=>'Uzbek', 'alphabet' => 'Latin', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'vi', 'name'=>'Vietnamese', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'wo', 'name'=>'Wolof', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'xh', 'name'=>'isiXhosa', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'yo', 'name'=>'Yoruba', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'zh', 'name'=>'Chinese', 'alphabet' => 'Simplified', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'zh', 'name'=>'Chinese', 'alphabet' => 'Traditional', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id'=>'zu', 'name'=>'isiZulu', 'alphabet' => 'n/a', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		];

		DB::table('glottos_languages')->insert($glottos_languages_rows);

		$glottos_countries_languages_rows =
		[
			['language_id'=>'ps', 'country_id'=>'AF', 'regional_name'=>'Pashto (Afghanistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sq', 'country_id'=>'AL', 'regional_name'=>'Albanian (Albania)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'DZ', 'regional_name'=>'Arabic (Algeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'tzm', 'country_id'=>'DZ', 'regional_name'=>'Tamazight (Latin) (Algeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'AR', 'regional_name'=>'Spanish (Argentina)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'hy', 'country_id'=>'AM', 'regional_name'=>'Armenian (Armenia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'AU', 'regional_name'=>'English (Australia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'de', 'country_id'=>'AT', 'regional_name'=>'German (Austria)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'az', 'country_id'=>'AZ', 'regional_name'=>'Azeri (Latin) (Azerbaijan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'BH', 'regional_name'=>'Arabic (Bahrain)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'bn', 'country_id'=>'BD', 'regional_name'=>'Bengali (Bangladesh)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'be', 'country_id'=>'BY', 'regional_name'=>'Belarusian (Belarus)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'nl', 'country_id'=>'BE', 'regional_name'=>'Dutch (Belgium)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fr', 'country_id'=>'BE', 'regional_name'=>'French (Belgium)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'BZ', 'regional_name'=>'English (Belize)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'VE', 'regional_name'=>'Spanish (Bolivarian Republic of Venezuela)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'quz', 'country_id'=>'BO', 'regional_name'=>'Quechua (Bolivia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'BO', 'regional_name'=>'Spanish (Bolivia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'bs', 'country_id'=>'BA', 'regional_name'=>'Bosnian (Latin) (Bosnia and Herzegovina)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'hr', 'country_id'=>'BA', 'regional_name'=>'Croatian (Bosnia and Herzegovina)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sr', 'country_id'=>'BA', 'regional_name'=>'Serbian (Latin) (Bosnia and Herzegovina)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'pt', 'country_id'=>'BR', 'regional_name'=>'Portuguese (Brazil)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ms', 'country_id'=>'BN', 'regional_name'=>'Malay (Brunei Darussalam)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'bg', 'country_id'=>'BG', 'regional_name'=>'Bulgarian (Bulgaria)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'km', 'country_id'=>'KH', 'regional_name'=>'Khmer (Cambodia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'CA', 'regional_name'=>'English (Canada)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fr', 'country_id'=>'CA', 'regional_name'=>'French (Canada)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'iu', 'country_id'=>'CA', 'regional_name'=>'Inuktitut (Syllabics) (Canada)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'moh', 'country_id'=>'CA', 'regional_name'=>'Mohawk (Canada)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'029', 'regional_name'=>'English (Caribbean)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'arn', 'country_id'=>'CL', 'regional_name'=>'Mapudungun (Chile)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'CL', 'regional_name'=>'Spanish (Chile)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'CO', 'regional_name'=>'Spanish (Colombia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'CR', 'regional_name'=>'Spanish (Costa Rica)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'hr', 'country_id'=>'HR', 'regional_name'=>'Croatian (Croatia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'cs', 'country_id'=>'CZ', 'regional_name'=>'Czech (Czech Republic)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'da', 'country_id'=>'DK', 'regional_name'=>'Danish (Denmark)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'DO', 'regional_name'=>'Spanish (Dominican Republic)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'quz', 'country_id'=>'EC', 'regional_name'=>'Quechua (Ecuador)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'EC', 'regional_name'=>'Spanish (Ecuador)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'EG', 'regional_name'=>'Arabic (Egypt)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'SV', 'regional_name'=>'Spanish (El Salvador)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'et', 'country_id'=>'EE', 'regional_name'=>'Estonian (Estonia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'am', 'country_id'=>'ET', 'regional_name'=>'Amharic (Ethiopia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fo', 'country_id'=>'FO', 'regional_name'=>'Faroese (Faroe Islands)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fi', 'country_id'=>'FI', 'regional_name'=>'Finnish (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'smn', 'country_id'=>'FI', 'regional_name'=>'Sami (Inari) (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'se', 'country_id'=>'FI', 'regional_name'=>'Sami (Northern) (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sms', 'country_id'=>'FI', 'regional_name'=>'Sami (Skolt) (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sv', 'country_id'=>'FI', 'regional_name'=>'Swedish (Finland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'gsw', 'country_id'=>'FR', 'regional_name'=>'Alsatian (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'br', 'country_id'=>'FR', 'regional_name'=>'Breton (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'co', 'country_id'=>'FR', 'regional_name'=>'Corsican (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fr', 'country_id'=>'FR', 'regional_name'=>'French (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'oc', 'country_id'=>'FR', 'regional_name'=>'Occitan (France)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ka', 'country_id'=>'GE', 'regional_name'=>'Georgian (Georgia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'de', 'country_id'=>'DE', 'regional_name'=>'German (Germany)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'dsb', 'country_id'=>'DE', 'regional_name'=>'Lower Sorbian (Germany)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'hsb', 'country_id'=>'DE', 'regional_name'=>'Upper Sorbian (Germany)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'el', 'country_id'=>'GR', 'regional_name'=>'Greek (Greece)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'kl', 'country_id'=>'GL', 'regional_name'=>'Greenlandic (Greenland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'qut', 'country_id'=>'GT', 'regional_name'=>'K\'iche (Guatemala)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'GT', 'regional_name'=>'Spanish (Guatemala)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'HN', 'regional_name'=>'Spanish (Honduras)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'zh', 'country_id'=>'HK', 'regional_name'=>'Chinese (Traditional) Legacy (Hong Kong S.A.R.)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'hu', 'country_id'=>'HU', 'regional_name'=>'Hungarian (Hungary)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'is', 'country_id'=>'IS', 'regional_name'=>'Icelandic (Iceland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'as', 'country_id'=>'IN', 'regional_name'=>'Assamese (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'bn', 'country_id'=>'IN', 'regional_name'=>'Bengali (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'IN', 'regional_name'=>'English (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'gu', 'country_id'=>'IN', 'regional_name'=>'Gujarati (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'hi', 'country_id'=>'IN', 'regional_name'=>'Hindi (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'kn', 'country_id'=>'IN', 'regional_name'=>'Kannada (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'kok', 'country_id'=>'IN', 'regional_name'=>'Konkani (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ml', 'country_id'=>'IN', 'regional_name'=>'Malayalam (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'mr', 'country_id'=>'IN', 'regional_name'=>'Marathi (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'or', 'country_id'=>'IN', 'regional_name'=>'Oriya (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'pa', 'country_id'=>'IN', 'regional_name'=>'Punjabi (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sa', 'country_id'=>'IN', 'regional_name'=>'Sanskrit (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ta', 'country_id'=>'IN', 'regional_name'=>'Tamil (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'te', 'country_id'=>'IN', 'regional_name'=>'Telugu (India)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'id', 'country_id'=>'ID', 'regional_name'=>'Indonesian (Indonesia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fa', 'country_id'=>'IR', 'regional_name'=>'Persian (Iran)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'IQ', 'regional_name'=>'Arabic (Iraq)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'IE', 'regional_name'=>'English (Ireland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ga', 'country_id'=>'IE', 'regional_name'=>'Irish (Ireland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ur', 'country_id'=>'PK', 'regional_name'=>'Urdu (Islamic Republic of Pakistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'he', 'country_id'=>'IL', 'regional_name'=>'Hebrew (Israel)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'it', 'country_id'=>'IT', 'regional_name'=>'Italian (Italy)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'JM', 'regional_name'=>'English (Jamaica)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ja', 'country_id'=>'JP', 'regional_name'=>'Japanese (Japan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'JO', 'regional_name'=>'Arabic (Jordan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'kk', 'country_id'=>'KZ', 'regional_name'=>'Kazakh (Kazakhstan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sw', 'country_id'=>'KE', 'regional_name'=>'Kiswahili (Kenya)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ko', 'country_id'=>'KR', 'regional_name'=>'Korean (Korea)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'KW', 'regional_name'=>'Arabic (Kuwait)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ky', 'country_id'=>'KG', 'regional_name'=>'Kyrgyz (Kyrgyzstan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'lo', 'country_id'=>'LA', 'regional_name'=>'Lao (Lao P.D.R.)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'lv', 'country_id'=>'LV', 'regional_name'=>'Latvian (Latvia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'LB', 'regional_name'=>'Arabic (Lebanon)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'LY', 'regional_name'=>'Arabic (Libya)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'de', 'country_id'=>'LI', 'regional_name'=>'German (Liechtenstein)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'lt', 'country_id'=>'LT', 'regional_name'=>'Lithuanian (Lithuania)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fr', 'country_id'=>'LU', 'regional_name'=>'French (Luxembourg)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'de', 'country_id'=>'LU', 'regional_name'=>'German (Luxembourg)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'lb', 'country_id'=>'LU', 'regional_name'=>'Luxembourgish (Luxembourg)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'zh', 'country_id'=>'MO', 'regional_name'=>'Chinese (Traditional) Legacy (Macao S.A.R.)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'mk', 'country_id'=>'MK', 'regional_name'=>'Macedonian (FYROM) (Macedonia (FYROM))', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'MY', 'regional_name'=>'English (Malaysia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ms', 'country_id'=>'MY', 'regional_name'=>'Malay (Malaysia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'dv', 'country_id'=>'MV', 'regional_name'=>'Divehi (Maldives)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'mt', 'country_id'=>'MT', 'regional_name'=>'Maltese (Malta)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'MX', 'regional_name'=>'Spanish (Mexico)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'mn', 'country_id'=>'MN', 'regional_name'=>'Mongolian (Cyrillic) (Mongolia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sr', 'country_id'=>'ME', 'regional_name'=>'Serbian (Latin) (Montenegro)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'MA', 'regional_name'=>'Arabic (Morocco)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ne', 'country_id'=>'NP', 'regional_name'=>'Nepali (Nepal)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'nl', 'country_id'=>'NL', 'regional_name'=>'Dutch (Netherlands)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fy', 'country_id'=>'NL', 'regional_name'=>'Frisian (Netherlands)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'NZ', 'regional_name'=>'English (New Zealand)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'mi', 'country_id'=>'NZ', 'regional_name'=>'Maori (New Zealand)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'NI', 'regional_name'=>'Spanish (Nicaragua)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ha', 'country_id'=>'NG', 'regional_name'=>'Hausa (Latin) (Nigeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ig', 'country_id'=>'NG', 'regional_name'=>'Igbo (Nigeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'yo', 'country_id'=>'NG', 'regional_name'=>'Yoruba (Nigeria)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'nb', 'country_id'=>'NO', 'regional_name'=>'Norwegian (Bokmal) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'nn', 'country_id'=>'NO', 'regional_name'=>'Norwegian (Nynorsk) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'smj', 'country_id'=>'NO', 'regional_name'=>'Sami (Lule) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'se', 'country_id'=>'NO', 'regional_name'=>'Sami (Northern) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sma', 'country_id'=>'NO', 'regional_name'=>'Sami (Southern) (Norway)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'OM', 'regional_name'=>'Arabic (Oman)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'PA', 'regional_name'=>'Spanish (Panama)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'PY', 'regional_name'=>'Spanish (Paraguay)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'zh', 'country_id'=>'CN', 'regional_name'=>'Chinese (Simplified) Legacy (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'mn', 'country_id'=>'CN', 'regional_name'=>'Mongolian (Traditional Mongolian) (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'bo', 'country_id'=>'CN', 'regional_name'=>'Tibetan (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ug', 'country_id'=>'CN', 'regional_name'=>'Uyghur (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ii', 'country_id'=>'CN', 'regional_name'=>'Yi (People\'s Republic of China)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'quz', 'country_id'=>'PE', 'regional_name'=>'Quechua (Peru)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'PE', 'regional_name'=>'Spanish (Peru)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fil', 'country_id'=>'PH', 'regional_name'=>'Filipino (Philippines)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'pl', 'country_id'=>'PL', 'regional_name'=>'Polish (Poland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'pt', 'country_id'=>'PT', 'regional_name'=>'Portuguese (Portugal)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fr', 'country_id'=>'MC', 'regional_name'=>'French (Principality of Monaco)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'PR', 'regional_name'=>'Spanish (Puerto Rico)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'QA', 'regional_name'=>'Arabic (Qatar)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'PH', 'regional_name'=>'English (Republic of the Philippines)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ro', 'country_id'=>'RO', 'regional_name'=>'Romanian (Romania)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ba', 'country_id'=>'RU', 'regional_name'=>'Bashkir (Russia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ru', 'country_id'=>'RU', 'regional_name'=>'Russian (Russia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'tt', 'country_id'=>'RU', 'regional_name'=>'Tatar (Russia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sah', 'country_id'=>'RU', 'regional_name'=>'Yakut (Russia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'rw', 'country_id'=>'RW', 'regional_name'=>'Kinyarwanda (Rwanda)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'SA', 'regional_name'=>'Arabic (Saudi Arabia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'wo', 'country_id'=>'SN', 'regional_name'=>'Wolof (Senegal)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sr', 'country_id'=>'RS', 'regional_name'=>'Serbian (Latin) (Serbia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sr', 'country_id'=>'CS', 'regional_name'=>'Serbian (Latin) (Serbia and Montenegro (Former))', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'zh', 'country_id'=>'SG', 'regional_name'=>'Chinese (Simplified) Legacy (Singapore)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'SG', 'regional_name'=>'English (Singapore)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sk', 'country_id'=>'SK', 'regional_name'=>'Slovak (Slovakia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sl', 'country_id'=>'SI', 'regional_name'=>'Slovenian (Slovenia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'af', 'country_id'=>'ZA', 'regional_name'=>'Afrikaans (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'ZA', 'regional_name'=>'English (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'xh', 'country_id'=>'ZA', 'regional_name'=>'isiXhosa (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'zu', 'country_id'=>'ZA', 'regional_name'=>'isiZulu (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'nso', 'country_id'=>'ZA', 'regional_name'=>'Sesotho sa Leboa (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'tn', 'country_id'=>'ZA', 'regional_name'=>'Setswana (South Africa)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'eu', 'country_id'=>'ES', 'regional_name'=>'Basque (Spain)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ca', 'country_id'=>'ES', 'regional_name'=>'Catalan (Spain)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'gl', 'country_id'=>'ES', 'regional_name'=>'Galician (Spain)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'ES', 'regional_name'=>'Spanish (Spain)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'si', 'country_id'=>'LK', 'regional_name'=>'Sinhala (Sri Lanka)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'smj', 'country_id'=>'SE', 'regional_name'=>'Sami (Lule) (Sweden)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'se', 'country_id'=>'SE', 'regional_name'=>'Sami (Northern) (Sweden)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sma', 'country_id'=>'SE', 'regional_name'=>'Sami (Southern) (Sweden)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'sv', 'country_id'=>'SE', 'regional_name'=>'Swedish (Sweden)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'fr', 'country_id'=>'CH', 'regional_name'=>'French (Switzerland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'de', 'country_id'=>'CH', 'regional_name'=>'German (Switzerland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'it', 'country_id'=>'CH', 'regional_name'=>'Italian (Switzerland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'rm', 'country_id'=>'CH', 'regional_name'=>'Romansh (Switzerland)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'SY', 'regional_name'=>'Arabic (Syria)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'syr', 'country_id'=>'SY', 'regional_name'=>'Syriac (Syria)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'zh', 'country_id'=>'TW', 'regional_name'=>'Chinese (Traditional) Legacy (Taiwan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'tg', 'country_id'=>'TJ', 'regional_name'=>'Tajik (Cyrillic) (Tajikistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'th', 'country_id'=>'TH', 'regional_name'=>'Thai (Thailand)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'TT', 'regional_name'=>'English (Trinidad and Tobago)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'TN', 'regional_name'=>'Arabic (Tunisia)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'tr', 'country_id'=>'TR', 'regional_name'=>'Turkish (Turkey)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'tk', 'country_id'=>'TM', 'regional_name'=>'Turkmen (Turkmenistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'AE', 'regional_name'=>'Arabic (U.A.E.)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'uk', 'country_id'=>'UA', 'regional_name'=>'Ukrainian (Ukraine)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'GB', 'regional_name'=>'English (United Kingdom)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'gd', 'country_id'=>'GB', 'regional_name'=>'Scottish Gaelic (United Kingdom)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'cy', 'country_id'=>'GB', 'regional_name'=>'Welsh (United Kingdom)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'US', 'regional_name'=>'English (United States)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'US', 'regional_name'=>'Spanish (United States)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'es', 'country_id'=>'UY', 'regional_name'=>'Spanish (Uruguay)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'uz', 'country_id'=>'UZ', 'regional_name'=>'Uzbek (Latin) (Uzbekistan)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'vi', 'country_id'=>'VN', 'regional_name'=>'Vietnamese (Vietnam)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'ar', 'country_id'=>'YE', 'regional_name'=>'Arabic (Yemen)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['language_id'=>'en', 'country_id'=>'ZW', 'regional_name'=>'English (Zimbabwe)', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		];


		// First insert all languages without country as regional languages

		foreach ($glottos_languages_rows as $language)
		{
			if ( ! DB::table('glottos_countries_languages')->where('language_id', $language['id'])->where('country_id', '')->get())
			{
				DB::table('glottos_countries_languages')->insert(
					[
						'language_id' => $language['id'],
						'country_id' => '',
						'regional_name' => $language['name'],
						'created_at' => new DateTime,
						'updated_at' => new DateTime
					]
				);
			}
		}

		// Then insert all the others

		DB::table('glottos_countries_languages')->insert($glottos_countries_languages_rows);

		// And enable 2 of them by default

		DB::table('glottos_countries_languages')
			->where('language_id', 'pt')
			->where('country_id', 'BR')->update(
					['enabled' => true]
				);

		DB::table('glottos_countries_languages')
			->where('language_id', 'en')
			->where('country_id', '')
			->update(
				['enabled' => true]
			);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		DB::table('glottos_domains')->truncate();
		DB::table('glottos_countries')->truncate();
		DB::table('glottos_countries_languages')->truncate();
		DB::table('glottos_languages')->truncate();
	}

}

/*

!TODO!

CULTURE   SPEC.CULTURE  ENGLISH NAME
--------------------------------------------------------------
Invariant Language (Invariant Country)
af          af-ZA       Afrikaans
af-ZA       af-ZA       Afrikaans (South Africa)
ar          ar-SA       Arabic
ar-AE       ar-AE       Arabic (U.A.E.)
ar-BH       ar-BH       Arabic (Bahrain)
ar-DZ       ar-DZ       Arabic (Algeria)
ar-EG       ar-EG       Arabic (Egypt)
ar-IQ       ar-IQ       Arabic (Iraq)
ar-JO       ar-JO       Arabic (Jordan)
ar-KW       ar-KW       Arabic (Kuwait)
ar-LB       ar-LB       Arabic (Lebanon)
ar-LY       ar-LY       Arabic (Libya)
ar-MA       ar-MA       Arabic (Morocco)
ar-OM       ar-OM       Arabic (Oman)
ar-QA       ar-QA       Arabic (Qatar)
ar-SA       ar-SA       Arabic (Saudi Arabia)
ar-SY       ar-SY       Arabic (Syria)
ar-TN       ar-TN       Arabic (Tunisia)
ar-YE       ar-YE       Arabic (Yemen)
az          az-Latn-AZ  Azeri
az-Cyrl-AZ  az-Cyrl-AZ  Azeri (Cyrillic, Azerbaijan)
az-Latn-AZ  az-Latn-AZ  Azeri (Latin, Azerbaijan)
be          be-BY       Belarusian
be-BY       be-BY       Belarusian (Belarus)
bg          bg-BG       Bulgarian
bg-BG       bg-BG       Bulgarian (Bulgaria)
bs-Latn-BA  bs-Latn-BA  Bosnian (Bosnia and Herzegovina)
ca          ca-ES       Catalan
ca-ES       ca-ES       Catalan (Catalan)
cs          cs-CZ       Czech
cs-CZ       cs-CZ       Czech (Czech Republic)
cy-GB       cy-GB       Welsh (United Kingdom)
da          da-DK       Danish
da-DK       da-DK       Danish (Denmark)
de          de-DE       German
de-AT       de-AT       German (Austria)
de-DE       de-DE       German (Germany)
de-CH       de-CH       German (Switzerland)
de-LI       de-LI       German (Liechtenstein)
de-LU       de-LU       German (Luxembourg)
dv          dv-MV       Divehi
dv-MV       dv-MV       Divehi (Maldives)
el          el-GR       Greek
el-GR       el-GR       Greek (Greece)
en          en-US       English
en-029      en-029      English (Caribbean)
en-AU       en-AU       English (Australia)
en-BZ       en-BZ       English (Belize)
en-CA       en-CA       English (Canada)
en-GB       en-GB       English (United Kingdom)
en-IE       en-IE       English (Ireland)
en-JM       en-JM       English (Jamaica)
en-NZ       en-NZ       English (New Zealand)
en-PH       en-PH       English (Republic of the Philippines)
en-TT       en-TT       English (Trinidad and Tobago)
en-US       en-US       English (United States)
en-ZA       en-ZA       English (South Africa)
en-ZW       en-ZW       English (Zimbabwe)
es          es-ES       Spanish
es-AR       es-AR       Spanish (Argentina)
es-BO       es-BO       Spanish (Bolivia)
es-CL       es-CL       Spanish (Chile)
es-CO       es-CO       Spanish (Colombia)
es-CR       es-CR       Spanish (Costa Rica)
es-DO       es-DO       Spanish (Dominican Republic)
es-EC       es-EC       Spanish (Ecuador)
es-ES       es-ES       Spanish (Spain)
es-GT       es-GT       Spanish (Guatemala)
es-HN       es-HN       Spanish (Honduras)
es-MX       es-MX       Spanish (Mexico)
es-NI       es-NI       Spanish (Nicaragua)
es-PA       es-PA       Spanish (Panama)
es-PE       es-PE       Spanish (Peru)
es-PR       es-PR       Spanish (Puerto Rico)
es-PY       es-PY       Spanish (Paraguay)
es-SV       es-SV       Spanish (El Salvador)
es-UY       es-UY       Spanish (Uruguay)
es-VE       es-VE       Spanish (Venezuela)
et          et-EE       Estonian
et-EE       et-EE       Estonian (Estonia)
eu          eu-ES       Basque
eu-ES       eu-ES       Basque (Basque)
fa          fa-IR       Persian
fa-IR       fa-IR       Persian (Iran)
fi          fi-FI       Finnish
fi-FI       fi-FI       Finnish (Finland)
fo          fo-FO       Faroese
fo-FO       fo-FO       Faroese (Faroe Islands)
fr          fr-FR       French
fr-BE       fr-BE       French (Belgium)
fr-CA       fr-CA       French (Canada)
fr-FR       fr-FR       French (France)
fr-CH       fr-CH       French (Switzerland)
fr-LU       fr-LU       French (Luxembourg)
fr-MC       fr-MC       French (Principality of Monaco)
gl          gl-ES       Galician
gl-ES       gl-ES       Galician (Galician)
gu          gu-IN       Gujarati
gu-IN       gu-IN       Gujarati (India)
he          he-IL       Hebrew
he-IL       he-IL       Hebrew (Israel)
hi          hi-IN       Hindi
hi-IN       hi-IN       Hindi (India)
hr          hr-HR       Croatian
hr-BA       hr-BA       Croatian (Bosnia and Herzegovina)
hr-HR       hr-HR       Croatian (Croatia)
hu          hu-HU       Hungarian
hu-HU       hu-HU       Hungarian (Hungary)
hy          hy-AM       Armenian
hy-AM       hy-AM       Armenian (Armenia)
id          id-ID       Indonesian
id-ID       id-ID       Indonesian (Indonesia)
is          is-IS       Icelandic
is-IS       is-IS       Icelandic (Iceland)
it          it-IT       Italian
it-CH       it-CH       Italian (Switzerland)
it-IT       it-IT       Italian (Italy)
ja          ja-JP       Japanese
ja-JP       ja-JP       Japanese (Japan)
ka          ka-GE       Georgian
ka-GE       ka-GE       Georgian (Georgia)
kk          kk-KZ       Kazakh
kk-KZ       kk-KZ       Kazakh (Kazakhstan)
kn          kn-IN       Kannada
kn-IN       kn-IN       Kannada (India)
ko          ko-KR       Korean
kok         kok-IN      Konkani
kok-IN      kok-IN      Konkani (India)
ko-KR       ko-KR       Korean (Korea)
ky          ky-KG       Kyrgyz
ky-KG       ky-KG       Kyrgyz (Kyrgyzstan)
lt          lt-LT       Lithuanian
lt-LT       lt-LT       Lithuanian (Lithuania)
lv          lv-LV       Latvian
lv-LV       lv-LV       Latvian (Latvia)
mi-NZ       mi-NZ       Maori (New Zealand)
mk          mk-MK       Macedonian
mk-MK       mk-MK       Macedonian (Former Yugoslav Republic of Macedonia)
mn          mn-MN       Mongolian
mn-MN       mn-MN       Mongolian (Cyrillic, Mongolia)
mr          mr-IN       Marathi
mr-IN       mr-IN       Marathi (India)
ms          ms-MY       Malay
ms-BN       ms-BN       Malay (Brunei Darussalam)
ms-MY       ms-MY       Malay (Malaysia)
mt-MT       mt-MT       Maltese (Malta)
nb-NO       nb-NO       Norwegian, Bokmal (Norway)
nl          nl-NL       Dutch
nl-BE       nl-BE       Dutch (Belgium)
nl-NL       nl-NL       Dutch (Netherlands)
nn-NO       nn-NO       Norwegian, Nynorsk (Norway)
no          nb-NO       Norwegian
ns-ZA       ns-ZA       Northern Sotho (South Africa)
pa          pa-IN       Punjabi
pa-IN       pa-IN       Punjabi (India)
pl          pl-PL       Polish
pl-PL       pl-PL       Polish (Poland)
pt          pt-BR       Portuguese
pt-BR       pt-BR       Portuguese (Brazil)
pt-PT       pt-PT       Portuguese (Portugal)
quz-BO      quz-BO      Quechua (Bolivia)
quz-EC      quz-EC      Quechua (Ecuador)
quz-PE      quz-PE      Quechua (Peru)
ro          ro-RO       Romanian
ro-RO       ro-RO       Romanian (Romania)
ru          ru-RU       Russian
ru-RU       ru-RU       Russian (Russia)
sa          sa-IN       Sanskrit
sa-IN       sa-IN       Sanskrit (India)
se-FI       se-FI       Sami (Northern) (Finland)
se-NO       se-NO       Sami (Northern) (Norway)
se-SE       se-SE       Sami (Northern) (Sweden)
sk          sk-SK       Slovak
sk-SK       sk-SK       Slovak (Slovakia)
sl          sl-SI       Slovenian
sl-SI       sl-SI       Slovenian (Slovenia)
sma-NO      sma-NO      Sami (Southern) (Norway)
sma-SE      sma-SE      Sami (Southern) (Sweden)
smj-NO      smj-NO      Sami (Lule) (Norway)
smj-SE      smj-SE      Sami (Lule) (Sweden)
smn-FI      smn-FI      Sami (Inari) (Finland)
sms-FI      sms-FI      Sami (Skolt) (Finland)
sq          sq-AL       Albanian
sq-AL       sq-AL       Albanian (Albania)
sr          sr-Latn-CS  Serbian
sr-Cyrl-BA  sr-Cyrl-BA  Serbian (Cyrillic) (Bosnia and Herzegovina)
sr-Cyrl-CS  sr-Cyrl-CS  Serbian (Cyrillic, Serbia)
sr-Latn-BA  sr-Latn-BA  Serbian (Latin) (Bosnia and Herzegovina)
sr-Latn-CS  sr-Latn-CS  Serbian (Latin, Serbia)
sv          sv-SE       Swedish
sv-FI       sv-FI       Swedish (Finland)
sv-SE       sv-SE       Swedish (Sweden)
sw          sw-KE       Kiswahili
sw-KE       sw-KE       Kiswahili (Kenya)
syr         syr-SY      Syriac
syr-SY      syr-SY      Syriac (Syria)
ta          ta-IN       Tamil
ta-IN       ta-IN       Tamil (India)
te          te-IN       Telugu
te-IN       te-IN       Telugu (India)
th          th-TH       Thai
th-TH       th-TH       Thai (Thailand)
tn-ZA       tn-ZA       Tswana (South Africa)
tr          tr-TR       Turkish
tr-TR       tr-TR       Turkish (Turkey)
tt          tt-RU       Tatar
tt-RU       tt-RU       Tatar (Russia)
uk          uk-UA       Ukrainian
uk-UA       uk-UA       Ukrainian (Ukraine)
ur          ur-PK       Urdu
ur-PK       ur-PK       Urdu (Islamic Republic of Pakistan)
uz          uz-Latn-UZ  Uzbek
uz-Cyrl-UZ  uz-Cyrl-UZ  Uzbek (Cyrillic, Uzbekistan)
uz-Latn-UZ  uz-Latn-UZ  Uzbek (Latin, Uzbekistan)
vi          vi-VN       Vietnamese
vi-VN       vi-VN       Vietnamese (Vietnam)
xh-ZA       xh-ZA       Xhosa (South Africa)
zh-CN       zh-CN       Chinese (People's Republic of China)
zh-HK       zh-HK       Chinese (Hong Kong S.A.R.)
zh-CHS      (none)      Chinese (Simplified)
zh-CHT      (none)      Chinese (Traditional)
zh-MO       zh-MO       Chinese (Macao S.A.R.)
zh-SG       zh-SG       Chinese (Singapore)
zh-TW       zh-TW       Chinese (Taiwan)
zu-ZA       zu-ZA       Zulu (South Africa)

*/
