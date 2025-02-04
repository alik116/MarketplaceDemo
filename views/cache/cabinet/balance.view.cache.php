<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <!-- <base href="/static/cabinet5/"> -->
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="/static/cabinet5/images/Xxlogo.ico" type="image/x-icon">
    <!-- Page Title  -->
    <title>Card Boxed | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/static/v2/css/cabinet.css">
    <link rel="stylesheet" href="/static/cabinet5/assets/css/dashlite.css?ver=2.0.0">
    <link id="skin-default" rel="stylesheet" href="/static/cabinet5/assets/css/theme.css?ver=2.0.0">
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
                            <div class="nk-block-head">
                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal res_AvailableBalance"></h2>
                                        <div class="nk-block-des">
                                            <h5 class="res_EWallets"></h5>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-between -->
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="row g-gs">
                                    <div class="col-sm-6 col-lg-4 col-xl-6 col-xxl-4">
                                        <div class="card card-bordered is-dark" id="virtualAcc1">
                                            <div class="nk-wgw">
                                                <div class="nk-wgw-inner">
                                                    <a class="nk-wgw-name" href="#">
                                                        <div class="nk-wgw-icon">
                                                            <img class="logo-dark logo-img" src="/static/cabinet5/images/logo-dark.png" srcset="/static/cabinet5/images/logo-dark2x.png 2x" alt="logo-dark">
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Rentxx <span class="res_Wallet"></span></h5>
                                                    </a>
                                                    <div class="nk-wgw-balance">
                                                        <div class="amount"><span class="currency currency-nio">EUR</span></div>
                                                    </div>
                                                </div>
                                                <div class="nk-wgw-actions">
                                                    <ul>
                                                        <li><a href="#" data-toggle="modal" data-target="#withdraw"><em class="icon ni ni-arrow-to-right"></em><span class="res_Withdraw"></span></a></li>
                                                    </ul>
                                                </div>
                                                <!-- <div class="nk-wgw-more dropdown">
                                                    <a href="#" class="btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                        <ul class="link-list-plain sm">
                                                            <li><a href="#">Details</a></li>
                                                            <li><a href="#">Edit</a></li>
                                                            <li><a href="#">Delete</a></li>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div>
                            
                            <div class="nk-block nk-block-lg">
                                <div class="nk-block-head-sm">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title res_FiatAccounts"></h5>
                                    </div>
                                </div>
                                <div class="row g-gs" id="fiatAcc">
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card card-bordered dashed h-100">
                                            <div class="nk-wgw-add">
                                                <div class="nk-wgw-inner">
                                                    <a href="#" data-toggle="modal" data-target="#addWallet">
                                                        <div class="add-icon">
                                                            <em class="icon ni ni-plus"></em>
                                                        </div>
                                                        <h6 class="title res_AddNewWallet"></h6>
                                                    </a>
                                                    <span class="sub-text res_WalletInfo"></span>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div><!-- .col -->
                                </div><!-- .row -->
                            </div><!-- .nk-block -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                <?php include(HOME . "/views/imports/cabinet_footer.html"); ?>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    
<!-- add wallet modal -->
<div class="modal fade" id="addWallet" tabindex="-1" role="dialog" aria-labelledby="addWalletLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_AddNewWallet" id="addWalletLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row g-3 pb-3 d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="form-group">
                        <label class="form-label res_AccCurr" for="default-01"></label>
                        <div class="form-control-wrap">
                            <select class="form-select" id="newWalletCurr">
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 pb-3 d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="form-group">
                        <label class="form-label" for="default-01">Данные карты</label>
                        <div class="row g-3 pb-3 d-flex justify-content-center">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="number" id="newWalletNum" required placeholder="1234 1234 1234 1234">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 pb-3 d-flex justify-content-center">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" id="newWalletName" required placeholder="Имя, указанное на карте">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="row g-3 pb-3 d-flex justify-content-center">
                <div class="col-lg-10">
                    <div class="form-group">
                        <label class="form-label res_Address" for="default-01"></label>
                        <div class="form-control-wrap">
                            <input type="text" name="address" id="newWalletAddress" required placeholder="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_Save" id="confirmWallet"></button>
        </div>
      </div>
    </div>
  </div>
<!-- End add wallet modal -->

  
<!-- add wallet modal -->
<div class="modal fade" id="verifyWallet" tabindex="-1" role="dialog" aria-labelledby="verifyWalletLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="verifyWalletLabel">Введите код подтверждения</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row g-3 pb-3 d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="text-center" name="verificationCode" id="verificationCode" required="" placeholder="XXXXXX">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_Confirm" id="confirmVerifyWallet"></button>
        </div>
      </div>
    </div>
  </div>
