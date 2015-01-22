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
			['id' => 'AD' , 'name' => 'Andorra', 'latitude' => 42.546245, 'longitude' =>	1.601554, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AE' , 'name' => 'United Arab Emirates', 'latitude' => 23.424076, 'longitude' =>	53.847818, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AF' , 'name' => 'Afghanistan', 'latitude' => 33.93911, 'longitude' =>	67.709953, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AG' ,	'name' => 'Antigua and Barbuda', 'latitude' => 17.060816, 'longitude' => -61.796428, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AI' , 'name' => 'Anguilla', 'latitude' => 18.220554, 'longitude' => -63.068615, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AL' , 'name' => 'Albania', 'latitude' => 41.153332, 'longitude' => 20.168331, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AM' , 'name' => 'Armenia', 'latitude' => 40.069099, 'longitude' => 45.038189, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AN' , 'name' => 'Netherlands Antilles', 'latitude' => 12.226079, 'longitude' => -69.060087, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AO' , 'name' => 'Angola', 'latitude' => -11.202692, 'longitude' => 17.873887, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AQ' , 'name' => 'Antarctica', 'latitude' => -75.250973, 'longitude' => -0.071389, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AR' , 'name' => 'Argentina', 'latitude' => -38.416097, 'longitude' => -63.616672, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AS' , 'name' => 'American Samoa', 'latitude' => -14.270972, 'longitude' => -170.132217, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AT' , 'name' => 'Austria', 'latitude' => 47.516231, 'longitude' => 14.550072, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AU' , 'name' => 'Australia', 'latitude' => -25.274398, 'longitude' => 133.775136, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AW' , 'name' => 'Aruba', 'latitude' => 12.52111, 'longitude' => -69.968338, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'AZ' , 'name' => 'Azerbaijan', 'latitude' => 40.143105, 'longitude' => 47.576927, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BA' , 'name' => 'Bosnia and Herzegovina', 'latitude' => 43.915886, 'longitude' => 17.679076, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BB' , 'name' => 'Barbados', 'latitude' => 13.193887, 'longitude' => -59.543198, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BD' , 'name' => 'Bangladesh', 'latitude' => 23.684994, 'longitude' => 90.356331, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BE' , 'name' => 'Belgium', 'latitude' => 50.503887, 'longitude' => 4.469936, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BF' , 'name' => 'Burkina Faso', 'latitude' => 12.238333, 'longitude' => -1.561593, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BG' , 'name' => 'Bulgaria', 'latitude' => 42.733883, 'longitude' => 25.48583, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BH' , 'name' => 'Bahrain', 'latitude' => 25.930414, 'longitude' => 50.637772, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BI' , 'name' => 'Burundi', 'latitude' => -3.373056, 'longitude' => 29.918886, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BJ' , 'name' => 'Benin', 'latitude' => 9.30769, 'longitude' => 2.315834, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BM' , 'name' => 'Bermuda', 'latitude' => 32.321384, 'longitude' => -64.75737, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BN' , 'name' => 'Brunei', 'latitude' => 4.535277, 'longitude' => 114.727669, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BO' , 'name' => 'Bolivia', 'latitude' => -16.290154, 'longitude' => -63.588653, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BR' , 'name' => 'Brazil', 'latitude' => -14.235004, 'longitude' => -51.92528, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BS' , 'name' => 'Bahamas', 'latitude' => 25.03428, 'longitude' => -77.39628, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BT' , 'name' => 'Bhutan', 'latitude' => 27.514162, 'longitude' => 90.433601, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BV' , 'name' => 'Bouvet Island', 'latitude' => -54.423199, 'longitude' => 3.413194, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BW' , 'name' => 'Botswana', 'latitude' => -22.328474, 'longitude' => 24.684866, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BY' , 'name' => 'Belarus', 'latitude' => 53.709807, 'longitude' => 27.953389, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'BZ' , 'name' => 'Belize', 'latitude' => 17.189877, 'longitude' => -88.49765, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CA' , 'name' => 'Canada', 'latitude' => 56.130366, 'longitude' => -106.346771, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CC' , 'name' => 'Cocos [Keeling] Islands', 'latitude' => -12.164165, 'longitude' => 96.870956, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CD' , 'name' => 'Congo [Democratic Republic]', 'latitude' => -4.038333, 'longitude' => 21.758664, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CF' , 'name' => 'Central African Republic', 'latitude' => 6.611111, 'longitude' => 20.939444, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CG' , 'name' => 'Congo [Republic]', 'latitude' => -0.228021, 'longitude' => 15.827659, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CH' , 'name' => 'Switzerland', 'latitude' => 46.818188, 'longitude' => 8.227512, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CI' , 'name' => 'Côte d\'Ivoire', 'latitude' => 7.539989, 'longitude' => -5.54708, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CK' , 'name' => 'Cook Islands', 'latitude' => -21.236736, 'longitude' => -159.777671, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CL' , 'name' => 'Chile', 'latitude' => -35.675147, 'longitude' => -71.542969, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CM' , 'name' => 'Cameroon', 'latitude' => 7.369722, 'longitude' => 12.354722, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CN' , 'name' => 'China', 'latitude' => 35.86166, 'longitude' => 104.195397, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CO' , 'name' => 'Colombia', 'latitude' => 4.570868, 'longitude' => -74.297333, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CR' , 'name' => 'Costa Rica', 'latitude' => 9.748917, 'longitude' => -83.753428, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CU' , 'name' => 'Cuba', 'latitude' => 21.521757, 'longitude' => -77.781167, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CV' , 'name' => 'Cabo Verde', 'latitude' => 16.002082, 'longitude' => -24.013197, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CX' , 'name' => 'Christmas Island', 'latitude' => -10.447525, 'longitude' => 105.690449, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CY' , 'name' => 'Cyprus', 'latitude' => 35.126413, 'longitude' => 33.429859, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'CZ' , 'name' => 'Czech Republic', 'latitude' => 49.817492, 'longitude' => 15.472962, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DE' , 'name' => 'Germany', 'latitude' => 51.165691, 'longitude' => 10.451526, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DJ' , 'name' => 'Djibouti', 'latitude' => 11.825138, 'longitude' => 42.590275, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DK' , 'name' => 'Denmark', 'latitude' => 56.26392, 'longitude' => 9.501785, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DM' , 'name' => 'Dominica', 'latitude' => 15.414999, 'longitude' => -61.370976, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DO' , 'name' => 'Dominican Republic', 'latitude' => 18.735693, 'longitude' => -70.162651, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'DZ' , 'name' => 'Algeria', 'latitude' => 28.033886, 'longitude' => 1.659626, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'EC' , 'name' => 'Ecuador', 'latitude' => -1.831239, 'longitude' => -78.183406, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'EE' , 'name' => 'Estonia', 'latitude' => 58.595272, 'longitude' => 25.013607, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'EG' , 'name' => 'Egypt', 'latitude' => 26.820553, 'longitude' => 30.802498, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'EH' , 'name' => 'Western Sahara', 'latitude' => 24.215527, 'longitude' => -12.885834, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ER' , 'name' => 'Eritrea', 'latitude' => 15.179384, 'longitude' => 39.782334, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ES' , 'name' => 'Spain', 'latitude' => 40.463667, 'longitude' => -3.74922, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ET' , 'name' => 'Ethiopia', 'latitude' => 9.145, 'longitude' => 40.489673, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'FI' , 'name' => 'Finland', 'latitude' => 61.92411, 'longitude' => 25.748151, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'FJ' , 'name' => 'Fiji', 'latitude' => -16.578193, 'longitude' => 179.414413, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'FK' , 'name' => 'Falkland Islands [Islas Malvinas]', 'latitude' => -51.796253, 'longitude' => -59.523613, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'FM' , 'name' => 'Micronesia', 'latitude' => 7.425554, 'longitude' => 150.550812, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'FO' , 'name' => 'Faroe Islands', 'latitude' => 61.892635, 'longitude' => -6.911806, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'FR' , 'name' => 'France', 'latitude' => 46.227638, 'longitude' => 2.213749, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GA' , 'name' => 'Gabon', 'latitude' => -0.803689, 'longitude' => 11.609444, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GB' , 'name' => 'United Kingdom', 'latitude' => 55.378051, 'longitude' => -3.435973, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GD' , 'name' => 'Grenada', 'latitude' => 12.262776, 'longitude' => -61.604171, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GE' , 'name' => 'Georgia', 'latitude' => 42.315407, 'longitude' => 43.356892, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GF' , 'name' => 'French Guiana', 'latitude' => 3.933889, 'longitude' => -53.125782, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GG' , 'name' => 'Guernsey', 'latitude' => 49.465691, 'longitude' => -2.585278, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GH' , 'name' => 'Ghana', 'latitude' => 7.946527, 'longitude' => -1.023194, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GI' , 'name' => 'Gibraltar', 'latitude' => 36.137741, 'longitude' => -5.345374, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GL' , 'name' => 'Greenland', 'latitude' => 71.706936, 'longitude' => -42.604303, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GM' , 'name' => 'Gambia', 'latitude' => 13.443182, 'longitude' => -15.310139, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GN' , 'name' => 'Guinea', 'latitude' => 9.945587, 'longitude' => -9.696645, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GP' , 'name' => 'Guadeloupe', 'latitude' => 16.995971, 'longitude' => -62.067641, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GQ' , 'name' => 'Equatorial Guinea', 'latitude' => 1.650801, 'longitude' => 10.267895, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GR' , 'name' => 'Greece', 'latitude' => 39.074208, 'longitude' => 21.824312, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GS' , 'name' => 'South Georgia and the South Sandwich Islands', 'latitude' => -54.429579, 'longitude' => -36.587909, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GT' , 'name' => 'Guatemala', 'latitude' => 15.783471, 'longitude' => -90.230759, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GU' , 'name' => 'Guam', 'latitude' => 13.444304, 'longitude' => 144.793731, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GW' , 'name' => 'Guinea-Bissau', 'latitude' => 11.803749, 'longitude' => -15.180413, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GY' , 'name' => 'Guyana', 'latitude' => 4.860416, 'longitude' => -58.93018, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'GZ' , 'name' => 'Gaza Strip', 'latitude' => 31.354676, 'longitude' => 34.308825, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HK' , 'name' => 'Hong Kong', 'latitude' => 22.396428, 'longitude' => 114.109497, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HM' , 'name' => 'Heard Island and McDonald Islands', 'latitude' => -53.08181, 'longitude' => 73.504158, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HN' , 'name' => 'Honduras', 'latitude' => 15.199999, 'longitude' => -86.241905, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HR' , 'name' => 'Croatia', 'latitude' => 45.1, 'longitude' => 15.2, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HT' , 'name' => 'Haiti', 'latitude' => 18.971187, 'longitude' => -72.285215, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'HU' , 'name' => 'Hungary', 'latitude' => 47.162494, 'longitude' => 19.503304, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ID' , 'name' => 'Indonesia', 'latitude' => -0.789275, 'longitude' => 113.921327, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IE' , 'name' => 'Ireland', 'latitude' => 53.41291, 'longitude' => -8.24389, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IL' , 'name' => 'Israel', 'latitude' => 31.046051, 'longitude' => 34.851612, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IM' , 'name' => 'Isle of Man', 'latitude' => 54.236107, 'longitude' => -4.548056, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IN' , 'name' => 'India', 'latitude' => 20.593684, 'longitude' => 78.96288, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IO' , 'name' => 'British Indian Ocean Territory', 'latitude' => -6.343194, 'longitude' => 71.876519, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IQ' , 'name' => 'Iraq', 'latitude' => 33.223191, 'longitude' => 43.679291, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IR' , 'name' => 'Iran', 'latitude' => 32.427908, 'longitude' => 53.688046, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IS' , 'name' => 'Iceland', 'latitude' => 64.963051, 'longitude' => -19.020835, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'IT' , 'name' => 'Italy', 'latitude' => 41.87194, 'longitude' => 12.56738, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'JE' , 'name' => 'Jersey', 'latitude' => 49.214439, 'longitude' => -2.13125, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'JM' , 'name' => 'Jamaica', 'latitude' => 18.109581, 'longitude' => -77.297508, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'JO' , 'name' => 'Jordan', 'latitude' => 30.585164, 'longitude' => 36.238414, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'JP' , 'name' => 'Japan', 'latitude' => 36.204824, 'longitude' => 138.252924, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KE' , 'name' => 'Kenya', 'latitude' => -0.023559, 'longitude' => 37.906193, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KG' , 'name' => 'Kyrgyzstan', 'latitude' => 41.20438, 'longitude' => 74.766098, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KH' , 'name' => 'Cambodia', 'latitude' => 12.565679, 'longitude' => 104.990963, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KI' , 'name' => 'Kiribati', 'latitude' => -3.370417, 'longitude' => -168.734039, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KM' , 'name' => 'Comoros', 'latitude' => -11.875001, 'longitude' => 43.872219, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KN' , 'name' => 'Saint Kitts and Nevis', 'latitude' => 17.357822, 'longitude' => -62.782998, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KP' , 'name' => 'North Korea', 'latitude' => 40.339852, 'longitude' => 127.510093, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KR' , 'name' => 'South Korea', 'latitude' => 35.907757, 'longitude' => 127.766922, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KW' , 'name' => 'Kuwait', 'latitude' => 29.31166, 'longitude' => 47.481766, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KY' , 'name' => 'Cayman Islands', 'latitude' => 19.513469, 'longitude' => -80.566956, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'KZ' , 'name' => 'Kazakhstan', 'latitude' => 48.019573, 'longitude' => 66.923684, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LA' , 'name' => 'Laos', 'latitude' => 19.85627, 'longitude' => 102.495496, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LB' , 'name' => 'Lebanon', 'latitude' => 33.854721, 'longitude' => 35.862285, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LC' , 'name' => 'Saint Lucia', 'latitude' => 13.909444, 'longitude' => -60.978893, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LI' , 'name' => 'Liechtenstein', 'latitude' => 47.166, 'longitude' => 9.555373, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LK' , 'name' => 'Sri Lanka', 'latitude' => 7.873054, 'longitude' => 80.771797, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LR' , 'name' => 'Liberia', 'latitude' => 6.428055, 'longitude' => -9.429499, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LS' , 'name' => 'Lesotho', 'latitude' => -29.609988, 'longitude' => 28.233608, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LT' , 'name' => 'Lithuania', 'latitude' => 55.169438, 'longitude' => 23.881275, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LU' , 'name' => 'Luxembourg', 'latitude' => 49.815273, 'longitude' => 6.129583, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LV' , 'name' => 'Latvia', 'latitude' => 56.879635, 'longitude' => 24.603189, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'LY' , 'name' => 'Libya', 'latitude' => 26.3351, 'longitude' => 17.228331, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MA' , 'name' => 'Morocco', 'latitude' => 31.791702, 'longitude' => -7.09262, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MC' , 'name' => 'Monaco', 'latitude' => 43.750298, 'longitude' => 7.412841, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MD' , 'name' => 'Moldova', 'latitude' => 47.411631, 'longitude' => 28.369885, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ME' , 'name' => 'Montenegro', 'latitude' => 42.708678, 'longitude' => 19.37439, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MG' , 'name' => 'Madagascar', 'latitude' => -18.766947, 'longitude' => 46.869107, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MH' , 'name' => 'Marshall Islands', 'latitude' => 7.131474, 'longitude' => 171.184478, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MK' , 'name' => 'Macedonia [FYROM]', 'latitude' => 41.608635, 'longitude' => 21.745275, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ML' , 'name' => 'Mali', 'latitude' => 17.570692, 'longitude' => -3.996166, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MM' , 'name' => 'Myanmar [Burma]', 'latitude' => 21.913965, 'longitude' => 95.956223, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MN' , 'name' => 'Mongolia', 'latitude' => 46.862496, 'longitude' => 103.846656, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MO' , 'name' => 'Macau', 'latitude' => 22.198745, 'longitude' => 113.543873, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MP' , 'name' => 'Northern Mariana Islands', 'latitude' => 17.33083, 'longitude' => 145.38469, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MQ' , 'name' => 'Martinique', 'latitude' => 14.641528, 'longitude' => -61.024174, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MR' , 'name' => 'Mauritania', 'latitude' => 21.00789, 'longitude' => -10.940835, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MS' , 'name' => 'Montserrat', 'latitude' => 16.742498, 'longitude' => -62.187366, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MT' , 'name' => 'Malta', 'latitude' => 35.937496, 'longitude' => 14.375416, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MU' , 'name' => 'Mauritius', 'latitude' => -20.348404, 'longitude' => 57.552152, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MV' , 'name' => 'Maldives', 'latitude' => 3.202778, 'longitude' => 73.22068, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MW' , 'name' => 'Malawi', 'latitude' => -13.254308, 'longitude' => 34.301525, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MX' , 'name' => 'Mexico', 'latitude' => 23.634501, 'longitude' => -102.552784, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MY' , 'name' => 'Malaysia', 'latitude' => 4.210484, 'longitude' => 101.975766, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'MZ' , 'name' => 'Mozambique', 'latitude' => -18.665695, 'longitude' => 35.529562, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NA' , 'name' => 'Namibia', 'latitude' => -22.95764, 'longitude' => 18.49041, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NC' , 'name' => 'New Caledonia', 'latitude' => -20.904305, 'longitude' => 165.618042, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NE' , 'name' => 'Niger', 'latitude' => 17.607789, 'longitude' => 8.081666, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NF' , 'name' => 'Norfolk Island', 'latitude' => -29.040835, 'longitude' => 167.954712, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NG' , 'name' => 'Nigeria', 'latitude' => 9.081999, 'longitude' => 8.675277, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NI' , 'name' => 'Nicaragua', 'latitude' => 12.865416, 'longitude' => -85.207229, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NL' , 'name' => 'Netherlands', 'latitude' => 52.132633, 'longitude' => 5.291266, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NO' , 'name' => 'Norway', 'latitude' => 60.472024, 'longitude' => 8.468946, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NP' , 'name' => 'Nepal', 'latitude' => 28.394857, 'longitude' => 84.124008, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NR' , 'name' => 'Nauru', 'latitude' => -0.522778, 'longitude' => 166.931503, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NU' , 'name' => 'Niue', 'latitude' => -19.054445, 'longitude' => -169.867233, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'NZ' , 'name' => 'New Zealand', 'latitude' => -40.900557, 'longitude' => 174.885971, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'OM' , 'name' => 'Oman', 'latitude' => 21.512583, 'longitude' => 55.923255, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PA' , 'name' => 'Panama', 'latitude' => 8.537981, 'longitude' => -80.782127, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PE' , 'name' => 'Peru', 'latitude' => -9.189967, 'longitude' => -75.015152, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PF' , 'name' => 'French Polynesia', 'latitude' => -17.679742, 'longitude' => -149.406843, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PG' , 'name' => 'Papua New Guinea', 'latitude' => -6.314993, 'longitude' => 143.95555, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PH' , 'name' => 'Philippines', 'latitude' => 12.879721, 'longitude' => 121.774017, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PK' , 'name' => 'Pakistan', 'latitude' => 30.375321, 'longitude' => 69.345116, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PL' , 'name' => 'Poland', 'latitude' => 51.919438, 'longitude' => 19.145136, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PM' , 'name' => 'Saint Pierre and Miquelon', 'latitude' => 46.941936, 'longitude' => -56.27111, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PN' , 'name' => 'Pitcairn Islands', 'latitude' => -24.703615, 'longitude' => -127.439308, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PR' , 'name' => 'Puerto Rico', 'latitude' => 18.220833, 'longitude' => -66.590149, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PS' , 'name' => 'Palestinian Territories', 'latitude' => 31.952162, 'longitude' => 35.233154, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PT' , 'name' => 'Portugal', 'latitude' => 39.399872, 'longitude' => -8.224454, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PW' , 'name' => 'Palau', 'latitude' => 7.51498, 'longitude' => 134.58252, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'PY' , 'name' => 'Paraguay', 'latitude' => -23.442503, 'longitude' => -58.443832, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'QA' , 'name' => 'Qatar', 'latitude' => 25.354826, 'longitude' => 51.183884, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'RE' , 'name' => 'Réunion', 'latitude' => -21.115141, 'longitude' => 55.536384, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'RO' , 'name' => 'Romania', 'latitude' => 45.943161, 'longitude' => 24.96676, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'RS' , 'name' => 'Serbia', 'latitude' => 44.016521, 'longitude' => 21.005859, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'RU' , 'name' => 'Russia', 'latitude' => 61.52401, 'longitude' => 105.318756, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'RW' , 'name' => 'Rwanda', 'latitude' => -1.940278, 'longitude' => 29.873888, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SA' , 'name' => 'Saudi Arabia', 'latitude' => 23.885942, 'longitude' => 45.079162, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SB' , 'name' => 'Solomon Islands', 'latitude' => -9.64571, 'longitude' => 160.156194, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SC' , 'name' => 'Seychelles', 'latitude' => -4.679574, 'longitude' => 55.491977, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SD' , 'name' => 'Sudan', 'latitude' => 12.862807, 'longitude' => 30.217636, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SE' , 'name' => 'Sweden', 'latitude' => 60.128161, 'longitude' => 18.643501, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SG' , 'name' => 'Singapore', 'latitude' => 1.352083, 'longitude' => 103.819836, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SH' , 'name' => 'Saint Helena', 'latitude' => -24.143474, 'longitude' => -10.030696, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SI' , 'name' => 'Slovenia', 'latitude' => 46.151241, 'longitude' => 14.995463, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SJ' , 'name' => 'Svalbard and Jan Mayen', 'latitude' => 77.553604, 'longitude' => 23.670272, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SK' , 'name' => 'Slovakia', 'latitude' => 48.669026, 'longitude' => 19.699024, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SL' , 'name' => 'Sierra Leone', 'latitude' => 8.460555, 'longitude' => -11.779889, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SM' , 'name' => 'San Marino', 'latitude' => 43.94236, 'longitude' => 12.457777, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SN' , 'name' => 'Senegal', 'latitude' => 14.497401, 'longitude' => -14.452362, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SO' , 'name' => 'Somalia', 'latitude' => 5.152149, 'longitude' => 46.199616, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SR' , 'name' => 'Suriname', 'latitude' => 3.919305, 'longitude' => -56.027783, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ST' , 'name' => 'São Tomé and Príncipe', 'latitude' => 0.18636, 'longitude' => 6.613081, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SV' , 'name' => 'El Salvador', 'latitude' => 13.794185, 'longitude' => -88.89653, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SY' , 'name' => 'Syria', 'latitude' => 34.802075, 'longitude' => 38.996815, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'SZ' , 'name' => 'Swaziland', 'latitude' => -26.522503, 'longitude' => 31.465866, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TC' , 'name' => 'Turks and Caicos Islands', 'latitude' => 21.694025, 'longitude' => -71.797928, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TD' , 'name' => 'Chad', 'latitude' => 15.454166, 'longitude' => 18.732207, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TF' , 'name' => 'French Southern Territories', 'latitude' => -49.280366, 'longitude' => 69.348557, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TG' , 'name' => 'Togo', 'latitude' => 8.619543, 'longitude' => 0.824782, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TH' , 'name' => 'Thailand', 'latitude' => 15.870032, 'longitude' => 100.992541, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TJ' , 'name' => 'Tajikistan', 'latitude' => 38.861034, 'longitude' => 71.276093, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TK' , 'name' => 'Tokelau', 'latitude' => -8.967363, 'longitude' => -171.855881, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TL' , 'name' => 'Timor-Leste', 'latitude' => -8.874217, 'longitude' => 125.727539, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TM' , 'name' => 'Turkmenistan', 'latitude' => 38.969719, 'longitude' => 59.556278, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TN' , 'name' => 'Tunisia', 'latitude' => 33.886917, 'longitude' => 9.537499, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TO' , 'name' => 'Tonga', 'latitude' => -21.178986, 'longitude' => -175.198242, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TR' , 'name' => 'Turkey', 'latitude' => 38.963745, 'longitude' => 35.243322, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TT' , 'name' => 'Trinidad and Tobago', 'latitude' => 10.691803, 'longitude' => -61.222503, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TV' , 'name' => 'Tuvalu', 'latitude' => -7.109535, 'longitude' => 177.64933, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TW' , 'name' => 'Taiwan', 'latitude' => 23.69781, 'longitude' => 120.960515, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'TZ' , 'name' => 'Tanzania', 'latitude' => -6.369028, 'longitude' => 34.888822, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'UA' , 'name' => 'Ukraine', 'latitude' => 48.379433, 'longitude' => 31.16558, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'UG' , 'name' => 'Uganda', 'latitude' => 1.373333, 'longitude' => 32.290275, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'US' , 'name' => 'United States', 'latitude' => 37.09024, 'longitude' => -95.712891, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'UY' , 'name' => 'Uruguay', 'latitude' => -32.522779, 'longitude' => -55.765835, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'UZ' , 'name' => 'Uzbekistan', 'latitude' => 41.377491, 'longitude' => 64.585262, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VA' , 'name' => 'Vatican City', 'latitude' => 41.902916, 'longitude' => 12.453389, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VC' , 'name' => 'Saint Vincent and the Grenadines', 'latitude' => 12.984305, 'longitude' => -61.287228, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VE' , 'name' => 'Venezuela', 'latitude' => 6.42375, 'longitude' => -66.58973, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VG' , 'name' => 'British Virgin Islands', 'latitude' => 18.420695, 'longitude' => -64.639968, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VI' , 'name' => 'U.S. Virgin Islands', 'latitude' => 18.335765, 'longitude' => -64.896335, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VN' , 'name' => 'Vietnam', 'latitude' => 14.058324, 'longitude' => 108.277199, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'VU' , 'name' => 'Vanuatu', 'latitude' => -15.376706, 'longitude' => 166.959158, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'WF' , 'name' => 'Wallis and Futuna', 'latitude' => -13.768752, 'longitude' => -177.156097, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'WS' , 'name' => 'Samoa', 'latitude' => -13.759029, 'longitude' => -172.104629, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'XK' , 'name' => 'Kosovo', 'latitude' => 42.602636, 'longitude' => 20.902977, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'YE' , 'name' => 'Yemen', 'latitude' => 15.552727, 'longitude' => 48.516388, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'YT' , 'name' => 'Mayotte', 'latitude' => -12.8275, 'longitude' => 45.166244, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ZA' , 'name' => 'South Africa', 'latitude' => -30.559482, 'longitude' => 22.937506, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ZM' , 'name' => 'Zambia', 'latitude' => -13.133897, 'longitude' => 27.849332, 'created_at' => new DateTime, 'updated_at' => new DateTime],
			['id' => 'ZW' , 'name' => 'Zimbabwe', 'latitude' => -19.015438, 'longitude' => 29.154857, 'created_at' => new DateTime, 'updated_at' => new DateTime],
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
