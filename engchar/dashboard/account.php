<?php

return [
    'email' => [
        'title' => 'E-posta adresinizi guncelleyin',
        'updated' => 'E-posta adresiniz guncellendi.',
    ],
    'password' => [
        'title' => 'Sifrenizi degistirin',
        'requirements' => 'Yeni sifreniz en az 8 karakter uzunlugunda olmalidir.',
        'updated' => 'Sifreniz guncellendi.',
    ],
    'two_factor' => [
        'button' => 'Iki Adimli Dogrulamayi Yapilandir',
        'disabled' => 'Hesabinizdan iki adimli dogrulama devre disi birakildi. Artik giris yaparken bir kod saglamaniz istenmeyecek.',
        'enabled' => 'Hesabinizda iki adimli dogrulama etkinlestirildi! Bundan sonra giris yaparken, cihaziniz tarafindan uretilen kodu saglamaniz gerekecek.',
        'invalid' => 'Saglanan kod gecersizdi.',
        'setup' => [
            'title' => 'Iki Adimli Dogrulamayi Ayarla',
            'help' => 'Kodu tarayamiyor musunuz? Asagidaki kodu uygulamaniza girin:',
            'field' => 'Kodu Girin',
        ],
        'disable' => [
            'title' => 'Iki Adimli Dogrulamayi Devre Disi Birak',
            'field' => 'Kodu Girin',
        ],
    ],
];
