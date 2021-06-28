<?php
/**
 * Изменение текста в подвале админ-панели
 **/

add_filter('admin_footer_text', 'alex_footer_admin_func');
function alex_footer_admin_func () {

    echo
        '<div style="transform: translateY(4rem)">'.
        '<h3  style="margin: 0 0 0.5rem 0;">Сайт разработан: Aleksey</h3>'.
        '<p><b>Email:</b> <a href="mailto:aleksey3400@yandex.ru" target="_blank"> aleksey3400@yandex.ru</a></p>'.
        '<p><b>Номер телефона:</b> <a href="tel:+79951164367" target="_blank"> Aleksey tel +79951164367</a></p>'.
        '<p><b>WhatsApp:</b> <a href="https://wa.me/79951164367" target="_blank"> Aleksey WhatsApp +79951164367</a></p>'.
        '</div>';
}