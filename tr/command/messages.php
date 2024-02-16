<?php

return [
    'location' => [
        'no_location_found' => 'Sağlanan kısa kodla eşleşen bir kayıt bulunamadı.',
        'ask_short' => 'Konum Kısa Kodu',
        'ask_long' => 'Konum Açıklaması',
        'created' => 'Yeni bir konum oluşturuldu: :name, ID: :id.',
        'deleted' => 'İstenen konum başarıyla silindi.',
    ],
    'user' => [
        'search_users' => 'Bir Kullanıcı Adı, Kullanıcı ID\'si veya E-posta Adresi Girin',
        'select_search_user' => 'Silinecek kullanıcının ID\'si (Yeniden aramak için \'0\' girin)',
        'deleted' => 'Kullanıcı Panel\'den başarıyla silindi.',
        'confirm_delete' => 'Bu kullanıcıyı Panel\'den silmek istediğinizden emin misiniz?',
        'no_users_found' => 'Sağlanan arama terimi için kullanıcı bulunamadı.',
        'multiple_found' => 'Sağlanan kullanıcı için birden fazla hesap bulundu, --no-interaction bayrağı nedeniyle bir kullanıcı silinemiyor.',
        'ask_admin' => 'Bu kullanıcı bir yönetici mi?',
        'ask_email' => 'E-posta Adresi',
        'ask_username' => 'Kullanıcı Adı',
        'ask_name_first' => 'Ad',
        'ask_name_last' => 'Soyad',
        'ask_password' => 'Şifre',
        'ask_password_tip' => 'Kullanıcıya e-posta ile gönderilen rastgele bir şifre ile bir hesap oluşturmak istiyorsanız, bu komutu yeniden çalıştırın (CTRL+C) ve `--no-password` bayrağını geçirin.',
        'ask_password_help' => 'Şifreler en az 8 karakter uzunluğunda olmalı ve en az bir büyük harf ve rakam içermelidir.',
        '2fa_help_text' => [
            'Bu komut, kullanıcının hesabında etkinse 2 faktörlü kimlik doğrulamayı devre dışı bırakır. Bu yalnızca kullanıcı hesabı kilitlendiğinde bir hesap kurtarma komutu olarak kullanılmalıdır.',
            'Bunu yapmak istemediyseniz, işlemi sonlandırmak için CTRL+C tuşlarına basın.',
        ],
        '2fa_disabled' => ':email için 2 faktörlü kimlik doğrulama devre dışı bırakıldı.',
    ],
    'schedule' => [
        'output_line' => '`:schedule` (:hash) içindeki ilk görev için işlem dağıtılıyor.',
    ],
    'maintenance' => [
        'deleting_service_backup' => ':file hizmet yedek dosyası siliniyor.',
    ],
    'server' => [
        'rebuild_failed' => '":name" (#:id) üzerindeki ":node" makinesinde yeniden oluşturma isteği, şu hata ile başarısız oldu: :message',
        'reinstall' => [
            'failed' => '":name" (#:id) üzerindeki ":node" makinesinde yeniden yükleme isteği, şu hata ile başarısız oldu: :message',
            'confirm' => 'Birden fazla sunucuya karşı yeniden yükleme yapmak üzeresiniz. Devam etmek istiyor musunuz?',
        ],
        'power' => [
            'confirm' => ':action işlemini :count sunucuda gerçekleştirmek üzeresiniz. Devam etmek istiyor musunuz?',
            'action_failed' => '":name" (#:id) üzerindeki ":node" makinesinde güç işlemi isteği, şu hata ile başarısız oldu: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Sunucusu (ör. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Portu',
            'ask_smtp_username' => 'SMTP Kullanıcı Adı',
            'ask_smtp_password' => 'SMTP Şifresi',
            'ask_mailgun_domain' => 'Mailgun Etki Alanı',
            'ask_mailgun_endpoint' => 'Mailgun Uç Noktası',
            'ask_mailgun_secret' => 'Mailgun Gizli Anahtarı',
            'ask_mandrill_secret' => 'Mandrill Gizli Anahtarı',
            'ask_postmark_username' => 'Postmark API Anahtarı',
            'ask_driver' => 'E-postaları göndermek için hangi sürücünün kullanılması gerekiyor?',
            'ask_mail_from' => 'E-postaların başlangıç adresi',
            'ask_mail_name' => 'E-postaların görünmesi gereken isim',
            'ask_encryption' => 'Kullanılacak şifreleme yöntemi',
        ],
    ],
];
