<?php

function load_style_script(){

    wp_enqueue_style('style', get_template_directory_uri().'/style.css', ['normalize','bootstrap']);
    
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');

    wp_enqueue_style('bootstrapThemes', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css');
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('bootstrap-datetimepicker-css', get_template_directory_uri().'/css/bootstrap-datetimepicker.min.css');

    wp_enqueue_script( 'jQuery_1-11-1', get_template_directory_uri().'/js/jquery-1.11.1.min.js');
    //wp_enqueue_script( 'jQuery_1-11-3', get_template_directory_uri().'/js/jquery-1.11.3.min.js');
    wp_enqueue_script( 'moment-with-locales', get_template_directory_uri().'/js/moment-with-locales.min.js');
    wp_enqueue_script( 'bootstrapJs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
    wp_enqueue_script( 'bootstrap-datetimepicker-js', get_template_directory_uri().'/js/bootstrap-datetimepicker.min.js');

    wp_enqueue_style( 'jquery.jdigiclock-style', get_template_directory_uri() . '/css/jquery.jdigiclock.css');
    //wp_enqueue_script('jquery', get_template_directory_uri().'../../../wp-includes/js/jquery/jquery.js');
    wp_enqueue_script( 'json2', get_template_directory_uri().'../../../wp-includes/js/json2.min.js');
    wp_enqueue_script( 'digiclock', get_template_directory_uri().'/js/jquery.jdigiclock.js');

    wp_enqueue_script( 'jsCalendar', 'http://rche.ru/examples/cal.js');

    wp_enqueue_script('myScript', get_template_directory_uri().'/js/myScript.js');
}

add_action('wp_enqueue_scripts','load_style_script');

function enqueue_scripts () {
    wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

/*подключаем навигацию*/
if (function_exists('add_theme_support')) {
    register_nav_menu('menu', 'Меню');
//    add_theme_support('menus');
}

// numbered pagination
function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<div class=\"pagination\"><span>Страница " . $paged . " из " . $pages . "</span>";
        if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link(1) .'#newsPage'. "'>&laquo; Первая</a>";
        if ($paged > 1 && $showitems < $pages) echo "<a href='" . get_pagenum_link($paged - 1) .'#newsPage'. "'>&lsaquo; Предыдущая</a>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<span class=\"current\">" . $i . "</span>" : "<a href='" . get_pagenum_link($i) .'#newsPage'. "' class=\"inactive\">" . $i . "</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<a href=\"" . get_pagenum_link($paged + 1) .'#newsPage'. "\">Следующая &rsaquo;</a>";
        if ($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages) echo "<a href='" . get_pagenum_link($pages) .'#newsPage'. "'>Последняя &raquo;</a>";
        echo "</div>\n";
    }
}


//================================

add_action( 'wpcf7_init', 'wpcf7_add_shortcode_calendar' );

function wpcf7_add_shortcode_calendar() {
	wpcf7_add_shortcode(
		array( 'calendar', 'calendar*'),
		'wpcf7_calendar_shortcode_handler', true );
}


function wpcf7_calendar_shortcode_handler( $tag ) {

	
	$tag2 = new WPCF7_Shortcode( $tag );

	if ( empty( $tag2->name ) )
		return '';

	$validation_error = wpcf7_get_validation_error( $tag->name );

	$class = wpcf7_form_controls_class( $tag->type, 'wpcf7-calendar' );
	
	$class .= " wpcf7-form-control wpcf7-text form-control";

	if ( in_array( $tag->basetype, array( 'calendar') ) )
		$class .= ' wpcf7-validates-as-' . $tag->basetype;

	if ( $validation_error )
		$class .= ' wpcf7-not-valid';
    
	$atts = array();

	$atts['class'] = $tag2->get_class_option( $class );
	
	$atts['id'] = $tag2->get_id_option();

	if ( $tag2->is_required() )
		$atts['aria-required'] = 'true';

	$atts['aria-invalid'] = $validation_error ? 'true' : 'false';

	$value = (string) reset( $tag2->values );

	$atts['name'] = $tag2->name;
	
	$atts = wpcf7_format_atts( $atts ); 


	$html = sprintf(
		'<div class="input-group date wpcf7-form-control-wrap start-1 %1$s" >
		
		<input type="text" %2$s size="40" class="wpcf7-form-control wpcf7-text form-control"/>
		<span class="input-group-addon">
		       <span class="glyphicon glyphicon-calendar"></span>
		</span>
		
		</div>

		<span class="wpcf7-form-control-wrap %1$s">
		%3$s
	    </span>',
		sanitize_html_class( $tag2->name ),$atts,$validation_error);

	
	return $html;
}


// VALIDATION =============================================================
add_filter( 'wpcf7_validate_calendar*', 'wpcf7_calendar_validation_filter', 10, 2 );

function wpcf7_calendar_validation_filter( $result, $tag ) {
	
	
	$tag = new WPCF7_Shortcode( $tag );

	$name = $tag->name;

	$value = isset( $_POST[$name] )
		? trim( wp_unslash( strtr( (string) $_POST[$name], "\n", " " ) ) )
		: '';
		

	
		if ( $tag->is_required() && '' == $value ) {
			$result->invalidate( $tag, wpcf7_get_message( 'invalid_required' ) );
		} 
	

	return $result;
}

?>
