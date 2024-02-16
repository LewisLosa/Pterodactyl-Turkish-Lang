<?php

return [
    'auth' => [
        'fail' => 'Giris basarisiz',
        'success' => 'Giris yapildi',
        'password-reset' => 'Sifre sifirlandi',
        'reset-password' => 'Sifre sifirlama istegi gonderildi',
        'checkpoint' => 'Iki faktorlu kimlik dogrulama istendi',
        'recovery-token' => 'Iki faktorlu kimlik dogrulama kurtarma kodu kullanildi',
        'token' => 'Iki faktorlu kimlik dogrulama sorunu cozuldu',
        'ip-blocked' => ':identifier icin listelenmeyen IP adresinden gelen istek engellendi',
        'sftp' => [
            'fail' => 'SFTP girisi basarisiz',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-posta degistirildi: :old -> :new',
            'password-changed' => 'Sifre degistirildi',
        ],
        'api-key' => [
            'create' => 'Yeni API anahtari olusturuldu: :identifier',
            'delete' => 'API anahtari silindi: :identifier',
        ],
        'ssh-key' => [
            'create' => 'SSH anahtari eklendi: :fingerprint',
            'delete' => 'SSH anahtari kaldirildi: :fingerprint',
        ],
        'two-factor' => [
            'create' => 'Iki faktorlu kimlik dogrulama etkinlestirildi',
            'delete' => 'Iki faktorlu kimlik dogrulama devre disi birakildi',
        ],
    ],
    'server' => [
        'reinstall' => 'Sunucu yeniden yuklendi',
        'console' => [
            'command' => 'Sunucuda ":command" komutu calistirildi',
        ],
        'power' => [
            'start' => 'Sunucu baslatildi',
            'stop' => 'Sunucu durduruldu',
            'restart' => 'Sunucu yeniden baslatildi',
            'kill' => 'Sunucu islemi sonlandirildi',
        ],
        'backup' => [
            'download' => ':name yedek dosyasi indirildi',
            'delete' => ':name yedek dosyasi silindi',
            'restore' => ':name yedek dosyasi geri yuklendi (silinen dosyalar: :truncate)',
            'restore-complete' => ':name yedek dosyasinin geri yuklemesi tamamlandi',
            'restore-failed' => ':name yedek dosyasinin geri yuklemesi tamamlanamadi',
            'start' => 'Yeni bir :name yedeklemesi baslatildi',
            'complete' => ':name yedeklemesi tamamlandi olarak isaretlendi',
            'fail' => ':name yedeklemesi basarisiz olarak isaretlendi',
            'lock' => ':name yedeklemesi kilitlendi',
            'unlock' => ':name yedeklemesi kilidi acildi',
        ],
        'database' => [
            'create' => 'Yeni veritabani olusturuldu: :name',
            'rotate-password' => ':name veritabani icin sifre donduruldu',
            'delete' => ':name veritabani silindi',
        ],
        'file' => [
            'compress_one' => ':directory:file sikistirildi',
            'compress_other' => ':directory icinde :count dosya sikistirildi',
            'read' => ':file dosyasinin icerigi goruntulendi',
            'copy' => ':file dosyasinin bir kopyasi olusturuldu',
            'create-directory' => ':directory adli dizin olusturuldu: :name',
            'decompress' => ':directory icindeki :files dosya acildi',
            'delete_one' => ':directory:files.0 silindi',
            'delete_other' => ':directory icinde :count dosya silindi',
            'download' => ':file indirildi',
            'pull' => ':url adresinden :directory dizinine uzak bir dosya indirildi',
            'rename_one' => ':directory:files.0.from dosyasi :directory:files.0.to olarak yeniden adlandirildi',
            'rename_other' => ':directory icinde :count dosya yeniden adlandirildi',
            'write' => ':file dosyasina yeni icerik yazildi',
            'upload' => 'Dosya yukleme islemi baslatildi',
            'uploaded' => ':directory:file yuklendi',
        ],
        'sftp' => [
            'denied' => 'Izinler nedeniyle SFTP erisimi engellendi',
            'create_one' => ':files.0 olusturuldu',
            'create_other' => ':count yeni dosya olusturuldu',
            'write_one' => ':files.0 icerigi degistirildi',
            'write_other' => ':count dosyanin icerigi degistirildi',
            'delete_one' => ':files.0 silindi',
            'delete_other' => ':count dosya silindi',
            'create-directory_one' => ':files.0 dizini olusturuldu',
            'create-directory_other' => ':count dizin olusturuldu',
            'rename_one' => ':files.0.from dosyasi :files.0.to olarak yeniden adlandirildi',
            'rename_other' => ':count dosya yeniden adlandirildi veya tasindi',
        ],
        'allocation' => [
            'create' => 'Sunucuya :allocation eklendi',
            'notes' => ':allocation icin notlar guncellendi: ":old" -> ":new"',
            'primary' => ':allocation sunucunun birincil atamasi olarak ayarlandi',
            'delete' => ':allocation atamasi silindi',
        ],
        'schedule' => [
            'create' => ':name zamanlamasi olusturuldu',
            'update' => ':name zamanlamasi guncellendi',
            'execute' => ':name zamanlamasi manuel olarak calistirildi',
            'delete' => ':name zamanlamasi silindi',
        ],
        'task' => [
            'create' => ':name zamanlamasi icin yeni ":action" gorevi olusturuldu',
            'update' => ':name zamanlamasi icin ":action" gorevi guncellendi',
            'delete' => ':name zamanlamasi icin bir gorev silindi',
        ],
        'settings' => [
            'rename' => 'Sunucu adi degistirildi: :old -> :new',
            'description' => 'Sunucu aciklamasi degistirildi: :old -> :new',
        ],
        'startup' => [
            'edit' => ':variable degiskeni ":old" -> ":new" olarak degistirildi',
            'image' => 'Sunucu icin Docker Image guncellendi: :old -> :new',
        ],
        'subuser' => [
            'create' => ':email alt kullanici olarak eklendi',
            'update' => ':email icin alt kullanici izinleri guncellendi',
            'delete' => ':email alt kullanici olarak kaldirildi',
        ],
    ],
];

