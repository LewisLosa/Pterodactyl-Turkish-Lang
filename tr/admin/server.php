<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Bu sunucunun varsayılan tahsisini silmeye çalışıyorsunuz ancak kullanılacak başka bir yedek tahsis yok.',
        'marked_as_failed' => 'Bu sunucu önceki bir kurulumda başarısız olduğu işaretlendi. Bu durumda geçerli durum değiştirilemez.',
        'bad_variable' => ':name değişkeniyle ilgili bir doğrulama hatası oluştu.',
        'daemon_exception' => 'Daemon ile iletişim kurmaya çalışırken bir istisna oluştu ve HTTP/:code yanıt kodu alındı. Bu istisna kaydedildi. (istek id: :request_id)',
        'default_allocation_not_found' => 'İstenen varsayılan tahsis bu sunucunun tahsislerinde bulunamadı.',
    ],
    'alerts' => [
        'startup_changed' => 'Bu sunucunun başlangıç yapılandırması güncellendi. Eğer sunucunun yuvası veya yumurtası değiştirildiyse, şu anda bir yeniden yükleme gerçekleşecektir.',
        'server_deleted' => 'Sunucu sistemden başarıyla silindi.',
        'server_created' => 'Sunucu panelde başarıyla oluşturuldu. Lütfen daemonun bu sunucuyu tamamen yüklemesi için birkaç dakika bekleyin.',
        'build_updated' => 'Bu sunucunun yapı ayrıntıları güncellendi. Bazı değişikliklerin etkili olması için bir yeniden başlatma gerekebilir.',
        'suspension_toggled' => 'Sunucunun askıya alma durumu :status olarak değiştirildi.',
        'rebuild_on_boot' => 'Bu sunucu, bir Docker Konteynerinin yeniden oluşturulmasını gerektiren şekilde işaretlendi. Bu, sunucunun bir sonraki çalıştırılmasında gerçekleşecektir.',
        'install_toggled' => 'Bu sunucunun kurulum durumu değiştirildi.',
        'server_reinstalled' => 'Bu sunucu, şu anda yeniden yükleme için sıraya alındı.',
        'details_updated' => 'Sunucu ayrıntıları başarıyla güncellendi.',
        'docker_image_updated' => 'Varsayılan Docker imajını bu sunucu için kullanılacak şekilde başarıyla değiştirildi. Bu değişikliği uygulamak için bir yeniden başlatma gereklidir.',
        'node_required' => 'Bu panelde bir sunucu ekleyebilmek için en az bir makine yapılandırmanız gerekmektedir.',
        'transfer_nodes_required' => 'Sunucuları transfer edebilmek için en az iki makine yapılandırmanız gerekmektedir.',
        'transfer_started' => 'Sunucu transferi başlatıldı.',
        'transfer_not_viable' => 'Seçtiğiniz makine, bu sunucuyu barındırmak için gereken disk alanına veya belleğe sahip değil.',
    ],
];

