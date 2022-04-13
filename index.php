<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lock Screen | Apaxy - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="ladun/apaxy/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="ladun/apaxy/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="ladun/apaxy/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="ladun/apaxy/css/app.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="bg-primary bg-pattern">
    

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center mb-5">
                        <a href="index.html" class="logo"><img src="ladun/icon.png" height="124" alt="logo"></a>
                        <h5 class="font-size-16 text-white-50 mb-4">Aplikasi Pengenalan Text</h5>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="p-2">
                                <h5 class="mb-5 text-center">Dekatkan Objek<br/><small><i>Harap izinkan browser untuk mengakses webcam</i></small></h5>
                                
                                <div class="form-horizontal" id="divInisialisasi">

                                    <div class="row">
                                        <div class="col-md-12" style="text-align: center;">
                                        <div id="divLoading" style="display: none;">
                                            <img src="ladun/loading.svg" style="width:150px;"><br/>
                                            <strong>Sedang menganalisa, harap menunggu</strong>
                                        </div>
                                            <img src="" width="640" style="display: none;width:640px;border-radius: 12px;" id="txtImgPreview">
                                            <canvas width="640" height="480" id="wajah" style="border-radius: 12px;"></canvas>

                                            <div class="mt-4 text-center" id="divAlat">
                                                <p class="mb-0">
                                                    <a class="btn btn-primary waves-effect waves-light" href="javascript:void(0)" onclick="ambilDanAnalisa()">Capture gambar & analisa</a>
                                                    <br/>Atau<br/>
                                                    Pilih gambar
                                                    <input type="file" id="txtInput" onchange="getImg()" class="form-control">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="idHasil" style="display: none;">
                                    <h4>Hasil Analisa</h4>
                                    <ul id="listHasil"></ul>
                                    <br/>
                                    <a href="index.php">Reload Halaman</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
    <!-- end Account pages -->


    <!-- JAVASCRIPT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
    <script src="ladun/apaxy/libs/jquery/jquery.min.js"></script>
    <script src="ladun/apaxy/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="ladun/apaxy/libs/metismenu/metisMenu.min.js"></script>
    <script src="ladun/apaxy/libs/simplebar/simplebar.min.js"></script>
    <script src="ladun/apaxy/libs/node-waves/waves.min.js"></script>

    <script src="ladun/pico/camvas.js"></script>
    <script src="ladun/pico/pico.js"></script>
    <script src="ladun/pico/index.js"></script>
    <script src="ladun/apaxy/js/app.js"></script>
    <script src="ladun/main.js"></script>
</body>

</html>