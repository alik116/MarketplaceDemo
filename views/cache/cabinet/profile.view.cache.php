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
    <title>Profile</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/static/cabinet5/assets/css/dashlite.css?ver=2.0.0">
    <link id="skin-default" rel="stylesheet" href="/static/cabinet5/assets/css/theme.css?ver=2.0.0">
    <link rel="stylesheet" href="/static/v2/css/cabinet.css">
    <link rel="stylesheet" href="/static/v2/css/notif_modal.css">
</head>

<body class="nk-body bg-white has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <?php include(HOME . "/views/imports/e.cabinet.sidebar.html"); ?>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include(HOME . XX . "views/imports/cabinet_header.html"); ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                             <div class="nk-block-head nk-block-head-sm">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h3 class="nk-block-title page-title res_Profile"></h3>
                                    </div>
                                </div>
                            </div>                        
                        <div class="nk-block">
                            <div class="card card-bordered">
                                <div class="card-aside-wrap">
                                    <div class="tab-content" style="width: 100%;">
                                        <div class="tab-pane active" id="commonInfoCard">
                                            <div class="card-inner card-inner-lg">
                                                <form action="/<?php echo $lng; ?>/cabinet.profile" method="POST" id="commonInfoForm">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title res_PersonalInformation"></h4>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <input type="hidden" name="api__UpdateCommonInfo" value="1">
                                                    <div class="gy-3 nk-data data-list">
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Name"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="Name" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Surname"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="Surname" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_DisplayName"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="DisplayName">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- data-item -->
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_BirthDate"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="date" disabled name="dateOfBirth">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <br>
                                                        <div class="nk-block-head nk-block-head-lg">
                                                            <div class="nk-block-between">
                                                                <div class="nk-block-head-content">
                                                                    <h4 class="nk-block-title res_Address"></h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Country"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="country">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_City"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="city">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Street"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="street">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Building"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="building">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Appartment"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="appartment">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_ZIP"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="zip">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- data-list -->
                                                    
                                                </div><!-- .nk-block -->
                                                
                                                <div class="row g-3">
                                                    <div class="col-lg-7 offset-lg-5">
                                                        <div class="form-group mt-2 float-right">
                                                            <button class="btn btn-lg btn-primary res_Edit" id="editBtn"></button>
                                                            <button class="btn btn-lg btn-primary hidden res_Save" type="submit" id="saveBtn"></button>
                                                            <button class="btn btn-lg btn-light hidden res_Cancel" id="cancelBtn"></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="securityInfoCard">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h4 class="nk-block-title res_SecurityInformation"></h4>
                                                        </div>
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <div class="gy-3 nk-data data-list">
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Email"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="Email" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <a href="#" data-toggle="modal" data-target="#changeEmail">Change Email</a>
                                                                    </div>
                                                                </div>
                                                            </div> -->
                                                        </div><!-- data-item -->
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Phone"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-1">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="PhoneCode" class="phoneCode" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" disabled name="Phone" class="phone" value="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <a href="#" data-toggle="modal" data-target="#changePhone" class="res_ChangePhone"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Password"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <a href="#" data-toggle="modal" data-target="#changePassword" class="res_ChangePassword"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- data-item -->
                                                        <div class="row g-3 align-center">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <span class="data-label res_Credentials"></span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-7">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <a href="#" class="d-none res_Upload" data-toggle="modal" id="updateDocsBtn" data-target="#updateDocs"></a>
                                                                        <a href="#" class="d-none res_Delete" data-toggle="modal" id="deleteDocsBtn" data-target="#deleteDocs"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- data-item -->
                                                    </div><!-- data-list -->
                                                    
                                                </div><!-- .nk-block -->
                                                
                                            </div>
                                        </div>
                                </div>
                                    <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                        <div class="card-inner-group" data-simplebar>
                                            <div class="card-inner">
                                                <div class="user-card">
                                                    <div class="user-info">
                                                        <span class="lead-text"></span>
                                                        <span class="sub-text"></span>
                                                    </div>
                                                </div><!-- .user-card -->
                                            </div><!-- .card-inner -->
                                            <!-- <div class="card-inner">
                                                <div class="user-account-info py-0">
                                                    <h6 class="overline-title-alt">Nio Wallet Account</h6>
                                                    <div class="user-balance">12.395769 <small class="currency currency-btc">BTC</small></div>
                                                    <div class="user-balance-sub">Locked <span>0.344939 <span class="currency currency-btc">BTC</span></span></div>
                                                </div>
                                            </div> -->
                                            <!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <ul class="link-list-menu">
                                                    <li><a data-toggle="tab" id="commonInfo" href="#commonInfoCard" class="active"><em class="icon ni ni-user-fill-c"></em><span class="res_PersonalInformation"></span></a></li>
                                                    <li><a data-toggle="tab" href="#securityInfoCard" id="securityInfo"><em class="icon ni ni-lock-alt-fill"></em><span class="res_SecuritySettings"></span></a></li>
                                                </ul>
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- card-aside -->
                                </div><!-- .card-aside-wrap -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </div>
                    </div>
                </div>
                <!-- content @e -->
            <?php include(HOME . "/views/imports/cabinet_footer.html"); ?>
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#address">Address</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#documents">Documents</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                        <div class="tab-content">
                            <form class="tab-pane active" id="personal" action="" method="post">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="name"">Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname" value="" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="surname"">Surname</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname" value="" placeholder="Enter Surname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Phone Number</label>
                                            <input type="text" class="form-control" id="phone-no" value="+880" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="birth-day">Date of Birth</label>
                                            <input type="text" class="form-control date-picker" id="birth-day" placeholder="Enter your name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="sexInput">Gender</label>
                                            <div class="form-control-wrap ">
                                                <div class="form-control-select">
                                                    <select class="form-control" id="genderInput">
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="api__UpdateInfo" value="1">
                                    <input type="hidden" name="gender" value="1">
                                    <input type="hidden" name="birthday" id="birthday" value="">
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button class="btn btn-lg btn-primary" type="submit">Update Profile</button>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                            <form class="tab-pane" id="address" action="" method="post">
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <!-- <label class="form-label" for="address-county">Country</label>
                                            <input type="text" class="form-control" id="address-country" /> -->
                                            <input id="City" type="text" class="input-city input-catalog" id="js-easyAutocomplete" required="" autocomplete="off">
                                            <ul id="cityList" class="dropdown dropdown-city"></ul>
                                            <div class="easy-autocomplete-container" id="eac-container-js-easyAutocomplete">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-city">City</label>
                                            <input type="text" class="form-control" id="address-city"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-city">Street</label>
                                            <input type="text" class="form-control" name="street" id="address-street"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-city">Building</label>
                                            <input type="text" class="form-control" name="building" id="address-building"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-city">Appartment</label>
                                            <input type="text" class="form-control" name="appartment" id="address-appart"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-city">Zip</label>
                                            <input type="text" class="form-control" name="zip" id="address-zip"/>
                                        </div>
                                    </div>
                                    <input type="hidden" name="api__UpdateAddress" value="1">
                                    <input type="hidden" class="country-input" name="country" id="CountryID" value="1">
                                    <input type="hidden" class="city-input" name="city" id="CityID" value="1">

                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button class="btn btn-lg btn-primary" type="submit">Update Address</button>
                                            </li>
                                            <li>
                                                <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                            <!-- <form class="tab-pane" id="documents" action="" method="post">
                                <ul class="nk-kycfm-control-list g-3">
                                    <li class="nk-kycfm-control-item">
                                        <input class="nk-kycfm-control" type="radio" name="id-proof" id="passport" data-title="Passport" checked>
                                        <label class="nk-kycfm-label" for="passport">
                                            <span class="nk-kycfm-label-icon">
                                                <div class="label-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.9904 75.9285">
                                                        <path fill="currentColor" d="M27.14,23.73A15.55,15.55,0,1,0,42.57,39.4v-.12A15.5,15.5,0,0,0,27.14,23.73Zm11.42,9.72H33a25.55,25.55,0,0,0-2.21-6.53A12.89,12.89,0,0,1,38.56,33.45ZM31,39.28a26.9929,26.9929,0,0,1-.2,3.24H23.49a26.0021,26.0021,0,0,1,0-6.48H30.8A29.3354,29.3354,0,0,1,31,39.28ZM26.77,26.36h.75a21.7394,21.7394,0,0,1,2.85,7.09H23.91A21.7583,21.7583,0,0,1,26.77,26.36Zm-3.28.56a25.1381,25.1381,0,0,0-2.2,6.53H15.72a12.88,12.88,0,0,1,7.78-6.53ZM14.28,39.28A13.2013,13.2013,0,0,1,14.74,36H20.9a29.25,29.25,0,0,0,0,6.48H14.74A13.1271,13.1271,0,0,1,14.28,39.28Zm1.44,5.83h5.57a25.9082,25.9082,0,0,0,2.2,6.53A12.89,12.89,0,0,1,15.72,45.11ZM27.51,52.2h-.74a21.7372,21.7372,0,0,1-2.85-7.09h6.44A21.52,21.52,0,0,1,27.51,52.2Zm3.28-.56A25.1413,25.1413,0,0,0,33,45.11h5.57a12.84,12.84,0,0,1-7.77,6.53Zm2.59-9.12a28.4606,28.4606,0,0,0,0-6.48h6.15a11.7,11.7,0,0,1,0,6.48ZM14.29,62.6H40v2.6H14.28V62.61ZM56.57,49l1.33-5,2.48.67-1.33,5Zm-6,22.52L55.24,54l2.48.67L53.06,72.14Zm21.6-61.24-29.8-8a5.13,5.13,0,0,0-6.29,3.61h0L33.39,16H6.57A2.58,2.58,0,0,0,4,18.55V70.38A2.57,2.57,0,0,0,6.52,73L6.57,73h29.7l17.95,4.85a5.12,5.12,0,0,0,6.28-3.6v-.06L75.8,16.61a5.18,5.18,0,0,0-3.6066-6.3763L72.18,10.23ZM6.57,70.38V18.55H45.14a2.57,2.57,0,0,1,2.57,2.57V67.79a2.57,2.57,0,0,1-2.55,2.59H6.57ZM73.34,15.91,58,73.48a2.59,2.59,0,0,1-2.48,1.93,2.5192,2.5192,0,0,1-.67-.09l-9-2.42a5.15,5.15,0,0,0,4.37-5.11V47.24l1.32.36,1.33-5-2.49-.67-.16.62V21.94l2.62.71,3.05,10,2.13.57L57.88,24l3.76,1,1.65,3,1.42.39-.25-4.09,2.24-3.42-1.41-.39L62.4,22.15l-3.76-1,4.76-7.92-2.13-.57-7.6,7.14-4-1.08A5.1,5.1,0,0,0,45.14,16H36.05l2.51-9.45a2.57,2.57,0,0,1,3.12-1.84h0l29.81,8.05a2.56,2.56,0,0,1,1.56,1.21A2.65,2.65,0,0,1,73.34,15.91ZM56.57,39.59l.66-2.5,2.44.65L59,40.24Zm4.88,1.31.66-2.51,2.44.66-.65,2.5Zm-9.76-2.61.66-2.51,2.45.66-.66,2.5Z" transform="translate(-3.9995 -2.101)" fill="#6476ff" /></svg>
                                                </div>
                                            </span>
                                            <span class="nk-kycfm-label-text">Passport</span>
                                        </label>
                                    </li>
                                    <li class="nk-kycfm-control-item">
                                        <input class="nk-kycfm-control" type="radio" name="id-proof" id="national-id" data-title="National ID">
                                        <label class="nk-kycfm-label" for="national-id">
                                            <span class="nk-kycfm-label-icon">
                                                <div class="label-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 63.0105">
                                                        <path fill="currentColor" d="M76,18.79,56.53,9.56a6.19,6.19,0,0,0-5.19,0l-19.5,9.23a3.35,3.35,0,0,0-1.9,2.55H8.33A6.26,6.26,0,0,0,2,27.51v38.3A6.27,6.27,0,0,0,8.33,72H71.67A6.27,6.27,0,0,0,78,65.81v-44A3.37,3.37,0,0,0,76,18.79Zm-.56,47a3.77,3.77,0,0,1-3.8,3.71H8.33a3.77,3.77,0,0,1-3.8-3.71V27.51a3.75,3.75,0,0,1,3.7993-3.7H29.87v9.34A34.49,34.49,0,0,0,44,60.41l7.51,5.8a4.11,4.11,0,0,0,4.94,0l7.51-5.8A36.5307,36.5307,0,0,0,75.47,45.62V65.81Zm0-32.66a32.09,32.09,0,0,1-13.1,25.34l-7.51,5.8a1.5,1.5,0,0,1-1.8,0l-7.51-5.8A32.05,32.05,0,0,1,32.4,33.15V21.83A.91.91,0,0,1,33,21l19.5-9.23a3.51,3.51,0,0,1,3,0L74.92,21a.91.91,0,0,1,.55.82V33.15ZM53.87,21.43a12.47,12.47,0,0,0-12.6,12.31,12.62,12.62,0,0,0,25.23,0,12.46,12.46,0,0,0-12.6178-12.3l-.0122,0Zm0,22.14A9.83,9.83,0,1,1,64,33.78a10,10,0,0,1-10.1,9.79Zm3.31-13.22-5.32,5.19-1.18-1.15a1.29,1.29,0,0,0-1.79,0,1.2,1.2,0,0,0-.013,1.697l.013.013h0l2.08,2a1.27,1.27,0,0,0,1.79,0L59,32.09a1.22,1.22,0,0,0,0-1.72h0a1.29,1.29,0,0,0-1.8,0ZM29.87,57.16h-20a1.24,1.24,0,1,0,0,2.47h20a1.24,1.24,0,0,0,0-2.47ZM19.73,62.1H9.89a1.24,1.24,0,0,0,0,2.48h9.84a1.24,1.24,0,0,0,0-2.48Zm8.66-14.28h0L24,45.71a.36.36,0,0,1-.22-.34V44.16a1.878,1.878,0,0,1,.18-.24,10.9991,10.9991,0,0,0,1.35-2.48,2.53,2.53,0,0,0,1.23-2.16V37.51a2.61,2.61,0,0,0-.46-1.43V34a4.69,4.69,0,0,0-1.15-3.43,6.68,6.68,0,0,0-5.19-1.85,6.67,6.67,0,0,0-5.18,1.85A4.61,4.61,0,0,0,13.4,34v2a2.46,2.46,0,0,0-.46,1.43v1.78a2.49,2.49,0,0,0,.78,1.81,10.148,10.148,0,0,0,1.52,3v1.2a.36.36,0,0,1-.21.33l-4.1,2.15A4.79,4.79,0,0,0,8.33,52v1.43a1.26,1.26,0,0,0,.37.88,1.33,1.33,0,0,0,.9.36H29.87a1.31,1.31,0,0,0,.9-.36,1.26,1.26,0,0,0,.37-.88V52.11A4.76,4.76,0,0,0,28.39,47.82Zm.21,4.4H10.87V52a2.27,2.27,0,0,1,1.25-2l4.12-2.16a2.85,2.85,0,0,0,1.54-2.5V43.72a1.3,1.3,0,0,0-.3-.8,7.39,7.39,0,0,1-1.4-2.8,1.53,1.53,0,0,0-.6-.83V37.46a1.22,1.22,0,0,0,.43-.92v-2.7a2.17,2.17,0,0,1,.53-1.58,4.38,4.38,0,0,1,3.28-1,4.43,4.43,0,0,1,3.26,1,2.22,2.22,0,0,1,.55,1.6.8552.8552,0,0,0,0,.16v2.56a1.36,1.36,0,0,0,.46,1l-.08,1.86a1.23,1.23,0,0,0-.84.8,8.5819,8.5819,0,0,1-1.19,2.31c-.1.14-.22.28-.33.41a1.22,1.22,0,0,0-.33.82v1.66A2.86,2.86,0,0,0,22.86,48l4.41,2a2.28,2.28,0,0,1,1.33,2.07v.15Z" transform="translate(-2 -8.9898)" fill="#6476ff" /></svg>
                                                </div>
                                            </span>
                                            <span class="nk-kycfm-label-text">National ID</span>
                                        </label>
                                    </li>
                                </ul>
                                
                                <h6 class="title">To avoid delays when verifying account, Please make sure bellow:</h6>
                                <ul class="list list-sm list-checked">
                                    <li>Chosen credential must not be expaired.</li>
                                    <li>Document should be good condition and clearly visible.</li>
                                    <li>Make sure that there is no light glare on the card.</li>
                                </ul>
                                <input type="hidden" name="IDType" value="1">
                                <div class="nk-kycfm-upload">
                                    <h6 class="title nk-kycfm-upload-title">Upload Here Your Copy</h6>
                                    <div class="row align-items-center">
                                        <div class="nk-kycfm-upload-box">
                                            <div class="col-sm-8">
                                                <div class="button-wrap">
                                                    <label class ="upload-button" for="front">Upload front
                                                    <input type="file" name="api__AddFront" id="front">
                                                    <input type="text" id="frontL" disabled>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                <div class="mx-md-4">
                                                    <img src="/static/cabinet5/images/icons/id-front.svg" alt="ID Front">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-kycfm-upload">
                                    <h6 class="title nk-kycfm-upload-title">Upload Here Your Copy</h6>
                                    <div class="row align-items-center">
                                        <div class="nk-kycfm-upload-box">
                                            <div class="col-sm-8">
                                                <label class ="upload-button" for="back">Upload back
                                                <input type="file" name="api__AddBack" id="back">
                                                <input type="text" id="backL" disabled>
                                            </div>
                                            <div class="col-sm-4 d-none d-sm-block">
                                                <div class="mx-md-4">
                                                    <img src="/static/cabinet5/images/icons/id-back.svg" alt="ID Back">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-kycfm-footer">
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="tc-agree" required>
                                            <label class="custom-control-label" for="tc-agree">I Have Read The <a href="#">Terms Of Condition</a> And <a href="#">Privacy Policy</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <div class=”button-wrap”>
                                            <input type="checkbox" class="custom-control-input" id="info-assure" required>
                                            <label class="custom-control-label" for="info-assure">All The Personal Information I Have Entered Is Correct.</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-kycfm-action pt-2">
                                        <button type="submit" id="save" class="btn btn-lg btn-primary">Process for Verify</button>
                                        <button name="api__DeleteAll" value="1" class="btn btn-lg btn-primary" type="submit">Delete files</button>
                                    </div>
                                </div>
                            </form> -->
                        </div>
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    
<!-- Change phone modal -->
<div class="modal fade" id="changePhone" tabindex="-1" role="dialog" aria-labelledby="changePhoneLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_InsertNewPhone" id="changePhoneLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- <div class="row g-3 mb-3">
                <div class="col-lg-12">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <h6>Current phone:</h6>
                            <p id="currentPhone"></p>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row g-3">
                <div class="col-lg-3">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="tel" pattern="[+]{1}[0-9]{1,3}" required placeholder="Code" name="phoneCode">
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="number" required placeholder="Phone" name="phone">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 pt-1 align-center">
                <div class="col-lg-12">
                    <div class="form-group">
                        <span class="data-label phoneCode phone res_Current"></span>
                    </div>
                </div>
                <!-- <div class="col-lg-3">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" disabled class="phone">
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="modal-footer pt-0">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_Confirm" id="confirmPhone"></button>
        </div>
      </div>
    </div>
  </div>
