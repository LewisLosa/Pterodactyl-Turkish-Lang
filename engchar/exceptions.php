<?php

return [
    'daemon_connection_failed' => 'Daemon ile iletisim kurulmaya calisilirken bir istisna olustu ve HTTP/:code yanit kodu alindi. Bu istisna kaydedildi.',
    'node' => [
        'servers_attached' => 'Bir makinenin silinebilmesi icin bagli hicbir sunucunun olmamasi gerekir.',
        'daemon_off_config_updated' => 'Daemon yapilandirmasi <strong>guncellendi</strong>, ancak yapilandirma dosyasini (config.yml) otomatik olarak guncelleme girisiminde bir hata olustu. Bu degisiklikleri uygulamak icin daemon icin yapilandirma dosyasini manuel olarak guncellemeniz gerekecektir.',
    ],
    'allocations' => [
        'server_using' => 'Bu tahsise su anda bir sunucu atanmis durumda. Bir tahsis yalnizca hicbir sunucu atanmamissa silinebilir.',
        'too_many_ports' => 'Bir seferde 1000den fazla port eklemek desteklenmiyor.',
        'invalid_mapping' => ':port icin saglanan esleme gecersiz ve islenemedi.',
        'cidr_out_of_range' => 'CIDR notasyonu, maske icin yalnizca /25 ile /32 arasinda degerlere izin verir.',
        'port_out_of_range' => 'Bir tahsis icindeki portlar 1024ten buyuk ve 65535e esit veya kucuk olmalidir.',
    ],
    'nest' => [
        'delete_has_servers' => 'Aktif sunuculara bagli bir Yuva Panel uzerinden silinemez.',
        'egg' => [
            'delete_has_servers' => 'Aktif sunuculara bagli bir Baslatici Panel uzerinden silinemez.',
            'invalid_copy_id' => 'Bir komut dosyasini kopyalamak icin secilen Baslatici, mevcut degil veya kendisinden bir komut dosyasi kopyaliyor.',
            'must_be_child' => 'Bu Baslatici icin "Ayarlari Kopyala" yonergesi secilen Yuva icin bir alt secenek olmalidir.',
            'has_children' => 'Bu Baslatici, diger bir veya daha fazla Baslaticiya ebeveynlik yapiyor. Lutfen bu Baslaticiyi silmeden once bu Baslaticilari silin.',
        ],
        'variables' => [
            'env_not_unique' => ':name ortam degiskeni bu Baslatici icin benzersiz olmalidir.',
            'reserved_name' => ':name ortam degiskeni korumalidir ve bir degiskene atanamaz.',
            'bad_validation_rule' => '":rule" dogrulama kurali bu uygulama icin gecerli bir kural degil.',
        ],
        'importer' => [
            'json_error' => 'JSON dosyasi ayristirilmaya calisilirken bir hata olustu: :error.',
            'file_error' => 'Saglanan JSON dosyasi gecerli degil.',
            'invalid_json_provided' => 'Saglanan JSON dosyasi taninabilir bir formatta degil.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Kendi alt kullanici hesabinizi duzenlemek izin verilmez.',
        'user_is_owner' => 'Sunucu sahibini bu sunucu icin alt kullanici olarak ekleyemezsiniz.',
        'subuser_exists' => 'Bu e-posta adresine sahip bir kullanici zaten bu sunucu icin bir alt kullanici olarak atanmis.',
    ],
    'databases' => [
        'delete_has_databases' => 'Etkin veritabanlarina bagli olan bir veritabani ana sunucusunu silemezsiniz.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Zincirlenmis bir gorev icin maksimum aralik suresi 15 dakikadir.',
    ],
    'locations' => [
        'has_nodes' => 'Aktif makinelere bagli bir konumu silemezsiniz.',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">Makine #:node</a> uzerindeki anahtarlarin geri alinmasi basarisiz oldu. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Otomatik dagitim icin belirtilen gereksinimleri karsilayan makine bulunamadi.',
        'no_viable_allocations' => 'Otomatik dagitim icin belirtilen gereksinimleri karsilayan tahsis bulunamadi.',
    ],
    'api' => [
        'resource_not_found' => 'Istenen kaynak bu sunucuda mevcut degil.',
    ],
];
