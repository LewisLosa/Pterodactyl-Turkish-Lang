<?php

return [
    'location' => [
        'no_location_found' => 'Saglanan kisa kodla eslesen bir kayit bulunamadi.',
        'ask_short' => 'Konum Kisa Kodu',
        'ask_long' => 'Konum Aciklamasi',
        'created' => 'Yeni bir konum olusturuldu: :name, ID: :id.',
        'deleted' => 'Istenen konum basariyla silindi.',
    ],
    'user' => [
        'search_users' => 'Bir Kullanici Adi, Kullanici ID\'si veya E-posta Adresi Girin',
        'select_search_user' => 'Silinecek kullanicinin ID\'si (Yeniden aramak icin \'0\' girin)',
        'deleted' => 'Kullanici Panel\'den basariyla silindi.',
        'confirm_delete' => 'Bu kullaniciyi Panel\'den silmek istediginizden emin misiniz?',
        'no_users_found' => 'Saglanan arama terimi icin kullanici bulunamadi.',
        'multiple_found' => 'Saglanan kullanici icin birden fazla hesap bulundu, --no-interaction bayragi nedeniyle bir kullanici silinemiyor.',
        'ask_admin' => 'Bu kullanici bir yonetici mi?',
        'ask_email' => 'E-posta Adresi',
        'ask_username' => 'Kullanici Adi',
        'ask_name_first' => 'Ad',
        'ask_name_last' => 'Soyad',
        'ask_password' => 'Sifre',
        'ask_password_tip' => 'Kullaniciya e-posta ile gonderilen rastgele bir sifre ile bir hesap olusturmak istiyorsaniz, bu komutu yeniden calistirin (CTRL+C) ve `--no-password` bayragini gecirin.',
        'ask_password_help' => 'Sifreler en az 8 karakter uzunlugunda olmali ve en az bir buyuk harf ve rakam icermelidir.',
        '2fa_help_text' => [
            'Bu komut, kullanicinin hesabinda etkinse 2 faktorlu kimlik dogrulamayi devre disi birakir. Bu yalnizca kullanici hesabi kilitlendiginde bir hesap kurtarma komutu olarak kullanilmalidir.',
            'Bunu yapmak istemediyseniz, islemi sonlandirmak icin CTRL+C tuslarina basin.',
        ],
        '2fa_disabled' => ':email icin 2 faktorlu kimlik dogrulama devre disi birakildi.',
    ],
    'schedule' => [
        'output_line' => '`:schedule` (:hash) icindeki ilk gorev icin islem dagitiliyor.',
    ],
    'maintenance' => [
        'deleting_service_backup' => ':file hizmet yedek dosyasi siliniyor.',
    ],
    'server' => [
        'rebuild_failed' => '":name" (#:id) uzerindeki ":node" makinesinde yeniden olusturma istegi, su hata ile basarisiz oldu: :message',
        'reinstall' => [
            'failed' => '":name" (#:id) uzerindeki ":node" makinesinde yeniden yukleme istegi, su hata ile basarisiz oldu: :message',
            'confirm' => 'Birden fazla sunucuya karsi yeniden yukleme yapmak uzeresiniz. Devam etmek istiyor musunuz?',
        ],
        'power' => [
            'confirm' => ':action islemini :count sunucuda gerceklestirmek uzeresiniz. Devam etmek istiyor musunuz?',
            'action_failed' => '":name" (#:id) uzerindeki ":node" makinesinde guc islemi istegi, su hata ile basarisiz oldu: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Sunucusu (or. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Portu',
            'ask_smtp_username' => 'SMTP Kullanici Adi',
            'ask_smtp_password' => 'SMTP Sifresi',
            'ask_mailgun_domain' => 'Mailgun Etki Alani',
            'ask_mailgun_endpoint' => 'Mailgun Uc Noktasi',
            'ask_mailgun_secret' => 'Mailgun Gizli Anahtari',
            'ask_mandrill_secret' => 'Mandrill Gizli Anahtari',
            'ask_postmark_username' => 'Postmark API Anahtari',
            'ask_driver' => 'E-postalari gondermek icin hangi surucunun kullanilmasi gerekiyor?',
            'ask_mail_from' => 'E-postalarin baslangic adresi',
            'ask_mail_name' => 'E-postalarin gorunmesi gereken isim',
            'ask_encryption' => 'Kullanilacak sifreleme yontemi',
        ],
    ],
];
