<?php

$arResult = [
    'partners' => $args['partners'],
];
?>

<?php foreach ($arResult['partners'] as $item):
        $image = [ 'full' => wp_get_attachment_image_url($item['partners_image'], 'full'),
            'alt' => get_post_meta($item['gallery_image'], '_wp_attachment_image_alt', TRUE),
        ];
        ?>

<div class="column">
    <a href="<?= $item['partners_link'];?>" style="text-decoration: none;">
        <img src="<?= $image['full'];?>" alt="Img" style="width:100%; height: auto;">
        <div style="text-align:center">
            <h2><?= $item['partners_title'];?></h2>
        </div>
    </a>
</div>

<?php endforeach;?>