<!-- End change phone modal -->

<!-- Change password modal -->
<div class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="changePasswordLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_ChangePassword" id="changePasswordLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row g-3 pb-3  d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="password" name="oldPass" class="text-center" required placeholder="Old password">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 pb-3  d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="password" name="newPass" class="text-center" required placeholder="New password">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 pb-3  d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="password" name="confNewPass" class="text-center" required placeholder="Confirm new password">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_Save" id="confirmPassword"></button>
        </div>
      </div>
    </div>
  </div>
<!-- End change password modal -->


<!-- Update docs modal -->
<div class="modal fade" id="updateDocs" tabindex="-1" role="dialog" aria-labelledby="updateDocsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_Credentials" id="updateDocsLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form id="documents" action="" method="post" enctype="multipart/form-data">
                <ul class="nk-kycfm-control-list g-3">
                    <li class="nk-kycfm-control-item">
                        <input class="nk-kycfm-control" type="radio" name="id-proof" id="passport" data-title="Passport" checked="">
                        <label class="nk-kycfm-label" for="passport">
                            <span class="nk-kycfm-label-icon">
                                <div class="label-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71.9904 75.9285">
                                        <path fill="currentColor" d="M27.14,23.73A15.55,15.55,0,1,0,42.57,39.4v-.12A15.5,15.5,0,0,0,27.14,23.73Zm11.42,9.72H33a25.55,25.55,0,0,0-2.21-6.53A12.89,12.89,0,0,1,38.56,33.45ZM31,39.28a26.9929,26.9929,0,0,1-.2,3.24H23.49a26.0021,26.0021,0,0,1,0-6.48H30.8A29.3354,29.3354,0,0,1,31,39.28ZM26.77,26.36h.75a21.7394,21.7394,0,0,1,2.85,7.09H23.91A21.7583,21.7583,0,0,1,26.77,26.36Zm-3.28.56a25.1381,25.1381,0,0,0-2.2,6.53H15.72a12.88,12.88,0,0,1,7.78-6.53ZM14.28,39.28A13.2013,13.2013,0,0,1,14.74,36H20.9a29.25,29.25,0,0,0,0,6.48H14.74A13.1271,13.1271,0,0,1,14.28,39.28Zm1.44,5.83h5.57a25.9082,25.9082,0,0,0,2.2,6.53A12.89,12.89,0,0,1,15.72,45.11ZM27.51,52.2h-.74a21.7372,21.7372,0,0,1-2.85-7.09h6.44A21.52,21.52,0,0,1,27.51,52.2Zm3.28-.56A25.1413,25.1413,0,0,0,33,45.11h5.57a12.84,12.84,0,0,1-7.77,6.53Zm2.59-9.12a28.4606,28.4606,0,0,0,0-6.48h6.15a11.7,11.7,0,0,1,0,6.48ZM14.29,62.6H40v2.6H14.28V62.61ZM56.57,49l1.33-5,2.48.67-1.33,5Zm-6,22.52L55.24,54l2.48.67L53.06,72.14Zm21.6-61.24-29.8-8a5.13,5.13,0,0,0-6.29,3.61h0L33.39,16H6.57A2.58,2.58,0,0,0,4,18.55V70.38A2.57,2.57,0,0,0,6.52,73L6.57,73h29.7l17.95,4.85a5.12,5.12,0,0,0,6.28-3.6v-.06L75.8,16.61a5.18,5.18,0,0,0-3.6066-6.3763L72.18,10.23ZM6.57,70.38V18.55H45.14a2.57,2.57,0,0,1,2.57,2.57V67.79a2.57,2.57,0,0,1-2.55,2.59H6.57ZM73.34,15.91,58,73.48a2.59,2.59,0,0,1-2.48,1.93,2.5192,2.5192,0,0,1-.67-.09l-9-2.42a5.15,5.15,0,0,0,4.37-5.11V47.24l1.32.36,1.33-5-2.49-.67-.16.62V21.94l2.62.71,3.05,10,2.13.57L57.88,24l3.76,1,1.65,3,1.42.39-.25-4.09,2.24-3.42-1.41-.39L62.4,22.15l-3.76-1,4.76-7.92-2.13-.57-7.6,7.14-4-1.08A5.1,5.1,0,0,0,45.14,16H36.05l2.51-9.45a2.57,2.57,0,0,1,3.12-1.84h0l29.81,8.05a2.56,2.56,0,0,1,1.56,1.21A2.65,2.65,0,0,1,73.34,15.91ZM56.57,39.59l.66-2.5,2.44.65L59,40.24Zm4.88,1.31.66-2.51,2.44.66-.65,2.5Zm-9.76-2.61.66-2.51,2.45.66-.66,2.5Z" transform="translate(-3.9995 -2.101)"></path></svg>
                                </div>
                            </span>
                            <span class="nk-kycfm-label-text res_Passport"></span>
                        </label>
                    </li><!-- .nk-kycfm-control-item -->
                    <li class="nk-kycfm-control-item">
                        <input class="nk-kycfm-control" type="radio" name="id-proof" id="national-id" data-title="National ID">
                        <label class="nk-kycfm-label" for="national-id">
                            <span class="nk-kycfm-label-icon">
                                <div class="label-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76 63.0105">
                                        <path fill="currentColor" d="M76,18.79,56.53,9.56a6.19,6.19,0,0,0-5.19,0l-19.5,9.23a3.35,3.35,0,0,0-1.9,2.55H8.33A6.26,6.26,0,0,0,2,27.51v38.3A6.27,6.27,0,0,0,8.33,72H71.67A6.27,6.27,0,0,0,78,65.81v-44A3.37,3.37,0,0,0,76,18.79Zm-.56,47a3.77,3.77,0,0,1-3.8,3.71H8.33a3.77,3.77,0,0,1-3.8-3.71V27.51a3.75,3.75,0,0,1,3.7993-3.7H29.87v9.34A34.49,34.49,0,0,0,44,60.41l7.51,5.8a4.11,4.11,0,0,0,4.94,0l7.51-5.8A36.5307,36.5307,0,0,0,75.47,45.62V65.81Zm0-32.66a32.09,32.09,0,0,1-13.1,25.34l-7.51,5.8a1.5,1.5,0,0,1-1.8,0l-7.51-5.8A32.05,32.05,0,0,1,32.4,33.15V21.83A.91.91,0,0,1,33,21l19.5-9.23a3.51,3.51,0,0,1,3,0L74.92,21a.91.91,0,0,1,.55.82V33.15ZM53.87,21.43a12.47,12.47,0,0,0-12.6,12.31,12.62,12.62,0,0,0,25.23,0,12.46,12.46,0,0,0-12.6178-12.3l-.0122,0Zm0,22.14A9.83,9.83,0,1,1,64,33.78a10,10,0,0,1-10.1,9.79Zm3.31-13.22-5.32,5.19-1.18-1.15a1.29,1.29,0,0,0-1.79,0,1.2,1.2,0,0,0-.013,1.697l.013.013h0l2.08,2a1.27,1.27,0,0,0,1.79,0L59,32.09a1.22,1.22,0,0,0,0-1.72h0a1.29,1.29,0,0,0-1.8,0ZM29.87,57.16h-20a1.24,1.24,0,1,0,0,2.47h20a1.24,1.24,0,0,0,0-2.47ZM19.73,62.1H9.89a1.24,1.24,0,0,0,0,2.48h9.84a1.24,1.24,0,0,0,0-2.48Zm8.66-14.28h0L24,45.71a.36.36,0,0,1-.22-.34V44.16a1.878,1.878,0,0,1,.18-.24,10.9991,10.9991,0,0,0,1.35-2.48,2.53,2.53,0,0,0,1.23-2.16V37.51a2.61,2.61,0,0,0-.46-1.43V34a4.69,4.69,0,0,0-1.15-3.43,6.68,6.68,0,0,0-5.19-1.85,6.67,6.67,0,0,0-5.18,1.85A4.61,4.61,0,0,0,13.4,34v2a2.46,2.46,0,0,0-.46,1.43v1.78a2.49,2.49,0,0,0,.78,1.81,10.148,10.148,0,0,0,1.52,3v1.2a.36.36,0,0,1-.21.33l-4.1,2.15A4.79,4.79,0,0,0,8.33,52v1.43a1.26,1.26,0,0,0,.37.88,1.33,1.33,0,0,0,.9.36H29.87a1.31,1.31,0,0,0,.9-.36,1.26,1.26,0,0,0,.37-.88V52.11A4.76,4.76,0,0,0,28.39,47.82Zm.21,4.4H10.87V52a2.27,2.27,0,0,1,1.25-2l4.12-2.16a2.85,2.85,0,0,0,1.54-2.5V43.72a1.3,1.3,0,0,0-.3-.8,7.39,7.39,0,0,1-1.4-2.8,1.53,1.53,0,0,0-.6-.83V37.46a1.22,1.22,0,0,0,.43-.92v-2.7a2.17,2.17,0,0,1,.53-1.58,4.38,4.38,0,0,1,3.28-1,4.43,4.43,0,0,1,3.26,1,2.22,2.22,0,0,1,.55,1.6.8552.8552,0,0,0,0,.16v2.56a1.36,1.36,0,0,0,.46,1l-.08,1.86a1.23,1.23,0,0,0-.84.8,8.5819,8.5819,0,0,1-1.19,2.31c-.1.14-.22.28-.33.41a1.22,1.22,0,0,0-.33.82v1.66A2.86,2.86,0,0,0,22.86,48l4.41,2a2.28,2.28,0,0,1,1.33,2.07v.15Z" transform="translate(-2 -8.9898)"></path></svg>
                                </div>
                            </span>
                            <span class="nk-kycfm-label-text res_GovernmentID"></span>
                        </label>
                    </li><!-- .nk-kycfm-control-item -->
                </ul><!-- .nk-kycfm-control-list -->
                
                <h6 class="title res_AvoidDelays"></h6>
                <ul class="list list-sm list-checked">
                    <li class="res_NotExpired"></li>
                    <li class="res_GoodAndClear"></li>
                    <li class="res_NoLightGlare"></li>
                </ul>
                <input type="hidden" name="IDType" value="1">
                <div class="nk-kycfm-upload">
                    <h6 class="title nk-kycfm-upload-title res_UploadHere"></h6>
                    <div class="row align-items-center">
                        <div class="nk-kycfm-upload-box">
                            <div class="col-sm-8">
                                <div class="button-wrap">
                                    <label class="upload-button res_FrontSide" for="front">
                                    <input type="file" name="api__AddFront" id="front">
                                    <input type="text" id="frontL" disabled="">
                                </label></div>
                            </div>
                            <div class="col-sm-4 d-none d-sm-block">
                                <div class="mx-md-4">
                                    <img src="/static/cabinet5/images/icons/id-front.svg" alt="ID Front">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="nk-kycfm-upload-box">
                            <div class="col-sm-8">
                                <label class="upload-button res_BackSide" for="back">
                                <input type="file" name="api__AddBack" id="back">
                                <input type="text" id="backL" disabled="">
                            </label></div>
                            <div class="col-sm-4 d-none d-sm-block">
                                <div class="mx-md-4">
                                    <img src="/static/cabinet5/images/icons/id-back.svg" alt="ID Back">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- nk-kycfm-upload -->
                <div class="nk-kycfm-footer">
                    <div class="form-group">
                        <div class="custom-control custom-control-xs custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="tc-agree" required="">
                            <label class="custom-control-label res_TermsAndPrivacy" for="tc-agree"></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-control-xs custom-checkbox">
                            <div class="”button-wrap”">
                            <input type="checkbox" class="custom-control-input" id="info-assure" required="">
                            <label class="custom-control-label res_CorrectPersonalInfo" for="info-assure"></label>
                            </div>
                        </div>
                    </div>
                    <div class="nk-kycfm-action pt-2 justify-end">
                        <button type="submit" id="save" class="btn btn-lg btn-primary mr-2 res_SubmitVerify"></button>
                    </div>
                </div><!-- .nk-kycfm-footer -->
            </form>
        </div>
      </div>
    </div>
  </div>
