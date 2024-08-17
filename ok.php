<?
   session_cache_limiter('private, must-revalidate');
   session_start();
   include_once('lib.php');
   if (empty($_SESSION['usu_valido'])) {
     include('acces.php');
	 return;
   }
   extract($_SESSION); extract($_POST); extract($_GET);
   
   include('conexion.php');

	 $resTEM= mysql_query("SELECT * FROM template WHERE activo=1",$conexion);
	 $cant_templates= mysql_num_rows($resTEM);

	 $usuario= $_SESSION['usu_valido'];
     $resUSU = mysql_query("SELECT * FROM usuario WHERE clave = $usu_valido",$conexion);
     $rowUSU = mysql_fetch_array($resUSU);

     $resLAN = mysql_query("SELECT * FROM landing_page WHERE clave = 1",$conexion);
     $rowLAN = mysql_fetch_array($resLAN);
	 
	 
	 $autoresponders = $rowUSU['autoresponders'];
	 $videos = $rowUSU['videos'];

	 $titulo=$rowUSU['subdominio_titulo'];
	 $titulo_en=$rowUSU['subdominio_titulo_en'];
	 $subtitulo=$rowUSU['subdominio_subtitulo'];
	 $subtitulo_en=$rowUSU['subdominio_subtitulo_en'];
	 $descripcion=$rowUSU['subdominio_descripcion'];
	 $descripcion_en=$rowUSU['subdominio_descripcion_en'];
	 $puntos=$rowUSU['subdominio_puntos'];
	 $puntos_en=$rowUSU['subdominio_puntos_en'];
	 $video=$rowUSU['subdominio_video'];
	 $video_en=$rowUSU['subdominio_video_en'];
	 $titulo_formulario=$rowUSU['subdominio_tituloformulario'];
	 $titulo_formulario_en=$rowUSU['subdominio_tituloformulario_en'];
	 $texto_formulario=$rowUSU['subdominio_textoformulario'];
	 $texto_formulario_en=$rowUSU['subdominio_textoformulario_en'];
	 $boton=$rowUSU['subdominio_boton'];
	 $boton_en=$rowUSU['subdominio_boton_en'];
	 $bg_video=$rowUSU['subdominio_bg_video'];

	 $titulo2=$rowUSU['subdominio_titulo2'];
	 $titulo2_en=$rowUSU['subdominio_titulo2_en'];
	 $subtitulo2=$rowUSU['subdominio_subtitulo2'];
	 $subtitulo2_en=$rowUSU['subdominio_subtitulo2_en'];
	 $descripcion2=$rowUSU['subdominio_descripcion2'];
	 $descripcion2_en=$rowUSU['subdominio_descripcion2_en'];
	 $puntos2=$rowUSU['subdominio_puntos2'];
	 $puntos2_en=$rowUSU['subdominio_puntos2_en'];
	 $video2=$rowUSU['subdominio_video2'];
	 $video2_en=$rowUSU['subdominio_video2_en'];
	 $titulo_formulario2=$rowUSU['subdominio_tituloformulario2'];
	 $titulo_formulario2_en=$rowUSU['subdominio_tituloformulario2_en'];
	 $texto_formulario2=$rowUSU['subdominio_textoformulario2'];
	 $texto_formulario2_en=$rowUSU['subdominio_textoformulario2_en'];
	 $boton2=$rowUSU['subdominio_boton2'];
	 $boton2_en=$rowUSU['subdominio_boton2_en'];
	 $bg_video2=$rowUSU['subdominio_bg_video2'];

 	 $autoresponder_token=$rowUSU['autoresponder_token'];
	 $autoresponder_token_en=$rowUSU['autoresponder_token_en'];
	 $autoresponder_token_aweber=$rowUSU['autoresponder_token_aweber'];
	 $autoresponder_token_aweber_en=$rowUSU['autoresponder_token_aweber_en'];

	  $autoresponder_token_mailchimp=$rowUSU['autoresponder_token_mailchimp'];
	 $autoresponder_token_mailchimp_en=$rowUSU['autoresponder_token_mailchimp_en'];

 $autoresponder_api_mailchimp=$rowUSU['autoresponder_api_mailchimp'];


	 $tour_titulo1=$rowUSU['tour_titulo1'];
	 $tour_video1=$rowUSU['tour_video1'];
	 $tour_titulo2=$rowUSU['tour_titulo2'];
	 $tour_video2=$rowUSU['tour_video2'];
	 $tour_titulo3=$rowUSU['tour_titulo3'];
	 $tour_video3=$rowUSU['tour_video3'];
	 $tour_titulo4=$rowUSU['tour_titulo4'];
	 $tour_video4=$rowUSU['tour_video4'];
	 $tour_titulo5=$rowUSU['tour_titulo5'];
	 $tour_video5=$rowUSU['tour_video5'];
	 $tour_titulo6=$rowUSU['tour_titulo6'];
	 $tour_video6=$rowUSU['tour_video6'];

	 $tour_titulo1_en=$rowUSU['tour_titulo1_en'];
	 $tour_video1_en=$rowUSU['tour_video1_en'];
	 $tour_titulo2_en=$rowUSU['tour_titulo2_en'];
	 $tour_video2_en=$rowUSU['tour_video2_en'];
	 $tour_titulo3_en=$rowUSU['tour_titulo3_en'];
	 $tour_video3_en=$rowUSU['tour_video3_en'];
	 $tour_titulo4_en=$rowUSU['tour_titulo4_en'];
	 $tour_video4_en=$rowUSU['tour_video4_en'];
	 $tour_titulo5_en=$rowUSU['tour_titulo5_en'];
	 $tour_video5_en=$rowUSU['tour_video5_en'];
	 $tour_titulo6_en=$rowUSU['tour_titulo6_en'];
	 $tour_video6_en=$rowUSU['tour_video6_en'];
   
     $tour_tiempo1=$rowUSU['tour_tiempo1'];
     $tour_tiempo2=$rowUSU['tour_tiempo2'];
     $tour_tiempo3=$rowUSU['tour_tiempo3'];
     $tour_tiempo4=$rowUSU['tour_tiempo4'];
     $tour_tiempo5=$rowUSU['tour_tiempo5'];
     $tour_tiempo6=$rowUSU['tour_tiempo6'];
   
     $tour_tiempo1_en=$rowUSU['tour_tiempo1_en'];
     $tour_tiempo2_en=$rowUSU['tour_tiempo2_en'];
     $tour_tiempo3_en=$rowUSU['tour_tiempo3_en'];
     $tour_tiempo4_en=$rowUSU['tour_tiempo4_en'];
     $tour_tiempo5_en=$rowUSU['tour_tiempo5_en'];
     $tour_tiempo6_en=$rowUSU['tour_tiempo6_en'];
   
   
     $comments_id=$rowUSU['comments_id'];
     $fbcomments_app=$rowUSU['fbcomments_app'];
	 
	 $subdominio_mes=$rowUSU['subdominio_mes'];
	 $subdominio_dia=$rowUSU['subdominio_dia'];
	 $subdominio_ano=$rowUSU['subdominio_ano'];
	 $subdominio_hora=$rowUSU['subdominio_hora'];
	 $subdominio_minuto=$rowUSU['subdominio_minuto'];
	 
	 $subdominio_mes2=$rowUSU['subdominio_mes2'];
	 $subdominio_dia2=$rowUSU['subdominio_dia2'];
	 $subdominio_ano2=$rowUSU['subdominio_ano2'];
	 $subdominio_hora2=$rowUSU['subdominio_hora2'];
	 $subdominio_minuto2=$rowUSU['subdominio_minuto2'];
	 
	 $tour_countdown_mes1=$rowUSU['tour_countdown_mes1'];
	 $tour_countdown_mes2=$rowUSU['tour_countdown_mes2'];
	 $tour_countdown_mes3=$rowUSU['tour_countdown_mes3'];
	 $tour_countdown_mes4=$rowUSU['tour_countdown_mes4'];
	 $tour_countdown_mes5=$rowUSU['tour_countdown_mes5'];
	 $tour_countdown_mes6=$rowUSU['tour_countdown_mes6'];
	 $tour_countdown_dia1=$rowUSU['tour_countdown_dia1'];
	 $tour_countdown_dia2=$rowUSU['tour_countdown_dia2'];
	 $tour_countdown_dia3=$rowUSU['tour_countdown_dia3'];
	 $tour_countdown_dia4=$rowUSU['tour_countdown_dia4'];
	 $tour_countdown_dia5=$rowUSU['tour_countdown_dia5'];
	 $tour_countdown_dia6=$rowUSU['tour_countdown_dia6'];
	 $tour_countdown_ano1=$rowUSU['tour_countdown_ano1'];
	 $tour_countdown_ano2=$rowUSU['tour_countdown_ano2'];
	 $tour_countdown_ano3=$rowUSU['tour_countdown_ano3'];
	 $tour_countdown_ano4=$rowUSU['tour_countdown_ano4'];
	 $tour_countdown_ano5=$rowUSU['tour_countdown_ano5'];
	 $tour_countdown_ano6=$rowUSU['tour_countdown_ano6'];
	 $tour_countdown_hora1=$rowUSU['tour_countdown_hora1'];
	 $tour_countdown_hora2=$rowUSU['tour_countdown_hora2'];
	 $tour_countdown_hora3=$rowUSU['tour_countdown_hora3'];
	 $tour_countdown_hora4=$rowUSU['tour_countdown_hora4'];
	 $tour_countdown_hora5=$rowUSU['tour_countdown_hora5'];
	 $tour_countdown_hora6=$rowUSU['tour_countdown_hora6'];
	 $tour_countdown_minuto1=$rowUSU['tour_countdown_minuto1'];
	 $tour_countdown_minuto2=$rowUSU['tour_countdown_minuto2'];
	 $tour_countdown_minuto3=$rowUSU['tour_countdown_minuto3'];
	 $tour_countdown_minuto4=$rowUSU['tour_countdown_minuto4'];
	 $tour_countdown_minuto5=$rowUSU['tour_countdown_minuto5'];
	 $tour_countdown_minuto6=$rowUSU['tour_countdown_minuto6'];
   


?>
<!DOCTYPE html>
<html>
<head>
<title><? include('titulo.php'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/style.default.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap-fileupload.min.css" />
<link rel="stylesheet" href="css/bootstrap-timepicker.min.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>


<link rel="stylesheet" href="css/style.default.css" />
<link rel="stylesheet" href="prettify/prettify.css" />

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>

<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.cookies.js"></script>
<script src="prettify/prettify.js"></script>
<script src="js/jquery.jgrowl.js"></script>
<script src="js/jquery.alerts.js"></script>
<script src="js/jquery.uniform.min.js"></script>
<script src="js/bootstrap-fileupload.min.js"></script>
<script src="js/bootstrap-timepicker.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.tagsinput.min.js"></script>
<script src="js/jquery.autogrow-textarea.js"></script>
<script src="js/charCount.js"></script>
<script src="js/colorpicker.js"></script>
<script src="js/ui.spinner.min.js"></script>
<script src="js/chosen.jquery.min.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/custom.js"></script>
<script src="js/forms.js"></script>
<script src="js/elements.js"></script>

<script type="text/javascript" src="js/setup.js"></script>
<script type="text/javascript" src="scripts_lib.js"></script>
<script type="text/javascript" src="js/main.js"></script>


    <script language="JavaScript">

  function check_template() {
	var contador=0;
    for (var i=1;i<=<?= $cant_templates; ?>;i++) {
        var object = eval("document.forma.template_" + i);
		if (object.checked) contador++;
    }
	for (var i=1;i<=<?= $cant_templates; ?>;i++) {
		var object = eval("document.forma.template_" + i);
		if (contador < 2 && !object.checked) document.getElementById("template_"+i).disabled = false;
		if (contador == 2 && !object.checked) document.getElementById("template_"+i).disabled = true;
	}
  }

  function esvalido(campo) {
    for (var i=0, len=campo.value.length-1, valid='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ' ; i<len ; i++) {
        if (valid.indexOf(campo.value.substring(i,i+1)) == -1) {
            return false;
        }
  	}
	return true;
  }

  function valida() {
    if (document.forma.subdominio.value=='') {
    alert("Subdominio requerido.");
     document.forma.subdominio.focus();
     return;
     }
    if (!esvalido(document.forma.subdominio)) {
    alert("El subdominio puede contener solo letras y números,\rsin espacios ni caracteres especiales.");
     document.forma.subdominio.focus();
     return;
     }

<? if ($rowUSU['subdominio_custom']==1) { ?>

	var contador=0;
    for (var i=1;i<=<?= $cant_templates; ?>;i++) {
        var object = eval("document.forma.template_" + i);
		if (object.checked) contador++;
    }
	if (contador == 0) {
		alert("Debes elegir por lo menos 1 template.");
     	return;
    }

	// combina claves de templates seleccionados en un string separado por comas
	var string_tem = '';
	for (var i=1; i<=<?= $cant_templates; ?>; i++) {
        var object = eval("document.forma.template_" + i);
	  	if (object.checked)
			string_tem += ' '+object.value+',';
	}
	document.forma.subdominio_templates.value = string_tem;

<? } ?>

     document.forma.submit();
	 }
</script>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>

<link href="uploadify/uploadify.css" type="text/css" rel="stylesheet" />

<script type="text/javascript" src="uploadify/jquery.uploadify.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#file_upload').uploadify({
    'multi'     : false,
    'swf'		: './uploadify/uploadify.swf',
	'uploader'  : './uploadify/uploadify_logo.php',
	'fileObjName' : 'Filedata',
	'expressInstall' : './uploadify/expressInstall.swf',
	'buttonText' : 'SELECCIONA',
    'fileTypeExts'   : '*.jpg;*.gif;*.png',
    'fileTypeDesc'  : 'Archivos de Imagen',
	'fileSizeLimit'   : '2MB',
	'auto'      : true,
	'formData' : {'usuario' : <?= $usuario; ?>},
    'onSelect' : function(file){
					var ext = file.name;
					ext = ext.substr(ext.length-3); //gets last 3 chars (extension type)
					document.getElementById('message').innerHTML="";
					switch (ext) {
						case "jpg":
						case "JPG":
						case "gif":
						case "GIF":
						case "png":
						case "PNG":
						// filetype ok
						document.forma.ext_logo.value=ext;
						break;
						default:
						// alert("Data type invalid");
						document.getElementById('message').innerHTML="Error en tipo de archivo. Sólo JPG, GIF o PNG!";
						$('#file_upload').uploadify('cancel');
						break;
					}
	},	
    'onUploadSuccess' : function(file, data, response) {
		if (data==1) {
			var d = new Date(); var t = d.getTime();
		    document.getElementById('message').innerHTML="Logotipo cambiado!";
	    	document.getElementById('imagen_logo').innerHTML='<img src="images/landingpage/logos/<?= $usuario; ?>.'+document.forma.ext_logo.value+'?'+t+'">';
         }
	},
	'onError'     : function (event,ID,fileObj,errorObj) {
      document.getElementById('message').innerHTML="Error: "+errorObj.type;
    }
  });
  
  $('#file_upload_en').uploadify({
    'multi'     : false,
    'swf'		: './uploadify/uploadify.swf',
	'uploader'  : './uploadify/uploadify_logo_en.php',
	'fileObjName' : 'Filedata',
	'expressInstall' : './uploadify/expressInstall.swf',
	'buttonText' : 'SELECCIONA',
    'fileTypeExts'   : '*.jpg;*.gif;*.png',
    'fileTypeDesc'  : 'Archivos de Imagen',
	'fileSizeLimit'   : '2MB',
	'auto'      : true,
	'formData' : {'usuario' : <?= $usuario; ?>},
    'onSelect' : function(file){
					var ext = file.name;
					ext = ext.substr(ext.length-3); //gets last 3 chars (extension type)
					document.getElementById('message_en').innerHTML="";
					switch (ext) {
						case "jpg":
						case "JPG":
						case "gif":
						case "GIF":
						case "png":
						case "PNG":
						// filetype ok
						document.forma.ext_logo_en.value=ext;
						break;
						default:
						// alert("Data type invalid");
						document.getElementById('message_en').innerHTML="Error en tipo de archivo. Sólo JPG, GIF o PNG!";
						$('#file_upload_en').uploadify('cancel');
						break;
					}
	},	
    'onUploadSuccess' : function(file, data, response) {
		if (data==1) {
			var d = new Date(); var t = d.getTime();
		    document.getElementById('message_en').innerHTML="Logotipo cambiado!";
	    	document.getElementById('imagen_logo_en').innerHTML='<img src="images/landingpage/logos/<?= $usuario; ?>_en.'+document.forma.ext_logo_en.value+'?'+t+'">';
         }
	},
	'onError'     : function (event,ID,fileObj,errorObj) {
      document.getElementById('message_en').innerHTML="Error: "+errorObj.type;
    }

  });
});
</script>


