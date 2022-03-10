<?php

$arResult = [
    'partners_title' => $args['partners_title'],
    'partners_items' => $args['partners_items'],
];

?>
<div class="section certificates">
    <div class="container">
        <div class="section-title"><?=$arResult['partners_title']?></div>

        <div class="certificates-wrap">

            <div class="certificates-block">
                <?php foreach ($arResult['partners_items'] as $item):
                    $image = [
                        'full' => wp_get_attachment_image_url($item['partners_image'], 'full'),
                        'alt' => get_post_meta($item['partners_image'], '_wp_attachment_image_alt', TRUE),
                    ];
                    ?>
                    <div class="certificate"><a href="<?= $image['full']?>" class="gallery__item"><img src="<?= $image['full']?>" alt="<?= $image['alt']?>"></a></div>
                <?php endforeach; ?>

            </div>

            <div class="slider-arrows certificates__slider-arrows">
                <button class="prev"><img src="<?= _assets()?>/img/left-arrow.svg" alt="Alt" class="svg"></button>
                <button class="next"><img src="<?= _assets()?>img/right-arrow.svg" alt="Alt" class="svg"></button>
            </div>

        </div>

    </div>
</div>