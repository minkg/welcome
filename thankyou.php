<?php setcookie("order", "done", time()+60*60*24); ?>
 <!doctype html>
 <html>
 <head>
    
     <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=<?=$_COOKIE["FBpixel"]?>&ev=Lead&noscript=1" />
 <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1574961569347866&ev=Lead&noscript=1" />

<!-- сюда пиксель -->

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width" />
  <title>El pedido ha sido realizado</title> 
  <style>
  body {
    background: #eeeeee url(/_thankyou/pattern.png);
    font-family: Tahoma;
    font-size: 14px;
}
h1 {
    text-align: center;
    color: #ff7200;
    font-size: 50px; 
    text-transform: uppercase;
    line-height: 49px;
    margin-top: 0;
    padding-top: 0;
}
h2 {
    text-transform: none;
    text-align: center;
    font-size: 30px;
    color: black;
}
h3 {
    text-align: center;
    color: #111;
}
#parent {
    padding: 0 20px 0 20px;
}
#content {
    font-size: 1em;
    margin: 0 auto;
    margin-top: 30px;
    background: white; 
    max-width: 650px;
    // min-width: 300px;
    -moz-border-radius: 14px;
    border-radius: 14px;
    padding: 20px;
}
</style>


</head>
<body> 

    <div id="parent">
        <div id="content">
            <h1>Su pedido es aceptado!</h1>
			<h2>Nuestro gerente se comunicará con usted a la brevedad para aclarar los detalles y confirmar el pedido.</br>¡Gracias por su orden! </h2>
                 
        </div>
    </div>



</body>
</html>
