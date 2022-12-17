<?php

    
    require_once 'baglanti.php';

    $dosyalar = $_FILES["dosyalar"];

    $sorgu = $baglan->prepare("insert into linkler values (?,?,?,?,?,?)");


    $grup = substr(md5(uniqid(mt_rand())), 0, 6);

    $zip = new ZipArchive(); 
    $zipAdi ="indir/$grup.zip"; 
    if($zip->open($zipAdi, ZIPARCHIVE::CREATE)!==TRUE) { 
        echo "Zip dosyası oluşturulamadı";
    }

    foreach ($dosyalar["name"] as $key => $value) {

        $dosyaTemp = $dosyalar["tmp_name"][$key];
        $dosyaBoyutu = $dosyalar["size"][$key];
        $dosyaismi =  "indir/" . $value;
        
        $sonKullanma = date("Y-m-d H:i:s", strtotime('+7 day',strtotime(date("Y-m-d H:i:s"))));

        if (move_uploaded_file($dosyaTemp, $dosyaismi)) {

            $zip->addFile($dosyaismi);

        } else {
            echo "<div style='text-align:center;'>$value İsimli Dosyanın Boyutu $dosyaBoyutu olduğundan Dosya Yüklenemedi</div>";
        }

    }

    
    $zip->close();

    foreach ($dosyalar["name"] as $key => $value) {

        @unlink("indir/" . $value);

    }

    
    if (file_exists($zipAdi)) {
        if ($dosyaBoyutu != 0) {
            $ekle = $sorgu->execute([NULL, $zipAdi, $dosyaBoyutu, date("Y-m-d H:i:s"), $sonKullanma, 0]);
            echo "<div id='sonucIcerik'>
            <p>Dosyayı İndirmek İçin Aşağıdaki Bağlantıyı Paylaşın:</p>
            <a href='indir.php?key=$grup'>https://www.matransfer.com/$grup</a>
            </div>";
        }
        
    }

    $baglan = null;



?>