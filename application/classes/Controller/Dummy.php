<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dummy extends Controller_Index {
   
    public function before() {
        parent::before();
    }

    public function action_index() {
        $this->content = 'Hello Dummy';
    }

    public function after() {
        parent::after();
    }
}

// End Dummy
