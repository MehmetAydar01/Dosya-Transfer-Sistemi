
function dosyaYukle(e) {
    e.preventDefault();
    dosyaIslem(e.dataTransfer.files);
}
  
function dosyaPencere() {
    document.getElementById('seciliDosya').click();
    document.getElementById('seciliDosya').onchange = function() {
        dosyalar = document.getElementById('seciliDosya').files;
        dosyaIslem(dosyalar);
    };
}
  
function dosyaIslem(dosyalar) {
    if(dosyalar != undefined) {
        var formVeri = new FormData();
        for(i=0; i<dosyalar.length; i++) {
            formVeri.append('dosyalar[]', dosyalar[i]);
        }
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "upload.php", true);
        xhttp.onload = function(event) {
            if (xhttp.status == 200) {
                document.getElementById("sonuc").innerHTML = this.responseText;
            } else {
                alert("Yükleme Hatası: " + xhttp.status);
            }
        }
 
        xhttp.send(formVeri);
    }
}