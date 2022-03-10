<?php

$arResult = [
    'info_title' => $args['info_title'],
    'info_desc' => $args['info_desc'],
    'info_desc_mobile' => $args['info_desc_mobile'],
    'info_item' => $args['info_item'],
];

?>
<?php if ($arResult['info_title']||$arResult['info_desc']||$arResult['info_desc_mobile']||$arResult['info_item']):?>
    <section class="information">
        <div class="container">
            <?php if ($arResult['info_title']):?>
                <div class="information__title section-title"><?= $arResult['info_title']?></div>
            <?php endif;?>




            <?php if ($arResult['info_desc']):?>
                <div class="information__description information__description--xl">
                    <p><?= $arResult['info_desc']?></p>
                </div>
            <?php endif;?>
            <?php if ($arResult['info_desc_mobile']):?>
                <div class="information__description information__description--xs">
                    <p><?= $arResult['info_desc_mobile']?></p>
                </div>
            <?php endif;?>
            <?php if ($arResult['info_item']):?>
                <ul class="information__list list-reset">

                    <?php foreach ($arResult['info_item'] as $item):
                        $image = [
                            'full' => wp_get_attachment_image_url($item['info_image'], 'full'),
                            'full_mobile' => wp_get_attachment_image_url($item['info_image_mobile'], 'full'),
                        ];
                        ?>

                        <li class="information__item">
                            <a href="<?= $item['info_link']?>" class="information__link"><img src="<?= $image['full']?>" alt="<?= $item['info_lang']?>" class="information__img information__img--xl"></a>
                            <a href="<?= $item['info_link']?>" class="information__link information__link--xs"><img src="<?= $image['full_mobile']?>" alt="<?= $item['info_lang']?>" class="information__img information__img--xs"></a>

                        </li>
                    <?php endforeach;?>
                </ul>
            <?php endif;?>
        </div>
    </section>
<?php endif;?>




<div class="page-footer__middle-right vcard">
    <div class="fn org hidden visually-hidden">civildevcenter.org</div>
    <a href="mailto:dinatkatch@mail.ru" class="page-footer__email email"><?= $arResult['footer_mail']; ?></a>
    <div class="page-footer__adr adr">
        <div class="page-footer__adr-title">Социальные сети:</div>
        <address>
            <div class="page-footer__socials list-reset">
                <a href="" class="page-footer__socials-link socials-link" aria-label="Напишите нам в Instagram">
                    <svg>
                        <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-inst"></use>
                    </svg>
                </a>
                <a href="" class="page-footer__socials-link socials-link" aria-label="Напишите нам в WhatsApp">
                    <svg>
                        <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-wapp"></use>
                    </svg>
                </a>
                <a href="" class="page-footer__socials-link socials-link" aria-label="Напишите нам в Telegram">
                    <svg>
                        <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-tg"></use>
                    </svg>
                </a>
                <a href="" class="page-footer__socials-link socials-link" aria-label="Напишите нам в Facebook">
                    <svg>
                        <use xlink:href="<?= _assets();?>/spritemap.svg#sprite-viber"></use>
                    </svg>
                </a>
            </div>
        </address>
    </div>
</div>

<div class="page-footer__middle-right vcard">
    <div class="fn org hidden visually-hidden">civildevcenter.org</div>
    <div class="page-footer__adr adr">
        <div class="page-footer__adr-title">Адрес:</div>
        <address><span class="locality"><?= $arResult['footer_city']; ?></span>, <span class="street-address"><?= $arResult['footer_street']; ?></span>, <span class="extended-address"><?= $arResult['footer_house']; ?></span></address>
        <div class="page-footer__adr-title">Режимы работы:</div>
        <div class="worktime">
            <?= $arResult['footer_worktime']; ?></div>
    </div>
</div>


