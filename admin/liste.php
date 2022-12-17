<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İndirme Kayıt Listesi</title>
    <!-- Font awesome link -->
    <script src="https://kit.fontawesome.com/7cb9ac4c0d.js" crossorigin="anonymous"></script>
</head>
    <style>
        body {
            background-color: #999999;
        }
        h2 {
            color: #000066;
            text-align: center;
            margin-top: 20px;
        }
    </style>
<body>

        <h2>..:: MaTransfer - Dosya Kayıt Listesi ::..</h2>
    
</body>
</html>


<?php

    require_once 'guvenlik.php';
    require_once '../baglanti.php';
    

    if ( $_SESSION["kullaniciAdi"] == "mehmet" && $_SESSION["sifre"] == sha1(md5("mehmet1234"))) {
    
        $sorgu = $baglan->prepare("select * from linkler");
        $sorgu->execute();
        $satirlar = $sorgu->fetchAll(PDO::FETCH_ASSOC);

        $kayitSayisi = $sorgu->rowCount();

        $sayi = 0;

        echo "<table border='1' margin style='border-collapse:collapse; text-align:center; font-size: 17px; width:80%; margin:50px auto; background: linear-gradient(to right, #ea7704, #d8363a, #cd3b70, #b44593); border-color: #a6a6a6;'>
            <tr style='color: darkblue; background-color: pink;'>
                <th  style='padding: 5px;'>Kayıt No</th>
                <th  style='padding: 5px;'>url</th>
                <th  style='padding: 5px;'>Yüklenme Tarihi</th>
                <th  style='padding: 5px;'>Son Kullanma Tarihi</th>
                <th  style='padding: 5px;'>Durum</th>
                <th  style='padding: 5px;'>Kaydı Sil</th>
            </tr>
        ";
    
        foreach ($satirlar as $satir) {

            $sayi = $sayi + 1;
            $linkimiz = substr($satir["url"], 6, 6);
            echo "<tr style='color: #d9d9d9; font-size: 17px;'>
                <td style='padding: 5px;'>$sayi</td>
                <td style='padding: 5px;'>$linkimiz</td>
                <td style='padding: 5px;'>$satir[yuklemeTarihi]</td>
                <td style='padding: 5px;'>$satir[sonKullanmaTarihi]</td>
            ";

            if ($satir["indirildi"] == 1) {
                echo "<td style='padding: 5px;'>İndirildi</td>";
            } else {
                echo "<td style='padding: 5px;'>İndirilmedi</td>";
            }

            echo "
            <td style='padding: 5px;'><a style='text-decoration:none; color: #d9d9d9;' href='sil.php?id=$satir[id]'>sil <i class='fa-solid fa-trash-can' style='color: #404040;'></i></a> </td>
                </tr>
            ";
        
        }

        echo "
            <tr>
                <td style='color: #001433; padding: 5px;' colspan='6'>Sistemde toplam $kayitSayisi kayıt var. </td>
            </tr>
            </table>
        ";

    } else {
        header("Location:index.php");
    }

    


    $baglan = null;


?>