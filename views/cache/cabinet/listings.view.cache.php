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
    <title>Card Boxed | DashLite Admin Template</title>
    <!-- StyleSheets  -->
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
                <div class="nk-content nk-content-fluid" style="margin-top: 35px">
                    <div class="container-xl wide-xl">
                        <div class="nk-content-body">
                            <div class="components-preview wide-xl mx-auto">
                                <div class="nk-block-head nk-block-head-xl">
                                   <div class="nk-block-between">
                                       <div class="nk-block-head-content">
                                           <h3 class="nk-block-title page-title res_HousingControl"></h3>
                                       </div>
                                   </div>
                               </div>
                                <div class="nk-block nk-block-lg">
                                    <div class="card">
                                        <div class="row g-3 pt-4" id="list">
                                            <div class="col-lg-4">
                                                <div class="card h-100 is-dark">
                                                    <div class="nk-wgw-add">
                                                        <div class="nk-wgw-inner">
                                                            <a href="/<?php echo $lng; ?>/page.terms">
                                                                <div class="add-icon">
                                                                    <em class="icon ni ni-plus"></em>
                                                                </div>
                                                                <h6 class="title res_AddNewWallet">Сдать жильё</h6>
                                                                <span class="sub-text res_WalletInfo">Нажмите сюда чтобы добавить квартиру.</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
    
<!-- delete modal -->
<div class="modal fade" id="deleteListing" tabindex="-1" role="dialog" aria-labelledby="deleteListingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_SureDelete" id="deleteListingLabel"><span class="text-uppercase" id="propertyName"></span>?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <input type="hidden" name="deleteID">
        <div class="modal-footer">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_Delete" id="confirmDelete"></button>
        </div>
      </div>
    </div>
  </div>
<!-- End delete modal -->

<!-- change status modal -->
<div class="modal fade" id="changeStatus" tabindex="-1" role="dialog" aria-labelledby="changeStatusLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_Status" id="changeStatusLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <input type="hidden" name="listingID">
           
            <ul class="nk-kycfm-control-list g-3">
                <li class="nk-kycfm-control-item">
                    <input class="nk-kycfm-control" type="radio" name="status" id="status1" value="1" data-title="Active" checked="">
                    <label class="nk-kycfm-label" for="status1">
                        <div class="p-1">
                            <span class="nk-kycfm-label-text res_Active"></span>
                        </div>
                    </label>
                </li><!-- .nk-kycfm-control-item -->
                <li class="nk-kycfm-control-item">
                    <input class="nk-kycfm-control" type="radio" name="status" id="status2" value="0" data-title="Inactive">
                    <label class="nk-kycfm-label" for="status2">
                        <div class="p-1">
                            <span class="nk-kycfm-label-text res_Inactive"></span>
                        </div>
                    </label>
                </li><!-- .nk-kycfm-control-item -->
            </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_Save" id="confirmStatus"></button>
        </div>
      </div>
    </div>
  </div>
<!-- End change status modal -->
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.0.0"></script>
    <script src="./assets/js/scripts.js?ver=2.0.0"></script>
    <script src="/static/v2/js/cabinet.js"></script>
    <script src="/static/v2/js/cabinet.js"></script>
    <script>
        <?php echo $JsLocalizationVars; ?>
        <?php echo $JsLocalizationScript; ?>
    </script>
    <script src="/static/v2/js/resouceReader.js"></script>
</body>

</html>