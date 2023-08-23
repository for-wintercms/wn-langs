<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Tekshiruv til uchun tillar qatori
    |--------------------------------------------------------------------------
    |
    | Quyidagi tillar qatorlari, validator sinfi tomonidan ishlatiladigan
    | xato xabarlarni o'z ichiga oladi. Bu qoidalardan ba'zilari size qoidasi
    | uchun qo'shimcha versiyalarga ega, masalan size qoidasi uchun.
    | Har bir xabarni moslashtirish uchun bu erda o'zgartirishingiz mumkin.
    |
    */

    "accepted"             => "Siz :attribute ni qabul qilishingiz kerak.",
    "active_url"           => ":attribute maydoni yaroqsiz URL.",
    "after"                => ":attribute maydoni :date dan so'nggi sana bo'lishi kerak.",
    'after_or_equal'       => ":attribute maydoni :date dan so'nggi yoki teng sana bo'lishi kerak.",
    "alpha"                => ":attribute maydoni faqat harflarni o'z ichiga olishi mumkin.",
    "alpha_dash"           => ":attribute maydoni faqat harf, raqam va chiziqchalar o'z ichiga olishi mumkin.",
    "alpha_num"            => ":attribute maydoni faqat harf va raqamlarni o'z ichiga olishi mumkin.",
    "array"                => ":attribute maydoni massiv bo'lishi kerak.",
    "before"               => ":attribute maydoni :date dan oldingi sana bo'lishi kerak.",
    'before_or_equal'      => ":attribute maydoni :date dan oldingi yoki teng sana bo'lishi kerak.",
    "between"              => [
        "numeric" => ":attribute maydoni :min va :max orasida bo'lishi kerak.",
        "file"    => ":attribute hajmi :min va :max kilobayt oralig'ida bo'lishi kerak.",
        "string"  => ":attribute uzunligi :min va :max belgidan iborat bo'lishi kerak.",
        "array"   => ":attribute maydoni :min - :max elementlardan iborat bo'lishi kerak.",
    ],
    'boolean'              => ":attribute maydoni true yoki false bo'lishi kerak.",
    "confirmed"            => ":attribute maydoni tasdiqlash bilan mos kelmaydi.",
    "date"                 => ":attribute maydoni sana emas.",
    'date_equals'          => ":attribute maydoni :date ga teng sana bo'lishi kerak.",
    "date_format"          => ":attribute maydoni :format formatiga mos kelmaydi.",
    "different"            => ":attribute va :other maydonlari farqli bo'lishi kerak.",
    "digits"               => ":attribute raqam maydoni uzunligi :digits bo'lishi kerak.",
    "digits_between"       => ":attribute raqam maydoni uzunligi :min va :max oralig'ida bo'lishi kerak.",
    'dimensions'           => ":attribute tasvir o'lchamlari yo\'q.",
    'distinct'             => ':attribute maydonining takrorlanuvchi qiymati mavjud.',
    "email"                => ":attribute maydoni noto'g'ri formatga ega.",
    'ends_with'            => ":attribute maydoni quyidagi qiymatlardan biri bilan tugashi kerak: :values.",
    "exists"               => "Tanlangan :attribute qiymati mavjud emas.",
    'file'                 => ':attribute fayl bo\'lishi kerak.',
    'filled'               => ':attribute maydoni to\'ldirilishi kerak.',
    'gt'                   => [
        'numeric' => ':attribute maydoni :value dan katta bo\'lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan katta bo\'lishi kerak.',
        'string'  => ':attribute maydoni :value belgidan uzun bo\'lishi kerak.',
        'array'   => ':attribute maydoni :value yoki undan ko\'p elementlardan iborat bo\'lishi kerak.',
    ],
    'gte'                  => [
        'numeric' => ':attribute maydoni :value yoki undan katta yoki teng bo\'lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan katta yoki teng bo\'lishi kerak.',
        'string'  => ':attribute maydoni :value belgidan uzun yoki teng bo\'lishi kerak.',
        'array'   => ':attribute maydoni :value elementlardan yoki undan ko\'p bo\'lishi kerak.',
    ],
    "image"                => ":attribute maydoni tasvir bo'lishi kerak.",
    "in"                   => "Tanlangan qiymat :attribute uchun noto'g'ri.",
    'in_array'             => ':attribute maydoni :other da mavjud emas.',
    "integer"              => ":attribute maydoni butun son bo'lishi kerak.",
    "ip"                   => ":attribute maydoni haqiqiy IP-manzil bo'lishi kerak.",
    'ipv4'                 => ':attribute maydoni IPv4 manzil bo\'lishi kerak.',
    'ipv6'                 => ':attribute maydoni IPv6 manzil bo\'lishi kerak.',
    'json'                 => ':attribute maydoni JSON qatori bo\'lishi kerak.',
    'lt'                   => [
        'numeric' => ':attribute maydoni :value dan kichik bo\'lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan kichik bo\'lishi kerak.',
        'string'  => ':attribute maydoni :value belgidan kam bo\'lishi kerak.',
        'array'   => ':attribute maydoni :value yoki undan kam elementlardan iborat bo\'lishi kerak.',
    ],
    'lte'                  => [
        'numeric' => ':attribute maydoni :value yoki undan kichik yoki teng bo\'lishi kerak.',
        'file'    => ':attribute fayl hajmi :value kilobaytdan kichik yoki teng bo\'lishi kerak.',
        'string'  => ':attribute maydoni :value belgidan kam yoki teng bo\'lishi kerak.',
        'array'   => ':attribute maydoni :value dan ko\'p elementlardan iborat bo\'lmasligi kerak.',
    ],
    "max"                  => [
        "numeric" => ":attribute maydoni :max dan katta bo'lishi mumkin emas.",
        "file"    => ":attribute maydoni hajmi :max kilobaytdan katta bo'lishi mumkin emas.",
        "string"  => ":attribute maydoni uzunligi :max belgidan ko'p bo'lishi mumkin emas.",
        "array"   => ":attribute maydoni :max dan ko'p elementlardan iborat bo'lishi mumkin emas.",
    ],
    "mimes"                => ":attribute maydoni quyidagi turlardan biri bo'lishi kerak: :values.",
    "mimetypes"            => ":attribute maydoni quyidagi kengaytmalardan biri bo'lishi kerak: :values.",
    "min"                  => [
        "numeric" => ":attribute maydoni kamida :min bo'lishi kerak.",
        "file"    => ":attribute maydoni kamida :min kilobayt bo'lishi kerak.",
        "string"  => ":attribute maydoni kamida :min belgidan uzun bo'lishi kerak.",
        "array"   => ":attribute maydoni kamida :min elementlardan iborat bo'lishi kerak.",
    ],
    "not_in"               => "Tanlangan qiymat :attribute uchun noto'g'ri.",
    'not_regex'            => ':attribute maydoni yaroqsiz formatga ega.',
    "numeric"              => ":attribute maydoni raqam bo'lishi kerak.",
    'present'              => ':attribute maydoni mavjud bo\'lishi kerak.',
    "regex"                => ":attribute maydoni yaroqsiz formatga ega.",
    "required"             => ":attribute maydoni to'ldirilishi shart.",
    "required_if"          => ":other maydoni :value ga teng bo'lganda, :attribute maydoni to'ldirilishi shart.",
    'required_unless'      => ':values ichidan biri :other ga teng bo\'lmasa, :attribute maydoni to\'ldirilishi shart.',
    "required_with"        => ":values ko'rsatkichlaridan biri kiritilganda, :attribute maydoni to'ldirilishi shart.",
    'required_with_all'    => 'Agar :values\'lardan biri kiritilgan bo\'lsa, :attribute maydoni to\'ldirilishi kerak.',
    "required_without"     => ":values ko'rsatkichlaridan hech qaysisi kiritilmagan bo'lsa, :attribute maydoni to'ldirilishi shart.",
    'required_without_all' => 'Agar hech qaysisi :values\'lardan kiritilmagan bo\'lsa, :attribute maydoni to\'ldirilishi kerak.',
    "same"                 => ":attribute maydonining qiymati :other bilan bir xil bo'lishi kerak.",
    "size"                 => [
        "numeric" => ":attribute maydoni :size bo'lishi kerak.",
        "file"    => ":attribute maydoni hajmi :size kilobayt bo'lishi kerak.",
        "string"  => ":attribute maydoni uzunligi :size belgi bo'lishi kerak.",
        "array"   => ":attribute maydonidagi elementlar soni :size bo'lishi kerak.",
    ],
    'starts_with'          => ':attribute maydoni quyidagi qiymatlardan biri bilan boshlanishi kerak: :values.',
    'string'               => ':attribute maydoni qator bo\'lishi kerak.',
    'timezone'             => ':attribute maydoni haqiqiy zona bo\'lishi kerak.',
    "unique"               => ":attribute maydonining qiymati allaqachon mavjud.",
    'uploaded'             => ':attribute yuklab bo\'lmadi.',
    "url"                  => ":attribute maydoni yaroqsiz formatga ega.",
    'uuid'                 => ':attribute maydoni haqiqiy UUID bo\'lishi kerak.',

    /*
    |--------------------------------------------------------------------------
    | Foydalanuvchi tilga oid tafsilotli til qat'rlari
    |--------------------------------------------------------------------------
    |
    | Bu erda "attribute.rule" qator nomlari yordamida ma'lumot elementlari uchun
    | o'z ma'lumotlarini kiritishingiz mumkin. Bu, ma'lumot elementi qoidalari
    | uchun o'zingiz tanlagan xabarni belgilash imkonini beradi.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Foydalanuvchi elementlarning o'z ma'lumotlarini tanlash
    |--------------------------------------------------------------------------
    |
    | Keyingi qatorlar foydalanuvchi interfeysi dasturini o'qish uchun qulay
    | bo'lgan o'qish qurilmalari ismini o'zgartirish uchun foydalaniladi.
    | Masalan, "email" maydonining o'rniga "elektron pochta" chiqadi.
    |
    */


    'attributes' => [],

];
