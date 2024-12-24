
add_action('wo-footer', 'corejs');
function corejs () {
  wp_enqueue_script('name', get_template_directory_uri() .'/core.js')
}
