<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Saglanan FQDN veya IP adresi gecerli bir IP adresine cozumlenemedi.',
        'fqdn_required_for_ssl' => 'Bu makine icin SSL kullanmak icin bir genel IP adresine cozumlenen tam bir alan adi gereklidir.',
    ],
    'notices' => [
        'allocations_added' => 'Bu makinee basariyla tahsisler eklendi.',
        'node_deleted' => 'Makine panelden basariyla kaldirildi.',
        'location_required' => 'Bu panelde bir makine ekleyebilmek icin en az bir konum yapilandirmaniz gerekmektedir.',
        'node_created' => 'Yeni makine basariyla olusturuldu. Bu makinedeki daemonu otomatik olarak yapilandirmak icin "Yapilandirma" sekmesini ziyaret edebilirsiniz. <strong>Herhangi bir sunucu ekleyebilmek icin en az bir IP adresi ve baglanti noktasi tahsis etmelisiniz.</strong>',
        'node_updated' => 'Makine bilgileri guncellendi. Eger daemon ayarlari degistirildiyse, bu degisikliklerin etkili olmasi icin onu yeniden baslatmaniz gerekecektir.',
        'unallocated_deleted' => '<code>:ip</code> icin tahsis edilmemis tum baglanti noktalari silindi.',
    ],
];
