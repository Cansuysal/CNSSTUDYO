<?php 

$baglanti = mysqli_connect("localhost","root","","cnstudyo");
mysqli_set_charset($baglanti,"utf8");

$user = $_POST['kullanici_adi'];
$pass = $_POST['kullanici_sifresi'];

include("baglan.php");


$sql = "INSERT INTO kullanicilar(kullanici_adi, kullanici_sifresi) values('$user','$pass')";
$gonder = mysqli_query($baglanti, $sql);

    if (isset ($gonder)){
        echo "Kaydınız Başarıyla Oluşturulmuştur.";
        }
    else {
        echo "Kayıt başarısız bizimle iletişime geçin";
        }
?>