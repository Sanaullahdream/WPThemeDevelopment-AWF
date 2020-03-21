<?php 
/*
Register Sidebar and Widgetized Areas

*/

function awf_widget_areas(){



	register_sidebar(array(
		'name' => __('Footer 1', 'awf'),
		'id' => 'footer-1',
		'before_widget' => '<div class="col-md-4 col-sm-5">
                             <div class="footer-text one">', 
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',


	));

	register_sidebar(array(
		'name' => __('Footer 2', 'awf'),
		'id' => 'footer-2',
		'before_widget' => '<idv class="footer-text two">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',


	));

	register_sidebar(array(
		'name' => __('Footer 3', 'awf'),
		'id' => 'footer-3',
		'before_widget' => '<div class="footer-charity-text">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',


	));


	register_sidebar(array(
		'name' => __('Footer 4', 'awf'),
		'id' => 'footer-4',
		'before_widget' => '<div class="footer-charity-text">', 
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',

	));


		// Custom Post type Register
	
	register_post_type('custompost', array(
		'labels' => array(
			'name' => 'Custom Post',
			'add_new_item' => 'Add Your Custom Post',

		),
		'public' => true,
		'sections' => array ('title', 'editor', 'thumbnail'),

	));
}

add_action('widgets_init', 'awf_widget_areas');

?>
