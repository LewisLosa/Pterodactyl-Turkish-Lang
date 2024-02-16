<?php

return [
    'validation' => [
        'fqdn_not_resolvable' => 'Sağlanan FQDN veya IP adresi geçerli bir IP adresine çözümlenemedi.',
        'fqdn_required_for_ssl' => 'Bu makine için SSL kullanmak için bir genel IP adresine çözümlenen tam bir alan adı gereklidir.',
    ],
    'notices' => [
        'allocations_added' => 'Bu makinee başarıyla tahsisler eklendi.',
        'node_deleted' => 'Makine panelden başarıyla kaldırıldı.',
        'location_required' => 'Bu panelde bir makine ekleyebilmek için en az bir konum yapılandırmanız gerekmektedir.',
        'node_created' => 'Yeni makine başarıyla oluşturuldu. Bu makinedeki daemonu otomatik olarak yapılandırmak için "Yapılandırma" sekmesini ziyaret edebilirsiniz. <strong>Herhangi bir sunucu ekleyebilmek için en az bir IP adresi ve bağlantı noktası tahsis etmelisiniz.</strong>',
        'node_updated' => 'Makine bilgileri güncellendi. Eğer daemon ayarları değiştirildiyse, bu değişikliklerin etkili olması için onu yeniden başlatmanız gerekecektir.',
        'unallocated_deleted' => '<code>:ip</code> için tahsis edilmemiş tüm bağlantı noktaları silindi.',
    ],
];
