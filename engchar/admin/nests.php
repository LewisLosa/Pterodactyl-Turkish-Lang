<?php

return [
    'notices' => [
        'created' => 'Yeni bir yuva, :name, basariyla olusturuldu.',
        'deleted' => 'Panel\'den istenen yuvayi basariyla sildiniz.',
        'updated' => 'Yuvanin yapilandirma secenekleri basariyla guncellendi.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Bu Baslatici ve iliskili degiskenler basariyla ice aktarildi.',
            'updated_via_import' => 'Bu Baslatici, saglanan dosya kullanilarak guncellendi.',
            'deleted' => 'Panel\'den istenen baslatici basariyla silindi.',
            'updated' => 'Baslatici yapilandirmasi basariyla guncellendi.',
            'script_updated' => 'Baslatici yukleme betigi guncellendi ve sunucular yuklendiginde her zaman calisacaktir.',
            'egg_created' => 'Yeni bir baslatici basariyla olusturuldu. Bu yeni baslaticiyi uygulamak icin calisan daemonlari yeniden baslatmaniz gerekecektir.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => '":variable" degiskeni silindi ve yeniden olusturulan sunucularda artik kullanilamayacak.',
            'variable_updated' => '":variable" degiskeni guncellendi. Degisiklikleri uygulamak icin bu degiskeni kullanan sunuculari yeniden olusturmaniz gerekecektir.',
            'variable_created' => 'Yeni degisken basariyla olusturuldu ve bu baslaticiya atandi.',
        ],
    ],
];
