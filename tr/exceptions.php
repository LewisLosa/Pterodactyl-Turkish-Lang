<?php

return [
    'daemon_connection_failed' => 'Daemon ile iletişim kurulmaya çalışılırken bir istisna oluştu ve HTTP/:code yanıt kodu alındı. Bu istisna kaydedildi.',
    'node' => [
        'servers_attached' => 'Bir makinenin silinebilmesi için bağlı hiçbir sunucunun olmaması gerekir.',
        'daemon_off_config_updated' => 'Daemon yapılandırması <strong>güncellendi</strong>, ancak yapılandırma dosyasını (config.yml) otomatik olarak güncelleme girişiminde bir hata oluştu. Bu değişiklikleri uygulamak için daemon için yapılandırma dosyasını manuel olarak güncellemeniz gerekecektir.',
    ],
    'allocations' => [
        'server_using' => 'Bu tahsise şu anda bir sunucu atanmış durumda. Bir tahsis yalnızca hiçbir sunucu atanmamışsa silinebilir.',
        'too_many_ports' => 'Bir seferde 1000den fazla port eklemek desteklenmiyor.',
        'invalid_mapping' => ':port için sağlanan eşleme geçersiz ve işlenemedi.',
        'cidr_out_of_range' => 'CIDR notasyonu, maske için yalnızca /25 ile /32 arasında değerlere izin verir.',
        'port_out_of_range' => 'Bir tahsis içindeki portlar 1024ten büyük ve 65535e eşit veya küçük olmalıdır.',
    ],
    'nest' => [
        'delete_has_servers' => 'Aktif sunuculara bağlı bir Yuva Panel üzerinden silinemez.',
        'egg' => [
            'delete_has_servers' => 'Aktif sunuculara bağlı bir Başlatıcı Panel üzerinden silinemez.',
            'invalid_copy_id' => 'Bir komut dosyasını kopyalamak için seçilen Başlatıcı, mevcut değil veya kendisinden bir komut dosyası kopyalıyor.',
            'must_be_child' => 'Bu Başlatıcı için "Ayarları Kopyala" yönergesi seçilen Yuva için bir alt seçenek olmalıdır.',
            'has_children' => 'Bu Başlatıcı, diğer bir veya daha fazla Başlatıcıya ebeveynlik yapıyor. Lütfen bu Başlatıcıyı silmeden önce bu Başlatıcıları silin.',
        ],
        'variables' => [
            'env_not_unique' => ':name ortam değişkeni bu Başlatıcı için benzersiz olmalıdır.',
            'reserved_name' => ':name ortam değişkeni korumalıdır ve bir değişkene atanamaz.',
            'bad_validation_rule' => '":rule" doğrulama kuralı bu uygulama için geçerli bir kural değil.',
        ],
        'importer' => [
            'json_error' => 'JSON dosyası ayrıştırılmaya çalışılırken bir hata oluştu: :error.',
            'file_error' => 'Sağlanan JSON dosyası geçerli değil.',
            'invalid_json_provided' => 'Sağlanan JSON dosyası tanınabilir bir formatta değil.',
        ],
    ],
    'subusers' => [
        'editing_self' => 'Kendi alt kullanıcı hesabınızı düzenlemek izin verilmez.',
        'user_is_owner' => 'Sunucu sahibini bu sunucu için alt kullanıcı olarak ekleyemezsiniz.',
        'subuser_exists' => 'Bu e-posta adresine sahip bir kullanıcı zaten bu sunucu için bir alt kullanıcı olarak atanmış.',
    ],
    'databases' => [
        'delete_has_databases' => 'Etkin veritabanlarına bağlı olan bir veritabanı ana sunucusunu silemezsiniz.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Zincirlenmiş bir görev için maksimum aralık süresi 15 dakikadır.',
    ],
    'locations' => [
        'has_nodes' => 'Aktif makinelere bağlı bir konumu silemezsiniz.',
    ],
    'users' => [
        'node_revocation_failed' => '<a href=":link">Makine #:node</a> üzerindeki anahtarların geri alınması başarısız oldu. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'Otomatik dağıtım için belirtilen gereksinimleri karşılayan makine bulunamadı.',
        'no_viable_allocations' => 'Otomatik dağıtım için belirtilen gereksinimleri karşılayan tahsis bulunamadı.',
    ],
    'api' => [
        'resource_not_found' => 'İstenen kaynak bu sunucuda mevcut değil.',
    ],
];
