<?php

return array(
    'enable' => array(
        'value'        => false,
        'title'        => 'Включить плагин',
        'control_type' => waHtmlControl::CHECKBOX,
    ),
    'TelegramName' => array(
        'title'        => 'Имя аккаунта Telegram',
        'description' => 'Для вывода кнопки вставьте в шаблон {shopMessengersPlugin::displayTelegram()} в нужном месте.',
        'control_type' => waHtmlControl::INPUT,
        'value' => 'delaem_dvigaem',
    ),
    'WhatsAppNumber' => array(
        'title'        => 'Номер телефона WhatsApp',
        'description' => 'Для вывода кнопки вставьте в шаблон {shopMessengersPlugin::displayWhatsApp()} в нужном месте. Номер телефона вводится с знаком "+"',
        'control_type' => waHtmlControl::INPUT,
        'value' => '+79252742470',
    ),
    'WhatsAppText' => array(
        'title'        => 'Сообщение WhatsApp',
        'control_type' => waHtmlControl::INPUT,
        'value' => 'Я очень классный плагин',
    ),
    'ViberNumber' => array(
        'title'        => 'Номер телефона Viber',
        'description' => 'Для вывода кнопки вставьте в шаблон {shopMessengersPlugin::displayViber()} в нужном месте. Номер телефона вводится без знака "+"',
        'control_type' => waHtmlControl::INPUT,
        'value' => '79252742470',
    ),
    'ButtonWidth' => array(
        'title'        => 'Ширина кнопок в px (макс 375)',
        'control_type' => waHtmlControl::INPUT,
        'value' => '375',
    )
);