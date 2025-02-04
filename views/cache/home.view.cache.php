<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title><?php echo $title; ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, height-device-height, initial-scale=1, maximum-scale=1">
      <meta name="google-signin-client_id" content="4781314427-jndem184jtc54idv9p34arnocig6gcrh.apps.googleusercontent.com">
      <link rel="stylesheet" href="/static/css/libs.min.css">
      <link rel="shortcut icon" href="/static/v2/img/Xxlogo.ico" type="image/x-icon">
      <!--<link rel="stylesheet" href="/static/css/daterangepicker.min.css">-->
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <!-- <link rel="stylesheet" href="/static/css/main_alt.css"> -->
      <!-- v2 connection -->
      
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
      
      <link rel="stylesheet" type="text/css" href="/static/v2/css/styles.css">
      <link rel="stylesheet" type="text/css" href="/static/v2/css/preloader.css">
      <script src="/static/v2/js/jquery.min.js"></script>
      <script src="/static/v2/js/preloader.js"></script>
      <style>  
        .centered {
         
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          line-height: 0px;
        }
        
        .message {
          display: inline-block;
          line-height: 1.2;
          transition: line-height .2s, width .2s;
          overflow: hidden;
        }
        
        .message,
        .hidden {
          font-family: 'Ubuntu', serif;
          font-size: 18px;
        }
        
        .hidden {
          color: #FFF;
          opacity: 0;
        }

        .inline_div {
          display: inline;
        }
        </style>

    </head>
    <body>
      <!-- <div class="preloader-wrapper">
        <div class="preloader">
            <img src="../static/v2/img/preloader.gif" alt="NILA">
        </div>
    </div> -->
      <!-- <div class="preloader">
      </div> -->
        <header class="header header_v2">
            <div class="container_v2">
              <div class="header__between"><a class="logo" href="/">Xx<span class="logo-span">.</span></a>
                <nav class="header-nav">
                  <ul class="menu">
                    <li class="menu-item hide-sm"><a class="link c-dark" href="" id="addProperty"><span class="add"></span><span class="res_HeadAddApt"></span></a></li>
                    <li class="menu-item" id="login" style="display: flex;">
                      <a class="link link-sign-in c-dark" href="#" id="Login_Profile">
                        <span class="res_HeadEnter"></span>
                      </a>
                      <span> / </span>
                      <a class="link link-sign-in c-dark" href="/<?php echo $lng; ?>/auth.registration" id="Login_Profile">
                        <span class="res_Registration"></span>
                      </a>
                    </li>
                    <li class="menu-item" id="profile"><a class="link c-dark relative" href="/<?php echo $lng; ?>/cabinet.profile"> <img src="/static/v2/img/user-profile.svg" alt="profile"><span class="counter">12</span></a></li>
                  </ul>
                </nav>
                <button class="burger" type="button"><span class="burger-line burger-top"></span><span class="burger-line burger-bottom"></span></button>
              </div>
            </div>
          </header>
          <main class="home"> 
            <h1 class="title_v2 res_InstantBookings">
              <section class="centered">
                <div class="container_animate">
              <span class="message" id="js-part1"></span>
              <span class="message" id="js-part2"></span>
              <span class="message" id="js-part3"></span>
              <div class=""><span class="hidden" id="js-hidden">Message Here</span></div>
            </div>
              </section>
            </h1>
            <form class="form" autocomplete="chrome-off">
              <div class="form-row relative">
                <p class="form-name"><span class="res_City"></span></p>
                <input class="form-input input-city CityDrop City" type="text" rp-area="Where" required="">
                <input type="hidden" id="cityId" value="">
                <button class="delete hide-lg" type="button"></button><a class="link-location" href="#"><span class="flex-center-center"><img src="/static/v2/img/pin.svg" alt="pin">Рядом</span></a>
                <!-- dropdown for city -->
      
                <div class=" dropdown dropdown-form dropdown-city">
                  <div class="dropdown-head show-lg"> 
                    <div class="flex-center-between">
                      <div class="relative">
                        <input type="text" class="mCity CityDrop"  rp-area="Where">
                        <svg class="svg-sprite-icon icon-search-outline">
                          <use xlink:href="/static/v2/img/sprite/symbol/sprite.svg#search-outline"></use>
                        </svg>
                      </div>
                      <button class="popup-close close mClose" type="reset"></button>
                    </div>
                  </div>
                  <ul id="cityList">
                  </ul>
                </div>
              </div>
              <div class="form-row relative show-lg">
                <div class="d-flex">
                  <input class="form-input br-1 w-33" type="text" readonly name="arrivalMob" id="arrivalMob" placeholder="Заезд"> 
                  <input type="date"  min="" name="arrivalMob" id="arrivalMobDate"> 
                  <input class="form-input br-1 w-33" type="text" readonly name="departureMob" id="departureMob" placeholder="Выезд">
                  <input type="date"  min="" name="departureMob" id="departureMobDate">
                  <div class="relative w-33">
                    <input class="form-input" id="GuestMob" type="text" placeholder="Количество?" value="1 чел."  readonly>
      
                    <!-- dropdown for guests -->
      
                    <div class="dropdown-form dropdown-guests">
                      <div class="dropdown-head show-lg"> 
                        <div class="flex-center-between">
                          <h2 class="dropdown-title">Сколько людей</h2>
                          <button class="popup-close close mClose" type="reset"></button>
                        </div>
                      </div>
                      <ul>
                        <li class="flex-center-between">
                          <div> 
                            <p class="c-dark fw-semi"><span class="res_Adults"></span></p>
                            <p class="c-dark_v2 fw-light"><span class="res_v13yo"></span></p>
                          </div>
                          <div class="align-items-center"> 
                            <button class="btn-count btn-count-minus" type="button" disabled> </button>
                            <input class="count input-count count__adults_mob" type="number" value="1">
                            <button class="btn-count btn-count-plus-guests" type="button"> </button>
                          </div>
                        </li>
                        <li class="flex-center-between">
                          <div> 
                            <p class="c-dark fw-semi"><span class="res_Children"></span></p>
                            <p class="c-dark_v2 fw-light"><span class="res_v12yo"></span></p>
                          </div>
                          <div class="align-items-center"> 
                            <button class="btn-count btn-count-minus" type="button" disabled> </button>
                            <input class="count input-count count__children_mob" type="number" value="0">
                            <button class="btn-count btn-count-plus-guests" type="button"> </button>
                          </div>
                        </li>
                        <li class="flex-center-between">
                          <div> 
                            <p class="c-dark fw-semi res_Baby"></p>
                            <p class="c-dark_v2 fw-light res_v3yo"></p>
                          </div>
                          <div class="align-items-center"> 
                            <button class="btn-count btn-count-minus" type="button" disabled> </button>
                            <input class="count input-count count__baby_mob" type="number" value="0">
                            <button class="btn-count btn-count-plus-guests" type="button"> </button>
                          </div>
                        </li>
                        <div class="show-lg mClose">
                          <button class="btnSave" type="button">
                            <svg class="svg-sprite-icon icon-search img-search">
                              <use xlink:href="/static/v2/img/sprite/symbol/sprite.svg#search"></use>
                            </svg><span class="res_SaveChanges"></span>
                          </button>
                        </div>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row relative hide-lg">
                <p class="form-name"><span class="res_Arrival"></span></p>
                <input class="form-input" type="text" id="arrival" name="arrival" value="" required>
                <input type="hidden" id="arrivalHidden" name="arrivalHidden" value="">
              </div>
              <div class="form-row relative hide-lg">
                <p class="form-name"><span class="res_Departure"></span></p>
                <input class="form-input" type="text" id="departure" name="departure" value="" required>
                <input type="hidden" id="departureHidden" name="departureHidden" value="">
              </div>
              <div class="form-row relative hide-lg">
                <p class="form-name"><span class="res_Guests"></span></p>
                <input class="form-input br-0 input-visitor" type="text" placeholder="Количество?" value="1" required>
                <div class="dropdown-form dropdown-guests">
                  <ul>
                    <li class="flex-center-between">
                      <div> 
                        <p class="c-dark fw-semi"><span class="res_Adults"></span></p>
                        <p class="c-dark_v2 fw-light"><span class="res_v13yo"></span></p>
                      </div>
                      <div class="align-items-center"> 
                        <button class="btn-count btn-count-minus" type="button" disabled="disabled"> </button>
                        <input class="count input-count count__adults" id="AdultGuests" type="number" value="1">
                        <button class="btn-count btn-count-plus-guests" type="button"> </button>
                      </div>
                    </li>
                    <li class="flex-center-between">
                      <div> 
                        <p class="c-dark fw-semi"><span class="res_Children"></span></p>
                        <p class="c-dark_v2 fw-light"><span class="res_v12yo"></span></p>
                      </div>
                      <div class="align-items-center"> 
                        <button class="btn-count btn-count-minus" type="button" disabled> </button>
                        <input class="count input-count count__children" id="ChildGuests" type="number" value="0">
                        <button class="btn-count btn-count-plus-guests" type="button"> </button>
                      </div>
                    </li>
                    <li class="flex-center-between">
                      <div> 
                        <p class="c-dark fw-semi res_Baby"></p>
                        <p class="c-dark_v2 fw-light res_v3yo"></p>
                      </div>
                      <div class="align-items-center"> 
                        <button class="btn-count btn-count-minus" type="button" disabled> </button>
                        <input class="count input-count count__baby" type="number" value="0">
                        <button class="btn-count btn-count-plus-guests" type="button"> </button>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <button class="btnSave btnSearch" type="submit">
                <div class="btn-load">
                  <div class="fountainG" id="fountainG_1"></div>
                  <div class="fountainG" id="fountainG_2"></div>
                  <div class="fountainG" id="fountainG_3"></div>
                </div>
                <div class="btn-search">
                  <svg class="svg-sprite-icon icon-search img-search">
                    <use xlink:href="/static/v2/img/sprite/symbol/sprite.svg#search"></use>
                  </svg><span class="res_Search"></span>
                </div>
              </button>
            </form><a class="link_v2 hide-lg" href="#" id="nearby"><img src="/static/v2/img/pin.svg" alt="pin"><span class="res_Nearby"></span></a>
          </main>
      
          <!-- popup  -->
      
          <form id="popup-side" class="popup" method="post">
            <div class="flex-center-between">
              <h2 class="popup-title"><span class="res_LangPop"></span></h2>
              <button id="popup-close" class="popup-close popupToggle" type="button"></button>
            </div>
            <ul class="list">
              <li class="list-item"> 
                <label class="align-items-center"> 
                  <input class="checkbox" type="radio" name="radio-lang" id="en" checked><span class="check-item"> </span><span class="check-text"><span class="res_English"></span></span>
                </label>
              </li>
              <li class="list-item"> 
                <label class="align-items-center"> 
                  <input class="checkbox" type="radio" name="radio-lang" id="ru"><span class="check-item"> </span><span class="check-text"><span class="res_Russian"></span></span>
                </label>
              </li>
            </ul>
            <h2 class="popup-title"><span class="res_CcyPop"></span></h2>
            <ul class="list">
              <li class="list-item"> 
                <label class="align-items-center"> 
                  <input class="checkbox" type="radio" name="radio-curr" id="curr2" value="2" checked><span class="check-item"> </span><span class="check-text">USD</span>
                </label>
              </li>
              <li class="list-item"> 
                <label class="align-items-center"> 
                  <input class="checkbox" type="radio" name="radio-curr" id="curr4" value="4"><span class="check-item"> </span><span class="check-text">EUR</span>
                </label>
              </li>
            </ul>
            <h2 class="popup-title">Уведомления</h2>
            <ul class="list">
              <li class="list-item"> 
                <label class="d-flex">
                  <input class="checkbox" type="checkbox" checked><span class="switch"><span class="switch-circle"></span></span><span class="check-text">Получать уведомления на почту</span>
                </label>
              </li>
            </ul>
            <button class="btnSave btn_v2 popupToggle" id="saveSettings"><span class="res_SaveChanges"></span></button>
          </form>
          <footer class="footer footer_v2">
            <div class="container_v2">
              <div class="footer-top">
                <ul class="col">
                  <li class="footer-main"><span class="res_Company"></span></li>
                  <li class="footer-item"><a class="footer-link" href="https://help.rentxx.com/<?php echo $lng; ?>/company/about-us"><span class="res_About"></span></a></li>
                  <li class="footer-item"><a class="footer-link" href="https://help.rentxx.com/<?php echo $lng; ?>/company/for-investors"><span class="res_Invest"></span></a></li>
                  <li class="footer-item"><a class="footer-link" href="https://help.rentxx.com/<?php echo $lng; ?>/company/careers"><span class="res_Careers"></span></a></li>
                </ul>
                <ul class="col">
                  <li class="footer-main"><span class="res_Host"></span></li>
                  <li class="footer-item"><a class="footer-link" href="https://help.rentxx.com/<?php echo $lng; ?>/host/hosting-rules"><span class="res_HostRules"></span></a></li>
                  <li class="footer-item"><a class="footer-link" href="https://help.rentxx.com/<?php echo $lng; ?>/host/online-payments"><span class="res_HostPayMethod"></span></a></li>
                  <li class="footer-item"><a class="footer-link" href="https://help.rentxx.com/<?php echo $lng; ?>/host/rules-and-your-safety"><span class="res_RulesAndSafety"></span></a></li>
                </ul>
                <ul class="col">
                  <li class="footer-main"><span class="res_Support"></span></li>
                  <li class="footer-item"><a class="footer-link" href="#"><span class="res_KnowBase"></span></li></a></li>
                  <li class="footer-item"><a class="footer-link" href="#"><span class="res_ReportAbuse"></span></li></a></li>
                </ul>
                <ul class="col">
                  <li class="footer-main"><span class="res_ForGuests"></span></li>
                  <li class="footer-item"><a class="footer-link" href="https://help.rentxx.com/<?php echo $lng; ?>/guests/how-do-i-book-a-place"><span class="res_HowToBook"></span></a></li>
                  <li class="footer-item"><a class="footer-link" href="https://help.rentxx.com/<?php echo $lng; ?>/guests/payment-methods"><span class="res_PayMethods"></span></a></li>
                  <li class="footer-item"><a class="footer-link" href="https://help.rentxx.com/<?php echo $lng; ?>/guests/%20rules-and-your-safety"><span class="res_RulesAndSafety"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="footer-bottom">
              <div class="container_v2">
                <div class="flex-center-between">
                  <div class="align-items-center"> 
                    <p class="footer-text"><span class="res_CopyrightFooter"></span></p>
                    <ul class="footer-bottom__ul">
                      <li class="footer-bottom__li"><a class="footer-link" href="#"><span class="res_Privacy"></span></a></li>
                      <li class="footer-bottom__li"><a class="footer-link" href="#"><span class="res_Terms"></span></a></li>
                      <li class="footer-bottom__li"><a class="footer-link" href="#"><span class="res_Sitemap"></span></a></li>
                    </ul>
                    <div class="footer__cards"><a class="footer__card" href="#"><img class="footer-card__logo" src="/static/v2/img/visa.svg" alt="visa"></a><a class="footer__card" href="#"><img class="footer-card__logo" src="/static/v2/img/mastercard.svg" alt="mastercard"></a></div>
                  </div>
                  <div class="align-items-center lng_curr_btn_group"> <a class="align-items-center popupToggle" id="lng" href="#"><img src="/static/v2/img/language-learning.svg" class="popupToggle" alt="language"><span class="fs-10 c-dark_v2 ml-8 popupToggle res_CurrentLng"></span></a><a class="align-items-center ml-20 popupToggle" id="curr" href="#"><img src="/static/v2/img/money.svg" class="popupToggle" alt="money"><span class="fs-10 c-dark_v2 ml-8 popupToggle">USD $</span><img class="ml-8 popupToggle" src="/static/v2/img/down-arrow.svg" alt="arrow"></a></div>
                </div>
              </div>
            </div>
          </footer>
          <?php include(HOME . "/views/imports/mob-footer.html"); ?>
<script>
    function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}
</script>
    <!-- <script src="/static/js/moment.min.js"></script> -->
    <script src="/static/js/moment-with-locales.js"></script>
    <!-- <script src="/static/js/jquery.min.js"></script> -->
    <script src="/static/js/libs.min.js"></script>
    <script src="/static/v2/js/resouceReader.js"></script>
    <script src="/static/js/jquery.daterangepicker_v3.js"></script>
    <script src="/static/v2/js/toastr.min.js"></script>
    <script src="/static/js/common.js"></script>
    <script src="/static/v2/js/popup.js"></script>
<script>
  const requestURL = `https://rentxx.com/ru/home/api__City:1/searchInput:a/Limit:4`
  async function  autocompl(url){
    const autocompl_req = await 
      fetch(`https://rentxx.com/ru/home/api__City:1/searchInput:a/Limit:4`);
      const data = await (autocompl_req).json();
      console.log(data)
  }

<?php echo $JsLocalizationVars; ?>
<?php echo $JsLocalizationScript; ?>
</script>
<script src="//code.tidio.co/bk5h3vab2epaq2higs9epokteopmnq2q.js" async></script>
</body>
</html>
