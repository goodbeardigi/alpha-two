<?php
/**
 * Card Block
 *
 * @package Alpha
 */

/**
 * IMPORTANT
 * To simplify adding and removing countries from the list we assigned the array id ranges for earch 
 * region. 
 * Africa - 0-49, Americas 50-99, Asia-Pacific 100-149, EMENA - 150-250
 * The countries are sorted by the order they appear in this file 
 */


$block_id = 'alpha-offices-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-offices';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

$regions = array(
	'all'                => array(
		'name'  => __( 'All Offices', 'alpha' ),
		'image' => 'all.png',
	),
	'africa'             => array(
		'name'  => __( 'Africa', 'alpha' ),
		'image' => 'africa.png',
	),
	'americas'           => array(
		'name'  => __( 'Americas', 'alpha' ),
		'image' => 'americas.png',
	),
	'asia-pacific'       => array(
		'name'  => __( 'Asia-Pacific', 'alpha' ),
		'image' => 'asia-pacific.png',
	),
	'europe-middle-east' => array(
		'name'  => __( 'Europe, Middle East & North Africa', 'alpha' ),
		'image' => 'europe-middle-east.png',
	),
);

$sites = array(
	// Africa
	0  => array(
		'name'    => __( 'Africa Regional', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'africa',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	1  => array(
		'name'    => __( 'Burundi', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'bi',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	2  => array(
		'name'    => __( 'Botswana', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'bw',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	3  => array(
		'name'    => __( 'ኢትዮጵያ / Ethiopia', 'alpha' ),
		'domain'  => 'https://ethiopia.alpha.org/',
		'flag'    => 'et',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	4  => array(
		'name'    => __( 'Ghana', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'gh',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	5  => array(
		'name'    => __( 'Indian-Ocean-Regional', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	6  => array(
		'name'    => __( 'Kenya', 'alpha' ),
		'domain'  => 'https://kenya.alpha.org/',
		'flag'    => 'ke',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	7  => array(
		'name'    => __( 'Liberia', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'lr',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	8  => array(
		'name'    => __( 'Nigeria', 'alpha' ),
		'domain'  => 'http://nigeria.alpha.org/',
		'flag'    => 'ng',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	9  => array(
		'name'    => __( 'Rwanda', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'rw',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	10 => array(
		'name'    => __( 'South Africa', 'alpha' ),
		'domain'  => 'https://southafrica.alpha.org/',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	11 => array(
		'name'    => __( 'Sierra Leone', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'sl',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	12 => array(
		'name'    => __( 'Uganda', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'ug',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	13 => array(
		'name'    => __( 'Zambia', 'alpha' ),
		'domain'  => 'http://zambia.alpha.org/',
		'flag'    => 'zm',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	14 => array(
		'name'    => __( 'Zimbabwe', 'alpha' ),
		'domain'  => 'https://africa-en.alpha.org/',
		'flag'    => 'zw',
		'regions' => array(
			0 => 'all',
			1 => 'africa',
		),
	),
	// Americas
	50 => array(
		'name'    => __( 'Argentina', 'alpha' ),
		'domain'  => 'https://argentina.alpha.org/',
		'flag'    => 'ar',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	51 => array(
		'name'    => __( 'Brasil', 'alpha' ),
		'domain'  => 'https://vemproalpha.org/',
		'flag'    => 'br',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	52 => array(
		'name'    => __( 'Canada', 'alpha' ),
		'domain'  => 'https://www.alphacanada.org/',
		'flag'    => 'ca',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	53 => array(
		'name'    => __( 'Colombia', 'alpha' ),
		'domain'  => 'https://colombia.alpha.org/',
		'flag'    => 'co',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	54 => array(
		'name'    => __( 'Costa Rica', 'alpha' ),
		'domain'  => 'https://latam.alpha.org/',
		'flag'    => 'cr',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	55 => array(
		'name'    => __( 'Latinoamérica Regional', 'alpha' ),
		'domain'  => 'https://latam.alpha.org/',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	56 => array(
		'name'    => __( 'Mexico', 'alpha' ),
		'domain'  => 'http://mexico.alpha.org/',
		'flag'    => 'mx',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	57 => array(
		'name'    => __( 'Trinidad and Tobago', 'alpha' ),
		'domain'  => 'https://latam.alpha.org/',
		'flag'    => 'tt',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	59 => array(
		'name'    => __( 'United States', 'alpha' ),
		'domain'  => 'https://alphausa.org/',
		'flag'    => 'us',
		'regions' => array(
			0 => 'all',
			1 => 'americas',
		),
	),
	// Asia-Pacific
	100 => array(
		'name'    => __( 'Australia', 'alpha' ),
		'domain'  => 'https://alpha.org.au',
		'flag'    => 'au',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	101 => array(
		'name'    => __( 'Asia-Pacific Regional', 'alpha' ),
		'domain'  => 'https://asiapacific.alpha.org/',
		'flag'    => 'alpha',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	102 => array(
		'name'    => __( 'ព្រះរាជាណាចក្រកម្ពុជា / Cambodia', 'alpha' ),
		'domain'  => 'https://cambodia.alpha.org/',
		'flag'    => 'kh',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	103 => array(
		'name'    => __( 'India', 'alpha' ),
		'domain'  => 'http://india.alpha.org/',
		'flag'    => 'in',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	104 => array(
		'name'    => __( 'Indonesia', 'alpha' ),
		'domain'  => 'https://indonesia.alpha.org/',
		'flag'    => 'id',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	105 => array(
		'name'    => __( '日本 / Japan', 'alpha' ),
		'domain'  => 'https://japan.alpha.org/',
		'flag'    => 'jp',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	106 => array(
		'name'    => __( '대한민국 / South Korea', 'alpha' ),
		'domain'  => 'https://alphakorea.org',
		'flag'    => 'kr',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	107 => array(
		'name'    => __( 'Malaysia', 'alpha' ),
		'domain'  => 'http://malaysia.alpha.org/',
		'flag'    => 'my',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	108 => array(
		'name'    => __( 'ပြည်ထောင်စုသမ္မတ မြန်မာနိုင်ငံတော် / Myanmar', 'alpha' ),
		'domain'  => 'https://asiapacific.alpha.org/',
		'flag'    => 'mm',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	109 => array(
		'name'    => __( 'New Zealand', 'alpha' ),
		'domain'  => 'http://www.alpha.org.nz',
		'flag'    => 'nz',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	110 => array(
		'name'    => __( 'Philippines', 'alpha' ),
		'domain'  => 'http://philippines.alpha.org/',
		'flag'    => 'ph',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	111 => array(
		'name'    => __( 'Singapore', 'alpha' ),
		'domain'  => 'http://singapore.alpha.org/',
		'flag'    => 'sg',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	112 => array(
		'name'    => __( '台灣 / Taiwan', 'alpha' ),
		'domain'  => 'http://taiwan.alpha.org/',
		'flag'    => 'tw',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	113 => array(
		'name'    => __( 'ไทย / Thailand', 'alpha' ),
		'domain'  => 'https://thailand.alpha.org/',
		'flag'    => 'th',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	114 => array(
		'name'    => __( 'Vietnam', 'alpha' ),
		'domain'  => 'http://vietnam.alpha.org/',
		'flag'    => 'vn',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	115 => array(
		'name'    => __( 'Hong Kong', 'alpha' ),
		'domain'  => 'https://alpha.org.hk/',
		'flag'    => 'hk',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),	
	116 => array(
		'name'    => __( 'Sri Lanka', 'alpha' ),
		'domain'  => 'https://srilanka.alpha.org/',
		'flag'    => 'lk',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
	117 => array(
		'name'    => __( 'Mongolia', 'alpha' ),
		'domain'  => 'https://mongolia.alpha.org/',
		'flag'    => 'mn',
		'regions' => array(
			0 => 'all',
			1 => 'asia-pacific',
		),
	),
// Europe and Middle East
	150 => array(
		'name'    => __( 'Österreich', 'alpha' ),
		'domain'  => 'https://alpha.at/',
		'flag'    => 'at',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	154 => array(
		'name'    => __( 'Bahrain', 'alpha' ),
		'domain'  => 'https://gulf.alpha.org/',
		'flag'    => 'bh',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	185 => array(
		'name'    => __( 'Belarus', 'alpha' ),
		'domain'  => 'mailto:alphahomeminsk@gmail.com',
		'flag'    => 'by',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	151 => array(
		'name'    => __( 'België', 'alpha' ),
		'domain'  => 'https://alphavlaanderen.be/',
		'flag'    => 'be',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	152 => array(
		'name'    => __( 'Belgique', 'alpha' ),
		'domain'  => 'https://www.parcoursalpha.be/',
		'flag'    => 'be',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	153 => array(
		'name'    => __( 'България', 'alpha' ),
		'domain'  => 'https://run.bulgaria.alpha.org/',
		'flag'    => 'bg',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),

	155 => array(
		'name'    => __( 'Česká Republika', 'alpha' ),
		'domain'  => 'https://www.kurzyalfa.cz/',
		'flag'    => 'cz',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	156 => array(
		'name'    => __( 'Danmark', 'alpha' ),
		'domain'  => 'https://danmark.alpha.org/',
		'flag'    => 'dk',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	157 => array(
		'name'    => __( 'مصر', 'alpha' ),
		'domain'  => 'https://mena.alpha.org/',
		'flag'    => 'eg',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	158 => array(
		'name'    => __( 'Eesti', 'alpha' ),
		'domain'  => 'https://run.estonia.alpha.org',
		'flag'    => 'ee',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	159 => array(
		'name'    => __( 'Suomi', 'alpha' ),
		'domain'  => 'https://kokeilealfaa.fi/',
		'flag'    => 'fi',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	160 => array(
		'name'    => __( 'France', 'alpha' ),
		'domain'  => 'https://www.parcoursalpha.fr/',
		'flag'    => 'fr',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	// 161 => array(
	// 	'name'    => __( 'Gulf ', 'alpha' ),
	// 	'domain'  => 'https://gulf.alpha.org',
	// 	'flag'    => 'alpha',
	// 	'regions' => array(
	// 		0 => 'all',
	// 		1 => 'europe-middle-east',
	// 	),
	// ),
	162 => array(
		'name'    => __( 'Deutschland', 'alpha' ),
		'domain'  => 'https://alphakurs.de/',
		'flag'    => 'de',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	163 => array(
		'name'    => __( 'Magyarország', 'alpha' ),
		'domain'  => 'https://alpha.org.hu/',
		'flag'    => 'hu',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	186 => array(
		'name'    => __( 'Iceland', 'alpha' ),
		'domain'  => 'mailto:ragnar@sik.is',
		'flag'    => 'is',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	187 => array(
		'name'    => __( 'Iraq', 'alpha' ),
		'domain'  => 'https://alpha-mena.org',
		'flag'    => 'iq',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	164 => array(
		'name'    => __( 'Ireland', 'alpha' ),
		'domain'  => 'https://alphaireland.org/',
		'flag'    => 'ie',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	165=> array(
		'name'    => __( 'Italia', 'alpha' ),
		'domain'  => 'https://italia.alpha.org/',
		'flag'    => 'it',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	166=> array(
		'name'    => __( 'יִשְׂרָאֵל', 'alpha' ),
		'domain'  => 'https://israel.alpha.org/',
		'flag'    => 'il',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	168 => array(
		'name'    => __( 'Jordan ', 'alpha' ),
		'domain'  => 'https://alpha-mena.org',
		'flag'    => 'jo',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	188 => array(
		'name'    => __( 'Kuwait ', 'alpha' ),
		'domain'  => 'https://gulf.alpha.org',
		'flag'    => 'kw',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	189 => array(
		'name'    => __( 'Latvija', 'alpha' ),
		'domain'  => 'https://alfakurss.lv',
		'flag'    => 'lv',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	190 => array(
		'name'    => __( 'Lebanon', 'alpha' ),
		'domain'  => 'https://alpha-mena.org',
		'flag'    => 'lb',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	169 => array(
		'name'    => __( 'Lietuva', 'alpha' ),
		'domain'  => 'https://www.alfakursai.lt',
		'flag'    => 'lt',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	191 => array(
		'name'    => __( 'Malta', 'alpha' ),
		'domain'  => 'https://www.alpha.org.mt',
		'flag'    => 'mt',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	170 => array(
		'name'    => __( 'Nederland', 'alpha' ),
		'domain'  => 'https://alphanederland.org/',
		'flag'    => 'nl',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	171 => array(
		'name'    => __( 'Norge', 'alpha' ),
		'domain'  => 'https://norge.alpha.org/',
		'flag'    => 'no',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	192 => array(
		'name'    => __( 'Oman', 'alpha' ),
		'domain'  => 'https://gulf.alpha.org',
		'flag'    => 'om',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	172 => array(
		'name'    => __( 'Polska', 'alpha' ),
		'domain'  => 'https://polska.alpha.org/',
		'flag'    => 'pl',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	173 => array(
		'name'    => __( 'Portugal', 'alpha' ),
		'domain'  => 'https://portugal.alpha.org/',
		'flag'    => 'pt',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	174 => array(
		'name'    => __( 'Romania', 'alpha' ),
		'domain'  => 'https://alpharomania.org/',
		'flag'    => 'ro',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	175 => array(
		'name'    => __( 'Россия', 'alpha' ),
		'domain'  => 'https://alphacourse.ru/',
		'flag'    => 'ru',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	176 => array(
		'name'    => __( 'Qatar', 'alpha' ),
		'domain'  => 'https://gulf.alpha.org',
		'flag'    => 'qa',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	176 => array(
		'name'    => __( 'España', 'alpha' ),
		'domain'  => 'https://spain.alpha.org/',
		'flag'    => 'es',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	177 => array(
		'name'    => __( 'Suisse', 'alpha' ),
		'domain'  => 'https://fr.alphalive.ch/',
		'flag'    => 'ch',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	178 => array(
		'name'    => __( 'Schweiz', 'alpha' ),
		'domain'  => 'https://de.alphalive.ch/',
		'flag'    => 'ch',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),	
	179 => array(
		'name'    => __( 'Sverige', 'alpha' ),
		'domain'  => 'https://sverige.alpha.org/',
		'flag'    => 'se',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	180 => array(
		'name'    => __( 'Türkiye', 'alpha' ),
		'domain'  => 'https://turkey.alpha.org/',
		'flag'    => 'tr',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	181 => array(
		'name'    => __( 'Україна', 'alpha' ),
		'domain'  => 'https://alpha.org.ua/',
		'flag'    => 'ua',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	194 => array(
		'name'    => __( 'United Arab Emirates', 'alpha' ),
		'domain'  => 'https://gulf.alpha.org',
		'flag'    => 'ae',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	182 => array(
		'name'    => __( 'United Kingdom', 'alpha' ),
		'domain'  => 'https://alpha.org.uk/',
		'flag'    => 'gb',
		'regions' => array(
			0 => 'all',
			1 => 'europe-middle-east',
		),
	),
	// 183 => array(
	// 	'name'    => __( 'Europe ', 'alpha' ),
	// 	'domain'  => 'https://run.europe.alpha.org',
	// 	'flag'    => 'alpha',
	// 	'regions' => array(
	// 		0 => 'all',
	// 		1 => 'europe-middle-east',

	// 	),
	// ),
	// 184 => array(
	// 	'name'    => __( 'Middle East & North Africa ', 'alpha' ),
	// 	'domain'  => 'https://run.mena.alpha.org',
	// 	'flag'    => 'alpha',
	// 	'regions' => array(
	// 		0 => 'all',
	// 		1 => 'europe-middle-east',
	// 	),
	// ),

	
);

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="alpha-offices-tabs alpha-tabs">
		<ul class="alpha-offices-nav alpha-tabs-nav">
			<?php foreach ( $regions as $key => $region ) : ?>
				<li>
					<a data-id="<?php echo esc_attr( $key ); ?>" href="#">
						<img src="<?php echo get_template_directory_uri() . '/country-flags/' . $key .'.png'; ?>" alt="" />
						<span><?php echo esc_html( $region['name'] ); ?></span>
					</a>
				</li>
			<?php endforeach; ?>
			<div class="indicator"></div>
		</ul>

		<?php foreach ( $regions as $region_key => $region ) : ?>
			<div class="alpha-offices-tab alpha-tabs-single" data-id="<?php echo esc_attr( $region_key ); ?>">
				<?php foreach ( $sites as $site ) : ?>
					<?php if ( in_array( $region_key, $site['regions'] ) ) : ?>
						<a href="<?php echo esc_url( $site['domain'] ); ?>" class="alpha-offices-single">
							<?php alpha_flag_image( $site['flag'] ); ?>
							<span class="alpha-offices-single-name"><?php echo esc_html( $site['name'] ); ?></span>
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	</div>
</section>
