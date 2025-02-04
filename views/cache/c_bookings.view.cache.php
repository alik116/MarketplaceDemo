<html lang="en"><head>
    <meta charset="utf-8">
    <title>title</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=400, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/css/libs.min.css">
    <link rel="stylesheet" href="/static/css/daterangepicker.min.css">
    <link rel="stylesheet" href="/static/css/main_alt.css">
<style type="text/css">span.im-caret {
    -webkit-animation: 1s blink step-end infinite;
    animation: 1s blink step-end infinite;
}

@keyframes blink {
    from, to {
        border-right-color: black;
    }
    50% {
        border-right-color: transparent;
    }
}

@-webkit-keyframes blink {
    from, to {
        border-right-color: black;
    }
    50% {
        border-right-color: transparent;
    }
}

span.im-static {
    color: grey;
}

div.im-colormask {
    display: inline-block;
    border-style: inset;
    border-width: 2px;
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield;
}

div.im-colormask > input {
    position: absolute;
    display: inline-block;
    background-color: transparent;
    color: transparent;
    -webkit-appearance: caret;
    -moz-appearance: caret;
    appearance: caret;
    border-style: none;
    left: 0; /*calculated*/
}

div.im-colormask > input:focus {
    outline: none;
}

div.im-colormask > input::-moz-selection{
    background: none;
}

div.im-colormask > input::selection{
    background: none;
}
div.im-colormask > input::-moz-selection{
    background: none;
}

div.im-colormask > div {
    color: black;
    display: inline-block;
    width: 100px; /*calculated*/
}</style></head>

<body>
<div id="wrapper">
    <header class="header header-main">
        <div class="container">
            <div class="header__between">
                <a href="#" class="logo">Xx
                    <span class="logo-span">.</span>
                </a>
                <nav class="header-nav">
                    <ul class="menu">
                        <li class="menu-item d-md-block">
                            <a href="#" class="link">
                                <span class="add"></span>
                                добавить квартиру
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="#" class="link link-sign-in">
                                ВХОД
                            </a>
                        </li>
                    </ul>
                </nav>
                <button type="button" class="burger">
                    <span class="burger-line burger-top"></span>
                    <span class="burger-line burger-bottom"></span>
                </button>
            </div>
        </div>
    </header>
    <div id="wrapper-content">
        <div class="container">
            <div class="payment">
                <form class="payment__content">
                    <h2 class="title">Мои бронирования</h2>
                    <div class="payment__block">
                        <ul class="catalog-list" id="catalog-list">  
                       </ul>
                    </div>
                </form>
                <?php include(HOME . XX . "views/cache/e_cabinetmenu.view.cache.php"); ?>
            </div>
        </div>
    </div>
    <?php include(HOME . XX . "views/cache/footer.view.cache.php"); ?>
    <div>
    <div class="popups popup__lang-curr">
        <div class="popup">
            <div class="popup__head">
                <h2 class="popup__head-title">???? ? ??????</h2>
                <button type="button" class="close"></button>
            </div>
            <div class="popup-content">
                <div class="popup__section">
                    <h4 class="popup__title">??????</h4>
                    <div class="popup__row">
                        <label class="label-checkbox">
                            <input type="radio" name="curr" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">EUR</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="curr" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">USD</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="curr" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">AZN</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="curr" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">UAH</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="curr" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">RUB</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="curr" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">BEL</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="curr" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">GEO</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="curr" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">EAD</span>
                        </label>
                    </div>
                </div>
                <div class="popup__section">
                    <h4 class="popup__title">????</h4>
                    <div class="popup__row">
                        <label class="label-checkbox">
                            <input type="radio" name="lang" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">??????????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="lang" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">???????????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="lang" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">????????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="lang" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">????????</span>
                        </label>
                    </div>
                </div>
                <div class="popup__bottom">
                    <a href="#" class="btn btn-small">SAVE CHANGES
                        <svg class="arrow">
                            <use xlink:href="/static/img/sprite/sprite.svg#arrow-down"></use>
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="popups popup__additional-filters">
        <div class="popup positionTop">
            <div class="popup__head">
                <h2 class="popup__head-title">?????????????? ???????</h2>
                <button type="button" class="close"></button>
            </div>
            <form class="popup-content">
                <div class="popup__section">
                    <label class="label-checkbox">
                        <input type="checkbox" class="checkbox">
                        <span class="check"></span>
                        <span class="check-text">??????????? ??????</span>
                    </label>
                    <label class="label-checkbox">
                        <input type="checkbox" class="checkbox">
                        <span class="check"></span>
                        <span class="check-text">??????? ??????
                   <span class="check-span"> ???????????????? ? ????? ????????????? ?????? <a href="#" class="c-blue">?????????</a></span>

                </span>
                    </label>
                </div>
                <div class="popup__section">
                    <h4 class="popup__title">????????</h4>
                    <div class="popup__row">
                        <label class="label-checkbox">
                            <input type="checkbox" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">?????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="checkbox" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">???????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="checkbox" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">?????????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="checkbox" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">???????????</span>
                        </label>
                    </div>
                    <a href="#" class="link-item">??? ????????
                        <svg class="arrow c-blue">
                            <use xlink:href="/static/img/sprite/sprite.svg#arrow-down"></use>
                        </svg>
                    </a>
                </div>
                <div class="popup__section">
                    <h4 class="popup__title">?????????????? ????????</h4>
                    <div class="popup__row">
                        <label class="label-checkbox">
                            <input type="checkbox" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">?????????? <br>????????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="checkbox" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">????????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="checkbox" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">???????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="checkbox" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">???????</span>
                        </label>
                    </div>
                </div>
                <div class="popup__section">
                    <h4 class="popup__title">????</h4>
                    <div class="popup__row">
                        <div class="popup__price">
                            <p>??</p>
                            <input type="number" class="popup__input">
                        </div>
                        <div class="popup__price">
                            <p>??</p>
                            <input type="number" class="popup__input">
                        </div>

                    </div>
                </div>
                <div class="popup__section">
                    <h4 class="popup__title">???? ???????</h4>
                    <div class="popup__row">
                        <label class="label-checkbox">
                            <input type="radio" name="lang" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">??????????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="lang" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">???????????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="lang" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">????????</span>
                        </label>
                        <label class="label-checkbox">
                            <input type="radio" name="lang" class="checkbox">
                            <span class="check"></span>
                            <span class="check-text">????????</span>
                        </label>
                    </div>
                    <a href="#" class="link-item">??? ?????
                        <svg class="arrow c-blue">
                            <use xlink:href="/static/img/sprite/sprite.svg#arrow-down"></use>
                        </svg>
                    </a>
                </div>
                <div class="popup__bottom popup__bottom__between">
                    <button type="reset" class="link-item">???????? <span class="close"></span></button>
                    <button type="submit" class="btn btn-small">???????? ????????
                        <svg class="arrow">
                            <use xlink:href="/static/img/sprite/sprite.svg#arrow-down"></use>
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<script src="/static/js/moment.min.js"></script>
<script src="/static/js/jquery.min.js"></script>
<script src="/static/js/libs.min.js"></script>
<script src="/static/js/jquery.inputmask.bundle.js"></script>
<script src="/static/js/jquery.daterangepicker.min.js"></script>
<script src="/static/js/common.js"></script>
<script src="/static/js/jquery.cookie.js"></script>
<script>
    <?php echo $JsLocalizationVars; ?>
    <?php echo $JsLocalizationScript; ?>
