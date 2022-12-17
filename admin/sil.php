<?php

    require_once '../baglanti.php';

    $linkId = $_GET["id"];

    $myDelete = $baglan->prepare("delete from linkler where id=?");

    $sil = $myDelete->execute([$linkId]);

    if ($sil) {
        header("Location:liste.php");
    } else {
        echo "<script>alert('Kayıt Silinemedi')</script>";
        header("Location:liste.php");
    }

    $baglan = null;


?>