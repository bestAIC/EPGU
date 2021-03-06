<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?print $pagetitle ?> :: ЕПГУ</title>

<link rel="stylesheet" type="text/css" href="css/main.css" media="all">
<link rel="stylesheet" type="text/css" href="css/mobile_main.css" media="all">
<script type="text/javascript" src="js/device.min.js"></script>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/jquery.formstyler.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/mobile_main.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery.mockjax.js"></script>
<script type="text/javascript" src="js/plugins/countries.js"></script>
<script type="text/javascript" src="js/plugins/ajax_autocomplete.js"></script>

<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

<!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/ie8.css" media="all">
  <script type="text/javascript" src="js/PIE.js"></script>
<![endif]-->

</head>
<body>

<?
include('include/mobile_popup.php');
?>

  <div class="menu_btn_cover">
    <div class="closed" id="menu_btn">
      <a class="exit">Константинопольский К. К.</a>
      
      <ul class="submenu">
        <li class='ico_lk'><a href="#0" tabindex="-1"><span class="icomoon">9</span><span>Личный кабинет</span></a></li>
        <li class='ico_contact'><a href="#0" tabindex="-1"><span class="icomoon">:</span><span>Свяжитесь с нами</span></a></li>
        <li class='ico_exit'><a href="#0" tabindex="-1"><span class="icomoon">;</span><span>Выход</span></a></li>
      </ul>
    </div>
  </div>
    

    <? if($pagename == 'mobile_nalogovaya_zadoljennost') { ?>
        <div id="wrap" class="mobile_nalogovaya_zadoljennost">
    <? } else if ($pagename == 'mobile_gibdd_shtrafy') { ?> 
        <div id="wrap" class="mobile_gibdd_shtrafy">
    <? } else if ($pagename == 'mobile_gibdd_ekzamen') { ?> 
        <div id="wrap" class="mobile_gibdd_ekzamen">        
    <? } else if ($pagename == 'mobile_oplata_uniteller') { ?> 
        <div id="wrap" class="mobile_oplata_uniteller">        
    <? } else if ($pagename == 'mobile_proverka_sudebnyh_zadoljennostey') { ?> 
        <div id="wrap" class="mobile_proverka_sudebnyh_zadoljennostey">
    <? } else if ($pagename == 'mobile_obratnaya_svyaz') { ?> 
        <div id="wrap" class="mobile_obratnaya_svyaz">
    <? } else if ($pagename == 'mobile_zamena_pasporta_neprigodnost') { ?> 
        <div id="wrap" class="mobile_zamena_pasporta_neprigodnost">
    <? } else if ($pagename == 'mobile_typical_elements') { ?> 
        <div id="wrap" class="mobile_typical_elements">
    <? } else if ($pagename == 'mobile_detskiy_sad') { ?> 
        <div id="wrap" class="mobile_detskiy_sad">        
    <? } else if ($pagename == 'mobile_404') { ?> 
        <div id="wrap" class="page_404">
    <? } else if ($pagename == 'mobile_postanovka_na_registraciu') { ?> 
        <div id="wrap" class='mobile_postanovka_na_registraciu'>
    <? } else if ($pagename == 'mobile_snatie_s_registracii') { ?> 
        <div id="wrap" class="mobile_snatie_s_registracii">
    <? } else if ($pagename == 'mobile_zagran_pasport_nov_18_plus') { ?> 
        <div id="wrap" class="mobile_zagran_pasport_nov_18_plus">
    <? } else if ($pagename == 'mobile_detskiy_sad') { ?> 
        <div id="wrap" class="mobile_detskiy_sad">
    <? } else if ($pagename == 'mobile_detskiy_sad_proverka_ocheredy') { ?> 
        <div id="wrap" class="mobile_detskiy_sad_proverka_ocheredy">
    <? } else if ($pagename == 'mobile_egrn') { ?> 
        <div id="wrap" class="mobile_egrn">        
    <? } else { ?> 
        <div id="wrap">
    <? } ?>

        <div class="cover">
            <div id="header">

              <? if($pagename == 'mobile_obratnaya_svyaz' || $pagename == 'mobile_zagran_pasport_nov_18_plus' || $pagename == 'mobile_zamena_pasporta_neprigodnost' || $pagename == 'mobile_postanovka_na_registraciu' || $pagename == 'mobile_snatie_s_registracii') { ?>
                  <div class="top type_1"> 
              <? } else if ($pagename == 'mobile_gibdd_shtrafy' || $pagename == 'mobile_gibdd_ekzamen' || $pagename == 'mobile_oplata_uniteller' || $pagename == 'links' || $pagename == 'mobile_typical_elements') { ?> 
                  <div class="top type_2"> 
              <? } else if ($pagename == 'mobile_nalogovaya_zadoljennost' || $pagename == 'mobile_proverka_sudebnyh_zadoljennostey') { ?>
                  <div class="top type_3">  
              <? } else if ($pagename == 'mobile_detskiy_sad' || $pagename == 'mobile_detskiy_sad_proverka_ocheredy' || $pagename == 'mobile_mat_capital' || $pagename == 'mobile_vidacha_sertifikata_na_matcapital') { ?>
                  <div class="top type_4">
              <? } else if ($pagename == 'mobile_egrn') { ?>
                  <div class="top type_5">                      
              <? } else if ($pagename == 'mobile_404') { ?>
                  <div class="top type_non">  
              <? } ?>


                <ul class="nav clear">
                  <li class="col_1">
                    <span class="logo">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="logo_svg" x="0px" y="0px" width="150px" height="34px" viewBox="0 0 221.416 49.583" enable-background="new 0 0 221.416 49.583" xml:space="preserve">
                      <path fill="#EE3F58" d="M144.428,15.049h-17.992c-0.175,0-0.317,0.138-0.327,0.31c-0.452,8.124-1.983,16.876-4.2,24.025  c-0.031,0.097-0.013,0.206,0.047,0.291c0.062,0.081,0.161,0.132,0.264,0.132h6.157c0.142,0,0.269-0.092,0.312-0.229  c1.724-5.51,3.108-12.667,3.635-18.761h5.904v18.663c0,0.179,0.147,0.326,0.327,0.326h5.872c0.182,0,0.327-0.147,0.327-0.326V15.378  C144.755,15.197,144.61,15.049,144.428,15.049"/>
                      <path fill="#EE3F58" d="M220.514,15.049h-5.87c-0.18,0-0.328,0.147-0.328,0.329v18.648c-1.289,0.362-2.576,0.535-4.027,0.535  c-3.892,0-4.788-1.189-4.788-6.351V15.378c0-0.181-0.146-0.329-0.327-0.329h-5.871c-0.182,0-0.327,0.147-0.327,0.329v13.449  c0,8.412,2.839,11.69,10.129,11.69c4.148,0,8.778-1.058,11.526-2.105c0.128-0.05,0.213-0.169,0.213-0.304v-22.73  C220.843,15.197,220.695,15.049,220.514,15.049"/>
                      <path fill="#EE3F58" d="M96.031,15.075h-5.966c-0.15,0-0.282,0.1-0.317,0.247c-0.945,3.716-2.839,9.91-5.384,16.401L78.37,15.265  c-0.047-0.128-0.169-0.216-0.306-0.216h-6.04c-0.106,0-0.206,0.053-0.267,0.141c-0.061,0.087-0.077,0.2-0.041,0.3l8.973,24.635  c-0.938,1.887-1.78,3.451-2.593,4.968c-0.599,1.114-1.183,2.196-1.771,3.351c-0.053,0.1-0.047,0.222,0.011,0.319  c0.06,0.097,0.166,0.156,0.28,0.156h6.535c0.122,0,0.233-0.069,0.29-0.179c1.109-2.13,2.478-5.09,3.752-8.117  c3.813-8.969,6.893-17.425,9.15-25.13c0.03-0.1,0.011-0.207-0.052-0.291C96.231,15.122,96.134,15.075,96.031,15.075"/>
                      <path fill="#EE3F58" d="M117.425,34.042c-0.03-0.082-0.092-0.15-0.17-0.185c-0.08-0.038-0.169-0.041-0.253-0.01  c-1.433,0.528-4.117,0.96-5.984,0.96c-4.095,0-6.044-1.104-6.044-7.382c0-5.021,0.598-7.383,6.044-7.383  c1.543,0,2.978,0.225,4.795,0.75c0.15,0.041,0.308-0.025,0.382-0.16c0.68-1.279,1.503-2.84,2.429-4.755  c0.041-0.084,0.042-0.185,0.004-0.272c-0.036-0.084-0.111-0.153-0.2-0.182c-2.41-0.766-5.27-1.208-7.842-1.208  c-8.573,0-12.396,4.045-12.396,13.113c0,9.204,3.823,13.305,12.396,13.305c2.147,0,6.383-0.45,8.424-1.267  c0.164-0.065,0.247-0.247,0.186-0.416L117.425,34.042z"/>
                      <path fill="#EE3F58" d="M173.309,15.075h-5.966c-0.15,0-0.281,0.1-0.319,0.247c-0.944,3.719-2.837,9.913-5.382,16.401l-5.994-16.458  c-0.047-0.128-0.169-0.216-0.307-0.216h-6.039c-0.106,0-0.207,0.053-0.268,0.141c-0.062,0.087-0.075,0.2-0.041,0.3l8.972,24.635  c-0.935,1.884-1.773,3.444-2.587,4.959c-0.601,1.116-1.184,2.199-1.774,3.359c-0.053,0.1-0.048,0.222,0.011,0.319  c0.06,0.097,0.166,0.156,0.28,0.156h6.534c0.12,0,0.234-0.069,0.291-0.179c1.107-2.127,2.475-5.086,3.751-8.117  c3.807-8.953,6.887-17.409,9.15-25.13c0.03-0.1,0.011-0.207-0.05-0.291C173.509,15.122,173.41,15.075,173.309,15.075"/>
                      <path fill="#EE3F58" d="M195.346,15.049h-17.381c-0.18,0-0.327,0.147-0.327,0.329v24.103c0,0.179,0.147,0.326,0.327,0.326h5.87  c0.18,0,0.327-0.147,0.327-0.326V20.818h9.076c0.132,0,0.251-0.078,0.301-0.197c0.691-1.63,1.399-3.354,2.11-5.121  c0.04-0.1,0.027-0.216-0.031-0.303C195.557,15.106,195.453,15.049,195.346,15.049"/>
                      <path fill="#0065B1" d="M32.133,35.033c-3.866,0-5.071-1.051-5.071-7.627c0-7.004,1.314-7.629,5.071-7.629  c3.826,0,5.165,0.625,5.165,7.629C37.298,33.982,36.071,35.033,32.133,35.033 M32.133,14.342c-8.48,0-11.786,3.635-11.786,12.967  c0,9.47,3.305,13.157,11.786,13.157c8.55,0,11.88-3.688,11.88-13.157C44.013,17.978,40.683,14.342,32.133,14.342"/>
                      <path fill="#0065B1" d="M67.44,34.042c-0.03-0.082-0.091-0.15-0.171-0.185c-0.08-0.038-0.169-0.041-0.251-0.01  c-1.433,0.528-4.119,0.96-5.986,0.96c-4.095,0-6.044-1.104-6.044-7.382c0-5.021,0.597-7.383,6.044-7.383  c1.542,0,2.978,0.225,4.797,0.75c0.148,0.041,0.307-0.025,0.38-0.16c0.682-1.279,1.502-2.84,2.428-4.755  c0.042-0.084,0.044-0.185,0.006-0.272c-0.038-0.084-0.111-0.153-0.2-0.182c-2.411-0.766-5.268-1.208-7.843-1.208  c-8.573,0-12.394,4.045-12.394,13.113c0,9.204,3.821,13.305,12.394,13.305c2.148,0,6.383-0.45,8.426-1.267  c0.163-0.065,0.246-0.247,0.185-0.416L67.44,34.042z"/>
                      <path fill="#0065B1" d="M18.55,15.049H1.169c-0.181,0-0.327,0.147-0.327,0.329v24.103c0,0.179,0.146,0.326,0.327,0.326h5.869  c0.182,0,0.329-0.147,0.329-0.326V20.818h9.077c0.131,0,0.247-0.078,0.3-0.197c0.689-1.63,1.4-3.354,2.11-5.121  c0.041-0.1,0.028-0.216-0.033-0.303C18.76,15.106,18.66,15.049,18.55,15.049"/>
                      <g>
                        <path fill="#A8A8A8" d="M200.866,3.139c0.844,0,1.499,0.288,1.966,0.864s0.7,1.392,0.7,2.446s-0.235,1.874-0.706,2.458   s-1.124,0.876-1.96,0.876c-0.418,0-0.8-0.077-1.146-0.231s-0.636-0.392-0.87-0.712h-0.07l-0.205,0.826h-0.697V0.549h0.973v2.215   c0,0.496-0.016,0.941-0.047,1.336h0.047C199.304,3.459,199.976,3.139,200.866,3.139z M200.726,3.954   c-0.664,0-1.143,0.19-1.436,0.571s-0.439,1.022-0.439,1.925s0.15,1.548,0.451,1.937s0.783,0.583,1.447,0.583   c0.598,0,1.043-0.218,1.336-0.653s0.439-1.062,0.439-1.878c0-0.836-0.146-1.459-0.439-1.869S201.339,3.954,200.726,3.954z"/>
                        <path fill="#A8A8A8" d="M207.944,9.784c-0.949,0-1.698-0.289-2.247-0.867s-0.823-1.381-0.823-2.408   c0-1.035,0.255-1.857,0.765-2.467s1.194-0.914,2.054-0.914c0.805,0,1.441,0.265,1.91,0.794s0.703,1.228,0.703,2.095v0.615h-4.424   c0.02,0.754,0.21,1.326,0.571,1.717s0.87,0.586,1.526,0.586c0.691,0,1.375-0.145,2.051-0.434v0.867   c-0.344,0.148-0.669,0.255-0.976,0.319S208.378,9.784,207.944,9.784z M207.681,3.942c-0.516,0-0.927,0.168-1.233,0.504   s-0.487,0.801-0.542,1.395h3.357c0-0.613-0.137-1.083-0.41-1.409S208.188,3.942,207.681,3.942z"/>
                        <path fill="#A8A8A8" d="M214.038,8.981c0.172,0,0.338-0.013,0.498-0.038s0.287-0.052,0.381-0.079v0.744   c-0.105,0.051-0.261,0.093-0.466,0.126s-0.39,0.05-0.554,0.05c-1.242,0-1.863-0.654-1.863-1.963V4h-0.92V3.532l0.92-0.404   l0.41-1.371h0.562v1.488h1.863V4h-1.863V7.78c0,0.387,0.092,0.684,0.275,0.891S213.718,8.981,214.038,8.981z"/>
                        <path fill="#A8A8A8" d="M220.149,9.667l-0.193-0.914h-0.047c-0.32,0.402-0.64,0.675-0.958,0.817s-0.716,0.214-1.192,0.214   c-0.637,0-1.136-0.164-1.497-0.492s-0.542-0.795-0.542-1.4c0-1.297,1.037-1.977,3.111-2.039l1.09-0.035V5.418   c0-0.504-0.108-0.876-0.325-1.116s-0.563-0.36-1.04-0.36c-0.535,0-1.141,0.164-1.816,0.492L216.44,3.69   c0.316-0.172,0.663-0.307,1.04-0.404s0.755-0.146,1.134-0.146c0.766,0,1.333,0.17,1.702,0.51s0.554,0.885,0.554,1.635v4.383   H220.149z M217.952,8.981c0.605,0,1.081-0.166,1.427-0.498s0.519-0.797,0.519-1.395v-0.58l-0.973,0.041   c-0.773,0.027-1.331,0.147-1.673,0.36s-0.513,0.544-0.513,0.993c0,0.352,0.106,0.619,0.319,0.803S217.569,8.981,217.952,8.981z"/>
                      </g>
                      </svg>
                    </span>
                  </li>
                  <li class="col_2">
                    <a href="#0" tabindex="-1" class="catalog_link">Основной портал</a>
                  </li>
                  <li class="col_3"> 
                    <a class="menu closed" href="#" tabindex="-1"><span class="icomoon">0</span><span>Меню</span></a>
                  </li>                                      
                </ul>      
              </div>
            </div>