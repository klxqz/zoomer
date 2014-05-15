<?php

/**
 * @author wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopZoomerPlugin extends shopPlugin {

    protected static $plugin;

    public function __construct($info) {
        parent::__construct($info);
        if (!self::$plugin) {
            self::$plugin = &$this;
        }
    }

    protected static function getThisPlugin() {
        if (self::$plugin) {
            return self::$plugin;
        } else {
            return wa()->getPlugin('zoomer');
        }
    }

    public function frontendProduct($product) {
        if ($this->getSettings('default_output')) {
            $html = self::display();
            return array('block' => $html);
        }
    }

    public static function display() {
        $plugin = self::getThisPlugin();
        if ($plugin->getSettings('status')) {
            $tmp_path = 'plugins/zoomer/templates/FrontendProduct.html';
            $view = wa()->getView();
            $view->assign('settings', $plugin->getSettings());
            $template_path = wa()->getDataPath($tmp_path, false, 'shop', true);
            if (!file_exists($template_path)) {
                $template_path = wa()->getAppPath($tmp_path, 'shop');
            }
            return $html = $view->fetch($template_path);
        }
    }

}
