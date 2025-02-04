<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title><?php echo $title; ?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="google-signin-client_id" content="4781314427-jndem184jtc54idv9p34arnocig6gcrh.apps.googleusercontent.com">
      <link rel="stylesheet" href="/static/css/libs.min.css">
      <link rel="shortcut icon" href="/static/v2/img/Xxlogo.ico" type="image/x-icon">
      <!--<link rel="stylesheet" href="/static/css/daterangepicker.min.css">-->
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
      <!-- <link rel="stylesheet" href="/static/css/main_alt.css"> -->
      <!-- v2 connection -->
      
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap" rel="stylesheet">
      
      <link rel="stylesheet" type="text/css" href="/static/css/main_alt.css"> 
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
      
     <?php include(HOME . XX . "views/imports/header.html"); ?>

       <div class="container_v2">
         <main class="page_content"> 
            <div class="left_page_content">
              <h1 class="title_v2 res_MessageSent" style="display: block;"></h1>
              <!-- <p class="text_descr">
                Мы проверим ваше обьявление в течении <span class="text-bold">24 часов</span>, вы получите эмаил на <span class="text-bold email"></span> как только обявление станет активным.
              </p> -->
              <!-- <div class="btn_group">
                <a class="btn_back btn_xl" href="/">ЗАКРЫТЬ</a>
                <a class="btn_red btn_xl" href="/<?php echo $lng; ?>/">ПЕРЕЙТИ В КАБИНЕТ ВЛАДЕЛЬЦА</a>
              </div> -->
            </div>
            <div class="right_page_content">
              <img src="/static/v2/img/mail_img.svg" alt="">
            </div>
          </main> 
        </div>
      
     <?php include(HOME . XX . "views/imports/popup_lc.html"); ?>
     <?php include(HOME . XX . "views/imports/footer_v2.html"); ?>
         
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

<?php echo $JsLocalizationVars; ?>
<?php echo $JsLocalizationScript; ?>
</script>

</body>
</html>
