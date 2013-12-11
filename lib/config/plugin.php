<?php

/**
 * @author Коробов Николай wa-plugins.ru <support@wa-plugins.ru>
 * @link http://wa-plugins.ru/
 */
return array(
    'name' => 'Лупа',
    'description' => 'Эффект лупы при увеличение изображения',
    'vendor' => '985310',
    'version' => '1.0.1',
    'img' => 'img/zoomer.png',
    'shop_settings' => true,
    'frontend' => true,
    'handlers' => array(
        'frontend_product' => 'frontendProduct',
    ),
);
//EOF
