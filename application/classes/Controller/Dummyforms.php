<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Example Form Widget, call in Action
 * 
 * $view->login_form = Request::factory('Dummyforms/login')->execute();
 * 
 * or directly in view 
 * 
 * <?= Request::factory('Dummyforms/login')->execute(); ?>
 */
class Controller_Dummyforms extends Controller_Widget {
   
 

    public function action_login() {
        $view = View::factory('login');
        
        $this->content = $view->render();
    }


}

// End Dummy
