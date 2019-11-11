<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
  Container::make( 'theme_options', 'Options' )
    ->add_tab( 'Общие', array(
        Field::make( 'text', 'crb_namesite', 'Назва компанії' ),
    ))
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
    ->add_tab( 'Про компанію', array(
        Field::make( 'image', 'crb_about_photo', 'Фото' )->set_value_type( 'url'),
        Field::make( 'text', 'crb_about_title', 'Заголовок' ),
        Field::make( 'text', 'crb_about_description', 'Опис' ),
        Field::make( 'complex', 'crb_about_list', 'Перелік' )
            ->add_fields( array(
                Field::make( 'text', 'crb_about_li', 'Рядок' ),
            ),
        ) 
    ) )
    ->add_tab( 'Послуги', array(
       Field::make( 'complex', 'crb_services', 'Послуги' )
            ->add_fields( array(
                Field::make( 'text', 'crb_service_title', 'Заголовок' ),
                Field::make( 'text', 'crb_service_content', 'Опис' ),
            ),
        )  
    ) )
    ->add_tab( 'Правова інформація', array(
        Field::make( 'rich_text', 'crb_info_content', 'Текст' ),
    ) )
    ->add_tab( 'Контакти', array(
        Field::make( 'text', 'crb_email', 'Email' ),
        Field::make( 'text', 'crb_address', 'Адреса' ),
        Field::make( 'text', 'crb_contact_phone_zadolzh', 'Телефон для звязку з питань заборгованості' ),
        Field::make( 'text', 'crb_contact_phone_sotr', 'Телефон для звязку з питань співробітництва' ),
        Field::make( 'text', 'crb_contact_beforeform', 'Текст перед формою' ),
    ) );
}

?>