<!-- End add wallet modal -->

<!-- delete modal -->
<div class="modal fade" id="deleteWallet" tabindex="-1" role="dialog" aria-labelledby="deleteWalletLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_SureDelete" id="deleteWalletLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <input type="hidden" name="deleteID">
        <div class="modal-footer">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_Delete" data-dismiss="modal" id="confirmDelete"></button>
        </div>
      </div>
    </div>
  </div>
<!-- End delete modal -->

<!-- Withdraw modal -->
<div class="modal fade" id="withdraw" tabindex="-1" role="dialog" aria-labelledby="withdrawLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="withdrawLabel">Ввывод средств</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container-xl wide-lg">
                <div class="nk-content-body">
                    <div class="withdraw wide-lg m-auto">
                        <div class="nk-block nk-block-lg">
                            <div class="withdraw-block">
                                <form action="" method="POST" class="withdraw-form" id="withdraw-form">
                                    <input type="hidden" name="api__ConfirmWithdraw" value="1">
                                    <div class="withdraw-field form-group">
                                        <div class="card card-bordered is-dark" id="virtualAcc1">
                                            <div class="nk-wgw">
                                                <div class="nk-wgw-inner">
                                                    <span class="nk-wgw-name" href="#">
                                                        <div class="nk-wgw-icon">
                                                            <img class="logo-dark logo-img" src="/static/cabinet5/images/logo-dark.png" srcset="/static/cabinet5/images/logo-dark2x.png 2x" alt="logo-dark">
                                                        </div>
                                                        <h5 class="nk-wgw-title title">Rentxx Wallet</h5>
                                                    </span>
                                                    <div class="nk-wgw-balance pt-0">
                                                        <div class="amount"><span class="currency currency-nio">EUR</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div>
                                    <div class="withdraw-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Choose Account</label>
                                        </div>
                                        <select class="form-select" id="selectAcc" name="withdraw-accountID" form="withdraw-form">
                                        </select>
                                    </div><!-- .withdraw-field -->
                                    <div class="withdraw-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="withdraw-amount">Amount</label>
                                        </div>
                                        <div class="form-control-group">
                                            <input type="text" class="form-control form-control-lg form-control-number" id="withdraw-amount" name="bs-amount" placeholder="0">
                                        </div>
                                        <div class="form-note-group">
                                            <span class="withdraw-min form-note-alt">Minimum: 10 EUR</span>
                                            <span class="withdraw-rate form-note-alt">1 EUR = <span id="currCCY"></span></span>
                                        </div>
                                    </div><!-- .withdraw-field -->
                                    <div class="withdraw-field form-group">
                                        <div class="form-label-group">
                                            <label class="form-label">Payment Method</label>
                                        </div>
                                        <div class="form-pm-group">
                                            <ul class="withdraw-pm-list">
                                                <li class="withdraw-pm-item">
                                                    <input class="withdraw-pm-control" type="radio" name="bs-method" id="pm-bank" value="2" disabled />
                                                    <label class="withdraw-pm-label" for="pm-bank">
                                                        <span class="pm-name">Bank Transfer</span>
                                                        <span class="pm-icon"><em class="icon ni ni-building-fill"></em></span>
                                                    </label>
                                                </li>
                                                <li class="withdraw-pm-item">
                                                    <input class="withdraw-pm-control" type="radio" name="bs-method" id="pm-card" value="1" checked />
                                                    <label class="withdraw-pm-label" for="pm-card">
                                                        <span class="pm-name">Credit / Debit Card</span>
                                                        <span class="pm-icon"><em class="icon ni ni-cc-alt-fill"></em></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .withdraw-field -->
                                    <div class="withdraw-field form-action">
                                        <button class="btn btn-lg btn-block btn-primary res_Confirm" type="submit"></button>
                                    </div><!-- .withdraw-field -->
                                    <div class="form-note text-base text-center">Note: our transfer fee included, <a href="#">see our fees</a>.</div>
                                </form><!-- .withdraw-form -->
                            </div><!-- .withdraw-block -->
                        </div><!-- .withdraw -->
                    </div><!-- .withdraw -->
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
<!-- End Withdraw modal -->

    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="/static/cabinet5/assets/js/bundle.js?ver=2.0.0"></script>
    <script src="/static/cabinet5/assets/js/scripts.js?ver=2.0.0"></script>
    <script src="/static/v2/js/cabinet.js"></script>
    <script src="/static/v2/js/cabinet.js"></script>
    <script>
        <?php echo $JsLocalizationVars; ?>
        <?php echo $JsLocalizationScript; ?>
    </script>
    <script src="/static/v2/js/resouceReader.js"></script>
</body>

</html>