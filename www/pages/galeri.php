<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Realistic
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title>CNSTÜDYO</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/jquery.min.js"></script>
<!-- Superfish Menu -->
<script type="text/javascript" src="../layout/scripts/superfish/jquery.hoverIntent.js"></script>
<script type="text/javascript" src="../layout/scripts/superfish/superfish.js"></script>
<script type="text/javascript">
jQuery(function () {
    jQuery('ul.nav').superfish();
});
</script>
<!-- / Superfish Menu -->
<style>
  body  {
     background-color:#ffffff;
     }
  </style>
<?php
 include ('..\pages\baslik.php');
?>
<!-- FancyBox -->
<link rel="stylesheet" href="../layout/scripts/fancybox-2.1.5/jquery.fancybox.css" type="text/css" />
<script type="text/javascript" src="../layout/scripts/fancybox-2.1.5/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("a[rel=gallery_group]").fancybox({
        openEffect: 'elastic',
        closeEffect: 'elastic',
        openSpeed: 600,
        closeSpeed: 600,
        helpers: {
            overlay: {
                closeClick: true,
            },
            title: {
                type: 'over'
            }
        }
    });
});
</script>
<!-- End FancyBox -->
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
  </head>
  <body id="top">
  <div class="wrapper">
    <div id="header"> 
  </div>
</div>
</div>
<!-- ####################################################################################################### -->
<?php 
include('..\pages\üst.gezinme.php');
?>
    <!-- ############################# -->
    <div id="gallery" >
        <ul>
        <li><a rel="gallery_group" href="../images/demo/dugun1.jpg" title="Düğün"><img src="../images/demo/dugun1.jpg" alt="" /></a></li>
        <li><a rel="gallery_group" href="../images/demo/dugun2.jpg" title="Düğün"><img src="../images/demo/dugun2.jpg" alt="" /></a></li>
        <li class="last"><a rel="gallery_group" href="../images/demo/dugun4.jpg" title="Düğün"><img src="../images/demo/dugun4.jpg" alt="" /></a></li>
        <li><a rel="gallery_group" href="../images/demo/dugun5.jpg" title="Düğün"><img src="../images/demo/dugun5.jpg" alt="" /></a></li>
        <li><a rel="gallery_group" href="../images/demo/dugun7.jpg" title="Düğün 5"><img src="../images/demo/dugun7.jpg" alt="" /></a></li>
        <li class="last"><a rel="gallery_group" href="../images/demo/sunnet1.jpg" title="Sünnet"><img src="../images/demo/sunnet1.jpg" alt="" /></a></li>
        <li><a rel="gallery_group" href="../images/demo/sunnet2.jpg" title="Sünnet"><img src="../images/demo/sunnet2.jpg" alt="" /></a></li>
        <li><a rel="gallery_group" href="../images/demo/bebek.jpg" title="Bebek"><img src="../images/demo/bebek.jpg" alt="" /></a></li>
        <li class="last"><a rel="gallery_group" href="../images/demo/bebek2.jpg" title="Bebek"><img src="../images/demo/bebek2.jpg" alt="" /></a></li>
        <li><a rel="gallery_group" href="../images/demo/bebek3.jpg" title="Bebek"><img src="../images/demo/bebek3.jpg" alt="" /></a></li>
        <li><a rel="gallery_group" href="../images/demo/bebek4.jpg" title="Bebek"><img src="../images/demo/bebek4.jpg" alt="" /></a></li>
        <li class="last"><a rel="gallery_group" href="../images/demo/dugun3.jpg" title="Düğün"><img src="../images/demo/dugun3.jpg" alt="" /></a></li>
      </ul>
      <br class="clear" />
    </div>
    <!-- ############################# -->
    <div class="clear"></div>
</div>
  <!--#############################################################################3-->
  <?php
include('..\pages\altbilgi.php');
?>
</body>
</head>
</html>