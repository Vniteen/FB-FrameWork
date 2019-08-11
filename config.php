<?php

// system configurations
function get_config( $key ){

$config = [

	// default view
	'view' => [
		'header' => 'default_header',
		'footer' => 'default_footer'
	],
	//System URL (onlive replace with domain URL)
	'sys_url' =>  'http://localhost/mytools/'

];

	if( is_array( $key ) ){

		$config_value = $config;
		$i = 0;
		while( is_array( $config_value ) and array_key_exists($i, $key) ){
			
			if( array_key_exists( $key[ $i ], $config_value ) ){
				
				$config_value = $config_value[ $key[ $i++ ] ];
			
			} else {
				die( 'Invalid config key :' . $key[ $i ]);
			}
		}
		return $config_value;

	}
	return $config[ $key ];
}
?>