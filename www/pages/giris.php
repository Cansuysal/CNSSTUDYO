<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<title>CNSTÜDYO</title>
</head>
<form action="../pages/giris_kontrol.php" method="POST">
<style> 
 body  {
    background-color:#ffffff;
    }
</style>;
<?php
include ('C:\wamp64\www\pages\baglan.php')
?>
<center>

<table>
<div class="wrapper">
  <div><a href="../Anasayfa.php"><img src="../images/demo/cicek.jpg" width="400" height="200" />
</div>

</div>
<tr>
    <td >Kullanıcı Adı</td>
    <td>:</td>
    <td><input type="text" name="username"></td>
</tr>
    <tr>
    <td >Şifre</td>
    <td>:</td>
    <td><input type="password" name="password"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    </tr>
</table>
    <button><a href="../pages/giris_kontrol.php">Giriş yap</a></button>
    <button><a href="../pages/kayit.php">Kayıt Ol</a></button>
        
    

</center>
</form>