<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CNSTÜDYO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="Author" content="Ben">
<form action="../pages/kayit_giris.php" method="POST">
<?php 
include ('C:\wamp64\www\pages\baglan.php')
?> 

<center>

<table>
<div class="wrapper">
  <div><a href="../Anasayfa"><img src="../images/demo/cicek.jpg" width="400" height="200" />
</div>

</div>

<tr>
    <td >Kullanıcı Adı</td>
    <td>:</td>
    <td><input type="text" name="kullanici_adi"></td>
</tr>
    <tr>
    <td >Şifre</td>
    <td>:</td>
    <td><input type="password" name="kullanici_sifresi"></td>
</tr>
<tr>
    <td></td>
    <td></td>
    </tr>
</table>

<button><a href="../Anasayfa.php">Giris yap</a></button>
        
    

</center>
</form>