<?php

class shopZoomerPlugin extends shopPlugin {

    public function frontendProduct($product) {        
        $tmp_path = 'plugins/zoomer/templates/FrontendProduct.html';
        $view = wa()->getView();
        $view->assign('settings', $this->getSettings());
        $template_path = wa()->getDataPath($tmp_path, false, 'shop', true);
        if (!file_exists($template_path)) {
            $template_path = wa()->getAppPath($tmp_path, 'shop');
        }

        $html = $view->fetch($template_path);
        return array('block' => $html);
    }

}