</script>


<div class="date-picker-wrapper no-shortcuts " style="display: none;"><div class="drp_top-bar"><div class="normal-top"><span class="selection-top">???????: </span> <b class="start-day">...</b> <span class="separator-day"> - </span> <b class="end-day">...</b> <i class="selected-days">(<span class="selected-days-num">3</span> ????)</i></div><div class="error-top">error</div><div class="default-top">default</div><input type="button" class="apply-btn disabled" value="?????????"></div><div class="month-wrapper">   <table class="month1" cellspacing="0" border="0" cellpadding="0">       <thead>           <tr class="caption">               <th>                   <span class="prev">&lt;                   </span>               </th>               <th colspan="5" class="month-name">               </th>               <th><span class="next">&gt;</span>               </th>           </tr>           <tr class="week-name"><th>??</th><th>??</th><th>??</th><th>??</th><th>??</th><th>??</th><th>??</th>       </tr></thead>       <tbody></tbody>   </table><div class="dp-clearfix"></div><div class="time"><div class="time1"></div><div class="time2"></div></div><div class="dp-clearfix"></div></div><div class="footer"></div><div class="date-range-length-tip"></div></div><div class="date-picker-wrapper no-shortcuts  no-topbar " style="display: none;"><div class="month-wrapper">   <table class="month1" cellspacing="0" border="0" cellpadding="0">       <thead>           <tr class="caption">               <th>                   <span class="prev">&lt;                   </span>               </th>               <th colspan="5" class="month-name">               </th>               <th><span class="next">&gt;</span>               </th>           </tr>           <tr class="week-name"><th>??</th><th>??</th><th>??</th><th>??</th><th>??</th><th>??</th><th>??</th>       </tr></thead>       <tbody></tbody>   </table><div class="dp-clearfix"></div><div class="time"><div class="time1"></div><div class="time2"></div></div><div class="dp-clearfix"></div></div><div class="footer"></div><div class="date-range-length-tip"></div></div></body></html>