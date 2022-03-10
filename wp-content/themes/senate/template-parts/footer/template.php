<?php

$arResult = [
    'footer_logo_first' => [
        'full' => wp_get_attachment_image_url(carbon_get_theme_option( 'footer_logo_first' ), 'full'),
        'alt' => get_post_meta(carbon_get_theme_option( 'footer_logo_first' ), '_wp_attachment_image_alt', TRUE),
    ],
    'footer_phone' => carbon_get_theme_option( 'footer_phone' ),
    'footer_title' => carbon_get_theme_option( 'footer_title' ),
    'footer_mail' => carbon_get_theme_option( 'footer_mail' ),
    'footer_city' => carbon_get_theme_option( 'footer_city' ),
    'footer_street' => carbon_get_theme_option( 'footer_street' ),
    'footer_house' => carbon_get_theme_option( 'footer_house' ),
    'footer_worktime' => carbon_get_theme_option( 'footer_worktime' ),
    'footer_company_name' => carbon_get_theme_option( 'footer_company_name' ),
    'footer_copyright' => carbon_get_theme_option( 'footer_copyright' ),
];

?>

<footer class="page-footer">
    <div class="container">
        <div class="page-footer__top">
            <div class="page-footer__logo logo" aria-label="<?= $arResult['footer_logo_first']['alt']?>" style="background-image: url('<?= $arResult['footer_logo_first']['full']?>');"></div>
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'footer_menu_1',
                'container'       => false,
                'menu_class'      => 'page-footer__nav menu list-reset',
                'depth'           => 3,
                'walker'          => new walker_bem_footer_menu_top('menu'),
            ) );
            ?>
            <?php if ($arResult['footer_phone']):
                $link = preg_replace( array( '/\s/', '/\(/', '/\)/', '/-/' ), '', $arResult['footer_phone'] );
                $text = $arResult['footer_phone'];
                ?>
                <a href="tel:<?= $link; ?>" class="page-footer__phone phone"><?= $text; ?></a>
            <?php endif; ?>
        </div>
        <div class="page-footer__middle">
            <div class="page-footer__middle-left">
                <div class="page-footer__socials-title"><?= $arResult['footer_title'] ?></div>
            </div>

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
                                <svg viewBox="0 0 512 512" fill="#C32C22" xmlns="http://www.w3.org/2000/svg"><path d="m75 512h167v-182h-60v-60h60v-75c0-41.355469 33.644531-75 75-75h75v60h-60c-16.542969 0-30 13.457031-30 30v60h87.292969l-10 60h-77.292969v182h135c41.355469 0 75-33.644531 75-75v-362c0-41.355469-33.644531-75-75-75h-362c-41.355469 0-75 33.644531-75 75v362c0 41.355469 33.644531 75 75 75zm-45-437c0-24.8125 20.1875-45 45-45h362c24.8125 0 45 20.1875 45 45v362c0 24.8125-20.1875 45-45 45h-105v-122h72.707031l20-120h-92.707031v-30h90v-120h-105c-57.898438 0-105 47.101562-105 105v45h-60v120h60v122h-137c-24.8125 0-45-20.1875-45-45zm0 0"/></svg>
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




        </div>
        <div class="page-footer__bottom">
            <div class="page-footer__copyright">
                <div class="page-footer__copy-date"><?=date('Y');?>  <?= $arResult['footer_company_name']; ?>l</div>
                <div class="page-footer__copy-text"><?= $arResult['footer_copyright']; ?></div>
            </div>
        </div>
    </div>
</footer>


	


