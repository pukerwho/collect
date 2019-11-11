<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( 'Слайдер', array(
        Field::make( 'complex', 'crb_main_sliders', 'Главный слайдер' )
                ->add_fields( array(
            Field::make( 'image', 'crb_main_slider_img', 'Картинка' )->set_value_type( 'url'),
                Field::make( 'text', 'crb_main_slider_title', 'Заголовок' ),
            Field::make( 'text', 'crb_main_slider_subtitle', 'Подзаголовок' ),
            Field::make( 'select', 'crb_main_slider_position', 'Расположение' )->set_options( array(
                'center' => 'Центр',
                'left' => 'Лево',
                'right' => 'Право',
              ) 
            ),
        ) 
    ),
    ) )
    ->add_tab( 'Про нас', array(
        Field::make( 'text', 'crb_header_top_text', 'Текст перед номером телефона' ),
        Field::make( 'text', 'crb_header_top_phone', 'Номер телефона' ),
        Field::make( 'image', 'crb_header_logo', 'Логотип' )->set_value_type( 'url'),
    ) )
    ->add_tab( 'Послуги', array(
        Field::make( 'rich_text', 'crb_aboutus_text', 'Текст О НАС' ),
    ) )
    ->add_tab( 'Правова інформація', array(
        Field::make( 'rich_text', 'crb_info_content', 'Текст' ),
    ) );
}

?>