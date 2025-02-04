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
    <title>DataTables - General | DashLite Admin Template</title>
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
                    <div class="container-xl wide-xl">
                        <div class="nk-content-body">
                            <div class="components-preview wide-xl mx-auto">
                                <div class="nk-block nk-block-xl">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title"><span class="res_Reservations"></span></h4>
                                            <div class="nk-block-des">
                                                <p><span class="res_transactionsDesc"></span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card card-preview">
                                        <div class="card-inner">
                                            <table class="table datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                                <thead>
                                                    <tr class="nk-tb-item nk-tb-head">
                                                        <!-- <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </th> -->
                                                        <th class="nk-tb-col tb-col-sm"><span class="sub-text res_ID"></span></th>
                                                        <th class="nk-tb-col tb-col-sm"><span class="sub-text res_Description"></span></th>
                                                        <th class="nk-tb-col tb-col-sm"><span class="sub-text res_DateFrom"></span></th>
                                                        <th class="nk-tb-col tb-col-sm"><span class="sub-text res_DateTo"></span></th>
                                                        <th class="nk-tb-col tb-col-sm"><span class="sub-text res_Price"></span></th>
                                                        <th class="nk-tb-col tb-col-sm"><span class="sub-text res_Address"></span></th>
                                                        <th class="nk-tb-col nk-tb-col-tools text-right">
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody id="reservationsList">
                                                    
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div> <!-- nk-block -->
                            </div><!-- .components-preview -->
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
    <!-- app-root @e -->

    <!-- listingReview modal -->
    <div class="modal fade" id="listingReview" tabindex="-1" role="dialog" aria-labelledby="listingReviewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="listingReviewLabel">Оставить отзыв</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <div class="container-xl wide-lg">
                    <div class="nk-content-body">
                        <div class="listingReview wide-lg m-auto">
                            <div class="nk-block nk-block-lg">
                                <div class="listingReview-block">
                                    <form action="" method="POST" class="listingReview-form" id="listingReview-form">
                                        <input type="hidden" name="api__AddReview" value="1">
                                        <input type="hidden" name="listingID">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title"><span class="res_reservationsTitle">Комментарий</span></h4>
                                                <div class="nk-block-des">
                                                    <p><span class="res_transactionsDesc"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listingReview-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="listingReviewLiked">Что вам понравилось?</label>
                                            </div>
                                            <div class="form-control-group">
                                                <textarea class="form-control textarea-sm" id="listingReviewLiked" name="liked" rows="1"></textarea>
                                            </div>
                                        </div><!-- .listingReview-field -->
                                        <div class="listingReview-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label" for="listingReviewNotLiked">Что вам не понравилось?</label>
                                            </div>
                                            <div class="form-control-group">
                                                <textarea class="form-control textarea-sm" id="listingReviewNotLiked" name="notLiked" rows="1"></textarea>
                                            </div>
                                        </div><!-- .listingReview-field -->
                                        <br>
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="nk-block-title"><span class="res_reservationsTitle">Оценка</span></h4>
                                                <div class="nk-block-des">
                                                    <p><span class="res_transactionsDesc"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listingReview-field form-group rating">
                                            <div class="row justify-content-between mr-0 ml-0">
                                                <div class="form-label-group">
                                                    <label class="form-label">Cleanliness <span class="selected-rating">0</span><small> / 5</small></label>
                                                </div>
                                                <input type="hidden" class="selected_rating" name="cleanliness" value="" required="required">
                                                <div class="form-group" id="rating-ability-wrapper">
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-1" data-attr="1">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-2" data-attr="2">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-3" data-attr="3">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-4" data-attr="4">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-5" data-attr="5">
                                                        <span>&#9733;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div><!-- .listingReview-field -->
                                        <div class="listingReview-field form-group rating">
                                            <div class="row justify-content-between mr-0 ml-0">
                                                <div class="form-label-group">
                                                    <label class="form-label">Communication <span class="selected-rating">0</span><small> / 5</small></label>
                                                </div>
                                                <input type="hidden" class="selected_rating" name="communication" value="" required="required">
                                                <div class="form-group" id="rating-ability-wrapper">
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-1" data-attr="1">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-2" data-attr="2">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-3" data-attr="3">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-4" data-attr="4">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-5" data-attr="5">
                                                        <span>&#9733;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div><!-- .listingReview-field -->
                                        <div class="listingReview-field form-group rating">
                                            <div class="row justify-content-between mr-0 ml-0">
                                                <div class="form-label-group">
                                                    <label class="form-label">Location <span class="selected-rating">0</span><small> / 5</small></label>
                                                </div>
                                                <input type="hidden" class="selected_rating" name="location" value="" required="required">
                                                <div class="form-group" id="rating-ability-wrapper">
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-1" data-attr="1">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-2" data-attr="2">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-3" data-attr="3">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-4" data-attr="4">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-5" data-attr="5">
                                                        <span>&#9733;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div><!-- .listingReview-field -->
                                        <div class="listingReview-field form-group rating">
                                            <div class="row justify-content-between mr-0 ml-0">
                                                <div class="form-label-group">
                                                    <label class="form-label">Accuracy <span class="selected-rating">0</span><small> / 5</small></label>
                                                </div>
                                                <input type="hidden" class="selected_rating" name="accuracy" value="" required="required">
                                                <div class="form-group" id="rating-ability-wrapper">
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-1" data-attr="1">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-2" data-attr="2">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-3" data-attr="3">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-4" data-attr="4">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-5" data-attr="5">
                                                        <span>&#9733;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div><!-- .listingReview-field -->
                                        <div class="listingReview-field form-group rating">
                                            <div class="row justify-content-between mr-0 ml-0">
                                                <div class="form-label-group">
                                                    <label class="form-label">Price <span class="selected-rating">0</span><small> / 5</small></label>
                                                </div>
                                                <input type="hidden" class="selected_rating" name="price" value="" required="required">
                                                <div class="form-group" id="rating-ability-wrapper">
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-1" data-attr="1">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-2" data-attr="2">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-3" data-attr="3">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-4" data-attr="4">
                                                        <span>&#9733;</span>
                                                    </button>
                                                    <button type="button" class="btnrating btn btn-light btn-sm rating-star-5" data-attr="5">
                                                        <span>&#9733;</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div><!-- .listingReview-field -->
                                        <div class="listingReview-field form-action">
                                            <button class="btn btn-lg btn-block btn-primary" type="submit">Save</button>
                                        </div><!-- .listingReview-field -->
                                        <div class="form-note text-base text-center">Note: our transfer fee included, <a href="#">see our fees</a>.</div>
                                    </form><!-- .listingReview-form -->
                                </div><!-- .listingReview-block -->
                            </div><!-- .listingReview -->
                        </div><!-- .listingReview -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- End listingReview modal -->

    <!-- JavaScript -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="/static/cabinet5/assets/js/bundle.js?ver=2.0.0"></script>
    <script src="/static/cabinet5/assets/js/scripts.js?ver=2.0.0"></script>
    <script src="/static/v2/js/resouceReader.js"></script>
    <script src="/static/v2/js/cabinet.js"></script>
    <script>
        <?php echo $JsLocalizationVars; ?>
        <?php echo $JsLocalizationScript; ?>
    </script>
</body>

</html>