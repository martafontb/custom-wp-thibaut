<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package custom-wpgulp
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function custom_wpgulp_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'custom_wpgulp_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function custom_wpgulp_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'custom_wpgulp_pingback_header' );


// declare a function and pass the $content as an argument
function insert_table_of_contents($content) {

	if (is_single($array)) {
		return $content;
	}

	// regex to match all HTML heading elements 2-6
	$regex = "~(<h([2-6]))(.*?>(.*)<\/h[2-6]>)~";

	// preg_match_all() searches the $content using $regex patterns and
	// returns the results to $heading_results[]
	//
	// $heading_results[0][] contains all matches
	// $heading_results[1][] contains '<h2-6'
	// $heading_results[2][] contains '2-6'
	// $heading_results[3][] contians '>heading title</h2-6>
	// $heading_results[4][] title
	preg_match_all($regex, $content, $heading_results);

	// return $content if less than 3 heading tags exist in the $content
	$num_match = count($heading_results[0]);
	if($num_match < 3) {
		return $content;
	}

	// declare local variable
	$link_list = "";
	// loop through $heading_results
	for ($i = 0; $i < $num_match; ++ $i) {

    // rebuild heading elemens to have anchors
    $new_heading = $heading_results[1][$i] . " id='$i' " . $heading_results[3][$i];

    // find original heading elements that don't have anchors
    $old_heading = $heading_results[0][$i];

    // search the $content for $old_heading and replace with $new_heading
	$content = str_replace($old_heading, $new_heading, $content);

    // generate links for each heading element
    // each link points to an anchor
    $link_list .= "<li class='table-of-content-list heading-level-" . $heading_results[2][$i] . "'><a href='#$i'>" . $heading_results[4][$i] . "</a></li>";
}

	// opening nav tag
	$start_nav = "<nav class='table-of-content'>";
	// closing nav tag
	$end_nav = "</nav>";
	// title
	$title = "<h2>Table of Contents</h2>";

	// wrap links in '<ul>' element
	$link_list = "<ul>" . $link_list . "</ul>";

	// piece together the table of contents
	$table_of_contents = $start_nav . $title . $link_list . $end_nav;

	// if $fixed_location is true and
	// $comment_found is false
	// insert the table of contents at a fixed location
	if($fixed_location && !$comment_found) {
		// location of first paragraph
		$first_paragraph = strpos($content, '</p>', 0) + 4;
		// location of second paragraph
		$second_paragraph = strpos($content, '</p>', $first_p_pos);
		// insert $table_of_contents after $second_paragraph
	return substr_replace($content, $table_of_contents, $second_paragraph + 4 , 0);
	}
	// if $fixed_location is false and
	// $comment_found is true
	else {
		// replace $html_comment with the $table_of_contents
		return str_replace($html_comment, $table_of_contents, $content);
	}
} 
// pass the function to the content add_filter hook
add_filter('the_content', 'insert_table_of_contents');

