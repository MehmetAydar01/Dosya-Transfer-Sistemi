<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetici Paneli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="loginCss/style.css">
</head>
   
<body>

    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="../img/logo.png" style="width: 185px;" alt="logo">
                                        <h6 class="mt-3 mb-5 pb-1">We are Mehmet Selçuk Batal's Team</h6>
                                    </div>

                                    <form method="post" action="giris.php">
                                        <p>Yönetici panelinize giriş yapın.!</p>

                                        <div class="form-outline mb-4">
                                            <input type="text" name="kullaniciAdi" class="form-control" placeholder="Kullanıcı Adı">
                                            <label class="form-label">Username</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="sifre" class="form-control" placeholder="Şifre">
                                            <label class="form-label">Password</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1" id="loginbtn">
                                            <button class="text-center btn" style="background-color: #FF671D; color: #e5e5e5;" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    <h4 class="mb-4 text-center">FLO - BOOTCAMP 2022</h4>
                                    <p class="small mb-0 text-center ">Bu süreçte başta Mehmet Selçuk Batal olmak üzere, değerli arkadaşlarıma, değerli FLO ekibine ve emeği geçen herkese teşekkür ederim.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</body>
</html>
