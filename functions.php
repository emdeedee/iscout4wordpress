<?php if ( function_exists('register_sidebar') ) 
{     
register_sidebar(array('name' => 'Sidebar Top','before_widget' => '','after_widget' => '','before_title' => '<h3 class="title">','after_title' => '</h3>'));      
register_sidebar(array('name' => 'Sidebar Left','before_widget' => '','after_widget' => '','before_title' => '<h3 class="title">','after_title' => '</h3>')); 
register_sidebar(array('name' => 'Sidebar Right','before_widget' => '','after_widget' => '','before_title' => '<h3 class="title">','after_title' => '</h3>'));   
register_sidebar(array('name' => 'Sidebar Bottom','before_widget' => '','after_widget' => '','before_title' => '<h3 class="title">','after_title' => '</h3>'));    
register_sidebar(array('name' => 'Main Left','before_widget' => '','after_widget' => '','before_title' => '<h3 class="title">','after_title' => '</h3>'));     
register_sidebar(array('name' => 'Main Center','before_widget' => '','after_widget' => '','before_title' => '<h3 class="title">','after_title' => '</h3>'));
register_sidebar(array('name' => 'Main Right','before_widget' => '','after_widget' => '','before_title' => '<h3 class="title">','after_title' => '</h3>')); 
register_sidebar(array('name' => 'Main Right2','before_widget' => '','after_widget' => '','before_title' => '<h3 class="title">','after_title' => '</h3>'));           
} 


remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_trim_excerpt');

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'custom_trim_excerpt');

function custom_trim_excerpt($text) { // Fakes an excerpt if needed
global $post;
	if ( '' == $text ) {
		$text = get_the_content('');

		$text = strip_shortcodes( $text );

		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = strip_tags($text);
		$excerpt_length = apply_filters('excerpt_length', 90);
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words) > $excerpt_length) {
			array_pop($words);
			array_push($words, '...');
			$text = implode(' ', $words);
		}
	}
	return $text;
}


?>
<?php 
function the_slider_limit($max_char, $more_link_text = '(more...)', $stripteaser = 0, $more_file = '') {
    $slide = get_the_content($more_link_text, $stripteaser, $more_file);
    $slide = apply_filters('the_content', $slide);
    $slide = str_replace(']]>', ']]&gt;', $slide);
    $slide = strip_tags($slide);

   if (strlen($_GET['p']) > 0) {
      echo $slide;
   }
   else if ((strlen($slide)>$max_char) && ($espacio = strpos($slide, " ", $max_char ))) {
        $slide = substr($slide, 0, $espacio);
        $slide = $slide;
        echo $slide;
        echo "...";
   }
   else {
      echo $slide;
   }
}
function new_excerpt_more($more) {
return '<a href="'. get_permalink($post->ID) . '">' . '<br/> read more..' . '</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
?>

<?php
add_filter('loginout','loginout_text_change');
function loginout_text_change($text) {
$login_text_before = 'Log in';
$login_text_after = 'Member sign-in';

$logout_text_before = 'Log out';
$logout_text_after = 'Member sign-out';

$text = str_replace($login_text_before, $login_text_after ,$text);
$text = str_replace($logout_text_before, $logout_text_after ,$text);
return $text;
}
?>