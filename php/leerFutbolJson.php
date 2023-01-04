<?php 
$identificador=$_REQUEST['i'];
error_reporting(0);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
date_default_timezone_set('America/Bogota');
$fechaHoy = date('dMY');

/* Codigo Roja Dorecta**************************/

$LeerJson = file_get_contents('https://apptrafic.com/scraping/RojaDirecta/servidores.php?i='.$identificador);
$LeerJson = json_decode($LeerJson);
$contadorjson = count($LeerJson);
$urlFInal =($LeerJson[0]->urlVideo);

for ($i = 0;$i <  $contadorjson ; $i++) {

   $urlFInal =($LeerJson[$i]->urlVideo);
   $titulo =$LeerJson[$i]->titulo ;

   echo "

   <div class='col-lg-2   '>
   <input hidden id='dato$i' value='$urlFInal'></input>
   <a id='url$i' href='#' class='d-flex play-button align-items-center' data-fancybox='>
   <span class='icon mr-3'>
     <span class='icon-play'></span>
   </span>
   <div class='caption'>
     <span class='meta'>&nbsp;&nbsp;$titulo</span>              
   </div>
 </a>
   </div>

          
   
   ";

  

}
