<?php

/**
 * @author wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Лупа',
    'description' => 'Эффект лупы при увеличение изображения',
    'vendor' => '985310',
    'version' => '2.0.2',
    'img' => 'img/zoomer.png',
    'shop_settings' => true,
    'frontend' => true,
    'handlers' => array(
        'frontend_product' => 'frontendProduct',
    ),
);
//EOF
