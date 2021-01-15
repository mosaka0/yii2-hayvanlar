# yii2-Hayvanlar
Hayvanat bahçesi hayvanlar hakkında bilgi modülü

# İşlev
Hayvanat bahçesine alınan ve hayvanat bahçesinden bırakılan hayvanların bilgilerinin tutulduğu bir modüldür.

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

# Modül Hakkında

## Migrations

Modül 2 tane tabloya sahiptir. Tablolar birbirleri ile ilişkilidir. Tutulan 1. tabloda tutulan hayvan bilgileri silindiğinde 2. tabloya geçerek silinmiş hayvan bilgilerini tutar. 

![image](https://user-images.githubusercontent.com/73715047/104778489-7849b100-578e-11eb-9b09-6018df8fe4b7.png)

Tabloların içerikleri aynıdır.

![image](https://user-images.githubusercontent.com/73715047/104778588-aaf3a980-578e-11eb-9345-a0f9b69d6c0c.png)

## Gii üzerinde Models ve Crud

Tüm tablolar için modeller gii üzerinden oluşturulmuştur. </br>
Tablolarda yapılması gereken işlemleri (create,update,delete) yapabilmemizi sağlayan modelleri Crud Generator ile oluşturduk. Sonucunda Controller ve views dosyaları oluşmuş oldu.
