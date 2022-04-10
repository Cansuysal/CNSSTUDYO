<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>CNSTÜDYO</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<!-- Superfish Menu -->
<script type="text/javascript" src="layout/scripts/superfish/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="layout/scripts/superfish/superfish.js"></script>
<script type="text/javascript">
jQuery(function () {
    jQuery('ul.nav').superfish()
});
</script>
<!-- / Superfish Menu -->

<style>
  body  {
     background-color:#ffffff;
     }
  </style>
<?php
 include ('C:\wamp64\www\pages\baslik.php');
?>
<!-- ####################################################################################################### -->
<?php 
include ('C:\wamp64\www\pages\üst.gezinme.php');
?>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <center>
      <div class="block"><img src="images/demo/FOTO1.jpg" width="950" height="600" alt="" ></div>
    </center>   
      </div>
      <div class="clear"></div>
    </div>
    <!-- ####################################################################################################### -->
    <div id="hpage_latest">
      <ul>
        <li>
          <div class="imgholder"><a href="pages/dugundiscekim.php"><img src="images/demo/dugundiscekim.jpg" width="260" height="180" alt="" /></a></div>
          <font color='#622d52'><h2><strong>Düğün Dış Çekim & Hikaye </strong></h2></font>
          <p>Profesyonel düğün fotoğrafçısı ile sunulan bu hizmet ile ender anlarınızı riske atmayınız. </p>
        <li>
          <div class="imgholder"><a href="pages/sunnet.php"><img src="images/demo/sunnet.jpg" width="260" height="180" alt="" /></a></div>
          <font color='#622d52'><h2><strong>Sünnet Dış Çekim</strong></h2></font>
          <p>Ailelerin ve çocukların bir ömür boyu anı olarak saklayabileceği çekimleri sizler için sağlıyoruz.</p>
        </li>
        <li class="last">
          <div class="imgholder"><a href="pages/dogum.php"><img src="images/demo/dogum.jpg" width="260" height="180" alt="" /></a></div>
          <font color='#622d52'><h2><strong>Doğum Öncesi Çekim</strong></h2></font>
         <p>Dış mekan ya da aileniz için özel olan mekanlarda (ev, bebeğin odası), annemizi çok yormadan bu güzel anlarınızı sizler için çekiyoruz.</p>
        </li>
      </ul>
      <br class="clear" />
    
    </div>
<!--####################################################################################################### -->

<?php
include ('C:\wamp64\www\pages\altbilgi.php');
?>
</body>
</head>
</html>