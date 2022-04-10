<?php
session_start();

$user = $_POST['username'];
$pass = $_POST['password'];

if (!isset($_POST['username']) OR !isset($_POST['password']) )
echo "<script language='Javascript'>window.location.href='../giris.php'</script>";
else {

include('baglan.php');

$sorgu = mysqli_query($conn,"select * from kullanicilar where kullanici_adi='$user'");
$satir = mysqli_fetch_array($sorgu);



$pass2 = $satir['kullanici_sifresi'];

if ( $pass != $pass2 ) {
echo "LÜTFEN BİLGİLERİNİZİ KONTROL EDİNİZ!";
}

else if ($user=='abcd' && $pass=='1234') {
echo "<script language='Javascript'>window.location.href='../pages/admin.php'</script>";
}

else if ($pass==$pass2) {
echo "<script language='Javascript'>window.location.href='../giris_kontrol.php'</script>";
}

else {

$_SESSION['kim'] = $user;
echo "<script language='Javascript'>window.location.href='../Anasayfa.php'</script>";



}


}




?>