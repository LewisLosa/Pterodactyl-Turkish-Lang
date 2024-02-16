<?php

return [
    'exceptions' => [
        'no_new_default_allocation' => 'Bu sunucunun varsayilan tahsisini silmeye calisiyorsunuz ancak kullanilacak baska bir yedek tahsis yok.',
        'marked_as_failed' => 'Bu sunucu onceki bir kurulumda basarisiz oldugu isaretlendi. Bu durumda gecerli durum degistirilemez.',
        'bad_variable' => ':name degiskeniyle ilgili bir dogrulama hatasi olustu.',
        'daemon_exception' => 'Daemon ile iletisim kurmaya calisirken bir istisna olustu ve HTTP/:code yanit kodu alindi. Bu istisna kaydedildi. (istek id: :request_id)',
        'default_allocation_not_found' => 'Istenen varsayilan tahsis bu sunucunun tahsislerinde bulunamadi.',
    ],
    'alerts' => [
        'startup_changed' => 'Bu sunucunun baslangic yapilandirmasi guncellendi. Eger sunucunun yuvasi veya yumurtasi degistirildiyse, su anda bir yeniden yukleme gerceklesecektir.',
        'server_deleted' => 'Sunucu sistemden basariyla silindi.',
        'server_created' => 'Sunucu panelde basariyla olusturuldu. Lutfen daemonun bu sunucuyu tamamen yuklemesi icin birkac dakika bekleyin.',
        'build_updated' => 'Bu sunucunun yapi ayrintilari guncellendi. Bazi degisikliklerin etkili olmasi icin bir yeniden baslatma gerekebilir.',
        'suspension_toggled' => 'Sunucunun askiya alma durumu :status olarak degistirildi.',
        'rebuild_on_boot' => 'Bu sunucu, bir Docker Konteynerinin yeniden olusturulmasini gerektiren sekilde isaretlendi. Bu, sunucunun bir sonraki calistirilmasinda gerceklesecektir.',
        'install_toggled' => 'Bu sunucunun kurulum durumu degistirildi.',
        'server_reinstalled' => 'Bu sunucu, su anda yeniden yukleme icin siraya alindi.',
        'details_updated' => 'Sunucu ayrintilari basariyla guncellendi.',
        'docker_image_updated' => 'Varsayilan Docker imajini bu sunucu icin kullanilacak sekilde basariyla degistirildi. Bu degisikligi uygulamak icin bir yeniden baslatma gereklidir.',
        'node_required' => 'Bu panelde bir sunucu ekleyebilmek icin en az bir makine yapilandirmaniz gerekmektedir.',
        'transfer_nodes_required' => 'Sunuculari transfer edebilmek icin en az iki makine yapilandirmaniz gerekmektedir.',
        'transfer_started' => 'Sunucu transferi baslatildi.',
        'transfer_not_viable' => 'Sectiginiz makine, bu sunucuyu barindirmak icin gereken disk alanina veya bellege sahip degil.',
    ],
];

