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
Consola buradaki görseldeki gibi "code ." yazıyoruz ve entere basıyoruz.-->
https://yadi.sk/i/e9A-1KLtMFsTjA

Artık kodumuzu ide de kullanıbiliriz. Visual studio code'dan yeni bir terminal açıp vagrantı ayağa kaldırıyoruz.
Görselde ki komutları yazmalıyız -->
https://yadi.sk/i/J2HbMD1Dmr1itA

Makinamız ayağa kalktıktan sonra yii advanced modülünü nereye kurduysak onu çalıştırmamız gerekiyor.
Bunun için terminala yazacağımız komut görseldeki gibidir.
-->https://yadi.sk/i/YazYglEPpsdxCQ
Not: Buradaki webOrgun benim vagrant makinamın adı. vagrant@"advanced" deki advanced ise benim yiinin yüklü olduğu 
klasörümün adı Sizde bu değişiklik gösterebilir. 

Şimdi makinamız ayağa kalktı. Modulumuzu indirebilmek için packagistde yüklemiş olduğum projeyi indirmeniz gerekiyor.
Bunu yapmak da çok basit. Yapmanız gereken tek şey terminale görseldeki kodu yazmanız gerecektir.
-->https://yadi.sk/i/Ui5A9TBdea70Zg


Artık modülümüz kendi bilgisayarımıza inmiş oldu.Kontrol etmek için vendorun altındaki klasörden bakabilirsiniz 
Görselden bakabilirsiniz.-->https://yadi.sk/i/oQjes29XaPmsLQ

Bu adımdan sonra projeye her yerden erişebilmek için. Advanced klasörümün altında(sizde yii nerede yüklüyse) backendin altında
config/main.php dosyasına gidip görseldeki kodu yapıştırmanız gerekir.
-->https://yadi.sk/i/6lGYatyqqcLhjA


Projemdeki klasör yapısı yukarıdaki görseldeki gibidir. Src klasörünün altında migrationumu oluşturdum.

Models klasörünün altındaki kayıt tablosu için form ekranında kayıtlar boş bırakılmasın diye 
görseldeki kodu yazdım.Aynı şekilde kirala tablosu içinde yaptım.
 -->https://yadi.sk/i/A55i1rzjiH8Yag



Şimdi modülümüzü görelim.Görebilmek için tarayıcımızın url kısmına http://advanced/backend/web/index.php?r=library/default
yazmalısınız.Karşımıza böyle bir ekran çıkacak. -->
https://yadi.sk/i/cGocQvAefucmPg

Burada karşımıza çıkan 2 butondan kayıt olmaya git dersek bizi kayıt olma sayfasına gönderir.
--> https://yadi.sk/i/JMzmKy69G8Suzg

Dilersek yeni kayıt ekleyebiliriz.Bunun için yeni kayıt oluştur butonunua basmalıyız
--> https://yadi.sk/i/HBAgZ2lq7qXnpA

Kayıdımızı daha sonra düzenlemek için kayıt ekranından kişilerin yanındaki kalem iconuna basarak düzenleyebiliriz.
--> https://yadi.sk/i/-BUNg69OR2tcFg

Modlümüzün bir kolaylığıda yukarıda bulunan ekmek kırıntısı yoluyla en başa tekrar dönüp.Kitap kiralama sayfasına kolayca
erişebiliyoruz.Ana sayfamıza geri dönüp kitap kiralamaya git diyelim.
--> https://yadi.sk/i/qnlRkLBG1RIYNg

Dilersek başka bir öğrenci kitap kiralayabilir. Bunun için Kitap kirala butonuna basmalıyız.Buradan görseli inceleyebilirsiniz.
--> https://yadi.sk/i/-C6wHhwHWOGHNg

Aynı şekilde kayıt ekleme modülünde olduğu gibi bu modüldede kiralamaları düzenleyebilirsiniz.Görseldeki butonlara tıklayarak.
--> https://yadi.sk/i/f0uhSj2UA196Ew



Ödevimde Migrations,Controllers,Helpers,ActiveRecord,Widgets,Models,tabloların arasında bir ilişki kullandım.

Migration->https://yadi.sk/i/oQjes29XaPmsLQ

Controllers-->https://yadi.sk/i/oQjes29XaPmsLQ

Helpers->https://yadi.sk/i/QepexiPsV_hAbw

ActiveRecord->https://yadi.sk/i/L0f__Iccy7gAHg

Widgets->https://yadi.sk/i/NVPYZcOCiSXkRQ

Models->https://yadi.sk/i/oQjes29XaPmsLQ

Tablolar arasındaki ilişki-->https://yadi.sk/i/v_JLrWfxHolEqQ


Not:Hocam ödevi yaparken en az 30 tane hatayla karşılaştım.Çok fazla vakit kaybettim hatalar yüzünden.3 kere vagrant silip tekrar kurdum.
Ödevi bu şekilde bitirebildim.Bütün derslerineze geldim.Siz sabahçı derslerine iptal ettiğinizde ben o günkü akşam dersinde bile girdim.
İlk haftalarda %70 devamlığa bakacağım demiştiniz.Ama derslere çok az sayıda öğrenci geldi.Bende onlardan biriyim.Lütfen not verirken bunları
göz önünde bulundurun saygılar.
