Yusuf Hamza Özçelik

200201112

İnternet Programcılığı Proje Ödevi

Tarih:16.01.2021

Önemli NOT:HOCAM lütfen bu linke tıklayarak videoyu izlermisiniz

-->https://yadi.sk/i/pO08EgQYHPpIAA

Yii2 KÜTÜPHANE MODÜLÜ


Ben proje ödevimde bir kütüphane modülü tasarladım. Bu modül ile kütüphaneye yeni üyeler kayıt
edebiliyoruz.Ayrıca kitap kiralayabiliyoruz.Bunları size görsellerle anlatmaya çalışacağım.

Öncelikle bu modülü çalıştırabilmeniz için vagrantın , virtualbox ve yii frameworkunun bilgisayarınızda kurulu olduğunu
varsayıyorum.Ben bu projemde ide olarak visual studio code kullandım.Projemizin dosyasına gelip yukarıdan cmd ekranını açıyoruz.
Consola buradaki görseldeki gibi "code ." yazıyoruz ve entere basıyoruz.
-->![Alt text](https://i.hizliresim.com/UUHxHS.png)

Artık kodumuzu ide de kullanıbiliriz. Visual studio code'dan yeni bir terminal açıp vagrantı ayağa kaldırıyoruz.
Görselde ki komutları yazmalıyız 
-->![Alt text](https://i.hizliresim.com/kl3exi.png)


Makinamız ayağa kalktıktan sonra yii advanced modülünü nereye kurduysak onu çalıştırmamız gerekiyor.
Bunun için terminala yazacağımız komut görseldeki gibidir.
-->![Alt text](https://i.hizliresim.com/g2uRC6.png)
Not: Buradaki webOrgun benim vagrant makinamın adı. vagrant@"advanced" deki advanced ise benim yiinin yüklü olduğu 
klasörümün adı Sizde bu değişiklik gösterebilir. 

Şimdi makinamız ayağa kalktı. Modulumuzu indirebilmek için packagistde yüklemiş olduğum projeyi indirmeniz gerekiyor.
Bunu yapmak da çok basit. Yapmanız gereken tek şey terminale görseldeki kodu yazmanız gerecektir.
-->![Alt text](https://i.hizliresim.com/vFrbCk.png)


Artık modülümüz kendi bilgisayarımıza inmiş oldu.Kontrol etmek için vendorun altındaki klasörden bakabilirsiniz 
Görselden bakabilirsiniz.-->

![Alt text](https://i.hizliresim.com/FqQBZg.png)

Projemdeki klasör yapısı yukarıdaki görseldeki gibidir. Src klasörünün altında migrationumu oluşturdum.

Bu adımdan sonra projeye her yerden erişebilmek için. Advanced klasörümün altında(sizde yii nerede yüklüyse) backendin altında
config/main.php dosyasına gidip görseldeki kodu yapıştırmanız gerekir.
-->![Alt text](https://i.hizliresim.com/IhqYeD.png)


Models klasörünün altındaki kayıt tablosu için form ekranında kayıtlar boş bırakılmasın diye 
görseldeki kodu yazdım.Aynı şekilde kirala tablosu içinde yaptım.
 -->![Alt text](https://i.hizliresim.com/9iXEXX.png)



Şimdi modülümüzü görelim.Görebilmek için tarayıcımızın url kısmına http://advanced/backend/web/index.php?r=library/default
yazmalısınız.Karşımıza böyle bir ekran çıkacak. -->
![Alt text](https://i.hizliresim.com/Zr60VN.png)

Burada karşımıza çıkan 2 butondan kayıt olmaya git dersek bizi kayıt olma sayfasına gönderir.
--> ![Alt text](https://i.hizliresim.com/UpBjop.png)

Dilersek yeni kayıt ekleyebiliriz.Bunun için yeni kayıt oluştur butonunua basmalıyız
--> ![Alt text](https://i.hizliresim.com/lsbFSk.png)

Kayıdımızı daha sonra düzenlemek için kayıt ekranından kişilerin yanındaki kalem iconuna basarak düzenleyebiliriz.
-->![Alt text](https://i.hizliresim.com/FcON2K.png)
Modlümüzün bir kolaylığıda yukarıda bulunan ekmek kırıntısı yoluyla en başa tekrar dönüp.Kitap kiralama sayfasına kolayca
erişebiliyoruz.Ana sayfamıza geri dönüp kitap kiralamaya git diyelim.
-->![Alt text](https://i.hizliresim.com/MgHVvi.png)

Dilersek başka bir öğrenci kitap kiralayabilir. Bunun için Kitap kirala butonuna basmalıyız.Buradan görseli inceleyebilirsiniz.
-->![Alt text](https://i.hizliresim.com/JvQfxp.png)

Aynı şekilde kayıt ekleme modülünde olduğu gibi bu modüldede kiralamaları düzenleyebilirsiniz.Görseldeki butonlara tıklayarak.
--> ![Alt text](https://i.hizliresim.com/uBsuTl.png)



Ödevimde Migrations,Controllers,Helpers,ActiveRecord,Widgets,Models,tabloların arasında bir ilişki kullandım.

Migrations,Models ve Controllers-->

![Alt text](https://i.hizliresim.com/FqQBZg.png)



Helpers-->
![Alt text](https://i.hizliresim.com/EV7POs.png)


ActiveRecord-->

![Alt text](https://i.hizliresim.com/7yvY3T.png)


Widgets-->

![Alt text](https://i.hizliresim.com/T3ESAT.png)



Tablolar arasındaki ilişki-->

![Alt text](https://i.hizliresim.com/Aga2Mu.png)


Not:Hocam ödevi yaparken en az 30 tane hatayla karşılaştım.Çok fazla vakit kaybettim hatalar yüzünden.3 kere vagrant silip tekrar kurdum.
Ödevi bu şekilde bitirebildim.Bütün derslerineze geldim.Siz sabahçı derslerine iptal ettiğinizde ben o günkü akşam dersinde bile girdim.
İlk haftalarda %70 devamlığa bakacağım demiştiniz.Ama derslere çok az sayıda öğrenci geldi.Bende onlardan biriyim.Lütfen not verirken bunları
göz önünde bulundurun saygılar.
