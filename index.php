<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya Transfer Sistemi - Mehmet Aydar</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/7cb9ac4c0d.js" crossorigin="anonymous"></script>
</head>
<body>


    <h1>..:: Mehmet Aydar Dosya Transfer ::..</h1>

    <div id="surukleAlan" ondrop="dosyaYukle(event)" ondragover="return false">
        <div id="surukleDosya">
            <p>Dosya(ları) Buraya Sürükle</p>
            <p>veya</p>
            <p><input type="button" value="Dosya(ları) Seç" onclick="dosyaPencere();"></p>
            <input type="file" id="seciliDosya" multiple>
        </div>
    </div>


    <div id="sonuc"></div>

    <span>FLO için <i class="fa fa-heart pulse"></i> ile yapıldı.</span>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="js/myAjax.js"></script>

</body>
</html>