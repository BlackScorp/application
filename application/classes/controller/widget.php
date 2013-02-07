<?php defined('SYSPATH') or die('No direct script access.');
/**
 * See Dummyforms.php
 */
class Controller_Widget extends Controller_Index {
   
    public function before() {
        //Controller not Exists as initial request
        if($this->request->is_initial()) throw new HTTP_Exception_404;
        
        $this->auto_render = FALSE;
        parent::before();
    }
}

// End Widget
