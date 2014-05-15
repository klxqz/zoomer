<?php

/**
 * @author wa-plugins.ru <support@wa-plugins.ru>
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
$app_settings_model->set($plugin_id, 'tint', 'false');
$app_settings_model->set($plugin_id, 'tintColour', '#EEEEEE');
$app_settings_model->set($plugin_id, 'tintOpacity', '0.5');
$app_settings_model->set($plugin_id, 'lightbox', '1');
$app_settings_model->set($plugin_id, 'fancybox', '1');
$app_settings_model->set($plugin_id, 'zoomType', 'window');
$app_settings_model->set($plugin_id, 'lensShape', 'square');
$app_settings_model->set($plugin_id, 'lensSize', '200');
$app_settings_model->set($plugin_id, 'zoomWindowWidth', '300');
$app_settings_model->set($plugin_id, 'zoomWindowHeight', '300');
$app_settings_model->set($plugin_id, 'scrollZoom', 'false');
$app_settings_model->set($plugin_id, 'zoomWindowPosition', '1');
$app_settings_model->set($plugin_id, 'zoomWindowOffetx', '0');
$app_settings_model->set($plugin_id, 'zoomWindowOffety', '0');
$app_settings_model->set($plugin_id, 'borderSize', '1');
$app_settings_model->set($plugin_id, 'borderColour', '#888888');
