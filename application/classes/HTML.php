<?php defined('SYSPATH') or die('No direct script access.');

 class HTML extends Kohana_HTML {
     public static function icon($file, array $attributes = NULL, $protocol = NULL, $index = FALSE) {
        if (strpos($file, '://') === FALSE) {
            // Add the base URL
            $file = URL::site($file, $protocol, $index);
        }

        // Set the icon link
        $attributes['href'] = $file;

        // Set the icon rel
        $attributes['rel'] = empty($attributes['rel']) ? 'shortcut icon' : $attributes['rel'];
        return '<link' . HTML::attributes($attributes) . ' />';
    }
 }