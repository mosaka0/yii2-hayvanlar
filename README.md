# yii2-Hayvanlar
Hayvanat bahçesi hayvanlar hakkında bilgi modülü

# İşlev
Hayvanat bahçesine alınan ve hayvanat bahçesinden bırakılan hayvanların bilgilerinin tutulduğu bir modüldür. </br>
- Yeni bir hayvan özellikleri ile birlikte eklenebilir.
- Eklenmiş hayvanın özellikleri güncellenebilir.
- Hayvanlar tablodan silinebilir.
- Silinen hayvanlar tamamiyle yok olmaz 2. tablo olan silinen hayvanların bulunduğu tabloya gönderilir. Bu şekilde 2 tablo arasında bir bağlantı bulunur.
- Tabloda bulunan hayvanlar aranarak kolaylıkla bilgilerine ulaşılabilir.


# Kurulum
1-ssh komutu ile vagrant makinesine bağlanın daha sonra gerekli dizine gidin.


`composer require --prefer-dist mosaka0/yii2-hayvanlar "dev-main"` komutuyla modülleri kurun.

2-Kurduktan sonra backend\config\main.php üzerinde
```
'modules' => [
        'hayvanlar' => [
            'class' => 'backend\modules\hayvanlar\Module'
        ]
    ],
 ```
değişikliğini yapın.


3-Proje diziniz içindeyken 
`php yii migrate/up --migrationPath=@vendor/mosaka0/yii2-hayvanlar/src/migrations` komutunu çalıştırarak migration işlemlerinizi tamamlayın.

Modüle http://advanced/backend/web/index.php?r=hayvanlar/hayvanlar/index 'den erişebilirsiniz.

# Modül Hakkında

## Migrations

Modül 2 tane tabloya sahiptir. Tablolar birbirleri ile ilişkilidir. Tutulan 1. tabloda tutulan hayvan bilgileri silindiğinde 2. tabloya geçerek silinmiş hayvan bilgilerini tutar. 

![image](https://user-images.githubusercontent.com/73715047/104778489-7849b100-578e-11eb-9b09-6018df8fe4b7.png)

Tabloların içerikleri aynıdır.

![image](https://user-images.githubusercontent.com/73715047/104778588-aaf3a980-578e-11eb-9345-a0f9b69d6c0c.png)

## Gii üzerinde Models ve Crud

Tüm tablolar için modeller gii üzerinden oluşturulmuştur. </br>
Tablolarda yapılması gereken işlemleri (create,update,delete) yapabilmemizi sağlayan modelleri Crud Generator ile oluşturulmuştur. Sonucunda Controller ve views dosyaları oluşmuş oldu.

Son olarak arayüzde yapılan silme işlemi için Controller üzerindeki delete fonksiyonunda gerekli değişiklikleri yaparak 2 tablo arasındaki gerekli bağlantıyı kurmuş oldum.

# Arayüz Görselleri
1.Tablo
![image](https://user-images.githubusercontent.com/73715047/104780218-80572000-5791-11eb-82e1-07a85551f2f2.png)

2.Tablo
![image](https://user-images.githubusercontent.com/73715047/104780306-9fee4880-5791-11eb-8880-e75b2711ff56.png)

