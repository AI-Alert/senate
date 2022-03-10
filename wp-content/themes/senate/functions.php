<?php
/*
Theme Name: Senate
*/

/*--------------------------------------------------------------
>>> TABLE OF CONTENTS:
----------------------------------------------------------------

	0. 	Подключаем ресурсы
	1. 	Убираем в Yoast Seo разметку поиска
	2.  Переподключаем стандартный jQuery в footer
    3.  Подключаем CSS и JS mt-фреймворка
	4. 	Подключаем CSS и JS конкретного проекта
	5. 	Menu Modal
	6. 	Search Modal
	7. 	Page Templates
		a. 	Template: Cover Template
		c. 	Template: Full Width
	8.  Post: Archive
	9.  Post: Single
	10. Blocks
	11. Entry Content
	12. Comments
	13. Site Pagination
	14. Error 404
	15. Widgets
	16. Site Footer
    17. Media Queries
    

    правило: между функционалом - 4 перевода строки.
----------------------------------------------------------------------------- */


/* -------------------------------------------------------------------------- */
/*	0. Подключаем ресурсы PHP
/* -------------------------------------------------------------------------- */



require get_template_directory() . '/framework/tgm/plugin-installer.php';

include('framework/init.php');

include('include/menu.php');

include('include/assets.php');

include('include/thumbnails.php');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


