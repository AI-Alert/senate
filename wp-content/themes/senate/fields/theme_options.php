<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('theme_options', 'Header/Footer')
    ->add_tab('Шапка сайта', array(

            Field::make('image', 'header_logo', 'Логотип - основной')
                ->set_width(50),

            Field::make('textarea', 'header_desc', 'Адрес')
                ->set_attribute( 'placeholder', '' )
                ->set_width(50),

            Field::make('textarea', 'header_desc_eng', 'Адрес (английский)')
                ->set_attribute( 'placeholder', '' )
                ->set_width(50),

            Field::make('textarea', 'header_desc_kg', 'Адрес (кыргызский)')
                ->set_attribute( 'placeholder', '' )
                ->set_width(50),


            Field::make('complex', 'header_phone', 'Характеристики')
                ->set_width(50)
                ->add_fields(array(
                    Field::make('text', 'header_phone', 'Телефон')
                        ->set_attribute( 'placeholder', '+996 (***) **-**-**' )
                        ->set_width(25),
                )),

            Field::make('text', 'header_link_text', 'Текст ссылки на запись (русский)')
                ->set_default_value( 'Написать нам' )
                ->set_width(30),

            Field::make('text', 'header_link_text_eng', 'Текст ссылки на запись (английский)')
                ->set_default_value( 'Contact us' )
                ->set_width(30),

            Field::make('text', 'header_link_text_kg', 'Текст ссылки на запись (кыргызский)')
                ->set_default_value( 'что-то на кыргызском' )
                ->set_width(30),

            Field::make('text', 'header_link_text_phone', 'Текст ссылки на запись для телефонов (русский)')
                ->set_default_value( 'Записаться' )
                ->set_width(30),

            Field::make('text', 'header_link_text_phone_eng', 'Текст ссылки на запись для телефонов (английский)')
                ->set_default_value( '' )
                ->set_width(30),

            Field::make('text', 'header_link_text_phone_kg', 'Текст ссылки на запись для телефонов (кыргызский)')
                ->set_default_value( '' )
                ->set_width(30),

            Field::make('text', 'header_link', 'Ссылка на заявку')
                ->set_default_value( '#modal-record' )
                ->set_width(30),

            Field::make('image', 'eng', 'Иконка "Английский"')
                ->set_width(25),

            Field::make('image', 'rus', 'Иконка "Русский"')
                ->set_width(25),

            Field::make('image', 'kg', 'Иконка "Кыргызский"')
                ->set_width(25),
        )
    )




    ->add_tab('Подвал сайта', array(
        Field::make('image', 'footer_logo_first', 'Логотип - основной')
            ->set_width(50),

        Field::make('text', 'footer_phone', 'Телефон')
            ->set_attribute( 'placeholder', '+996 (***) **-**-**' )
            ->set_default_value( '+996 (900) 11-11-11' )
            ->set_width(50),

        Field::make('text', 'footer_title', 'Заголовок')
            ->set_attribute( 'placeholder', 'Впишите Ваш заголовок сюда' )
            ->set_width(50),


        Field::make('complex', 'footer_socials', 'Социальные сети (max: 6)')
            ->set_width(50)
            ->set_max(6)
            ->add_fields(array(
                Field::make( 'text', 'socials_link', 'Ссылка' )->set_width(50),
                Field::make( 'text', 'socials_name', 'Название соцсети' )->set_width(50),
            )),




        Field::make('text', 'footer_mail', 'E-mail')
            ->set_attribute( 'placeholder', 'example@gmail.com' )
            ->set_default_value( 'ccd.tokmok@gmail.com' )
            ->set_width(50),

        Field::make('text', 'footer_city', 'Город')
            ->set_attribute( 'placeholder', 'Город' )
            ->set_default_value( 'Токмок' )
            ->set_width(25),

        Field::make('text', 'footer_street', 'Улица')
            ->set_attribute( 'placeholder', 'Улица' )
            ->set_default_value( 'Дубовицкого' )
            ->set_width(25),

        Field::make('text', 'footer_house', 'Дом')
            ->set_attribute( 'placeholder', 'Дом' )
            ->set_width(25),

        Field::make('text', 'footer_worktime', 'Рабочее время')
            ->set_default_value( 'вс-пн выходные' )
            ->set_width(25),


        Field::make('text', 'footer_company_name', 'Название компании')
            ->set_default_value( 'Центр Гражданского Развития' )
            ->set_width(25),

        Field::make('rich_text', 'footer_copyright', 'Копирайт')
            ->set_default_value( 'Все материалы данного сайта являются объектами авторского права (в том числе дизайн). Запрещается копирование, распространение
(в том числе путем копирования на другие сайты и ресурсы в Интернете) или любое иное использование информации и объектов без предварительного согласия правообладателя' )
            ->set_width(75),
    ))



;
