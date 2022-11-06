<?php
//After setup theme remove all post type action
add_action('after_setup_theme', 'removeParentPostTypeAction');
function removeParentPostTypeAction() {
remove_action('init', 'imic_event_register');
remove_action('init', 'event_registrants');
remove_action('init', 'imic_gallery_register');
remove_action('init', 'imic_team_register');
remove_action('init', 'testimonial_register');
}
//include all post type with mode rewrite enable
require_once('custom-post-types/event-type.php');
require_once('custom-post-types/gallery-type.php');
require_once('custom-post-types/team-type.php');
require_once('custom-post-types/testimonial-type.php');
require_once('custom-post-types/imic-post-type-permalinks.php');
?>