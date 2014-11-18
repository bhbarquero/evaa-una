<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EVAA</title>

<link  type="text/css" rel="stylesheet" href="../Styles/General.css">
<link  type="text/css" rel="stylesheet" href="../Styles/Login.css">
<link rel="icon" href="../Imagenes/book.png" sizes="16x16" type="image/png">

<script src="../Scripts/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="../Scripts/jquery.validate.js" type="text/javascript"></script>
<script src="../Scripts/login.js" type="text/javascript"></script>

</head>

<body>
    <div id="divPrincipal">
     <div class="msgContent"><label id="mensaje"></label></div>
        <header>
            <h1 id="titulo">EVAA</h1> 
        </header>
        <div id="divContenido">
            <div id="divLogin">
           <img src="../Imagenes/book.png" alt="Logo EVAA" class="evaa-img">
                <form  id="frmLogin" class="evaa-form">
                    <input id="correo" name="correo" type="email" placeholder="Correo electrónico" required>
                    <input id="pass" name="pass" type="password" placeholder="Contraseña" required> 
                    <button type="submit" id="btnEntrar" class="evaa-button evaa-button-primary" >Iniciar Sesión</button>
                </form>
                
            </div>
            <a id="aRegistro" href="registroUsuario.php">Crear una cuenta</a>
        </div>
        <footer>
        </footer>
    </div>
   

<script src="../Scripts/jquery.blockUI.js"></script>


</body>
</html>