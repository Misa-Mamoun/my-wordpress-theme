<?php
if ( have_comments() ) :
    wp_list_comments( array(
        'avatar_size' => 64, 
        'style'       => 'ul',
        'short_ping'  => true,
        'callback'    => 'custom_comments',
    ) );
endif;

<?php
if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : 
    the_comments_pagination( array(
        'prev_text' => '&larr; Older Comments',
        'next_text' => 'Newer Comments &rarr;',
    ) );
endif;
?>


?>
