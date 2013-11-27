<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
class shopZoomerPluginSettingsAction extends waViewAction {

    protected $tmp_path = 'plugins/zoomer/templates/FrontendProduct.html';

    public function execute() {

        $app_settings_model = new waAppSettingsModel();
        $settings = $app_settings_model->get(array('shop', 'zoomer'));

        $change_tpl = false;
        $template_path = wa()->getDataPath($this->tmp_path, false, 'shop', true);
        if (file_exists($template_path)) {
            $change_tpl = true;
        } else {
            $template_path = wa()->getAppPath($this->tmp_path, 'shop');
        }

        $template = file_get_contents($template_path);

        $this->view->assign('change_tpl', $change_tpl);
        $this->view->assign('settings', $settings);
        $this->view->assign('template', $template);
    }

}
