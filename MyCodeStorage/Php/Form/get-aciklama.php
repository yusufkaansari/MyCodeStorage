<!--
PHP Get Metodu Nedir?
PHP Get Metodu Nedir? : Bir HTML Form üzerinden doldurulan tüm verilerin Url üzerinden gönderileceği veri gönderim çeşididir. Get metodu üzerinden gönderilen verileri güvenliği yüksek seviyede değildir. Bu konuda kesinlikle sizi uyarabilir bir sonraki yazımız olan daha güvenli veri gönderme çeşidini sizlerle paylaşacağım.

Örnek Get Metodu Url Biçimi -->
https://webcesi.com/iletisim.php?ad=...&konu=...&telefon=...&mesaj=...
<!--
Açıklama: Html form doldurulduktan sonra url yukarıda gösterildiği gibi olmaktadır. “…”  konulan yerlere içerikler gelmektedir. iletisim.php sayfasından sonra hemen “?” ile başlayıp her parametre için “&” konulmalıdır.

Get Metodu form üzerinde aşağıdaki veriler ve daha fazlası için veri göndermeyi desteklemektedir. Nasıl veri göndereceğini yazı içerisinde bir sonraki başlıkta belirteceğim. Aşağıda gönderilen verilerin tiplerini belirteceğim.

Yazı (text)
Çoktan seçmeli (checkbox)
Tek seçmeli (radio)
Uzun Yazı Alanı (textarea)
Gizli bilgi (hidden)
Bu tarz ve buna benzeyen form bileşenlerinin içindeki doldurulan verilerin gönderme işlemini yapmaktadır.

Get Metodu Nasıl Kullanılır?
Get metodu PHP üzerinden kullanılan bir metot’dur. Ancak tabi ki de bu metodu kullanabilmemiz için ilk önce Html bir formdan verileri göndermemiz gerekmektedir. Kısa bir örnek ve kodlarıyla sizlere bir HTML form ve içindeki verilerin Php üzerinden nasıl çekileceğinin örneğini yapacağım.

Not: Html Form üzerindeki method bölümünü get olarak yazılmalıdırç

HTML Kod (iletisim.html):
-->
<form name="iletisim" action="iletisim.php" method="get">
    <table border="1">
        <tr>
            <td>Ad Soyad</td>
            <td><input type="text" name="adsoyad" /></td>
        </tr>
        <tr>
            <td>Telefon</td>
            <td><input type="text" name="telefon" /></td>
        </tr>
        <tr>
            <td>Mesaj</td>
            <td><textarea  name="mesaj" id="mesaj" ></textarea></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="gonder" value="Gönder" /></td>
        </tr>
    </table>
</form>
<!--
Tüm veriler doğrudan iletisim.php sayfasına gönderilmektedir.

PHP Kod (iletisim.php): -->

<?php
    $adsoyad = $_GET["adsoyad"];
    $telefon = $_GET["telefon"];
    $mesaj   = $_GET["mesaj"];

    echo $adsoyad;
    echo $telefon;
    echo $mesaj;
?>
<!--
Açıklama: HTML iletişim sayfasından gönderilen tüm verilerin iletisim.php tarafında get metodu ile getirme bu şekilde olmaktadır. $_GET[“parametre”] parametresinin içerisine yazdığımız parametreler form üzerinden gönderilmiş verilerdir. Alınan verileri bir değişkene aktarıyoruz ve bunları ekrana bastırıyoruz.

Benim burada sizlere örnek olması için yapacağım en basit örnek erkana bastırmak olduğu için bunu yaptım. Oluşturduğunuz değişkenleri veri tabanı işlemlerinde veya her hangi bir yere yazma işlemi içinde de kullanılabilir.

Get Metodu Ne İşe Yarar?
Temelde yaradığı işlemi yukarıda da anlatmış bulunmaktayım. Tekrar üzeriden geçecek olursak bir form‘dan doldurulan verilerin bir başka sayfaya gönderilme işlemi için kullanılan bir yöntemdir.

Form gönderme işlemleri için 2 farklı metot vardır. GET ve POST kullanım şeklinize göre farklılık gösterebilir.

GET : Url üzerinden veri gönderimi yapmaktadır. POST işlemine göre daha güvensizdir.
POST : Verileri doğrudan kullanıcıya göstermeden arka planda gönderim yapmaktadır. Bu metot kullanım tercihlerinde onu daha çok ön plana sürmektedir.
-->