<script>
$(document).ready(function () {
    $("#urlBanner").change(function() {
        if (!/^https*:\/\//.test(this.value)) {
            this.value = "http://" + this.value;
        }
    });
});
</script>

<script>
$(document).ready(function () {
    $("#urlBanner1").change(function() {
        if (!/^https*:\/\//.test(this.value)) {
            this.value = "http://" + this.value;
        }
    });
});
</script>

<script>
$(document).ready(function () {
    $("#urlBanner2").change(function() {
        if (!/^https*:\/\//.test(this.value)) {
            this.value = "http://" + this.value;
        }
    });
});
</script>

<style>
cajadevideo{

    width:530px;
    margin:auto;

}

.video{
	
	max-width:530px;
    padding-top:38.25%;
    position:relative;

}

iframe{

    position:absolute;
    height:100%;
    width:100%;
    top:0px;
    left:0px;
}
 .panel-primary {
  border-color: #428bca;
}

panel-primary > .panel-heading {
  color: #ffffff;
  background-color: #428bca;
  border-color: #428bca;
}

panel-primary > .panel-heading + .panel-collapse .panel-body {
  border-top-color: #428bca;
}

panel-primary > .panel-footer + .panel-collapse .panel-body {
  border-bottom-color: #428bca;
}	


</style>

</head>

