<?php

class erLhcoreClassExtensionSinglesignon
{

    private $settings = array();

    public function __construct()
    {}

    public function run()
    {
        $this->registerAutoload();
        
        $dispatcher = erLhcoreClassChatEventDispatcher::getInstance();
        
        $this->settings = include ('extension/singlesignon/settings/settings.ini.php');
    }
    
    public function registerAutoload()
    {
        spl_autoload_register(array($this, 'autoload'), true, false);
    }
    /**
     * Extension autoload
     * */
    public function autoload($className)
    {
        $classes = array(           
            'erLhcoreClassSingleSignOn' => 'extension/singlesignon/classes/lhsinglesingon.php'
        ); 
         
        if (key_exists($className, $classes)) {
            include_once $classes[$className];
        }    
    }
}