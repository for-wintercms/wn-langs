<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Qo'l tomondagi til qatorlari
    |--------------------------------------------------------------------------
    |
    | Bu xabarlar brauzer tomonida JavaScript orqali mavjud bo'ladigan xabarlar.
    | Ushbu faylni birlashtirish uchun quyidagilarni bajaring: php artisan winter:util compile lang
    |
    */

    'markdowneditor' => [
        'formatting' => 'Formatlash',
        'quote' => 'Iqtibos',
        'code' => 'Kod',
        'header1' => 'Sarlavha 1',
        'header2' => 'Sarlavha 2',
        'header3' => 'Sarlavha 3',
        'header4' => 'Sarlavha 4',
        'header5' => 'Sarlavha 5',
        'header6' => 'Sarlavha 6',
        'bold' => 'Katta harf',
        'italic' => 'Yotiq harf',
        'unorderedlist' => 'Tartibsiz ro\'yxat',
        'orderedlist' => 'Tartiblangan ro\'yxat',
        'video' => 'Video',
        'image' => 'Rasm',
        'link' => 'Havola',
        'horizontalrule' => 'Gorizontal chiziq qo\'yish',
        'fullscreen' => 'To\'liq ekran',
        'preview' => 'Oldin ko\'rish',
    ],
    'mediamanager' => [
        'insert_link' => "Media havolasini qo'shish",
        'insert_image' => "Media rasmini qo'shish",
        'insert_video' => "Media videoni qo'shish",
        'insert_audio' => "Media audio qo'shish",
        'invalid_file_empty_insert' => "Iltimos, havola qo'shish uchun faylni tanlang.",
        'invalid_file_single_insert' => "Iltimos, bitta faylni tanlang.",
        'invalid_image_empty_insert' => "Iltimos, rasmlarni qo'shish uchun rasmni tanlang.",
        'invalid_video_empty_insert' => "Iltimos, videoni qo'shish uchun video tanlang.",
        'invalid_audio_empty_insert' => "Iltimos, audio qo'shish uchun audio tanlang.",
    ],
    'alert' => [
        'confirm_button_text' => 'OK',
        'cancel_button_text' => 'Bekor qilish',
        'widget_remove_confirm' => 'Ushbu widgetni o\'chirmoqchimisiz?',
    ],
    'datepicker' => [
        'previousMonth' => 'O\'tgan oy',
        'nextMonth' => 'Keyingi oy',
        'months' => ['Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'Iyun', 'Iyul', 'Avgust', 'Sentabr', 'Oktabr', 'Noyabr', 'Dekabr'],
        'weekdays' => ['Yakshanba', 'Dushanba', 'Seshanba', 'Chorshanba', 'Payshanba', 'Juma', 'Shanba'],
        'weekdaysShort' => ['Ya', 'Du', 'Se', 'Cho', 'Pa', 'Ju', 'Sh'],
    ],
    'colorpicker' => [
        'last_color' => 'Avval tanlangan rangni ishlatish',
        'aria_palette' => 'Rang tanlash maydoni',
        'aria_hue' => 'O\'ng rangni tanlash oynasi',
        'aria_opacity' => 'Shaffoflikni tanlash oynasi',
    ],
    'filter' => [
        'group' => [
            'all' => 'hammasi',
        ],
        'scopes' => [
            'apply_button_text' => 'Qo\'llash',
            'clear_button_text'  => 'Tozalash',
        ],
        'dates' => [
            'all' => 'hammasi',
            'filter_button_text' => 'Filtr',
            'reset_button_text' => 'Tiklash',
            'date_placeholder' => 'Sana',
            'after_placeholder' => 'Keyin',
            'before_placeholder' => 'Oldin',
        ],
        'numbers' => [
            'all' => 'hammasi',
            'filter_button_text' => 'Filtr',
            'reset_button_text'  => 'Tiklash',
            'min_placeholder' => 'Min',
            'max_placeholder' => 'Maks',
        ],
    ],
    'eventlog' => [
        'show_stacktrace' => 'Stack trace ko\'rsatish',
        'hide_stacktrace' => 'Stack trace yashirish',
        'tabs' => [
            'formatted' => 'Formatlangan',
            'raw' => 'O\'zgarmagan',
        ],
        'editor' => [
            'title' => 'Kod tahrirlovchisi',
            'description' => 'Operatsion tizimingiz bu URL shemalaridan biriga eshitish uchun sozlangan bo\'lishi kerak.',
            'openWith' => 'Quyidagilar bilan ochish',
            'remember_choice' => 'Ushbu sessiyada tanlangan variantni eslab qolish',
            'open' => 'Ochish',
            'cancel' => 'Bekor qilish',
        ],
    ],
];
