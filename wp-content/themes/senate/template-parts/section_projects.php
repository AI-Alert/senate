<?php

$arResult = [
    'project_title' => $args['project_title'],
    'project' => $args['project'],
];

?>
<?php if ($arResult['project_title']||$arResult['project']):?>
    <section class="teachers">
        <div class="container">
            <?php if ($arResult['project_title']):?>
                <div class="teachers__title section-title"><?= $arResult['project_title']?></div>
            <?php endif;?>
            <?php if ($arResult['project']):?>
                <div class="teachers__inner">
                    <div class="teachers__list list-reset">

                        <?php foreach ($arResult['project'] as $item):
                            $image = [
                                'full' => wp_get_attachment_image_url($item['project_image'], 'full'),
                            ];
                            ?>

                            <div class="teachers__item">
                                <a href="<?= $image['full']?>"><img src="<?= $image['full']?>" alt="<?= $item['project_surname']?> <?= $arResult['project_name']?>" class="teachers__photo"></a>
                                <div class="teachers__card">
                                    <div class="teachers__name"><?= $item['teach_surname']?>
                                        <span><?= $item['project_name']?></span>
                                    </div>
                                    <span class="teachers__job"><?= $item['project_position']?></span>
                                    <span class="teachers__exp">Опыт работы — <?= $item['project_exp']?></span>
                                    <div class="teachers__description"><span class="highlight">“</span> <?= $item['project_desc']?> <span class="highlight">“</span></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="teachers__arrows carousel-arrows__container">
                        <div class="teachers__arrows--prev carousel-arrows__item carousel-arrows__item--prev" aria-label="Предыдущий слайд">
                            <svg>
                                <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-ar-prev"></use>
                            </svg>
                        </div>
                        <div class="teachers__arrows--next carousel-arrows__item carousel-arrows__item--next" aria-label="Следующий слайд">
                            <svg>
                                <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-ar-next"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            <?php endif;?>
        </div>
    </section>
<?php endif;?>