<body>
<form name="getresponse" id="getresponse" action="tutorial_getresponse.php" method="post" target="_blank">
</form>
<form name="livechat" id="livechat" action="http://www.livechatinc.com/?a=eVmccvKHfX" method="post" target="_blank">
</form>
<form name="livechatpdf" id="livechatpdf" action="http://www.livechatinc.com/?a=eVmccvKHfX" method="post" target="_blank">
</form>
<div id="mainwrapper" class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="principal.php"><? include('logo.php'); ?></a>
        </div>
        <div class="headerinner">
            <? include('header.php'); ?><!--headmenu-->
        </div>
    </div>
    
    <div class="leftpanel">
        
        <? include('menu.php'); ?><!--leftmenu-->
        
    </div><!-- leftpanel -->
    
    <div class="rightpanel">
        
        <ul class="breadcrumbs">
            <li><a href="principal.php"><i class="iconfa-home"></i></a> <span class="separator"></span></li>
            <li><a href="modificar_landingpage.php">Configuración</a></li>
            
            <li class="right">
                    <a href="modificar_landingpage_en.php" class="dropdown-toggle"><i class="icon-tint"></i>Change Language <img src="images/flags/gb.png" width="16" height="11"></a>
                    <!--<ul class="dropdown-menu pull-right"> 
                        <li><a href="principal_en.php"><img src="images/flags/gb.png" width="16" height="11"> English</a></li>
                        <li><a href="principal_po.php">Português</a></li>
                        <li><a href="principal_fr.php">Français</a></li>
                    </ul>-->
            </li>
        </ul>
        
        <div class="pageheader">
            <? include('top.php'); ?>
            <div class="pageicon"><span class="iconfa-cog"></span></div>
            <div class="pagetitle">
                <h5>Configuración</h5>
                <h1>Configuración del sistema</h1>
            </div>
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
            
  <form action="grabar_landingpage.php" method="post" enctype="multipart/form-data" name="forma" id="forma" class="form-horizontal">
                  
            <div class="tabbable">
                    <ul class="nav nav-tabs buttons-icons">
                    	<li class="active"><a data-toggle="tab" href="#basica">Configuración basica</a></li>
                        <?php
                        if ($rowUSU['subdominio_custom']==1)
                        echo '
                        <li><a data-toggle="tab" href="#landingpage">Pagina de captura</a></li>
						'; else echo ''; ?>
                        <?php
                        if ($rowUSU['tour_custom']==1)
                        echo '
                        <li><a data-toggle="tab" href="#tourvirtual">Tour virtual</a></li>
						'; else echo ''; ?>
                        <?php
                        if ($rowUSU['autoresponder_custom']==1)
                        echo '
                        <li><a data-toggle="tab" href="#autoresponder">Autoresponder</a></li>
						'; else echo ''; ?>
                        <?php
                        if ($rowUSU['comments_custom']==1)
                        echo '
                        <li><a data-toggle="tab" href="#comentarios">Comentarios</a></li>
						'; else echo ''; ?>
                        <?php
                        if ($rowUSU['chat_custom']==1)
                        echo '
                        <li><a data-toggle="tab" href="#chat">Chat</a></li>
						'; else echo ''; ?>
                        <?php
                        if ($rowUSU['fbpixel_custom']==1)
                        echo '
                        <li><a data-toggle="tab" href="#seguimiento">Seguimiento</a></li>
                        '; else echo ''; ?>
                        <li><a data-toggle="tab" href="#metatags">Metaetiquetas</a></li>
                    </ul>
                	
              <div class="tab-content">
              <div id="basica" class="tab-pane active">
              <button data-toggle="modal" data-target="#myModal">
              <img src="images/bt_tutorial_es.png" width="150" height="30" alt=""></button>
              <div style="padding-top:40px;"></div>
              <div class="panel panel-primary">
              <div class="panel-heading">
              <div class="panel-title">Subdominio</div>
              <div class="panel-btn" align="right">
              <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="Tutorial">&nbsp;&nbsp;&nbsp;-->
              <a href="#" id="efecto-subdominio1" class="btn btn-warning" style="color:#ffffff;"><i class="iconfa-edit"></i>Editar</a></div>
              </div> 
               
              <div class="panel-body" id="subdominio1" style="display:none">
              <h5 class="subtitle">Debes elegir un nombre para tu dirección web, el nombre que elijas puede incluir letras y/o números, no se aceptan símbolos ni caracteres especiales, y todo debe ser escrito sin espacios. Esta dirección web es la dirección de la página de captura.
			  <? //* <br>Debes tener por lo menos 100 prospectos registrados en el sistema para acceder a esta funcionalidad. */ ?>
              </h5>   
              <br />
              <div class="input-group">
              <?
			    // determina si tiene 100 prospectos para permitir editar el subdominio
				
				// desactivada esta regla
				/*
				$resPRO= mysql_query("SELECT count(*) AS total_prospectos FROM prospecto WHERE usuario=$usu_valido",$conexion);
				$rowPRO= mysql_fetch_array($resPRO);
			    if ($rowPRO['total_prospectos']>100) $subdominio_disabled='';
				else $subdominio_disabled='disabled';
				*/
				$subdominio_disabled='';
			  ?>
                    <span class="input-group-addon">www.vioniko.com/</span>
                    <input name="subdominio" type="text" class="form-control input-default" id="subdominio" value="<?= $rowUSU['subdominio']; ?>" <?= $subdominio_disabled; ?>>
                    
              </div>
              <br />
              <script type="text/javascript">
			  $(document).ready(function()
				{$('#efecto-subdominio1').on('click',function(e){$('#subdominio1').toggle();e.preventDefault();});});
              </script>
              </div>
              </div>

                    
              <div class="panel panel-primary">
              <div class="panel-heading">
              <div class="panel-title">Elegir idioma</div>
              <div class="panel-btn" align="right">
              <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
              <a href="#" id="efecto-idioma1" class="btn btn-warning" style="color:#ffffff;">
              <i class="iconfa-edit"></i>Editar</a></div>
              </div> 
              
              <div class="panel-body" id="idioma1" style="display:none">
              <div class="form-group">
              <label for="pais" class="col-md-2 control-label">Seleccionar idioma por default</label>
              <div class="col-md-10">
              <select name="subdominio_idioma" id="subdominio_idioma" data-placeholder="Selecciona un idioma..." style="width:300px" class="chzn-select" tabindex="2">
              <option value="esp" <? if ($rowUSU['subdominio_idioma']=='esp') echo 'selected'; ?>>Espa&ntilde;ol</option>
              <option value="eng" <? if ($rowUSU['subdominio_idioma']=='eng') echo 'selected'; ?>>Ingl&eacute;s</option>
              </select>
              </div> 
              </div>
              <br />
              <script type="text/javascript">
			  $(document).ready(function()
				{$('#efecto-idioma1').on('click',function(e){$('#idioma1').toggle();e.preventDefault();});});
              </script>
              </div>
              </div>
              
              
              
              
              <div class="panel panel-primary">
              <div class="panel-heading">
              <div class="panel-title">Tus Links dentro del tour virtual</div>
              <div class="panel-btn" align="right">
              <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
              <a href="#" id="efecto-links1" class="btn btn-warning" style="color:#ffffff;">
              <i class="iconfa-edit"></i>Editar</a></div>
              </div> 
              
              <div class="panel-body" id="links1" style="display:none; padding-left:30px; padding-right:30px;">
              <div class="form-group">
              <label for="exampleInputEmail1">En este campo, debes de ingresar la dirección web, a la que quieres que vayan tus prospectos, una vez que les aparece el botón de llamado a la acción, dentro del tour virtual, para que se afilien a tu oportunidad de negocio. Esta información de igual manera será usada para los Webinars cuando les aparezca el botón de llamado a la acción.</label>
              <input name="pagina_corporativa" type="text" class="form-control input-default" id="urlBanner" value="<?= $rowUSU['pagina_corporativa']; ?>">
              </div><br><br> 
                        
              <div class="form-group">
              <label for="exampleInputEmail1">En este campo, debes ingresar la dirección web, a la que quieres que vayan tus prospectos, una vez que les aparece el botón de llamado a la acción, dentro del tour virtual, para que compren tus productos o servicios.</label>
              <input name="pagina_corporativa2" type="text" class="form-control input-default" id="urlBanner1" value="<?= $rowUSU['pagina_corporativa2']; ?>">
              </div><br><br>
              
              
              <script type="text/javascript">
			  $(document).ready(function()
				{$('#efecto-links1').on('click',function(e){$('#links1').toggle();e.preventDefault();});});
              </script>
              </div>
              </div>

              
              
              <? if ($rowUSU['subdominio_custom']==1) { ?>       
              <div class="panel panel-primary">
              <div class="panel-heading">
              <div class="panel-title">Logos</div>
              <div class="panel-btn" align="right">
              <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
              <a href="#" id="efecto-logos1" class="btn btn-warning" style="color:#ffffff;">
              <i class="iconfa-edit"></i>Editar</a></div>
              </div> 
              
              <div class="panel-body" id="logos1" style="display:none">
              <h5 class="subtitle">
              Aquí puedes cambiar el logotipo que aparece en el Landing Page. (sólo imágenes JPG, GIF o PNG, máximo 2 Mb)
              </h5>
              <br />
                <input type="hidden" name="ext_logo" id="ext_logo" value="" />
                <input id="file_upload" name="file_upload" type="file" />
                <div id="message" style="color:#0000FF;"></div>
                <br>
                Logotipo actual (español):<br>
                <div id="imagen_logo">
				<?  $dir = 'images/landingpage/logos/';
				
					if (file_exists($dir.$usuario.'.jpg')) echo '<img src="'.$dir.$usuario.'.jpg?'.date('U').'" alt="">';
					elseif (file_exists($dir.$usuario.'.gif')) echo '<img src="'.$dir.$usuario.'.gif?'.date('U').'" alt="">';
					elseif (file_exists($dir.$usuario.'.png')) echo '<img src="'.$dir.$usuario.'.png?'.date('U').'" alt="">';
				    else echo '<img src="images/landingpage/logo.png" width="170" height="53" alt="">';
				?>
               </div>
                
               <h5 class="subtitle">
               Aquí puedes cambiar el logotipo que aparece en el Landing Page. (sólo imágenes JPG, GIF o PNG, máximo 2 Mb)
               </h5>
               <br />
                
                <input type="hidden" name="ext_logo_en" id="ext_logo_en" value="" />
                <input id="file_upload_en" name="file_upload_en" type="file" />
                <div id="message_en" style="color:#0000FF;"></div>
                <br>
                Logotipo actual (inglés):<br>
                <div id="imagen_logo_en">
				<?  $dir = 'images/landingpage/logos/';
				
					if (file_exists($dir.$usuario.'_en.jpg')) echo '<img src="'.$dir.$usuario.'_en.jpg?'.date('U').'" alt="">';
					elseif (file_exists($dir.$usuario.'_en.gif')) echo '<img src="'.$dir.$usuario.'_en.gif?'.date('U').'" alt="">';
					elseif (file_exists($dir.$usuario.'_en.png')) echo '<img src="'.$dir.$usuario.'_en.png?'.date('U').'" alt="">';
				    else echo '<img src="images/landingpage/logo.png" width="170" height="53" alt="">';
				?>
               </div>
               <script type="text/javascript">
			  $(document).ready(function()
				{$('#efecto-logos1').on('click',function(e){$('#logos1').toggle();e.preventDefault();});});
              </script>
               </div>    
               </div>
               
              <div class="panel panel-primary">
              <div class="panel-heading">
              <div class="panel-title">Videos</div>
              <div class="panel-btn" align="right">
              <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
              <a href="#" id="efecto-videos1" class="btn btn-warning" style="color:#ffffff;">
              <i class="iconfa-edit"></i>Editar</a></div>
              </div> 
              
              <div class="panel-body" id="videos1" style="display:none">
               <h5 class="subtitle">En esta sección debes seleccionar el tipo de plataforma que utilizaras para tus videos, actualmente utilizamos Youtube y Vimeo.</h5> 
              <h5>Selecciona el tipo de plataforma: <label><input type="radio" name="videos" id="videos" value="Y" <? if ($videos=='Y') echo 'checked="checked"'; ?>> 
              <img src="images/icon-youtube-videos.png" alt="" width="30" height="30"></label> 
                 <label><input type="radio" name="videos" id="videos" value="V" <? if ($videos=='V') echo 'checked="checked"'; ?>> 
                   <img src="images/icon-vimeo-videos.png" alt="" width="30" height="30"> </label></h5>
                   
               <script type="text/javascript">
			  $(document).ready(function()
				{$('#efecto-videos1').on('click',function(e){$('#videos1').toggle();e.preventDefault();});});
              </script>
               </div>
               </div>

               </div><!--tab-pane-->
                    
               <div id="landingpage" class="tab-pane">
               <button data-toggle="modal" data-target="#myModal2">
               <img src="images/bt_tutorial_es.png" width="150" height="30" alt=""></button>
               <div style="padding-top:40px;"></div>
               
               <div class="panel panel-primary">
               <div class="panel-heading">
               <div class="panel-title">Elegir diseño de las plantillas</div>
               <div class="panel-btn" align="right">
               <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
               <a href="#" id="efecto-templateplantillas" class="btn btn-warning" style="color:#ffffff;">
               <i class="iconfa-edit"></i>Editar</a></div>
               </div> 
              
               <div class="panel-body" id="templateplantillas" style="display:none"> 
               <h5 class="subtitle">Puedes elegir hasta 2 templates, que se van a mostrar alternadamente.<br />
                  Selecciona el Template o los Templates que deseas utilizar:</h5>
                  
                  <?  $cont=0;
			       $resTEM= mysql_query("SELECT * FROM template WHERE activo=1 ORDER BY nombre",$conexion);
                   while ($rowTEM = mysql_fetch_array($resTEM)) { 
			       		$cont++;
						$template = $rowTEM['clave'];
				        $resHIT= mysql_query("SELECT * FROM template_hits WHERE usuario=$usuario AND template=$template",$conexion);
    	                $rowHIT= mysql_fetch_array($resHIT);
						$visitas = (int) $rowHIT['visitas'];
						if ($visitas>0)	$retorno = $rowHIT['retornos']/$visitas*100;
						else $retorno=0;
						$template_buscar = ' '.$rowTEM['clave'].',';
						if (strstr($rowUSU['subdominio_templates'],$template_buscar)) $encontrado=TRUE; else $encontrado=FALSE;
						echo '<input type="checkbox" name="template_'.$cont.'" id="template_'.$cont.'" value="'.$rowTEM['clave'].'" '.(($encontrado)?'checked="checked"':'').' style="border:none;" onclick="check_template()">&nbsp;'.$rowTEM['nombre'].'
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<br>
<img src="landingpage/'.$rowTEM['clave'].'/icon.jpg" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=100;this.height=80;" width="120" height="97" alt="" /><br>
<a href="landingpage/'.$rowTEM['clave'].'/index.php?usuario='.$usuario.'&v=1" target="_blank" id="preview"><img src="../../images/tipo1.jpg" width="58" height="25" alt="Ver ejemplo 1" /></a>
<a href="landingpage/'.$rowTEM['clave'].'/index.php?usuario='.$usuario.'&v=2" target="_blank" id="preview"><img src="../../images/tipo2.jpg" width="58" height="25" alt="Ver ejemplo 2" /></a><br> 
Visitas:&nbsp;'.number_format($visitas,0,'.',',').' <br>
Retorno:&nbsp;'.number_format($retorno,2,'.',',').'%'; 
						if ($visitas>0)
							echo '<br><a href="reset_hits.php?template='.$rowTEM['clave'].'" onclick="return confirm(\'¿Estás seguro que deseas resetear las visitas del Template '.$rowTEM['clave'].'?\');">Borrar Visitas</a><br><br>'; 

						else
							echo '<br><br>';

			       }  // while templates

               ?>
               <input name="subdominio_templates" type="hidden" id="subdominio_templates" value="" />
			   <script language="JavaScript">check_template();</script>
               
               <script type="text/javascript">
			  $(document).ready(function()
				{$('#efecto-templateplantillas').on('click',function(e){$('#templateplantillas').toggle();e.preventDefault();});});
               </script>
               </div>
               </div>
               
               
               <div class="panel panel-primary">
               <div class="panel-heading">
               <div class="panel-title">Página de captura (Plantilla 1)</div>
               <div class="panel-btn" align="right">
               <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
               <a href="#" id="efecto-plantilla1" class="btn btn-warning" style="color:#ffffff;">
               <i class="iconfa-edit"></i>Editar</a></div>
               </div> 
              
               <div class="panel-body" id="plantilla1" style="display:none">
               <h5 class="subtitle">Esta información se publica en la página de captura, dentro del primer template elegido.</h5>
               <br />
               
           <div class="form-group">
           <label class="col-md-2 control-label">T&iacute;tulo (español):</label>
           <div class="col-md-10">
           <input name="subdominio_titulo" class="form-control input-lg" id="subdominio_titulo" type="text" value="<?= $titulo; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">T&iacute;tulo (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_titulo_en" class="form-control input-lg" id="subdominio_titulo_en" type="text" value="<?= $titulo_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Subt&iacute;tulo (español):</label>
           <div class="col-md-10">
           <input name="subdominio_subtitulo" class="form-control input-lg" id="subdominio_subtitulo" type="text" value="<?= $subtitulo; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Subt&iacute;tulo (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_subtitulo_en" class="form-control input-lg" id="subdominio_subtitulo_en" type="text" value="<?= $subtitulo_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Descripci&oacute;n (español):</label>
           <div class="col-md-10">
           <textarea name="subdominio_descripcion" id="autoResizeTA" cols="80" rows="5" class="form-control input-default" style="resize: vertical"><?= $descripcion; ?></textarea>
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Descripci&oacute;n (Inglés):</label>
           <div class="col-md-10">
           <textarea name="subdominio_descripcion_en" id="autoResizeTA" cols="80" rows="5" class="form-control input-default" style="resize: vertical"><?= $descripcion_en; ?></textarea>
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Puntos destacados (español): (un concepto por rengl&oacute;n)</label>
           <div class="col-md-10">
           <textarea name="subdominio_puntos" id="autoResizeTA" cols="80" rows="5" class="form-control input-default" style="resize: vertical"><?= $puntos; ?></textarea>
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Puntos destacados (inglés): (un concepto por rengl&oacute;n)</label>
           <div class="col-md-10">
           <textarea name="subdominio_puntos_en" id="autoResizeTA" cols="80" rows="5" class="form-control input-default" style="resize: vertical"><?= $puntos_en; ?></textarea>
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Video (español):</label>
           <div class="col-md-10">
           <input name="subdominio_video" class="form-control input-lg" id="subdominio_video" type="text" value="<?= $video; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Video (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_video_en" class="form-control input-lg" id="subdominio_video_en" type="text" value="<?= $video_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">T&iacute;tulo del formulario (español):</label>
           <div class="col-md-10">
           <input name="subdominio_tituloformulario" class="form-control input-lg" id="subdominio_tituloformulario" type="text" value="<?= $titulo_formulario; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">T&iacute;tulo del formulario (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_tituloformulario_en" class="form-control input-lg" id="subdominio_tituloformulario_en" type="text" value="<?= $titulo_formulario_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Texto del formulario (español):</label>
           <div class="col-md-10">
           <input name="subdominio_textoformulario" class="form-control input-lg" id="subdominio_textoformulario" type="text" value="<?= $texto_formulario; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Texto del formulario (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_textoformulario_en" class="form-control input-lg" id="subdominio_textoformulario_en" type="text" value="<?= $texto_formulario_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Bot&oacute;n del formulario (español):</label>
           <div class="col-md-10">
           <input name="subdominio_boton" class="form-control input-lg" id="subdominio_boton" type="text" value="<?= $boton; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Bot&oacute;n del formulario (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_boton_en" class="form-control input-lg" id="subdominio_boton_en" type="text" value="<?= $boton_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Video Fondo Personalizado:</label>
           <div class="col-md-10">
           <input name="subdominio_bg_video" class="form-control input-lg" id="subdominio_bg_video" type="text" value="<?= $bg_video; ?>">
           </div>
           </div>
           
           <p class="text-success">Contador regresivo: En la sección de plantillas existen algunos diseños que incluyen un contador regresivo, en la siguiente sección puedes configurar dicho contador, esto se usa principalmente para indicar el tiempo que falta para que culmine una oferta o el tiempo que falta para que un evento se lleve a cabo como algún webinar o conferencia online.</p>
              <br>
              <div class="alert alert-info">
              <strong>Nota:</strong>Solo debes elegir la fecha y horario exacto en que quieres que culmine el contador.
              </div><!--alert-->
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Fecha:</label>
                      <div class="col-md-10">
                    Mes:
                      	<select name="subdominio_mes" id="subdominio_mes" data-placeholder="Mes">
                        <option value="<?= $subdominio_mes; ?>"><?= $subdominio_mes; ?></option>
                      	<option value="00">01</option>
                        <option value="01">02</option>
                        <option value="02">03</option>
                        <option value="03">04</option>
                        <option value="04">05</option>
                        <option value="05">06</option>
                        <option value="06">07</option>
                        <option value="07">08</option>
                        <option value="08">09</option>
                        <option value="09">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                      </select>
                      Día:
                      <select name="subdominio_dia" id="subdominio_dia" data-placeholder="Día">
                        <option value="<?= $subdominio_dia; ?>"><?= $subdominio_dia; ?></option>
                      	<option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      Año:
                      <select name="subdominio_ano" id="subdominio_ano" data-placeholder="Año">
                        <option value="<?= $subdominio_ano; ?>"><?= $subdominio_ano; ?></option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                      </div>
           </div>
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Horario:</label>
                      <div class="col-md-10">
                      Hora:
                     <select name="subdominio_hora" id="subdominio_hora" data-placeholder="Hora">
                       <option value="<?= $subdominio_hora; ?>"><?= $subdominio_hora; ?></option>
					    <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                      Minutos:
                      <select name="subdominio_minuto" id="subdominio_minuto" data-placeholder="Minitos">
                        <option value="<?= $subdominio_minuto; ?>"><?= $subdominio_minuto; ?></option> 
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                      </select>
                      </div>
           </div>

           <script type="text/javascript">
			  $(document).ready(function()
				{$('#efecto-plantilla1').on('click',function(e){$('#plantilla1').toggle();e.preventDefault();});});
           </script>
                
                </div>
                </div>
           
               
               <div class="panel panel-primary">
               <div class="panel-heading">
               <div class="panel-title">Página de captura (Plantilla 2)</div>
               <div class="panel-btn" align="right">
               <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
               <a href="#" id="efecto-plantilla2" class="btn btn-warning" style="color:#ffffff;">
               <i class="iconfa-edit"></i>Editar</a></div>
               </div> 
              
               <div class="panel-body" id="plantilla2" style="display:none">
               <h5 class="subtitle">Esta información se publica en la página de captura, dentro del segundo template elegido. (En caso de elegir 2 Templates)</h5>
               <br />
                    
           <div class="form-group">
           <label class="col-md-2 control-label">T&iacute;tulo (español):</label>
           <div class="col-md-10">
           <input name="subdominio_titulo2" class="form-control input-lg" id="subdominio_titulo" type="text" value="<?= $titulo2; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">T&iacute;tulo (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_titulo2_en" class="form-control input-lg" id="subdominio_titulo2_en" type="text" value="<?= $titulo2_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Subt&iacute;tulo (español):</label>
           <div class="col-md-10">
           <input name="subdominio_subtitulo2" class="form-control input-lg" id="subdominio_subtitulo2" type="text" value="<?= $subtitulo2; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Subt&iacute;tulo (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_subtitulo2_en" class="form-control input-lg" id="subdominio_subtitulo2_en" type="text" value="<?= $subtitulo2_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Descripci&oacute;n (español):</label>
           <div class="col-md-10">
           <textarea name="subdominio_descripcion2" id="autoResizeTA" cols="80" rows="5" class="form-control input-default" style="resize: vertical"><?= $descripcion2; ?></textarea>
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Descripci&oacute;n (Inglés):</label>
           <div class="col-md-10">
           <textarea name="subdominio_descripcion2_en" id="autoResizeTA" cols="80" rows="5" class="form-control input-default" style="resize: vertical"><?= $descripcion2_en; ?></textarea>
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Puntos destacados (español): (un concepto por rengl&oacute;n)</label>
           <div class="col-md-10">
           <textarea name="subdominio_puntos2" id="autoResizeTA" cols="80" rows="5" class="form-control input-default" style="resize: vertical"><?= $puntos2; ?></textarea>
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Puntos destacados (inglés): (un concepto por rengl&oacute;n)</label>
           <div class="col-md-10">
           <textarea name="subdominio_puntos2_en" id="autoResizeTA" cols="80" rows="5" class="form-control input-default" style="resize: vertical"><?= $puntos2_en; ?></textarea>
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Video (español):</label>
           <div class="col-md-10">
           <input name="subdominio_video2" class="form-control input-lg" id="subdominio_video2" type="text" value="<?= $video2; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Video (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_video2_en" class="form-control input-lg" id="subdominio_video2_en" type="text" value="<?= $video2_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">T&iacute;tulo del formulario (español):</label>
           <div class="col-md-10">
           <input name="subdominio_tituloformulario2" class="form-control input-lg" id="subdominio_tituloformulario2" type="text" value="<?= $titulo_formulario2; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">T&iacute;tulo del formulario (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_tituloformulario2_en" class="form-control input-lg" id="subdominio_tituloformulario2_en" type="text" value="<?= $titulo_formulario2_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Texto del formulario (español):</label>
           <div class="col-md-10">
           <input name="subdominio_textoformulario2" class="form-control input-lg" id="subdominio_textoformulario2" type="text" value="<?= $texto_formulario2; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Texto del formulario (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_textoformulario2_en" class="form-control input-lg" id="subdominio_textoformulario2_en" type="text" value="<?= $texto_formulario2_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Bot&oacute;n del formulario (español):</label>
           <div class="col-md-10">
           <input name="subdominio_boton2" class="form-control input-lg" id="subdominio_boton2" type="text" value="<?= $boton2; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Bot&oacute;n del formulario (inglés):</label>
           <div class="col-md-10">
           <input name="subdominio_boton2_en" class="form-control input-lg" id="subdominio_boton2_en" type="text" value="<?= $boton2_en; ?>">
           </div>
           </div>
           
           <div class="form-group">
           <label class="col-md-2 control-label">Video Fondo Personalizado:</label>
           <div class="col-md-10">
           <input name="subdominio_bg_video2" class="form-control input-lg" id="subdominio_bg_video2" type="text" value="<?= $bg_video2; ?>">
           </div>
           </div>
           
           <p class="text-success">Contador regresivo: En la sección de plantillas existen algunos diseños que incluyen un contador regresivo, en la siguiente sección puedes configurar dicho contador, esto se usa principalmente para indicar el tiempo que falta para que culmine una oferta o el tiempo que falta para que un evento se lleve a cabo como algún webinar o conferencia online.</p>
              <br>
              <div class="alert alert-info">
              <strong>Nota:</strong>Solo debes elegir la fecha y horario exacto en que quieres que culmine el contador.
              </div><!--alert-->
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Fecha:</label>
                      <div class="col-md-10">
                      Mes:
                      <select name="subdominio_mes2" id="subdominio_mes2" data-placeholder="Mes">
                       <option value="<?= $subdominio_mes2; ?>"><?= $subdominio_mes2; ?></option>
                      	<option value="00">01</option>
                        <option value="01">02</option>
                        <option value="02">03</option>
                        <option value="03">04</option>
                        <option value="04">05</option>
                        <option value="05">06</option>
                        <option value="06">07</option>
                        <option value="07">08</option>
                        <option value="08">09</option>
                        <option value="09">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                      </select>
                      Día:
                      <select name="subdominio_dia2" id="subdominio_dia2" data-placeholder="Día">
                      <option value="<?= $subdominio_dia2; ?>"><?= $subdominio_dia2; ?></option>
                      	<option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      Año:
                      <select name="subdominio_ano2" id="subdominio_ano2" data-placeholder="Año">
                        <option value="<?= $subdominio_ano2; ?>"><?= $subdominio_ano2; ?></option>
                      	
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                      </div>
           </div>
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Horario:</label>
                      <div class="col-md-10">
                      Hora:
                      <select name="subdominio_hora2" id="subdominio_hora2" data-placeholder="Hora">
                        <option value="<?= $subdominio_hora2; ?>"><?= $subdominio_hora2; ?></option>
					    <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                      Minutos:
                      <select name="subdominio_minuto2" id="subdominio_minuto2" data-placeholder="Minutos">
                        <option value="<?= $subdominio_minuto2; ?>"><?= $subdominio_minuto2; ?></option>
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                      </select>
                      </div>
           </div>
           
           
           <script type="text/javascript">
			  $(document).ready(function()
				{$('#efecto-plantilla2').on('click',function(e){$('#plantilla2').toggle();e.preventDefault();});});
           </script>
                
                </div>
                </div>
               
               
                            
               </div><!--tab-pane-->
               
               <? }  // if subdominio custom 
			  else { ?>
              
<input name="subdominio_titulo" type="hidden" id="subdominio_titulo" value="<?= $rowUSU['subdominio_titulo']; ?>" >
<input name="subdominio_titulo_en" type="hidden" id="subdominio_titulo_en" value="<?= $rowUSU['subdominio_titulo_en']; ?>" >
<input name="subdominio_subtitulo" type="hidden" id="subdominio_subtitulo" value="<?= $rowUSU['subdominio_subtitulo']; ?>" >
<input name="subdominio_subtitulo_en" type="hidden" id="subdominio_subtitulo_en" value="<?= $rowUSU['subdominio_subtitulo_en']; ?>" >
<input name="subdominio_descripcion" id="subdominio_descripcion" type="hidden" value="<?= $rowUSU['subdominio_descripcion']; ?>" >
<input name="subdominio_descripcion_en" id="subdominio_descripcion_en" type="hidden" value="<?= $rowUSU['subdominio_descripcion_en']; ?>" >
<input name="subdominio_puntos" id="subdominio_puntos" type="hidden" value="<?= $rowUSU['subdominio_puntos']; ?>" >
<input name="subdominio_puntos_en" id="subdominio_puntos_en" type="hidden" value="<?= $rowUSU['subdominio_puntos_en']; ?>" >
<input name="subdominio_video" type="hidden" id="subdominio_video" value="<?= $rowUSU['subdominio_video']; ?>" >
<input name="subdominio_video_en" type="hidden" id="subdominio_video_en" value="<?= $rowUSU['subdominio_video_en']; ?>" >
<input name="subdominio_tituloformulario" type="hidden" id="subdominio_tituloformulario" value="<?= $rowUSU['subdominio_tituloformulario']; ?>" >
<input name="subdominio_tituloformulario_en" type="hidden" id="subdominio_tituloformulario_en" value="<?= $rowUSU['subdominio_tituloformulario_en']; ?>" >
<input name="subdominio_textoformulario" type="hidden" id="subdominio_textoformulario" value="<?= $rowUSU['subdominio_textoformulario']; ?>" >
<input name="subdominio_textoformulario_en" type="hidden" id="subdominio_textoformulario_en" value="<?= $rowUSU['subdominio_textoformulario_en']; ?>" >
<input name="subdominio_boton" type="hidden" id="subdominio_boton" value="<?= $rowUSU['subdominio_boton']; ?>" >
<input name="subdominio_boton_en" type="hidden" id="subdominio_boton_en" value="<?= $rowUSU['subdominio_boton_en']; ?>" >
<input name="subdominio_mes" type="hidden" id="subdominio_mes" value="<?= $rowUSU['subdominio_mes']; ?>" >
<input name="subdominio_dia" type="hidden" id="subdominio_dia" value="<?= $rowUSU['subdominio_dia']; ?>" >
<input name="subdominio_ano" type="hidden" id="subdominio_ano" value="<?= $rowUSU['subdominio_ano']; ?>" >
<input name="subdominio_hora" type="hidden" id="subdominio_hora" value="<?= $rowUSU['subdominio_hora']; ?>" >
<input name="subdominio_minuto" type="hidden" id="subdominio_minuto" value="<?= $rowUSU['subdominio_minuto']; ?>" >
<input name="subdominio_bg_video" type="hidden" id="subdominio_bg_video" value="<?= $rowUSU['subdominio_bg_video']; ?>" >
<input name="subdominio_titulo2" type="hidden" id="subdominio_titulo2" value="<?= $rowUSU['subdominio_titulo2']; ?>" >
<input name="subdominio_titulo2_en" type="hidden" id="subdominio_titulo2_en" value="<?= $rowUSU['subdominio_titulo2_en']; ?>" >
<input name="subdominio_subtitulo2" type="hidden" id="subdominio_subtitulo2" value="<?= $rowUSU['subdominio_subtitulo2']; ?>" >
<input name="subdominio_subtitulo2_en" type="hidden" id="subdominio_subtitulo2_en" value="<?= $rowUSU['subdominio_subtitulo2_en']; ?>" >
<input name="subdominio_descripcion2" id="subdominio_descripcion2" type="hidden" value="<?= $rowUSU['subdominio_descripcion2']; ?>" >
<input name="subdominio_descripcion2_en" id="subdominio_descripcion2_en" type="hidden" value="<?= $rowUSU['subdominio_descripcion2_en']; ?>" >
<input name="subdominio_puntos2" id="subdominio_puntos2" type="hidden" value="<?= $rowUSU['subdominio_puntos2']; ?>" >
<input name="subdominio_puntos2_en" id="subdominio_puntos2_en" type="hidden" value="<?= $rowUSU['subdominio_puntos2_en']; ?>" >
<input name="subdominio_video2" type="hidden" id="subdominio_video2" value="<?= $rowUSU['subdominio_video2']; ?>" >
<input name="subdominio_video2_en" type="hidden" id="subdominio_video2_en" value="<?= $rowUSU['subdominio_video2_en']; ?>" >
<input name="subdominio_tituloformulario2" type="hidden" id="subdominio_tituloformulario2" value="<?= $rowUSU['subdominio_tituloformulario2']; ?>" >
<input name="subdominio_tituloformulario2_en" type="hidden" id="subdominio_tituloformulario2_en" value="<?= $rowUSU['subdominio_tituloformulario2_en']; ?>" >
<input name="subdominio_textoformulario2" type="hidden" id="subdominio_textoformulario2" value="<?= $rowUSU['subdominio_textoformulario2']; ?>" >
<input name="subdominio_textoformulario2_en" type="hidden" id="subdominio_textoformulario2_en" value="<?= $rowUSU['subdominio_textoformulario2_en']; ?>" >
<input name="subdominio_boton2" type="hidden" id="subdominio_boton2" value="<?= $rowUSU['subdominio_boton2']; ?>" >
<input name="subdominio_boton2_en" type="hidden" id="subdominio_boton2_en" value="<?= $rowUSU['subdominio_boton2_en']; ?>" >
<input name="subdominio_mes2" type="hidden" id="subdominio_mes2" value="<?= $rowUSU['subdominio_mes2']; ?>" >
<input name="subdominio_dia2" type="hidden" id="subdominio_dia2" value="<?= $rowUSU['subdominio_dia2']; ?>" >
<input name="subdominio_ano2" type="hidden" id="subdominio_ano2" value="<?= $rowUSU['subdominio_ano2']; ?>" >
<input name="subdominio_hora2" type="hidden" id="subdominio_hora2" value="<?= $rowUSU['subdominio_hora2']; ?>" >
<input name="subdominio_minuto2" type="hidden" id="subdominio_minuto2" value="<?= $rowUSU['subdominio_minuto2']; ?>" >
<input name="subdominio_bg_video2" type="hidden" id="subdominio_bg_video2" value="<?= $rowUSU['subdominio_bg_video2']; ?>" >
<input name="subdominio_templates" type="hidden" id="subdominio_templates" value="<?= $rowUSU['subdominio_templates']; ?>" >
                
 <? }  // if not subdominio custom ?>
               
               
                    
                    <div id="tourvirtual" class="tab-pane">
                    <? if ($rowUSU['tour_custom']==1) { ?>
                    <button data-toggle="modal" data-target="#myModal3">
                    <img src="images/bt_tutorial_es.png" width="150" height="30" alt=""></button>
                    <div style="padding-top:40px;"></div>
                    
                    
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Tour virtual (Plantilla)</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-plantillatour" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="plantillatour" style="display:none">
                    <h5 class="subtitle">Selecciona el Template que deseas utilizar:</h5>
                  
                  <?  $cont=0;
			       $resTEM= mysql_query("SELECT * FROM tour WHERE activo=1 ORDER BY nombre",$conexion);
                   while ($rowTEM = mysql_fetch_array($resTEM)) { 
			       		$cont++;
						$template = $rowTEM['clave'];
						if ($rowUSU['tour_template']==$template OR ($cont==1 AND $rowUSU['tour_template']==0)) $encontrado=TRUE;
						else $encontrado=FALSE;
						echo '<input type="radio" name="tour_template" id="tour_template" value="'.$rowTEM['clave'].'" '.(($encontrado)?'checked="checked"':'').' style="border:none;"> '.$rowTEM['nombre'].' 
<br>
<img src="tour/'.$rowTEM['clave'].'/icon.jpg" onmouseover="this.width=500;this.height=400;" onmouseout="this.width=100;this.height=80;" width="120" height="97" alt="" />
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="tour/'.$template.'/index.php?id='.$usuario.'&email='.$rowUSU['email'].'&cp=1" target="_blank">Vista Previa</a>
						<br>';

			       }  // while templates

               ?>
                    <script type="text/javascript">
			         $(document).ready(function()
				  {$('#efecto-plantillatour').on('click',function(e){$('#plantillatour').toggle();e.preventDefault();});});
                  </script>
                    </div>
                    </div>
                    
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Tour Virtual (Etapa 1)</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-tour1" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="tour1" style="display:none">
                    <div class="form-group">
                    <label class="col-md-2 control-label">T&iacute;tulo del video (español):</label>
                    <div class="col-md-10">
                    <input name="tour_titulo1" type="text" class="form-control input-default" id="tour_titulo1" value="<?= $tour_titulo1; ?>">
                    </div>
                    </div>
                            
              
              <div class="form-group">
              <label class="col-md-2 control-label">T&iacute;tulo del video (inglés):</label>
              <div class="col-md-10">
              <input name="tour_titulo1_en" type="text" class="form-control input-default" id="tour_titulo1_en" value="<?= $tour_titulo1_en; ?>">
              </div>
              </div>            
              
              <div class="form-group">
              <label class="col-md-2 control-label">Video (español):</label>
              <div class="col-md-10">
              <input name="tour_video1" type="text" class="form-control input-default" id="tour_video1" value="<?= $tour_video1; ?>">
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-2 control-label">Video (inglés):</label>
              <div class="col-md-10">
              <input name="tour_video1_en" type="text" class="form-control input-default" id="tour_video1_en" value="<?= $tour_video1_en; ?>">
              </div>
              </div>

              <p class="text-success">El temporizador permite ocultar los botones (siguiente video, iniciar ahora, agendar una entrevista) en las etapas del tour virtual, esta función ayuda a que los visitantes se vean forzados a ver el video antes de poder continuar con el tour virtual.</p>
              <br>
              <div class="alert alert-info">
              <strong>Importante:</strong>  El tiempo se debe ingresar en segundos, ejemplo: si tu video tiene una duración de 3 minutos en la sección de temporizador tienes que ingresar 180.
              </div><!--alert-->
              <div class="form-group">
              <label class="col-md-2 control-label">Temporizador Etapa 1 (español):</label> 
              <div class="col-md-10">
              <input name="tour_tiempo1" type="text" 1d="tour_tiempo1" class="form-control input-default" value="<?= $rowUSU['tour_tiempo1']; ?>">
              </div>
              </div>
              <div class="form-group">
              <label class="col-md-2 control-label">Temporizador Etapa 1 (inglés):</label>
              <div class="col-md-10"> 
              <input name="tour_tiempo1_en" type="text" 1d="tour_tiempo1_en" class="form-control input-default" value="<?= $rowUSU['tour_tiempo1_en']; ?>">
              </div>
              </div>
              
              <p class="text-success">Contador regresivo: En la sección de plantillas existen algunos diseños que incluyen un contador regresivo, en la siguiente sección puedes configurar dicho contador, esto se usa principalmente para indicar el tiempo que falta para que culmine una oferta o el tiempo que falta para que un evento se lleve a cabo como algún webinar o conferencia online.</p>
              <br>
              <div class="alert alert-info">
              <strong>Nota:</strong>Solo debes elegir la fecha y horario exacto en que quieres que culmine el contador.
              </div><!--alert-->
              
              <div class="form-group">
                      <label class="col-md-2 control-label">Fecha:</label>
                      <div class="col-md-10">
                      Mes:
                      	<select name="tour_countdown_mes1" id="tour_countdown_mes1" data-placeholder="Mes">
                        <option value="<?= $tour_countdown_mes1; ?>"><?= $tour_countdown_mes1; ?></option>
                      	<option value="00">01</option>
                        <option value="01">02</option>
                        <option value="02">03</option>
                        <option value="03">04</option>
                        <option value="04">05</option>
                        <option value="05">06</option>
                        <option value="06">07</option>
                        <option value="07">08</option>
                        <option value="08">09</option>
                        <option value="09">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                      </select>
                      Día:
                      <select name="tour_countdown_dia1" id="tour_countdown_dia1" data-placeholder="Día">
                      <option value="<?= $tour_countdown_dia1; ?>"><?= $tour_countdown_dia1; ?></option>
                      	<option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      Año:
                      <select name="tour_countdown_ano1" id="tour_countdown_ano1" data-placeholder="Año">
                      <option value="<?= $tour_countdown_ano1; ?>"><?= $tour_countdown_ano1; ?></option>	
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                      </div>
           </div>
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Horario:</label>
                      <div class="col-md-10">
                      Hora:
                      <select name="tour_countdown_hora1" id="tour_countdown_hora1" data-placeholder="Hora">
                      <option value="<?= $tour_countdown_hora1; ?>"><?= $tour_countdown_hora1; ?></option>	
					    <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                      Minutos:
                      <select name="tour_countdown_minuto1" id="tour_countdown_minuto1" data-placeholder="Minutos">
                      <option value="<?= $tour_countdown_minuto1; ?>"><?= $tour_countdown_minuto1; ?></option>	
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                      </select>
                      </div>
           </div>
                    
			     <script type="text/javascript">
			         $(document).ready(function()
				  {$('#efecto-tour1').on('click',function(e){$('#tour1').toggle();e.preventDefault();});});
                  </script>
                      </div>
                      </div>
                    
                    
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Tour Virtual (Etapa 2)</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-tour2" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="tour2" style="display:none">
                    <div class="form-group">
                    <label class="col-md-2 control-label">T&iacute;tulo del video (español):</label>
                    <div class="col-md-10">
                    <input name="tour_titulo2" type="text" class="form-control input-default" id="tour_titulo2" value="<?= $tour_titulo2; ?>">
                    </div>
                    </div>                                          
                    <div class="form-group">
                    <label class="col-md-2 control-label">T&iacute;tulo del video (inglés):</label>
                    <div class="col-md-10">
                    <input name="tour_titulo2_en" type="text" class="form-control input-default" id="tour_titulo2_en" value="<?= $tour_titulo2_en; ?>">
                    </div>
                    </div>                     
                    <div class="form-group">
                    <label class="col-md-2 control-label">Video (español):</label>
                    <div class="col-md-10">
                    <input name="tour_video2" type="text" class="form-control input-default" id="tour_video2" value="<?= $tour_video2; ?>">
                    </div>
                    </div>                                          
                    <div class="form-group">
                    <label class="col-md-2 control-label">Video (inglés):</label>
                    <div class="col-md-10">
                    <input name="tour_video2_en" type="text" class="form-control input-default" id="tour_video2_en" value="<?= $tour_video2_en; ?>">
                    </div>
                    </div>

                    <p class="text-success">El temporizador permite ocultar los botones (siguiente video, iniciar ahora, agendar una entrevista) en las etapas del tour virtual, esta función ayuda a que los visitantes se vean forzados a ver el video antes de poder continuar con el tour virtual.</p>
<br>
                    <div class="alert alert-info">
                    <strong>Importante:</strong>  El tiempo se debe ingresar en segundos, ejemplo: si tu video tiene una duración de 3 minutos en la sección de temporizador tienes que ingresar 180.
                    </div><!--alert-->
                    <div class="form-group">
                    <label class="col-md-2 control-label">Temporizador Etapa 2 (español):</label> 
                    <div class="col-md-10">
                    <input name="tour_tiempo2" type="text" 1d="tour_tiempo2" class="form-control input-default" value="<?= $rowUSU['tour_tiempo2']; ?>">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-2 control-label">Temporizador Etapa 2 (inglés):</label>
                    <div class="col-md-10"> 
                    <input name="tour_tiempo2_en" type="text" 1d="tour_tiempo2_en" class="form-control input-default" value="<?= $rowUSU['tour_tiempo2_en']; ?>">
                    </div>                  
                    </div>  
                    
             <p class="text-success">Contador regresivo: En la sección de plantillas existen algunos diseños que incluyen un contador regresivo, en la siguiente sección puedes configurar dicho contador, esto se usa principalmente para indicar el tiempo que falta para que culmine una oferta o el tiempo que falta para que un evento se lleve a cabo como algún webinar o conferencia online.</p>
              <br>
              <div class="alert alert-info">
              <strong>Nota:</strong>Solo debes elegir la fecha y horario exacto en que quieres que culmine el contador.
              </div><!--alert-->       
                    
                    <div class="form-group">
                      <label class="col-md-2 control-label">Fecha:</label>
                      <div class="col-md-10">
                        Mes:
                      	<select name="tour_countdown_mes2" id="tour_countdown_mes2">
                      	<option value="00">01</option>
                        <option value="01">02</option>
                        <option value="02">03</option>
                        <option value="03">04</option>
                        <option value="04">05</option>
                        <option value="05">06</option>
                        <option value="06">07</option>
                        <option value="07">08</option>
                        <option value="08">09</option>
                        <option value="09">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                      </select>
                      Día:
                      <select name="tour_countdown_dia2" id="tour_countdown_dia2">
                      	<option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      Año:
                      <select name="tour_countdown_ano2" id="tour_countdown_ano2">
                      
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                      </div>
           </div>
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Horario:</label>
                      <div class="col-md-10">
                      Hora:
                      <select name="tour_countdown_hora2" id="tour_countdown_hora2">
					    <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                      Minutos:
                      <select name="tour_countdown_minuto2" id="tour_countdown_minuto2">
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                      </select>
                      </div>
           </div>                   

                    <script type="text/javascript">
			         $(document).ready(function()
				  {$('#efecto-tour2').on('click',function(e){$('#tour2').toggle();e.preventDefault();});});
                  </script>
                    </div>
                    </div>
                    
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Tour Virtual (Etapa 3)</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-tour3" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="tour3" style="display:none">
                    <div class="form-group">
												<label class="col-md-2 control-label">T&iacute;tulo del video (español):</label>
												<div class="col-md-10">
													 <input name="tour_titulo3" type="text" class="form-control input-default" id="tour_titulo3" value="<?= $tour_titulo3; ?>">
												</div>
										  </div>
                                          <div class="form-group">
												<label class="col-md-2 control-label">T&iacute;tulo del video (inglés):</label>
												<div class="col-md-10">
													 <input name="tour_titulo3_en" type="text" class="form-control input-default" id="tour_titulo3_en" value="<?= $tour_titulo3_en; ?>">
												</div>
										  </div>
										  <div class="form-group">
												<label class="col-md-2 control-label">Video (español):</label>
												<div class="col-md-10">
													 <input name="tour_video3" type="text" class="form-control input-default" id="tour_video3" value="<?= $tour_video3; ?>">
												</div>
										  </div>
                                          
                                          <div class="form-group">
												<label class="col-md-2 control-label">Video (inglés):</label>
												<div class="col-md-10">
													 <input name="tour_video3_en" type="text" class="form-control input-default" id="tour_video3_en" value="<?= $tour_video3_en; ?>">
												</div>
										  </div>
                      
<p class="text-success">El temporizador permite ocultar los botones (siguiente video, iniciar ahora, agendar una entrevista) en las etapas del tour virtual, esta función ayuda a que los visitantes se vean forzados a ver el video antes de poder continuar con el tour virtual.</p>
<br>
<div class="alert alert-info">
<strong>Importante:</strong>  El tiempo se debe ingresar en segundos, ejemplo: si tu video tiene una duración de 3 minutos en la sección de temporizador tienes que ingresar 180.
</div><!--alert-->
<div class="form-group">
<label class="col-md-2 control-label">Temporizador Etapa 3 (español):</label> 
<div class="col-md-10">
<input name="tour_tiempo3" type="text" 1d="tour_tiempo3" class="form-control input-default" value="<?= $rowUSU['tour_tiempo3']; ?>">
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">Temporizador Etapa 3 (inglés):</label>
<div class="col-md-10"> 
<input name="tour_tiempo3_en" type="text" 1d="tour_tiempo3_en" class="form-control input-default" value="<?= $rowUSU['tour_tiempo3_en']; ?>">
</div>
</div>

<p class="text-success">Contador regresivo: En la sección de plantillas existen algunos diseños que incluyen un contador regresivo, en la siguiente sección puedes configurar dicho contador, esto se usa principalmente para indicar el tiempo que falta para que culmine una oferta o el tiempo que falta para que un evento se lleve a cabo como algún webinar o conferencia online.</p>
              <br>
              <div class="alert alert-info">
              <strong>Nota:</strong>Solo debes elegir la fecha y horario exacto en que quieres que culmine el contador.
              </div><!--alert-->

<div class="form-group">
                      <label class="col-md-2 control-label">Fecha:</label>
                      <div class="col-md-10">
                      Mes:
                      	<select name="tour_countdown_mes3" id="tour_countdown_mes3">
                      	<option value="00">01</option>
                        <option value="01">02</option>
                        <option value="02">03</option>
                        <option value="03">04</option>
                        <option value="04">05</option>
                        <option value="05">06</option>
                        <option value="06">07</option>
                        <option value="07">08</option>
                        <option value="08">09</option>
                        <option value="09">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                      </select>
                      Día:
                      <select name="tour_countdown_dia3" id="tour_countdown_dia3">
                      	<option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      Año:
                      <select name="tour_countdown_ano3" id="tour_countdown_ano3">
                      	
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                      </div>
           </div>
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Horario:</label>
                      <div class="col-md-10">
                      Hora:
                      <select name="tour_countdown_hora3" id="tour_countdown_hora3">
					    <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                      Minutos:
                      <select name="tour_countdown_minuto3" id="tour_countdown_minuto3">
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                      </select>
                      </div>
           </div>


                  <script type="text/javascript">
			         $(document).ready(function()
				  {$('#efecto-tour3').on('click',function(e){$('#tour3').toggle();e.preventDefault();});});
                  </script>
                    </div>
                    </div>
                    
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Tour Virtual (Etapa 4)</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-tour4" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="tour4" style="display:none">
                    <div class="form-group">
												<label class="col-md-2 control-label">T&iacute;tulo del video (español):</label>
												<div class="col-md-10">
													 <input name="tour_titulo4" type="text" class="form-control input-default" id="tour_titulo4" value="<?= $tour_titulo4; ?>">
												</div>
										  </div>
                                          <div class="form-group">
												<label class="col-md-2 control-label">T&iacute;tulo del video (inglés):</label>
												<div class="col-md-10">
													 <input name="tour_titulo4_en" type="text" class="form-control input-default" id="tour_titulo4_en" value="<?= $tour_titulo4_en; ?>">
												</div>
										  </div>
										  <div class="form-group">
												<label class="col-md-2 control-label">Video (español):</label>
												<div class="col-md-10">
													 <input name="tour_video4" type="text" class="form-control input-default" id="tour_video4" value="<?= $tour_video4; ?>">
												</div>
										  </div>
                                          
                                          <div class="form-group">
												<label class="col-md-2 control-label">Video (inglés):</label>
												<div class="col-md-10">
													 <input name="tour_video4_en" type="text" class="form-control input-default" id="tour_video4_en" value="<?= $tour_video4_en; ?>">
												</div>
										  </div>
                      
                      
<p class="text-success">El temporizador permite ocultar los botones (siguiente video, iniciar ahora, agendar una entrevista) en las etapas del tour virtual, esta función ayuda a que los visitantes se vean forzados a ver el video antes de poder continuar con el tour virtual.</p>
<br>
<div class="alert alert-info">
<strong>Importante:</strong>  El tiempo se debe ingresar en segundos, ejemplo: si tu video tiene una duración de 3 minutos en la sección de temporizador tienes que ingresar 180.
</div><!--alert-->
<div class="form-group">
<label class="col-md-2 control-label">Temporizador Etapa 4 (español):</label> 
<div class="col-md-10">
<input name="tour_tiempo4" type="text" 1d="tour_tiempo4" class="form-control input-default" value="<?= $rowUSU['tour_tiempo4']; ?>">
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">Temporizador Etapa 4 (inglés):</label>
<div class="col-md-10"> 
<input name="tour_tiempo4_en" type="text" 1d="tour_tiempo4_en" class="form-control input-default" value="<?= $rowUSU['tour_tiempo4_en']; ?>">
</div>
</div>

<p class="text-success">Contador regresivo: En la sección de plantillas existen algunos diseños que incluyen un contador regresivo, en la siguiente sección puedes configurar dicho contador, esto se usa principalmente para indicar el tiempo que falta para que culmine una oferta o el tiempo que falta para que un evento se lleve a cabo como algún webinar o conferencia online.</p>
              <br>
              <div class="alert alert-info">
              <strong>Nota:</strong>Solo debes elegir la fecha y horario exacto en que quieres que culmine el contador.
              </div><!--alert-->

<div class="form-group">
                      <label class="col-md-2 control-label">Fecha:</label>                     
                      <div class="col-md-10">
                      Mes:
                      	<select name="tour_countdown_mes4" id="tour_countdown_mes4">
                      	<option value="00">01</option>
                        <option value="01">02</option>
                        <option value="02">03</option>
                        <option value="03">04</option>
                        <option value="04">05</option>
                        <option value="05">06</option>
                        <option value="06">07</option>
                        <option value="07">08</option>
                        <option value="08">09</option>
                        <option value="09">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                      </select>
                      Día:
                      <select name="tour_countdown_dia4" id="tour_countdown_dia4">
                      	<option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      Año:
                      <select name="tour_countdown_ano4" id="tour_countdown_ano4">
                      	
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                      </div>
           </div>
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Horario:</label>
                      <div class="col-md-10">
                      Hora:
                      <select name="tour_countdown_hora4" id="tour_countdown_hora4">
					    <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                      Minutos:
                      <select name="tour_countdown_minuto4" id="tour_countdown_minuto4">
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                      </select>
                      </div>
           </div>

                    <script type="text/javascript">
			         $(document).ready(function()
				  {$('#efecto-tour4').on('click',function(e){$('#tour4').toggle();e.preventDefault();});});
                  </script>
                    </div>
                    </div>
                    
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Tour Virtual (Etapa 5)</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-tour5" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="tour5" style="display:none">
                    <div class="form-group">
												<label class="col-md-2 control-label">T&iacute;tulo del video (español):</label>
												<div class="col-md-10">
													 <input name="tour_titulo5" type="text" class="form-control input-default" id="tour_titulo5" value="<?= $tour_titulo5; ?>">
												</div>
										  </div>
                                          <div class="form-group">
												<label class="col-md-2 control-label">T&iacute;tulo del video (inglés):</label>
												<div class="col-md-10">
													 <input name="tour_titulo5_en" type="text" class="form-control input-default" id="tour_titulo5_en" value="<?= $tour_titulo5_en; ?>">
												</div>
										  </div>
										  <div class="form-group">
												<label class="col-md-2 control-label">Video (español):</label>
												<div class="col-md-10">
													 <input name="tour_video5" type="text" class="form-control input-default" id="tour_video5" value="<?= $tour_video5; ?>">
												</div>
										  </div>
                                          
                                          <div class="form-group">
												<label class="col-md-2 control-label">Video (inglés):</label>
												<div class="col-md-10">
													 <input name="tour_video5_en" type="text" class="form-control input-default" id="tour_video5_en" value="<?= $tour_video5_en; ?>">
												</div>
										  </div>
                      
                      
<p class="text-success">El temporizador permite ocultar los botones (siguiente video, iniciar ahora, agendar una entrevista) en las etapas del tour virtual, esta función ayuda a que los visitantes se vean forzados a ver el video antes de poder continuar con el tour virtual.</p>
<br>
<div class="alert alert-info">
<strong>Importante:</strong>  El tiempo se debe ingresar en segundos, ejemplo: si tu video tiene una duración de 3 minutos en la sección de temporizador tienes que ingresar 180.
</div><!--alert-->
<div class="form-group">
<label class="col-md-2 control-label">Temporizador Etapa 5 (español):</label> 
<div class="col-md-10">
<input name="tour_tiempo5" type="text" 1d="tour_tiempo5" class="form-control input-default" value="<?= $rowUSU['tour_tiempo5']; ?>">
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">Temporizador Etapa 5 (inglés):</label>
<div class="col-md-10"> 
<input name="tour_tiempo5_en" type="text" 1d="tour_tiempo5_en" class="form-control input-default" value="<?= $rowUSU['tour_tiempo5_en']; ?>">
</div>
</div>

<p class="text-success">Contador regresivo: En la sección de plantillas existen algunos diseños que incluyen un contador regresivo, en la siguiente sección puedes configurar dicho contador, esto se usa principalmente para indicar el tiempo que falta para que culmine una oferta o el tiempo que falta para que un evento se lleve a cabo como algún webinar o conferencia online.</p>
              <br>
              <div class="alert alert-info">
              <strong>Nota:</strong>Solo debes elegir la fecha y horario exacto en que quieres que culmine el contador.
              </div><!--alert-->

<div class="form-group">
                      <label class="col-md-2 control-label">Fecha:</label>
                      <div class="col-md-10">
                      Mes:
                      	<select name="tour_countdown_mes5" id="tour_countdown_mes5">
                      	<option value="00">01</option>
                        <option value="01">02</option>
                        <option value="02">03</option>
                        <option value="03">04</option>
                        <option value="04">05</option>
                        <option value="05">06</option>
                        <option value="06">07</option>
                        <option value="07">08</option>
                        <option value="08">09</option>
                        <option value="09">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                      </select>
                      Día:
                      <select name="tour_countdown_dia5" id="tour_countdown_dia5">
                      	<option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      año:
                      <select name="tour_countdown_ano5" id="tour_countdown_ano5">
                      	
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                      </div>
           </div>
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Horario:</label>
                      <div class="col-md-10">
                      Hora:
                      <select name="tour_countdown_hora5" id="tour_countdown_hora5">
					    <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                      Minutos:
                      <select name="tour_countdown_minuto5" id="tour_countdown_minuto5">
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                      </select>
                      </div>
           </div>


                    <script type="text/javascript">
			         $(document).ready(function()
				  {$('#efecto-tour5').on('click',function(e){$('#tour5').toggle();e.preventDefault();});});
                  </script>
                    </div>
                    </div>
                    
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Tour Virtual (Etapa 6)</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-tour6" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="tour6" style="display:none">
                    <div class="form-group">
												<label class="col-md-2 control-label">T&iacute;tulo del video (español):</label>
												<div class="col-md-10">
													 <input name="tour_titulo6" type="text" class="form-control input-default" id="tour_titulo6" value="<?= $tour_titulo6; ?>">
												</div>
										  </div>
                                          <div class="form-group">
												<label class="col-md-2 control-label">T&iacute;tulo del video (inglés):</label>
												<div class="col-md-10">
													 <input name="tour_titulo6_en" type="text" class="form-control input-default" id="tour_titulo6_en" value="<?= $tour_titulo6_en; ?>">
												</div>
										  </div>
										  <div class="form-group">
												<label class="col-md-2 control-label">Video (español):</label>
												<div class="col-md-10">
													 <input name="tour_video6" type="text" class="form-control input-default" id="tour_video6" value="<?= $tour_video6; ?>">
												</div>
										  </div>
                                          
                                          <div class="form-group">
												<label class="col-md-2 control-label">Video (inglés):</label>
												<div class="col-md-10">
													 <input name="tour_video6_en" type="text" class="form-control input-default" id="tour_video6_en" value="<?= $tour_video6_en; ?>">
												</div>
										  </div>
                      
                     
<p class="text-success">El temporizador permite ocultar los botones (siguiente video, iniciar ahora, agendar una entrevista) en las etapas del tour virtual, esta función ayuda a que los visitantes se vean forzados a ver el video antes de poder continuar con el tour virtual.</p>
<br>
<div class="alert alert-info">
<strong>Importante:</strong>  El tiempo se debe ingresar en segundos, ejemplo: si tu video tiene una duración de 3 minutos en la sección de temporizador tienes que ingresar 180.
</div><!--alert-->
<div class="form-group">
<label class="col-md-2 control-label">Temporizador Etapa 6 (español):</label> 
<div class="col-md-10">
<input name="tour_tiempo6" type="text" 1d="tour_tiempo6" class="form-control input-default" value="<?= $rowUSU['tour_tiempo6']; ?>">
</div>
</div>
<div class="form-group">
<label class="col-md-2 control-label">Temporizador Etapa 6 (inglés):</label>
<div class="col-md-10"> 
<input name="tour_tiempo6_en" type="text" 1d="tour_tiempo6_en" class="form-control input-default" value="<?= $rowUSU['tour_tiempo6_en']; ?>">
</div>
</div>

<p class="text-success">Contador regresivo: En la sección de plantillas existen algunos diseños que incluyen un contador regresivo, en la siguiente sección puedes configurar dicho contador, esto se usa principalmente para indicar el tiempo que falta para que culmine una oferta o el tiempo que falta para que un evento se lleve a cabo como algún webinar o conferencia online.</p>
              <br>
              <div class="alert alert-info">
              <strong>Nota:</strong>Solo debes elegir la fecha y horario exacto en que quieres que culmine el contador.
              </div><!--alert-->

<div class="form-group">
                      <label class="col-md-2 control-label">Fecha:</label>
                      <div class="col-md-10">
                      Mes:
                      	<select name="tour_countdown_mes6" id="tour_countdown_mes6">
                      	<option value="00">01</option>
                        <option value="01">02</option>
                        <option value="02">03</option>
                        <option value="03">04</option>
                        <option value="04">05</option>
                        <option value="05">06</option>
                        <option value="06">07</option>
                        <option value="07">08</option>
                        <option value="08">09</option>
                        <option value="09">10</option>
                        <option value="10">11</option>
                        <option value="11">12</option>
                      </select>
                      Día:
                      <select name="tour_countdown_dia6" id="tour_countdown_dia6">
                      	<option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                      </select>
                      Año:
                      <select name="tour_countdown_ano6" id="tour_countdown_ano6">
                      	
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select>
                      </div>
           </div>
           
           <div class="form-group">
                      <label class="col-md-2 control-label">Horario:</label>
                      <div class="col-md-10">
                      Hora:
                      <select name="tour_countdown_hora6" id="tour_countdown_hora6">
					    <option value="00">00</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                      </select>
                      Minutos:
                      <select name="tour_countdown_minuto6" id="tour_countdown_minuto6">
                        <option value="00">00</option>
                        <option value="05">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                      </select>
                      </div>
           </div>

                  <script type="text/javascript">
			         $(document).ready(function()
				  {$('#efecto-tour6').on('click',function(e){$('#tour6').toggle();e.preventDefault();});});
                  </script>
                    </div>
                    </div>
                    
                    
                    
 <? }  // if tour custom 
			  else { ?>
              
<input name="tour_titulo1" type="hidden" id="tour_titulo1" value="<?= $rowUSU['tour_titulo1']; ?>" >
<input name="tour_video1" type="hidden" id="tour_video1" value="<?= $rowUSU['tour_video1']; ?>" >
<input name="tour_tiempo1" type="hidden" id="tour_tiempo1" value="<?= $rowUSU['tour_tiempo1']; ?>" >
<input name="tour_countdown_mes1" type="hidden" id="tour_countdown_mes1" value="<?= $rowUSU['tour_countdown_mes1']; ?>" >
<input name="tour_countdown_dia1" type="hidden" id="tour_countdown_dia1" value="<?= $rowUSU['tour_countdown_dia1']; ?>" >
<input name="tour_countdown_ano1" type="hidden" id="tour_countdown_ano1" value="<?= $rowUSU['tour_countdown_ano1']; ?>" >
<input name="tour_countdown_hora1" type="hidden" id="tour_countdown_hora1" value="<?= $rowUSU['tour_countdown_hora1']; ?>" >
<input name="tour_countdown_minuto1" type="hidden" id="tour_countdown_minuto1" value="<?= $rowUSU['tour_countdown_minuto1']; ?>" >
<input name="tour_titulo2" type="hidden" id="tour_titulo2" value="<?= $rowUSU['tour_titulo2']; ?>" >
<input name="tour_video2" type="hidden" id="tour_video2" value="<?= $rowUSU['tour_video2']; ?>" >
<input name="tour_tiempo2" type="hidden" id="tour_tiempo2" value="<?= $rowUSU['tour_tiempo2']; ?>" >
<input name="tour_countdown_mes2" type="hidden" id="tour_countdown_mes2" value="<?= $rowUSU['tour_countdown_mes2']; ?>" >
<input name="tour_countdown_dia2" type="hidden" id="tour_countdown_dia2" value="<?= $rowUSU['tour_countdown_dia2']; ?>" >
<input name="tour_countdown_ano2" type="hidden" id="tour_countdown_ano2" value="<?= $rowUSU['tour_countdown_ano2']; ?>" >
<input name="tour_countdown_hora2" type="hidden" id="tour_countdown_hora2" value="<?= $rowUSU['tour_countdown_hora2']; ?>" >
<input name="tour_countdown_minuto2" type="hidden" id="tour_countdown_minuto2" value="<?= $rowUSU['tour_countdown_minuto2']; ?>" >
<input name="tour_titulo3" type="hidden" id="tour_titulo3" value="<?= $rowUSU['tour_titulo3']; ?>" >
<input name="tour_video3" type="hidden" id="tour_video3" value="<?= $rowUSU['tour_video3']; ?>" >
<input name="tour_tiempo3" type="hidden" id="tour_tiempo3" value="<?= $rowUSU['tour_tiempo3']; ?>" >
<input name="tour_countdown_mes3" type="hidden" id="tour_countdown_mes3" value="<?= $rowUSU['tour_countdown_mes3']; ?>" >
<input name="tour_countdown_dia3" type="hidden" id="tour_countdown_dia3" value="<?= $rowUSU['tour_countdown_dia3']; ?>" >
<input name="tour_countdown_ano3" type="hidden" id="tour_countdown_ano3" value="<?= $rowUSU['tour_countdown_ano3']; ?>" >
<input name="tour_countdown_hora3" type="hidden" id="tour_countdown_hora3" value="<?= $rowUSU['tour_countdown_hora3']; ?>" >
<input name="tour_countdown_minuto3" type="hidden" id="tour_countdown_minuto3" value="<?= $rowUSU['tour_countdown_minuto3']; ?>" >
<input name="tour_titulo4" type="hidden" id="tour_titulo4" value="<?= $rowUSU['tour_titulo4']; ?>" >
<input name="tour_video4" type="hidden" id="tour_video4" value="<?= $rowUSU['tour_video4']; ?>" >
<input name="tour_tiempo4" type="hidden" id="tour_tiempo4" value="<?= $rowUSU['tour_tiempo4']; ?>" >
<input name="tour_countdown_mes4" type="hidden" id="tour_countdown_mes4" value="<?= $rowUSU['tour_countdown_mes4']; ?>" >
<input name="tour_countdown_dia4" type="hidden" id="tour_countdown_dia4" value="<?= $rowUSU['tour_countdown_dia4']; ?>" >
<input name="tour_countdown_ano4" type="hidden" id="tour_countdown_ano4" value="<?= $rowUSU['tour_countdown_ano4']; ?>" >
<input name="tour_countdown_hora4" type="hidden" id="tour_countdown_hora4" value="<?= $rowUSU['tour_countdown_hora4']; ?>" >
<input name="tour_countdown_minuto4" type="hidden" id="tour_countdown_minuto4" value="<?= $rowUSU['tour_countdown_minuto4']; ?>" >
<input name="tour_titulo5" type="hidden" id="tour_titulo5" value="<?= $rowUSU['tour_titulo5']; ?>" >
<input name="tour_video5" type="hidden" id="tour_video5" value="<?= $rowUSU['tour_video5']; ?>" >
<input name="tour_tiempo5" type="hidden" id="tour_tiempo5" value="<?= $rowUSU['tour_tiempo5']; ?>" >
<input name="tour_countdown_mes5" type="hidden" id="tour_countdown_mes5" value="<?= $rowUSU['tour_countdown_mes5']; ?>" >
<input name="tour_countdown_dia5" type="hidden" id="tour_countdown_dia5" value="<?= $rowUSU['tour_countdown_dia5']; ?>" >
<input name="tour_countdown_ano5" type="hidden" id="tour_countdown_ano5" value="<?= $rowUSU['tour_countdown_ano5']; ?>" >
<input name="tour_countdown_hora5" type="hidden" id="tour_countdown_hora5" value="<?= $rowUSU['tour_countdown_hora5']; ?>" >
<input name="tour_countdown_minuto5" type="hidden" id="tour_countdown_minuto5" value="<?= $rowUSU['tour_countdown_minuto5']; ?>" >
<input name="tour_titulo6" type="hidden" id="tour_titulo6" value="<?= $rowUSU['tour_titulo6']; ?>" >
<input name="tour_video6" type="hidden" id="tour_video6" value="<?= $rowUSU['tour_video6']; ?>" >
<input name="tour_tiempo6" type="hidden" id="tour_tiempo6" value="<?= $rowUSU['tour_tiempo6']; ?>" >
<input name="tour_countdown_mes6" type="hidden" id="tour_countdown_mes6" value="<?= $rowUSU['tour_countdown_mes6']; ?>" >
<input name="tour_countdown_dia6" type="hidden" id="tour_countdown_dia6" value="<?= $rowUSU['tour_countdown_dia6']; ?>" >
<input name="tour_countdown_ano6" type="hidden" id="tour_countdown_ano6" value="<?= $rowUSU['tour_countdown_ano6']; ?>" >
<input name="tour_countdown_hora6" type="hidden" id="tour_countdown_hora6" value="<?= $rowUSU['tour_countdown_hora6']; ?>" >
<input name="tour_countdown_minuto6" type="hidden" id="tour_countdown_minuto6" value="<?= $rowUSU['tour_countdown_minuto6']; ?>" >

<input name="tour_titulo1_en" type="hidden" id="tour_titulo1_en" value="<?= $rowUSU['tour_titulo1_en']; ?>" >
<input name="tour_video1_en" type="hidden" id="tour_video1_en" value="<?= $rowUSU['tour_video1_en']; ?>" >
<input name="tour_tiempo1_en" type="hidden" id="tour_tiempo1_en" value="<?= $rowUSU['tour_tiempo1_en']; ?>" >
<input name="tour_titulo2_en" type="hidden" id="tour_titulo2_en" value="<?= $rowUSU['tour_titulo2_en']; ?>" >
<input name="tour_video2_en" type="hidden" id="tour_video2_en" value="<?= $rowUSU['tour_video2_en']; ?>" >
<input name="tour_tiempo2_en" type="hidden" id="tour_tiempo2_en" value="<?= $rowUSU['tour_tiempo2_en']; ?>" >
<input name="tour_titulo3_en" type="hidden" id="tour_titulo3_en" value="<?= $rowUSU['tour_titulo3_en']; ?>" >
<input name="tour_video3_en" type="hidden" id="tour_video3_en" value="<?= $rowUSU['tour_video3_en']; ?>" >
<input name="tour_tiempo3_en" type="hidden" id="tour_tiempo3_en" value="<?= $rowUSU['tour_tiempo3_en']; ?>" >
<input name="tour_titulo4_en" type="hidden" id="tour_titulo4_en" value="<?= $rowUSU['tour_titulo4_en']; ?>" >
<input name="tour_video4_en" type="hidden" id="tour_video4_en" value="<?= $rowUSU['tour_video4_en']; ?>" >
<input name="tour_tiempo4_en" type="hidden" id="tour_tiempo4_en" value="<?= $rowUSU['tour_tiempo4_en']; ?>" >
<input name="tour_titulo5_en" type="hidden" id="tour_titulo5_en" value="<?= $rowUSU['tour_titulo5_en']; ?>" >
<input name="tour_video5_en" type="hidden" id="tour_video5_en" value="<?= $rowUSU['tour_video5_en']; ?>" >
<input name="tour_tiempo5_en" type="hidden" id="tour_tiempo5_en" value="<?= $rowUSU['tour_tiempo5_en']; ?>" >
<input name="tour_titulo6_en" type="hidden" id="tour_titulo6_en" value="<?= $rowUSU['tour_titulo6_en']; ?>" >
<input name="tour_video6_en" type="hidden" id="tour_video6_en" value="<?= $rowUSU['tour_video6_en']; ?>" >
<input name="tour_tiempo6_en" type="hidden" id="tour_tiempo6_en" value="<?= $rowUSU['tour_tiempo6_en']; ?>" >
 
              <? }  // if not autoresponder custom ?>
                            
                    </div><!--tab-pane-->
                    
                      
                    <div id="autoresponder" class="tab-pane">
                    <? if ($rowUSU['autoresponder_custom']==1) { ?>  
                    <button data-toggle="modal" data-target="#myModal4">
                    <img src="images/bt_tutorial_es.png" width="150" height="30" alt=""></button>
                    <div style="padding-top:40px;"></div>
                    
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Configurar Autoresponder</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-autoresponder1" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="autoresponder1" style="display:none; padding-left:30px; padding-right:30px;">
                    
              <div style="padding-bottom:30px; padding-top:15px;">
              
                    <div class="radio btradio">
                    <label><input type="radio" name="autoresponders" id="autoresponders" value="getresponse" <? if ($autoresponders=='getresponse') echo 'checked="checked"'; ?>>
                      <img src="images/logo-getresponse.jpg" width="150" height="30" alt="">
                      </label>
                    </div>
                    <div class="col-md-4">
                    <label>Ingresa el Token para español:</label>
                    <input name="autoresponder_token" type="text" class="form-control input-default" id="autoresponder_token" value="<?= $autoresponder_token; ?>">
                    </div> 
                    
                    <div class="col-md-4">
                    <label>Ingresa el Token para Inglés:</label>
                    <input name="autoresponder_token_en" type="text" class="form-control input-default" id="autoresponder_token_en" value="<?= $autoresponder_token_en; ?>">
                    </div>
                        
                
                <br /> <br /><br /><br />
                
                   <div class="radio btradio">
                    <label><input type="radio" name="autoresponders" id="autoresponders" value="aweber" <? if ($autoresponders=='aweber') echo 'checked="checked"'; ?>>
                      <img src="images/logo-aweber.jpg" width="150" height="30" alt=""></label>
                    </div>
                    
                    <div class="col-md-4">
                    <label>Ingresa el ListID para español:</label>
                    <input name="autoresponder_token_aweber" type="text" class="form-control input-default" id="autoresponder_token_aweber" value="<?= $autoresponder_token_aweber; ?>">
                    </div> 
                    
                    <div class="col-md-4">
                    <label>Ingresa el ListID para inglés:</label>
                    <input name="autoresponder_token_aweber_en" type="text" class="form-control input-default" id="autoresponder_token_aweber_en" value="<?= $autoresponder_token_aweber_en; ?>">
                    </div>




                     <br /> <br /><br /><br />
                
                   <div class="radio btradio">
                    <label><input type="radio" name="autoresponders" id="autoresponders" value="mailchimp" <? if ($autoresponders=='mailchimp') echo 'checked="checked"'; ?>>
                      <img src="images/logo-mailchimp.png" width="150" height="40" alt=""></label>
                    </div>
                    
                    <div class="col-md-4">
                    <label>Ingresa el ListID para español:</label>
                    <input name="autoresponder_token_mailchimp" type="text" class="form-control input-default" id="autoresponder_token_mailchimp" value="<?= $autoresponder_token_mailchimp; ?>">
                    </div> 
                    
                    <div class="col-md-4">
                    <label>Ingresa el ListID para inglés:</label>
                    <input name="autoresponder_token_mailchimp_en" type="text" class="form-control input-default" id="autoresponder_token_mailchimp_en" value="<?= $autoresponder_token_mailchimp_en; ?>">
                    </div> 

                    <div class="col-md-4">
                    <label>Clave Api de MailChimp:</label>
                    <input name="autoresponder_api_mailchimp" type="text" class="form-control input-default" id="autoresponder_api_mailchimp" value="<?= $autoresponder_api_mailchimp; ?>">
                    </div> 
                    
               </div>
                 
     
                  <script type="text/javascript">
			         $(document).ready(function()
				  {$('#efecto-autoresponder1').on('click',function(e){$('#autoresponder1').toggle();e.preventDefault();});});
                  </script>
                    </div>
                    </div>
    
                    
                    <!--<div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Aweber</div>
                    <div class="panel-btn" align="right">
                    <img src="images/videotutorial_panel.png" width="30" height="28" alt="">
                    <a href="#" id="efecto-autoresponder2" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="autoresponder2" style="display:none; padding-left:30px; padding-right:30px;">
    
                  <script type="text/javascript">
			         $(document).ready(function()
				  {$('#efecto-autoresponder2').on('click',function(e){$('#autoresponder2').toggle();e.preventDefault();});});
                  </script>
                    </div>
                    </div>-->
                      
                    <? }  // if chat custom 
			  else { ?>
              
   	  <input name="autoresponder_token" type="hidden" id="autoresponder_token" value="<?= $autoresponder_token; ?>" >
      <input name="autoresponder_token_en" type="hidden" id="autoresponder_token_en" value="<?= $autoresponder_token_en; ?>" >
      
      <input name="autoresponder_token_aweber" type="hidden" id="autoresponder_token_aweber" value="<?= $autoresponder_token_aweber; ?>" >
      <input name="autoresponder_token_aweber_en" type="hidden" id="autoresponder_token_aweber_en" value="<?= $autoresponder_token_aweber_en; ?>" >
      
 
              <? }  // if not autoresponder custom ?>       
                    </div><!--tab-pane-->
                    
                        
                    
                    <div id="comentarios" class="tab-pane">
                    <? if ($rowUSU['comments_custom']==1) { ?>
                    <button data-toggle="modal" data-target="#myModal5">
                    <img src="images/bt_tutorial_es.png" width="150" height="30" alt=""></button>
                    <div style="padding-top:40px;"></div>
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Comentarios (Disqus)</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-comentarios1" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="comentarios1" style="display:none; padding-left:30px; padding-right:30px;">
                    
                    <div>
                    <h5 class="subtitle">
                    Aqu&iacute; puedes configurar la caja de comentarios para mantener comunicaci&oacute;n con tus prospectos.
                    Primero debes crear una cuenta en <a href="http://www.disqus.com" target="_blank">www.disqus.com</a></h5>
                    
                    <div class="form-group">
                    <label>Nombre de la cuenta:</label>
                    <input name="comments_id" type="email" class="form-control input-default" id="comments_id" value="<?= $rowUSU['comments_id']; ?>">
                    </div>
                    
                    <script type="text/javascript">
			          $(document).ready(function()
				     {$('#efecto-comentarios1').on('click',function(e){$('#comentarios1').toggle();e.preventDefault();});});
                    </script>
                    </div>
                    </div> 
                    
                     <? }  // if comments custom 
			  else { ?>
              
              	<input name="comments_id" type="hidden" id="comments_id" value="<?= $rowUSU['comments_id']; ?>" >
 
              <? }  // if not comments custom ?>
                     
                     </div><!--tab-pane-->
                     
                     
                     
                     
                    
                    <? if ($rowUSU['fbcomments_custom']==1) { ?>
                    <div class="panel panel-primary">
                    <div class="panel-heading">
                    <div class="panel-title">Comentarios (Facebook)</div>
                    <div class="panel-btn" align="right">
                    <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                    <a href="#" id="efecto-comentariosfb1" class="btn btn-warning" style="color:#ffffff;">
                    <i class="iconfa-edit"></i>Editar</a></div>
                    </div> 
              
                    <div class="panel-body" id="comentariosfb1" style="display:none; padding-left:30px; padding-right:30px;">
                    <h5 class="subtitle">
                    Aqu&iacute; puedes configurar la sección de comentarios de facebook, esta sección sirve para que tus prospectos pueden hacer comentarios en la parte del Tour Virtual o en las cartas de venta.
                    Para ello debes crear una aplicación en Facebook Developers <a href="https://developers.facebook.com/" target="_blank">https://developers.facebook.com</a></h5>
                    
                    <div class="alert alert-warning">
                    <button data-dismiss="alert" class="close" type="button">&times;</button>
                    <strong>Importante:</strong> Para poder crear una aplicación en facebook debes tener creada una cuanta de usuario en facebook, si no tienes cuenta en facebook crea una. <a href="http://www.facebook.com" target="_blank">www.facebook.com</a>  
                    </div><!--alert-->
 
                    <div class="form-group">
                    <label>App ID:</label>
                    <input name="fbcomments_app" type="email" class="form-control input-default" id="fbcomments_app" value="<?= $fbcomments_app; ?>">
                     <?php
                    	if(empty($fbcomments_app)){

                    		// error_reporting(E_ALL);
                    		$tmp_ModeratorAppId = getCommentsAppId($rowUSU, 'fb');
                    		if( ! empty($tmp_ModeratorAppId)){
	                    		echo '<p>'
		                    			. '<strong>De la plantilla:</strong> '
		                    			. $tmp_ModeratorAppId
                    			. '</p>';
                    		}
                    	}
                    ?>
                    </div>
                        
                    
                    <div class="alert alert-info">
                              <button data-dismiss="alert" class="close" type="button">&times;</button>
                              Para poder administrar los comentarios tienes que ingresar a la siguiente página web: <a href="https://developers.facebook.com/tools/comments" target="_blank"><u>developers.facebook.com/tools/comments</u></a> 
                                   <br><br>
                              Para verlos debes previamente haber creado tu aplicación de facebook y estar logeado con tu cuenta de facebook, para saber cómo crear tu aplicación de facebook puedes ver el tutorial: <a href="tutoriales/configurar_comentarios_de_facebook.pdf" target="_blank"><u>HACIENDO CLIC AQUÍ</u></a>
                     </div> 
                     
                     <script type="text/javascript">
			          $(document).ready(function()
				     {$('#efecto-comentariosfb1').on('click',function(e){$('#comentariosfb1').toggle();e.preventDefault();});});
                    </script>
                    </div>
                    </div> 
                      
                      <? }  // if fbcomments custom 
			  else { ?>
              

<input name="fbcomments_app" type="hidden" id="fbcomments_app" value="<?= $rowUSU['fbcomments_app']; ?>" >
 
              <? }  // if not fbcomments custom ?> 
           	
                     </div><!--tab-pane-->
                     
                     
                     
                     <div id="chat" class="tab-pane">
					 <? if ($rowUSU['chat_custom']==1) { ?>
                     <button data-toggle="modal" data-target="#myModal6">
                     <img src="images/bt_tutorial_es.png" width="150" height="30" alt="">
                     </button>	
                     <!--<img src="images/bt_tutorial_es.png" width="150" height="30" alt="">-->	
                     <div style="padding-top:40px;"></div>
                     <div class="panel panel-primary">
                     <div class="panel-heading">
                     <div class="panel-title">Ajustes Chat</div>
                     <div class="panel-btn" align="right">
                     <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                     <a href="#" id="efecto-chat1" class="btn btn-warning" style="color:#ffffff;">
                     <i class="iconfa-edit"></i>Editar</a></div>
                     </div> 
              
                    <div class="panel-body" id="chat1" style="display:none; padding-left:30px; padding-right:30px;"> 
                     <div>
                     <h5 class="subtitle">En esta sección puedes integrar LiveChat en tu página de captura y el tour virtual, para ello debes tener una cuenta en LiveChat, si aún no tienes una puedes crearla <a href="#" onClick="document.livechat.submit();"><u>Haciendo Clic Aqui</u></a></h5>
                    
                      <div class="form-group">
                      <label>Número de cuenta:</label>
                      <input name="chat_id" type="text" class="form-control input-default" id="chat_id" value="<?= $rowUSU['chat_id']; ?>">
                     </div> 
                     </div>
                     <script type="text/javascript">
			          $(document).ready(function()
				     {$('#efecto-chat1').on('click',function(e){$('#chat1').toggle();e.preventDefault();});});
                    </script>
                    </div>
                    </div> 
                     <? }  // if chat custom 
			  else { ?>
              
              	<input name="chat_id" type="hidden" id="chat_id" value="<?= $rowUSU['chat_id']; ?>" >
 
              <? }  // if not chat custom ?>               	
                     </div><!--tab-pane-->
                     
                     
                     <div id="seguimiento" class="tab-pane">
                     <? if ($rowUSU['fbpixel_custom']==1) { ?>
                     <img src="images/bt_tutorial_es.png" width="150" height="30" alt="">
                     <div style="padding-top:40px;"></div>
                     <div class="panel panel-primary">
                     <div class="panel-heading">
                     <div class="panel-title">Ajustes seguimiento</div>
                     <div class="panel-btn" align="right">
                     <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                     <a href="#" id="efecto-seguimiento1" class="btn btn-warning" style="color:#ffffff;">
                     <i class="iconfa-edit"></i>Editar</a></div>
                     </div> 
              
                    <div class="panel-body" id="seguimiento1" style="display:none; padding-left:30px; padding-right:30px;"> 
                     <div>
                     <h5 class="subtitle">Aqu&iacute; puedes ingresar el código del pixel de conversión de facebook.<a></a></h5>
                    
           <div class="form-group">
           <label>Ingresa el código de tu pixel de facebook para la página de captura:</label>
           <textarea name="fbpixel_lp" cols="80" rows="5" class="form-control input-default" style="resize: vertical" id="fbpixel_lp" ><?= $rowUSU['fbpixel_lp']; ?></textarea>
           </div>
           
           <div class="form-group">
           <label>Ingresa el código de tu pixel de conversión para la página de gracias (Tour virtual etapa 1):</label>
           <textarea name="fbpixel_tour" cols="80" rows="5" class="form-control input-default" style="resize: vertical" id="fbpixel_tour" ><?= $rowUSU['fbpixel_tour']; ?></textarea>
           </div>
           
           <div class="form-group">
           <label>Ingresa el código de tu pixel de facebook para la página de registro del webinar:</label>
           <textarea name="fbpixel_webinar" cols="80" rows="5" class="form-control input-default" style="resize: vertical" id="fbpixel_webinar" ><?= $rowUSU['fbpixel_webinar']; ?></textarea>
           </div>
           
           <div class="form-group">
           <label>Ingresa el código de tu pixel de facebook para la página de gracias del webinar:</label>
           <textarea name="fbpixel_wregistro" cols="80" rows="5" class="form-control input-default" style="resize: vertical" id="fbpixel_wregistro" ><?= $rowUSU['fbpixel_wregistro']; ?></textarea>
           </div>
           
           <div class="form-group">
           <label>Ingresa el código de tu pixel de facebook para medir la asistencia al webinar:</label>
           <textarea name="fbpixel_wasistencia" cols="80" rows="5" class="form-control input-default" style="resize: vertical" id="fbpixel_wasistencia" ><?= $rowUSU['fbpixel_wasistencia']; ?></textarea>
           </div>
          
           
                     </div>
                     <script type="text/javascript">
			          $(document).ready(function()
				     {$('#efecto-seguimiento1').on('click',function(e){$('#seguimiento1').toggle();e.preventDefault();});});
                    </script>
                    </div>
                    </div> 
                     <? }  // if fbpixel custom 
			  else { ?>
              
              	<input name="fbpixel_id" type="hidden" id="fbpixel_id" value="<?= $rowUSU['fbpixel_id']; ?>" >
                <input name="fbpixel_lp" type="hidden" id="fbpixel_lp" value="<?= $rowUSU['fbpixel_lp']; ?>" >
                <input name="fbpixel_tour" type="hidden" id="fbpixel_tour" value="<?= $rowUSU['fbpixel_tour']; ?>" >
                <input name="fbpixel_webinar" type="hidden" id="fbpixel_webinar" value="<?= $rowUSU['fbpixel_webinar']; ?>" >
                <input name="fbpixel_wregistro" type="hidden" id="fbpixel_wregistro" value="<?= $rowUSU['fbpixel_wregistro']; ?>" >
                <input name="fbpixel_wasistencia" type="hidden" id="fbpixel_wasistencia" value="<?= $rowUSU['fbpixel_wasistencia']; ?>" >
            
       <? }  // if not fbpixel custom ?>                	
                     </div><!--tab-pane-->
                     
                     <div id="metatags" class="tab-pane">
                     <button data-toggle="modal" data-target="#myModal7">
                     <img src="images/bt_tutorial_es.png" width="150" height="30" alt="">
                     </button>
                    <!--<img src="images/bt_tutorial_es.png" width="150" height="30" alt="">-->
                     <div style="padding-top:40px;"></div>
                     <div class="panel panel-primary">
                     <div class="panel-heading">
                     <div class="panel-title">Metaetiquetas</div>
                     <div class="panel-btn" align="right">
                     <!--<img src="images/videotutorial_panel.png" width="30" height="28" alt="">-->
                     <a href="#" id="efecto-metatags1" class="btn btn-warning" style="color:#ffffff;">
                     <i class="iconfa-edit"></i>Editar</a></div>
                     </div> 
              
                    <div class="panel-body" id="metatags1" style="display:none; padding-left:30px; padding-right:30px;"> 
                     <div>
                     <h5 class="subtitle">Aqu&iacute; puedes ingresar la información para las metaetiquetas.<a></a></h5>
                    
           <div class="form-group">
           <label>Ingresa el titulo:</label>
           <input name="meta_titulo" cols="80" rows="5" class="form-control input-default" style="resize: vertical" id="meta_titulo" value="<?= $rowUSU['meta_titulo']; ?>">
           </div>
           <div class="form-group">
           <label>Ingresa la descripción:</label>
           <textarea name="meta_descripcion" cols="80" rows="5" class="form-control input-default" style="resize: vertical" id="meta_descripcion" ><?= $rowUSU['meta_descripcion']; ?></textarea>
           </div>
           <div class="form-group">
           <label>Ingresa las palabras clave:</label>
           <textarea name="meta_palabras" cols="80" rows="5" class="form-control input-default" style="resize: vertical" id="meta_palabras" ><?= $rowUSU['meta_palabras']; ?></textarea>
           </div>
           <div class="form-group">

<div class="alert alert-info">
<button data-dismiss="alert" class="close" type="button">&times;</button>
<strong>Nota:</strong> Sólo archivos ICO, máximo 2 Mb
</div><!--alert-->
<label for="foto"class="col-md-2 control-label">Subir Favicono</label>
<div class="col-md-10">
<div class="fileupload fileupload-new" data-provides="fileupload">
<div class="input-append">
<div class="uneditable-input">
<i class="glyphicon glyphicon-file fileupload-exists"></i>
<span class="fileupload-preview"></span>
</div>
<span class="btn btn-default btn-file"><span class="fileupload-new">Seleccionar Archivo</span>
<span class="fileupload-exists">Cambiar</span>
<input name="favicon" id="favicon" type="file" /></span>
<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Borrar</a>
<div id="message" style="color:#0000FF;"></div>
<div id="avatar">
<?  $dir = 'images/favicons/';
if (file_exists($dir.$usuario.'.ico')) 
echo '<img src="'.$dir.$usuario.'.ico?'.date('U').'" alt="">
<br />[ <a href="borrar_favicon.php">Borrar favicon</a> ]';
?>
</div>
</div>
</div>
</div>
</div> 
                     </div>
                     <script type="text/javascript">
			          $(document).ready(function()
				     {$('#efecto-metatags1').on('click',function(e){$('#metatags1').toggle();e.preventDefault();});});
                    </script>
                    </div>
                    </div> 
                                	
                     </div><!--tab-pane-->
                     
                    </div><!--tabcontent-->
               </div>
               
               <br />
           <div class="btn btn-primary"> 
           <!--<input type="submit" onClick="valida();" class="tn btn-primary" value="Grabar Datos">-->
           <a href="#" name="Submit" onClick="valida();" style="color:#FFF;">Guardar Datos</a>
		   </div>
             
                  </form>
                  
            <div class="footer">
                    <div class="footer-left">
                        <span><? include('footer.php'); ?></span>
                    </div>
                    <div class="footer-right">
                        <!--<span>Designed by: <a href="http://themepixels.com/">ThemePixels</a></span>-->
                    </div>
                </div><!--footer-->
               
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tutorial Configuraciones Básicas</h4>
      </div>
      <div class="modal-body">
      <div class="cajadevideo" align="center">
         <div class="video">
        <iframe src="https://player.vimeo.com/video/184381994?autoplay=0&title=0&byline=0&portrait=0" width="530" height="259" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        </div>
      </div>
      <div class="modal-footer">
     <!-- <a href="http://www.getresponse.com/index/vioniko" target="_blank"><img src="images/ir-a-getresponse.png" width="190" height="40" alt=""></a>
      <a href="http://vioniko.com/tutoriales/integrar_getresponder_con_vioniko.pdf" target="_blank"><img src="images/guia-pdf.png" width="240" height="40" alt=""></a>-->
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tutorial Página de Captura</h4>
      </div>
      <div class="modal-body">
      <div class="cajadevideo" align="center">
         <div class="video">
        <iframe src="https://player.vimeo.com/video/185308207?autoplay=0&title=0&byline=0&portrait=0" width="530" height="259" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        </div>
      </div>
      <div class="modal-footer">
     <!-- <a href="#" onClick="document.livechat.submit();"><img src="images/live-chat.png" width="190" height="40" alt=""></a>
      <a href="#" onClick="document.livechatpdf.submit();"><img src="images/guia-pdf.png" width="240" height="40" alt=""></a>-->
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tutorial Tour Virtual</h4>
      </div>
      <div class="modal-body">
      <div class="cajadevideo" align="center">
         <div class="video">
        <iframe src="https://player.vimeo.com/video/185309343?autoplay=0&title=0&byline=0&portrait=0" width="530" height="259" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        </div>
      </div>
      <div class="modal-footer">
      <!--<a href="http://www.disqus.com" target="_blank"><img src="images/disqus.png" width="190" height="40" alt=""></a>
      <img src="images/guia-pdf.png" width="240" height="40" alt="">-->
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="myModal4">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Tutorial Configuración Autoresponder</h4>
      </div>
      <div class="modal-body">
      <div class="cajadevideo" align="center">
         <div class="video">
        <iframe src="https://player.vimeo.com/video/185338399?autoplay=0&title=0&byline=0&portrait=0" width="530" height="259" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        </div>
      </div>
      <div class="modal-footer">
      <!--<a href="http://www.disqus.com" target="_blank"><img src="images/disqus.png" width="190" height="40" alt=""></a>
      <img src="images/guia-pdf.png" width="240" height="40" alt="">-->
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal5">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Tutorial Comentarios</h4>
      </div>
      <div class="modal-body">
      <div class="cajadevideo" align="center">
         <div class="video">
        <iframe src="https://player.vimeo.com/video/185401477?autoplay=0&title=0&byline=0&portrait=0" width="530" height="259" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        </div>
      </div>
      <div class="modal-footer">
      <!--<a href="http://www.disqus.com" target="_blank"><img src="images/disqus.png" width="190" height="40" alt=""></a>
      <img src="images/guia-pdf.png" width="240" height="40" alt="">-->
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal6">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tutorial Configurar Chat</h4>
      </div>
      <div class="modal-body">
      <div class="cajadevideo" align="center">
         <div class="video">
        <iframe src="https://player.vimeo.com/video/190027185?autoplay=0&title=0&byline=0&portrait=0" width="530" height="259" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        </div>
      </div>
      <div class="modal-footer">
     <!-- <a href="http://www.getresponse.com/index/vioniko" target="_blank"><img src="images/ir-a-getresponse.png" width="190" height="40" alt=""></a>
      <a href="http://vioniko.com/tutoriales/integrar_getresponder_con_vioniko.pdf" target="_blank"><img src="images/guia-pdf.png" width="240" height="40" alt=""></a>-->
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal7">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Tutorial Configurar Metaetiquetas</h4>
      </div>
      <div class="modal-body">
      <div class="cajadevideo" align="center">
         <div class="video">
        <iframe src="https://player.vimeo.com/video/190022027?autoplay=0&title=0&byline=0&portrait=0" width="530" height="259" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        </div>
      </div>
      <div class="modal-footer">
     <!-- <a href="http://www.getresponse.com/index/vioniko" target="_blank"><img src="images/ir-a-getresponse.png" width="190" height="40" alt=""></a>
      <a href="http://vioniko.com/tutoriales/integrar_getresponder_con_vioniko.pdf" target="_blank"><img src="images/guia-pdf.png" width="240" height="40" alt=""></a>-->
      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>

