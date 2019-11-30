<?php
//Exit if accessed directly
if (! defined('ABSPATH')) {
    exit;// Exit if accessed directly
}
//Create JSON save point
  add_filter('acf/settings/save_json', 'acf_json_save_point');
    function acf_json_save_point($path)
    {
        $path = plugin_dir_path(__FILE__) . '../acf-json';
        return $path;
    }
//Create JSON load point
add_filter('acf/settings/load_json', 'acf_json_load_point');
function acf_json_load_point($paths)
{
    $paths[] = plugin_dir_path(__FILE__) . '../acf-json';
    return $paths;
}

?>