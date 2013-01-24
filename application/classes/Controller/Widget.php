<?php defined('SYSPATH') or die('No direct script access.');
/**
 * See Dummyforms.php
 */
class Controller_Widget extends Controller_Index {
   
    public function before() {
        $this->auto_render = FALSE;
        parent::before();
    }
}

// End Widget
