<?php defined('SYSPATH') or die('No direct script access.');

 class Controller_Index extends Controller_Template {
    protected $title;
    protected $content;
    protected $description;
    protected $author;
    protected $keywords;
    protected $styles = array();
    protected $scripts = array();
    protected $icons = array();
    protected $body = 'layouts/body';

    public function before() {

        $this->styles[] = 'bootstrap.css';
        $this->styles[] = 'bootstrap-responsive.css';
        $this->styles[] = 'style.css';


        $this->scripts[] = 'vendor/modernizr.min.js';
        $this->scripts[] = 'vendor/jquery.min.js';
        $this->scripts[] = 'vendor/jquery-ui.min.js';
        $this->scripts[] = 'vendor/bootstrap.min.js';
        $this->scripts[] = 'plugins.js';
        $this->scripts[] = 'main.js';

        $this->icons[] = array('href' => 'apple-touch-icon-144x144-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144'));
        $this->icons[] = array('href' => 'apple-touch-icon-114x114-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114'));
        $this->icons[] = array('href' => 'apple-touch-icon-72x72-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72'));
        $this->icons[] = array('href' => 'apple-touch-icon-57x57-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '57x57'));
        $this->icons[] = array('href' => 'apple-touch-icon-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed'));
        $this->icons[] = array('href' => 'apple-touch-icon.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed'));
        $this->icons[] = array('href' => 'favicon.ico', 'attr'=>array('rel' => 'shortcut icon'));


        parent::before();
    }

    public function action_index() {
        $this->content = 'Hello World';
    }

    public function after() {

        if ($this->auto_render) {
            $body = View::factory($this->body);
            $body->content = $this->content;
            $this->template->title = $this->title;
            $this->template->body = $body->render();
            $this->template->description = $this->description;
            $this->template->author = $this->author;
            $this->template->keywords = is_array($this->keywords) ? implode(',', $this->keywords) : $this->keywords;
            $this->template->styles = $this->styles;
            $this->template->scripts = $this->scripts;
            $this->template->icons = $this->icons;
        } else {
            $this->response->body($this->content);
        }
        parent::after();
    }
}

// End Index
