<?php

/**
 * @author Коробонв Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
$plugin_id = array('shop', 'zoomer');
$app_settings_model = new waAppSettingsModel();
$app_settings_model->set($plugin_id, 'status', '1');
$app_settings_model->set($plugin_id, 'default_output', '1');
$app_settings_model->set($plugin_id, 'hide', '1');
$app_settings_model->set($plugin_id, 'large_size', '1000');
$app_settings_model->set($plugin_id, 'small_size', '300');
$app_settings_model->set($plugin_id, 'thumb_size', '100x100');
$app_settings_model->set($plugin_id, 'zoomType', 'standard');
$app_settings_model->set($plugin_id, 'zoomWidth', '300');
$app_settings_model->set($plugin_id, 'zoomHeight', '300');
$app_settings_model->set($plugin_id, 'xOffset', '10');
$app_settings_model->set($plugin_id, 'position', 'right');
$app_settings_model->set($plugin_id, 'title', 'true');
$app_settings_model->set($plugin_id, 'lens', 'true');
$app_settings_model->set($plugin_id, 'imageOpacity', '0.4');
