<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="/static/cabinet5/">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/Xxlogo.ico" type="image/x-icon">
    <!-- Page Title  -->
    <title>DataTables - General | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
    integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
    crossorigin=""/>
    <link rel="stylesheet" href="/static/v2/css/cabinet.css">
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.0.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.0.0">
</head>

<body class="nk-body bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <?php include(HOME . "/views/imports/e.cabinet.sidebar.html"); ?>
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include(HOME . XX . "views/imports/cabinet_header.html"); ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block nk-block-lg">
                                <div class="nk-block nk-block-lg">
                                    <div class="nk-block-head-content">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                            <h4 class="title nk-block-title"><span class="bookHeader">The booking in <span class="bookCity">Baku</span> <span class="bookStatus">на рассмотрении </span><em class="icon ni ni-question text-warning"></em></span></h4>
                                            <ul>
                                                <li class="fw-bold">Необходимо подтвердение документов <em class="icon ni ni-cross text-danger"></em></li>
                                            </ul>
                                            <br>
                                            <button class="btn btn-primary">Загрузить документы</button>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end">
                                                <div>
                                                <p class="text-right"><span class="fw-bold">Confirmation number:</span><span class="bookNum"> 12312312452</span></p>
                                                <h5 class="text-right">
                                                    <a href="#" class="btn btn-primary"><em class="icon ni ni-printer"></em><span>Print</span></a>    
                                                </h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="nk-block nk-block-lg">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <!-- <div class="nk-block nk-block-lg">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title"><em class="icon ni ni-check-circle-fill text-success"></em> <span class="bookHeader">The booking in <span class="bookCity">Baku</span> <span class="bookStatus">confirmed</span></span></h4>
                                                <p>Confirmation number: <span class="bookNum">12312312452</span></p>
                                            </div>
                                        </div> -->
                                        <div class="nk-block nk-block-lg">
                                            <h6 class="title bookDescription">Просторная и современна квартира</h6>
                                            <ul class="list-plain">
                                                <li><span class="bookAddress">Leyla Memmedbeyli 17, 32, Baku, Azerbaijan</span></li>
                                                <!-- <li class="book-date"><span class="fw-bold">Phone</span>: <span class="bookPhone">+994556631220</span></li>
                                                <li class="book-email"><span class="fw-bold">Email</span>: <span class="bookEmail">gigidefitgo@gmail.com</span></li> -->
                                            </ul>
                                            <br>
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td class="nightsCount text-right">+994556631220</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td class="nightsCount text-right">gigidefitgo@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Your reservation</td>
                                                        <td class="nightsCount text-right">1 ноч.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Check-in</td>
                                                        <td class="text-right">27-12-2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Check-out</td>
                                                        <td class="text-right">30-01-2021</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Price</td>
                                                        <td class="text-right">$123</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- <div class="nk-block nk-block-lg">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>Phone</td>
                                                        <td class="nightsCount text-right">+994556631220</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Email</td>
                                                        <td class="nightsCount text-right">gigidefitgo@gmail.com</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Your reservation</td>
                                                        <td class="nightsCount text-right">1 ноч.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Check-in</td>
                                                        <td class="text-right">27-12-2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Check-out</td>
                                                        <td class="text-right">30-01-2021</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Price</td>
                                                        <td class="text-right">$123</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div> -->
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="card">
                                            <div class="d-flex justify-content-center">
                                                <img class="d-block w-100 rounded" src="https://dmn-dallas-news-prod.cdn.arcpublishing.com/resizer/dn9JmbyHvw0DTUWlpE8V9Z0K4lU=/1660x934/smart/filters:no_upscale()/cloudfront-us-east-1.images.arcpublishing.com/dmn/S4ZX2DV7BZDW5HW54OMMISE4Y4.jpg" alt="">
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="nk-block nk-block-lg">
                                <div class="nk-block-head">
                                    <h4 class="title bookDescription">Просторная и современна квартира</h4>
                                </div>
                                <ul class="list-plain">
                                    <li><span class="bookAddress">Leyla Memmedbeyli 17, 32, Baku, Azerbaijan</span></li>
                                    <li class="book-date"><span class="fw-bold">Phone</span>: <span class="bookPhone">+994556631220</span></li>
                                    <li class="book-email"><span>Email</span>: <span class="bookEmail">gigidefitgo@gmail.com</span></li>
                                </ul>
                            </div> -->
                            <div class="nk-block nk-block-lg">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="card">
                                            <div class="d-flex justify-content-center">
                                                <div id="map"></div>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="nk-block nk-block-lg">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td>Your reservation</td>
                                                        <td class="nightsCount text-right">1 ноч.</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Check-in</td>
                                                        <td class="text-right">27-12-2020</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Check-out</td>
                                                        <td class="text-right">30-01-2021</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Price</td>
                                                        <td class="text-right">$123</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2020 Rentxx.com
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
    <script src="./assets/js/bundle.js?ver=2.0.0"></script>
    <script src="./assets/js/scripts.js?ver=2.0.0"></script>
    <script src="/static/v2/js/resouceReader.js"></script>
    <script src="/static/v2/js/cabinet.js"></script>
    <script>
        <?php echo $JsLocalizationVars; ?>
        <?php echo $JsLocalizationScript; ?>
    </script>
</body>

</html>