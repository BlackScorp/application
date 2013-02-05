<?php defined('SYSPATH') or die('No direct script access.');
/**
 * 
 */
class Controller_Index extends Controller_Template {
    /**
     * page title
     * @var String $title 
     */
    protected $title;
    
    /**
     * page content
     * @var String $content 
     */
    protected $content;
    
    /**
     * page description
     * @var String $description 
     */
    protected $description;
    
    /**
     * author
     * @var String $author 
     */
    protected $author;
    
    /**
     * komma seperated keywords
     * @var String $keywords 
     */
    protected $keywords;
    
    /**
     * css files 
     * @example <br/> <b>Extend Style</b><br/>
     * $this->styles[]='folder/foo.css';<br/>
     * <b>Replace Style <b/><br/>
     * $this->styles['style'] = 'custom.css';
     * @var Array $styles 
     */
    protected $styles = array();
    
    /**
     * javascript files 
     * @example <br/> <b>Extend Scripts</b><br/>
     * $this->scripts[]='folder/foo.js';<br/>
     * <b>Replace Script <b/><br/>
     * $this->styles['jquery'] = 'jquery.1.0.js';
     * @var Array $scripts 
     */
    protected $scripts = array();
    
    /**
     * icon files 
     * @example <br/> <b>Extend Icons</b><br/>
     * $this->icons[]=array('href'=>'folder/image.png');<br/>
     * <b>Replace Icons <b/><br/>
     * $this->icons['favicon'] =  array('href' => 'custom.ico', 'attr'=>array('rel' => 'shortcut icon'));
     * @var Array $icons 
     */
    protected $icons = array();
    
    /**
     * less files 
     * @example <br/> <b>Extend Less </b><br/>
     * $this->less[]='folder/example.less';<br/>
     * <b>Replace Less <b/><br/>
     * $this->styles['less'] = 'custom-bootstrap.less';
     * @var Array $less 
     */
    protected $less = array();
    
    /**
     * body view with $content can be changed
     * @var String $body
     */
    protected $body = 'layouts/body';
    /**
     * Global Messages
     * @example 
     * //validation exception
     * try{
     * $user->save();
     * }catch(ORM_Validation_Exception $e){
     * $this->alert['login_error']= $e->errors();
     * }
     * //usage in any view
     * 
     * if(Arr::get($alert,'login_error')){
     *  echo Debug::vars(Arr::path($alert,'login_error.username');
     * }
     * @var Array $alert 
     */
    protected $alert = array();
    
    public function before() {
        
      
        $this->scripts['modernizt'] = 'vendor/modernizr.min.js';
        $this->scripts['jquery'] = 'vendor/jquery.min.js';
        $this->scripts['jquery-ui'] = 'vendor/jquery-ui.min.js';
        $this->scripts['bootstrap'] = 'vendor/bootstrap.min.js';
        $this->scripts['plugins'] = 'plugins.js';
        $this->scripts['main'] = 'main.js';
        
        if (Kohana::$environment === Kohana::DEVELOPMENT)
        {
            $this->scripts['less'] = 'vendor/less.min.js';
            $this->less['bootstrap'] = 'bootstrap.less';
        }
        elseif (Kohana::$environment === Kohana::PRODUCTION)
        {
            $this->styles['bootstrap'] = 'bootstrap.css';
            $this->styles['bootstrap-responsive'] = 'bootstrap-responsive.css';
            $this->styles['style'] = 'style.css';
        }
  

        $this->icons['icon-144-precompressed'] = array('href' => 'apple-touch-icon-144x144-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '144x144'));
        $this->icons['icon-114-precompressed'] = array('href' => 'apple-touch-icon-114x114-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '114x114'));
        $this->icons['icon-72-precompressed'] = array('href' => 'apple-touch-icon-72x72-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '72x72'));
        $this->icons['icon-57-precompressed'] = array('href' => 'apple-touch-icon-57x57-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed', 'sizes' => '57x57'));
        $this->icons['icon-precompressed'] = array('href' => 'apple-touch-icon-precomposed.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed'));
        $this->icons['icon'] = array('href' => 'apple-touch-icon.png', 'attr'=>array('rel' => 'apple-touch-icon-precomposed'));
        $this->icons['favicon'] = array('href' => 'favicon.ico', 'attr'=>array('rel' => 'shortcut icon'));


        parent::before();
    }

    public function action_index() {
        $this->content = 'Hello World';
    }

    public function after() {
        View::set_global('alert', $this->alert);
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
            $this->template->less = $this->less;
        } else {
            $this->response->body($this->content);
        }
        parent::after();
    }
}

// End Index
