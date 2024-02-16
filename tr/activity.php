<?php

return [
    'auth' => [
        'fail' => 'Giriş başarısız',
        'success' => 'Giriş yapıldı',
        'password-reset' => 'Şifre sıfırlandı',
        'reset-password' => 'Şifre sıfırlama isteği gönderildi',
        'checkpoint' => 'İki faktörlü kimlik doğrulama istendi',
        'recovery-token' => 'İki faktörlü kimlik doğrulama kurtarma kodu kullanıldı',
        'token' => 'İki faktörlü kimlik doğrulama sorunu çözüldü',
        'ip-blocked' => ':identifier için listelenmeyen IP adresinden gelen istek engellendi',
        'sftp' => [
            'fail' => 'SFTP girişi başarısız',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'E-posta değiştirildi: :old -> :new',
            'password-changed' => 'Şifre değiştirildi',
        ],
        'api-key' => [
            'create' => 'Yeni API anahtarı oluşturuldu: :identifier',
            'delete' => 'API anahtarı silindi: :identifier',
        ],
        'ssh-key' => [
            'create' => 'SSH anahtarı eklendi: :fingerprint',
            'delete' => 'SSH anahtarı kaldırıldı: :fingerprint',
        ],
        'two-factor' => [
            'create' => 'İki faktörlü kimlik doğrulama etkinleştirildi',
            'delete' => 'İki faktörlü kimlik doğrulama devre dışı bırakıldı',
        ],
    ],
    'server' => [
        'reinstall' => 'Sunucu yeniden yüklendi',
        'console' => [
            'command' => 'Sunucuda ":command" komutu çalıştırıldı',
        ],
        'power' => [
            'start' => 'Sunucu başlatıldı',
            'stop' => 'Sunucu durduruldu',
            'restart' => 'Sunucu yeniden başlatıldı',
            'kill' => 'Sunucu işlemi sonlandırıldı',
        ],
        'backup' => [
            'download' => ':name yedek dosyası indirildi',
            'delete' => ':name yedek dosyası silindi',
            'restore' => ':name yedek dosyası geri yüklendi (silinen dosyalar: :truncate)',
            'restore-complete' => ':name yedek dosyasının geri yüklemesi tamamlandı',
            'restore-failed' => ':name yedek dosyasının geri yüklemesi tamamlanamadı',
            'start' => 'Yeni bir :name yedeklemesi başlatıldı',
            'complete' => ':name yedeklemesi tamamlandı olarak işaretlendi',
            'fail' => ':name yedeklemesi başarısız olarak işaretlendi',
            'lock' => ':name yedeklemesi kilitlendi',
            'unlock' => ':name yedeklemesi kilidi açıldı',
        ],
        'database' => [
            'create' => 'Yeni veritabanı oluşturuldu: :name',
            'rotate-password' => ':name veritabanı için şifre döndürüldü',
            'delete' => ':name veritabanı silindi',
        ],
        'file' => [
            'compress_one' => ':directory:file sıkıştırıldı',
            'compress_other' => ':directory içinde :count dosya sıkıştırıldı',
            'read' => ':file dosyasının içeriği görüntülendi',
            'copy' => ':file dosyasının bir kopyası oluşturuldu',
            'create-directory' => ':directory adlı dizin oluşturuldu: :name',
            'decompress' => ':directory içindeki :files dosya açıldı',
            'delete_one' => ':directory:files.0 silindi',
            'delete_other' => ':directory içinde :count dosya silindi',
            'download' => ':file indirildi',
            'pull' => ':url adresinden :directory dizinine uzak bir dosya indirildi',
            'rename_one' => ':directory:files.0.from dosyası :directory:files.0.to olarak yeniden adlandırıldı',
            'rename_other' => ':directory içinde :count dosya yeniden adlandırıldı',
            'write' => ':file dosyasına yeni içerik yazıldı',
            'upload' => 'Dosya yükleme işlemi başlatıldı',
            'uploaded' => ':directory:file yüklendi',
        ],
        'sftp' => [
            'denied' => 'İzinler nedeniyle SFTP erişimi engellendi',
            'create_one' => ':files.0 oluşturuldu',
            'create_other' => ':count yeni dosya oluşturuldu',
            'write_one' => ':files.0 içeriği değiştirildi',
            'write_other' => ':count dosyanın içeriği değiştirildi',
            'delete_one' => ':files.0 silindi',
            'delete_other' => ':count dosya silindi',
            'create-directory_one' => ':files.0 dizini oluşturuldu',
            'create-directory_other' => ':count dizin oluşturuldu',
            'rename_one' => ':files.0.from dosyası :files.0.to olarak yeniden adlandırıldı',
            'rename_other' => ':count dosya yeniden adlandırıldı veya taşındı',
        ],
        'allocation' => [
            'create' => 'Sunucuya :allocation eklendi',
            'notes' => ':allocation için notlar güncellendi: ":old" -> ":new"',
            'primary' => ':allocation sunucunun birincil ataması olarak ayarlandı',
            'delete' => ':allocation ataması silindi',
        ],
        'schedule' => [
            'create' => ':name zamanlaması oluşturuldu',
            'update' => ':name zamanlaması güncellendi',
            'execute' => ':name zamanlaması manuel olarak çalıştırıldı',
            'delete' => ':name zamanlaması silindi',
        ],
        'task' => [
            'create' => ':name zamanlaması için yeni ":action" görevi oluşturuldu',
            'update' => ':name zamanlaması için ":action" görevi güncellendi',
            'delete' => ':name zamanlaması için bir görev silindi',
        ],
        'settings' => [
            'rename' => 'Sunucu adı değiştirildi: :old -> :new',
            'description' => 'Sunucu açıklaması değiştirildi: :old -> :new',
        ],
        'startup' => [
            'edit' => ':variable değişkeni ":old" -> ":new" olarak değiştirildi',
            'image' => 'Sunucu için Docker Image güncellendi: :old -> :new',
        ],
        'subuser' => [
            'create' => ':email alt kullanıcı olarak eklendi',
            'update' => ':email için alt kullanıcı izinleri güncellendi',
            'delete' => ':email alt kullanıcı olarak kaldırıldı',
        ],
    ],
];

