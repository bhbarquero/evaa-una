<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EVAA</title>

<style type="text/css">
body{
	color:#404040;
}

#divPrincipal {
	 
  width: 100%;
  height:100%;
  font: 14px Arial, Helvetica, sans-serif;
}

#divContenido{
	width: 100%;
  height:100%;
	
	/* flexbox setup */
  display: -webkit-flex;
  display: flex;
  flex-direction:row;
  justify-content:flex-end;
  -webkit-justify-content: center;
  justify-content: center;
	
  /* Vertical */	
	-webkit-align-items: center;
    align-items: center;

	/* Wrap */
	-webkit-flex-wrap: wrap;
    flex-wrap: wrap;
}

#divLogin{
	background-color:#E5E5E5;
	width:300px;
	height:400px;
	margin:10px;
	
	/* flexbox setup */
  display: -webkit-flex;
  display: flex;
  flex-direction:row;
  justify-content:flex-end;
  -webkit-justify-content: center;
  justify-content: center;
	
  /* Vertical */	
	-webkit-align-items: center;
    align-items: center;
	
}

#divLogin > form{
	width:100%;
	margin: 10px;
}

#divLogin > form >input{
	width:100%;
	margin-bottom:5px;
	margin-top:5px;
	
	padding: 0.5em 0.6em;
    display: inline-block;
    border: 1px solid #ccc;
    box-shadow: inset 0 1px 3px #ddd;
    border-radius: 4px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

header{
	width:100%;
	text-align:center;
}

a{
	display: inline-block;
    *display: inline; /*IE 6/7*/
    zoom: 1;
    line-height: normal;
    white-space: nowrap;
    vertical-align: baseline;
    text-align: center;
    cursor: pointer;
    -webkit-user-drag: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
	font-family: inherit;
    font-size: 100%;
    *font-size: 90%; /*IE 6/7 - To reduce IE's oversized button text*/
    *overflow: visible; /*IE 6/7 - Because of IE's overly large left/right padding on buttons */
    padding: 0.5em 1em;
    color: #444; /* rgba not supported (IE 8) */
    color: rgba(0, 0, 0, 0.80); /* rgba supported */
    *color: #444; /* IE 6 & 7 */
    border: 1px solid #999;  /*IE 6/7/8*/
    border: none rgba(0, 0, 0, 0);  /*IE9 + everything else*/
    background-color: #E6E6E6;
    text-decoration: none;
    border-radius: 2px;
background-color: rgb(0, 120, 231);
    color: #fff;
	margin-top:10px;
}
</style>

</head>

<body>
    <div id="divPrincipal">
        <header>
            <label>EVAA</label>
            <h1>Tus clases. Siempre, donde quieras</h1>
            <label>Inicia sesión para continuar con EVAA</label>
        </header>
        <div id="divContenido">
            <div id="divLogin">
                <form>
                    <input type="text" placeholder="Email">
                    <input type="password" placeholder="Contraseña"> 
                    <a>Entrar </a>             
                </form>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>
</html>