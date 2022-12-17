<?php

    require_once 'guvenlik.php';
    require_once 'connect.php';

    if ($_POST) {

        $kullaniciAdi = guvenlik($_POST["kullaniciAdi"]);
        $sifre = guvenlik($_POST["sifre"]);

        $sorgu = $db->prepare("select * from adminpanel");
        $sorgu->execute();
        $satir = $sorgu->fetchAll(PDO::FETCH_ASSOC);

        $toplamSatir =  $sorgu->rowCount();
        
        if ( (!empty($kullaniciAdi)) && (!empty($sifre)) ) {

            foreach ($satir as $value) {
                
                if ($toplamSatir == 1) {
                    $ad = $value["kullaniciadi"];
                    $passw = $value["sifre"];
                } else {
                    echo "Yönetici paneline giriş için veritabanına kullanıcı adınızı ve şifrenizi ekleyin ya da veritabanında fazla bulunan kullanıcıları silin!!";
                }
                
            }
            
            if ( $kullaniciAdi == $ad && $sifre == $passw ) {

                $_SESSION["kullaniciAdi"] = $ad;
                $_SESSION["sifre"] = sha1(md5($passw));
                header("Location:liste.php");
                
            } else {
                header("Location:index.php");
            }

        } else {
            header("Location:index.php");
        }

    }

    $db = null;

?>