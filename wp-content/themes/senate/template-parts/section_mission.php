
<?php

$arResult = [
    'mission_title' => $args['mission_title'],
    'mission_image' => $args['mission_image'],
    'mission_text' => $args['mission_text'],
    'mission_link_sertificates' => $args['mission_link_sertificates'],
    'mission_text_sertificates' => $args['mission_text_sertificates'],
    'mission_link_about' => $args['mission_link_about'],
    'mission_text_about' => $args['mission_text_about'],
    'mission_text_socials' => $args['mission_text_socials'],
    'mission_inst_link' => $args['mission_inst_link'],
    'mission_vk_link' => $args['mission_vk_link'],
    'mission_gallery' => $args['mission_gallery'],
    'mission_text_mobile' => $args['mission_text_mobile'],
];

?>
<?php if ($arResult['mission_title']||$arResult['mission_image']||$arResult['mission_text']||$arResult['mission_link_sertificates']||$arResult['mission_text_sertificates']||$arResult['mission_link_about']||$arResult['mission_text_about']||$arResult['mission_text_socials']||$arResult['mission_inst_link']||$arResult['mission_vk_link']||$arResult['mission_gallery']||$arResult['mission_text_mobile']):?>
    <section class="mission">
        <div class="container">
            <?php if ($arResult['mission_title']):?>
                <div class="mission__title section-title"><?= $arResult['mission_title']?></div>
            <?php endif;?>
            <?php if ($arResult['mission_image']||$arResult['mission_text']||$arResult['mission_link_sertificates']||$arResult['mission_text_sertificates']||$arResult['mission_link_about']||$arResult['mission_text_about']||$arResult['mission_text_socials']||$arResult['mission_inst_link']||$arResult['mission_vk_link']):?>
            <div class="mission__wrapper">
                <div class="mission__content">
                    <div class="mission__text">
                        <?php
                        $imaged = [
                            'full' => wp_get_attachment_image_url($arResult['mission_image'], 'full'),
                        ];
                        ?>
                        <a href="<?= $imaged['full']?>" class="mission__media">
                            <img src="<?= $imaged['full']?>" alt="Как проходят наши уроки">
                            <span class="play" aria-label="Посмотреть видео"></span>
                        </a>
                        <p><?= $arResult['mission_text']?></p>
                    </div>
                    <div class="mission__bottom">
                        <a href="<?= $arResult['mission_link_sertificates']?>" class="mission__link link"><?= $arResult['mission_text_sertificates']?></a>
                        <a href="<?= $arResult['mission_link_about']?>" class="mission__link link"><?= $arResult['mission_text_about']?></a>
                        <div class="mission__socials">
                            <span class="mission__socials-title"><?= $arResult['mission_text_socials']?> </span>
                            <a href="<?= $arResult['mission_inst_link']?>" class="mission__socials-link socials-link">
                                <svg>
                                    <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-inst"></use>
                                </svg>
                            </a>
                            <a href="<?= $arResult['mission_vk_link']?>" class="mission__socials-link socials-link">
                                <svg>
                                    <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-vk"></use>
                                </svg>
                            </a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <?php if ($arResult['mission_gallery']):?>
            <div class="gallery">
                <div class="gallery__inner">
                    <div class="container">
                        <div class="gallery__arrows carousel-arrows__container">
                            <div class="gallery__arrows--prev carousel-arrows__item carousel-arrows__item--prev" aria-label="Предыдущий слайд">
                                <svg>
                                    <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-ar-prev"></use>
                                </svg>
                            </div>
                            <div class="gallery__arrows--next carousel-arrows__item carousel-arrows__item--next" aria-label="Следующий слайд">
                                <svg>
                                    <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-ar-next"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="gallery__list list-reset">
                        <?php foreach ($arResult['mission_gallery'] as $item):
                            $image = [
                                'full' => wp_get_attachment_image_url($item['gallery_image'], 'full'),
                                'alt' => get_post_meta($item['gallery_image'], '_wp_attachment_image_alt', TRUE),
                            ];
                            ?>
                            <a href="<?= $image['full']?>" class="gallery__item"><img src="<?= $image['full']?>" alt="<?= $image['alt']?>" class="gallery__img"></a>
                        <?php endforeach; ?>
                    </div>
                    <?php if($arResult['mission_text_mobile']): ?>
                        <div class="gallery__description visible-xs">
                            <div class="container">
                                <p><?= $arResult['mission_text_mobile']?></p>
                            </div>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        <?php endif;?>
    </section>
<?php endif;?>