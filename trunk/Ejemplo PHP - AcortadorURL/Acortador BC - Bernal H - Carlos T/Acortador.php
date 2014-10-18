<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Acortador de cirecciones BC.">

<title>Acortador de Direcciones</title>

<link rel="stylesheet" href="Styles/pure.css">
<link rel="stylesheet" href="Styles/main-grid.css">
<link rel="stylesheet" href="Styles/layouts/blog.css">
<link rel="stylesheet" href="Styles/General.css">
<link rel="stylesheet" href="Styles/alertas/alertify.default.css">
<link rel="stylesheet" href="Styles/alertas/alertify.core.css">

<script src="Scripts/yui.js"></script>
<script src="Scripts/jquery-2.1.1.js"></script>
<script src="Scripts/General.js" type="text/javascript"></script>
<script src="Scripts/alertify.js"></script>
<script src="Scripts/jquery.complexify.js"></script>

</head>
<body>

<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-med-1-4">
    
        <div class="header">     
                <h1 class="brand-title">Acortador BC</h1>
                <h2 class="brand-tagline">Acceso rápido y fácil</h2>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-med-3-4">
        <div>
            <div class="posts">
                <h1 class="content-subhead">Acortador de direcciones</h1>
                <form id="frmUrl">
                <section class="post">
                    <div class="post-description pure-form ">                    
                        Pegue aquí su URL:<br/>
                      <input id="inpURL" name="inpURL"  class="pure-input-2-3" placeholder="URL larga" required>
                    </div>
                </section>
                <div id="divResultado">
                 <h1 class="content-subhead">Resultado</h1>
                <section class="post">
                    <div class="post-description pure-form ">
                        <label  id="txtResultado" class="txtResultado"></label>
                    </div>
                </section>
                </div>
                <h1 class="content-subhead">Opciones</h1>
                <section class="post">
                    <div class="post-description pure-form pure-form-aligned">
                    	
                        <div class="pure-control-group">
                        <label for="inpFechaInicio">Disponible desde:</label>
                        <input  name="inpFechaInicio" id="inpFechaInicio" placeholder="aaaa/mm/dd" class="pure-input-1-4">&nbsp;
                        </div>
                        
                        <div class="pure-control-group">
                        <label for="inpFechaFinal">Disponible hasta:</label>
                        <input name="inpFechaFinal" id="inpFechaFinal" placeholder="aaaa/mm/dd" class="pure-input-1-4">
                        </div>
                        
                        <div class="pure-control-group">
                        <label for="inpPass"> Contraseña:</label>
                        <input type="text" name="inpPass" id="inpPass" class="pure-input-1-4">
						</div>
                        
                        <div class="pure-control-group">
                        <label for="inpTiempo">Redireccionar en:</label>
                        <input type="number" name="inpTiempo" id="inpTiempo" value="0" class="pure-input-1-4"> segundos.
                        </div>	
                        					
                    </div>                    
                </section>
                <div class="centrado">
                <a id="btnAcortar" class="pure-button pure-button-primary">Acortar URL</a>
                </div>
                </form>
                <div class="footer">
                <div class="pure-menu pure-menu-horizontal pure-menu-open">
                    <ul>
                        <li><a href="#">Todos los derechos reservados ©2014</a></li>
                    </ul>
                </div>
                <img class="post-avatar" alt="Logo Acortador BC" height="80" width="106" src="Imagenes/logo.PNG">
            </div>
           </div>
        </div>
     </div>
</div>








</body>
</html>