<!-- End update docs modal -->

<!-- Delete docs modal -->
<div class="modal fade" id="deleteDocs" tabindex="-1" role="dialog" aria-labelledby="deleteDocsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_SureDelete" id="deleteDocsLabel"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_Delete" data-dismiss="modal" id="confirmDelete"></button>
        </div>
      </div>
    </div>
  </div>
<!-- End delete docs modal -->

<!-- temp to const modal -->
<div class="modal fade" id="tempAccReg" tabindex="-1" role="dialog" aria-labelledby="tempAccRegLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_" id="tempAccRegLabel">Вы вошли под временным аккаунтом.
              <br>
              Желаете сделать его постянным?
          </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_" data-dismiss="modal" data-toggle="modal" data-target="#setPassModal">Да</button>
        </div>
      </div>
    </div>
  </div>
<!-- End temp to const modal -->


<!-- set pass modal -->
<div class="modal fade" id="setPassModal" tabindex="-1" role="dialog" aria-labelledby="setPassModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title res_" id="setPassModalLabel">Set password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="row g-3 pb-3  d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="password" name="newPass" class="text-center" required placeholder="Password">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 pb-3  d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="password" name="confNewPass" class="text-center" required placeholder="Confirm password">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light res_Close" data-dismiss="modal"></button>
          <button type="button" class="btn btn-primary res_Save" id="confirmSetPass"></button>
        </div>
      </div>
    </div>
  </div>
<!-- End set pass modal -->

    
    <?php include(HOME . "/views/imports/notif_modal.html"); ?>
    <!-- JavaScript -->
    

    <script src="/static/cabinet5/assets/js/bundle.js?ver=2.0.0"></script>
    <script src="/static/cabinet5/assets/js/scripts.js?ver=2.0.0"></script>
    <script>
        
        <?php echo $JsLocalizationVars; ?>
        <?php echo $JsLocalizationScript; ?>
    </script>
    <script src="/static/v2/js/resouceReader.js"></script>
    </body>

</html>