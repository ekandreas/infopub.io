<?php
namespace Infopub;

class Assets
{
    public static function get($file)
    {
        return get_stylesheet_directory_uri().'/dist/'.$file;
    }

    public static function enqueueScripts()
    {
        $version = time();
        if (!WP_DEBUG) {
            $theme = wp_get_theme();
            $version = $theme->version;
        }

        wp_enqueue_style('all-css', Assets::get('css/all.css'), [], $version);
        wp_enqueue_script('all-js', Assets::get('js/all.js'), [], $version, true);

        $data = [
            'waiting_message' => __('Please, wait for response...', 'newsflow'),
            'ajax_url'        => admin_url('admin-ajax.php'),
            'nonce'           => wp_create_nonce('gatekeeper'),
        ];
        wp_localize_script('all-js', 'wpdata', $data);
    }
}
