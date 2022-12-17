<?php

    require_once 'baglanti.php';

    $key = "indir/" . $_GET["key"] . ".zip" ;

    $sorgu = $baglan->prepare("select * from linkler where url=?");
    $sorgu->execute([$key]);
    $satirlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

    foreach ($satirlar as $value) {

        if (date("Y-m-d H:i:s") <= $value["sonKullanmaTarihi"]) {

            $sorgu = $baglan->query("update linkler set indirildi = 1 where id = $value[id]");
        
            if (file_exists($value["url"])) {

                header("Cache-Control: public");
                header("Content-Description: File Transfer");
                header("Content-Disposition: attachment; filename=matransfer-" . substr($value["url"], 6) );
                header("Content-Type: application/zip");
                header("Content-Transfer-Encoding: binary");

                readfile($value["url"]);
                exit();
            
            } else {
                echo "Dosyanız İndirilemedi<br>";

            }

        } else {
            echo "İndirme Süreniz doldu";
        }
        
        
     

    }

    $baglan = null;

?>