<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;


Container::make( 'post_meta', 'Настройки страницы' )
    ->where( 'post_id', '=', get_option( 'page_on_front' ) )
    ->or_where( 'post_template', '=', 'front-page.php' )
    ->or_where( 'post_template', '=', 'templates/single-simple.php' )
    ->or_where( 'post_template', '=', 'singular.php' )
    ->or_where( 'post_template', '=', 'page.php' )
    ->add_fields( array(
        Field::make( 'complex', 'front_page', ' ' )
            ->setup_labels( array(
                'plural_name' => 'Секции',
                'singular_name' => 'секцию',
            ))
            ->add_fields('hero_features', 'Баннер', array(

                Field::make( 'text', 'title', 'Заголовок' )
                    ->set_default_value('Общественный фонд "Центр Гражданского Развития"')
                    ->set_attribute( 'placeholder', 'Заголовок' )
                    ->set_width(50),

                Field::make('image', 'title_bg_image', 'Иконка (1920x760)')
                    ->set_width(50),

                Field::make( 'rich_text', 'title_text', 'Предзаголовок' )
                    ->set_default_value('Вместе к развитию города и общества')
                    ->set_attribute( 'placeholder', 'Предзаголовок' )
                    ->set_width(100),



                Field::make('complex', 'list', 'Преимущества')
                    ->set_max(3)
                    ->add_fields(array(
                        Field::make('image', 'icon', 'Иконка (30x30)')
                            ->set_width(40),
                        Field::make('textarea', 'text', 'Описание преимущества')
                            ->set_default_value('Преимущество')
                            ->set_attribute( 'placeholder', 'Преимущество' )
                            ->set_width(60)
                    )),

                Field::make( 'text', 'title_mobile', 'Заголовок (для телефонов)' )
                    ->set_default_value('Центр Гражданского Развития')
                    ->set_attribute( 'placeholder', 'Заголовок (для телефонов)' )
                    ->set_width(30),

                Field::make( 'image', 'title_image_mobile', 'Фото на бэкграунде для телефонов (382х527)' )
                    ->set_width(30),

            ))


            ->add_fields('section_project', 'Слайдер с проектами', array(

                Field::make( 'text', 'project_title', 'Заголовок' )
                    ->set_attribute( 'placeholder', 'Секция "Проекты"' )
                    ->set_default_value('Наши проекты')
                    ->set_width(100),


                Field::make('complex', 'project', 'Проекты')
                    ->set_max(3)
                    ->add_fields(array(
                        Field::make( 'image', 'project_image', 'Фотография проекта (570х516)' )
                            ->set_width(75),

                        Field::make( 'text', 'project_surname', 'Проект' )
                            ->set_default_value('Проект')
                            ->set_attribute( 'placeholder', 'Проект' )
                            ->set_width(25),

                        Field::make( 'text', 'project_name', 'Название' )
                            ->set_default_value('Гражданский Контроль')
                            ->set_attribute( 'placeholder', 'О чем проект' )
                            ->set_width(25),

                        Field::make( 'text', 'project_position', 'Партнер (компаньон)' )
                            ->set_default_value('При финансовой поддержке')
                            ->set_attribute( 'placeholder', 'При финансовой поддержке' )
                            ->set_width(25),

                        Field::make( 'text', 'project_exp', 'Название фонда' )
                            ->set_default_value('Фонда "Soros"')
                            ->set_attribute( 'placeholder', 'Название фонда' )
                            ->set_width(25),

                        Field::make( 'rich_text', 'project_desc', 'Описание проекта' )
                            ->set_attribute( 'placeholder', 'О чем проект' )
                            ->set_width(100),

                    )),




            ))



            ->add_fields('section_anons', 'Слайдер с анонсами', array(

                Field::make( 'text', 'anons_title', 'Заголовок' )
                    ->set_attribute( 'placeholder', 'Секция "Анонсы"' )
                    ->set_default_value('Наши анонсы')
                    ->set_width(100),


                Field::make('complex', 'anons', 'Анонсы')
                    ->set_max(3)
                    ->add_fields(array(
                        Field::make( 'image', 'anons_image', 'Фотография анонса (570х516)' )
                            ->set_width(75),

                        Field::make( 'text', 'anons_surname', 'Анонс' )
                            ->set_default_value('Проект')
                            ->set_attribute( 'placeholder', 'Анонс' )
                            ->set_width(25),

                        Field::make( 'text', 'anons_link', 'Ссылка на видео (оставить пустым, если видео нет)' )
                            ->set_default_value('')
                            ->set_attribute( 'placeholder', 'https://www.youtube.com/' )
                            ->set_width(25),

                        Field::make( 'text', 'anons_name', 'Заголовок Анонса' )
                            ->set_attribute( 'placeholder', 'Название анонса' )
                            ->set_width(25),

                        Field::make( 'rich_text', 'anons_desc', 'Описание анонса' )
                            ->set_attribute( 'placeholder', 'О чем анонс' )
                            ->set_width(100),

                    )),




            ))





            ->add_fields('section_record', 'Форма записи', array(

                Field::make( 'rich_text', 'form_title', 'Заголовок' )
                    ->set_default_value('Напишите своц отзыв или пожелание к нам на почту')
                    ->set_width(50),

                Field::make( 'rich_text', 'form_subtitle', 'Заголовок' )
                    ->set_default_value('Как мы будем использовать вашу информацию')
                    ->set_width(50),


                Field::make('complex', 'form_item', 'Элемент формы')
                    ->set_max(2)
                    ->add_fields(array(
                        Field::make( 'image', 'form_icon', 'Иконка (26x26)' )
                            ->set_width(50),

                        Field::make( 'textarea', 'form_text', 'Текст' )
                            ->set_default_value('Небольшое описание фонда в форме')
                            ->set_width(50),

                    )),




            ))


            ->add_fields('section_record_mobile', 'Форма записи (для телефонов))', array(

                Field::make( 'rich_text', 'form_title_mobile', 'Заголовок' )
                    ->set_default_value('Напишите своц отзыв или пожелание')
                    ->set_width(50),

                Field::make( 'rich_text', 'form_subtitle_mobile', 'Описание формы' )
                    ->set_default_value('Мы готовы ответить на все ваши вопросы')
                    ->set_width(50),

                Field::make( 'text', 'form_btn_text', 'Текст кнопки' )
                    ->set_default_value('Записаться')
                    ->set_width(50),

                Field::make( 'text', 'form_btn_link', 'Ссылка кнопки' )
                    ->set_default_value('#modal-record')
                    ->set_width(50),




            ))


            ->add_fields('section_mission', 'Секция Миссия', array(

                Field::make( 'image', 'mission_image', 'Картинка' )
                    ->set_width(75),

                Field::make( 'rich_text', 'mission_title', 'Заголовок' )
                    ->set_default_value('Наша миссия')
                    ->set_width(50),

                Field::make( 'rich_text', 'mission_text', 'Текст' )
                    ->set_default_value('Каждый член команды Центра гражданского развития является активным гражданином своего города, который вносит свой вклад в развитие города.')
                    ->set_width(50),

                Field::make( 'text', 'mission_text_socials', 'Подпись для соцсетей' )
                    ->set_default_value('Подписывайтесь на соцсети: ')
                    ->set_width(50),


                Field::make('complex', 'mission_gallery', 'Галлерея')
                    ->add_fields(array(
                        Field::make( 'image', 'gallery_image', 'Изображение (330х225)' )
                            ->set_width(25),

                    )),

                Field::make( 'rich_text', 'mission_text_mobile', 'Текст (для телефонов)' )
                    ->set_default_value('В процессе обучения всегда участвует команда, состоящая из преподавателя и ученика. Именно командный подход приносит наилучшие результаты')
                    ->set_width(100),


            ))


            ->add_fields('section_reviews', 'Секция "Команда"', array(

                Field::make( 'text', 'review_title', 'Заголовок' )
                    ->set_default_value('Наши команда')
                    ->set_width(100),


                Field::make('complex', 'reviews', 'Член команды')
                    ->add_fields(array(
                        Field::make( 'image', 'review_image', 'Фото' )
                            ->set_width(75),

                        Field::make( 'text', 'review_name', 'Фамилия и Имя' )
                            ->set_default_value('Иван Иванов')
                            ->set_width(25),

                        Field::make('complex', 'review_item', 'Должность')
                            ->add_fields(array(
                                Field::make( 'text', 'review_achievement', 'Должность' )
                                    ->set_width(50),

                            )),

                        Field::make( 'rich_text', 'review_text', 'Немного о себе' )
                            ->set_default_value('Многие известные личности призывают нас к новым свершениям, которые, в свою очередь, должны быть верифициров Таким образом, новая модель организационной деятельности прекрасно подходит для реализации существующих финансовых и административных условий. Каждый из нас понимает очевидную вещь: выбранный нами инновационный путь, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для системы массового участия. И нет сомнений, что явные признаки победы институционализации, инициированные исключительно синтетически')
                            ->set_width(100),

                        Field::make( 'text', 'review_btn_text', 'Кнопка "Связаться"' )
                            ->set_default_value('Связаться через Соц. Сеть')
                            ->set_width(25),

                        Field::make( 'text', 'review_btn_link', 'Ссылка на контакт' )
                            ->set_default_value('#')
                            ->set_width(25),


                        Field::make( 'text', 'comment_btn_text', 'Кнопка "Связаться"' )
                            ->set_default_value('Оставить свой отзыв')
                            ->set_width(25),

                        Field::make( 'text', 'comment_btn_link', 'Связаться через Соц. Сеть' )
                            ->set_default_value('#')
                            ->set_width(25),

                    )),



            ))


            ->add_fields('section_partners', 'Секция с партнерами', array(

                Field::make('complex', 'partners', 'Партнер')
                    ->add_fields(array(
                        Field::make( 'text', 'partners_title', 'Название компании-партнера' )
                            ->set_width(50),

                        Field::make( 'image', 'partners_image', 'Фото' )
                            ->set_width(50),

                        Field::make( 'text', 'partners_link', 'Ссылка на сайт партнера' )
                            ->set_width(50),

                    )),



            ))


            ->add_fields('section_information', 'Секция с информацией', array(

                Field::make( 'text', 'info_title', 'Заголовок' )
                    ->set_default_value('Узнайте подробнее о нас')
                    ->set_width(100),

                Field::make( 'rich_text', 'info_desc', 'Заголовок' )
                    ->set_default_value('Лишь реплицированные с зарубежных источников, современные исследования набирают популярность среди определенных слоев населения, а значит, должны быть своевременно верифицированы. Лишь реплицированные с зарубежных источников, современные исследования ограничены исключительно образом мышления')
                    ->set_width(50),

                Field::make( 'rich_text', 'info_desc_mobile', 'Заголовок' )
                    ->set_default_value('Разнообразный и богатый опыт говорит нам, что современная методология разработки позволяет выполнить важные задания по разработке первоочередных требований')
                    ->set_width(50),

                Field::make('complex', 'info_item', 'Информация о нас')
                    ->add_fields(array(
                        Field::make( 'image', 'info_image', 'Фото' )
                            ->set_width(50),

                        Field::make( 'image', 'info_image_mobile', 'Фото (для телефонов)' )
                            ->set_width(50),

                        Field::make( 'text', 'info_link', 'Ссылка на информацию' )
                            ->set_default_value('#')
                            ->set_width(40),

                    )),

            ))

    ));
