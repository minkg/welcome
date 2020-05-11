<?php setcookie("FBpixel", $_GET["mnom"], time()+60*60*24); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="info/index_files/jquery-1.12.4.min.js.download"></script>
<script type="text/javascript" src="info/index_files/dr-dtime.min.js.download"></script>

<meta content="IE=edge" http-equiv="X-UA-Compatible">
<meta content="width=device-width, initial-scale=1" name="viewport">
    
    
<script type="text/javascript" src="info/js/jquery.js"></script>
<script type="text/javascript" src="info/js/dr.js"></script>
<script type="text/javascript" src="info/js/dtime.js"></script>    
    
    
    
    
    
<title>Dietonus</title>

<script>
        function today() {
            var mydate = new Date();
            var year = mydate.getYear();
            if (year < 1000) year += 1900;
            var day = mydate.getDay();
            var month = mydate.getMonth();
            var daym = mydate.getDate();
            if (daym < 10) daym = "0" + daym;
            var dayarray = new Array("Domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "Sábado");
            var montharray = new Array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "Agosto", "septiembre", "octubre", "noviembre", "diciembre");
            document.write("" + dayarray[day] + ", " + daym + " " + montharray[month] + ", " + year + "");
        }
    </script>
<script src="info/index_files/jquery.min.js.download"></script>
<link href="info/index_files/index.css" media="all" rel="stylesheet" type="text/css">
<link href="info/index_files/bootstrap.min.css" rel="stylesheet">
    <style>   
    .disqount {
    
    font-family: Arial, sans-serif;
    right: 0px;
    bottom: 0px;
    color: rgb(0, 0, 0);
    box-shadow: rgba(0, 0, 0, 0.8) 0px 3px 30px;
    width: 165px;
    height: 98px;
    font-size: 19px;
    font-weight: bold;
    line-height: 1.3;
    transform: rotateZ(-7deg);
    text-align: center !important;
    margin: 0px auto;
    background: linear-gradient(to right, rgb(238, 165, 19) 0%, rgb(253, 237, 19) 100%);
    border-width: 2px;
    border-style: solid;
    border-color: rgb(255, 255, 255);
    border-image: initial;
    border-radius: 19%;
}

.button {
  display: inline-block;
  width: 60%;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  margin: 10px auto;
  border: 1px solid #018dc4;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal medium/normal Arial, Helvetica, sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: #f74c4c;
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}

.button:hover {
  border: 1px solid #007cad;
  background: rgba(249,29,29,1);
  -webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.3) ;
  box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.3) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}

.button:active {
  border: 1px solid #018dc4;
  background: #f93434;
  -webkit-box-shadow: 0 1px 4px 0 rgba(0,0,0,0.2) inset;
  box-shadow: 0 1px 4px 0 rgba(0,0,0,0.2) inset;
  text-shadow: none;
  -webkit-transition: all 50ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 50ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 50ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 50ms cubic-bezier(0.42, 0, 0.58, 1);
}

.formbg {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  width: 80%;
  padding: 10px;
  border: 2px dashed rgba(239,40,103,0.91);
  -webkit-border-radius: 10px;
  border-radius: 10px;
  font: normal 14px/1 "Times New Roman", Times, serif;
  color: rgba(0,0,0,1);
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  background: rgba(0,0,0,0);
}

.enjoy-css {
  display: inline-block;
  width: 72%;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 6px 20px;
  border: none;
  -webkit-border-radius: 32px / 54px;
  border-radius: 32px / 54px;
  font: normal 18px/normal "Coda", Helvetica, sans-serif;
  color: rgba(0,142,198,1);
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  background: rgba(252,252,252,1);
  -webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2) inset;
  box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2) inset;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}

.enjoy-css:hover {
  background: rgba(232,249,255,1);
  -webkit-box-shadow: 0 2px 2px 0 rgba(90,90,90,0.2) inset;
  box-shadow: 0 2px 2px 0 rgba(90,90,90,0.2) inset;
}

.enjoy-css:focus {
  background: rgba(255,253,232,1);
}
.enjoy-css { 
  -moz-appearance: textfield;
}
.enjoy-css::-webkit-inner-spin-button { 
  display: none;
}

.enjoy-css2 {
  display: inline-block;
  width: 77%;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 6px 20px;
  border: none;
  -webkit-border-radius: 32px / 54px;
  border-radius: 32px / 54px;
  font: normal 18px/normal "Coda", Helvetica, sans-serif;
  color: rgba(0,142,198,1);
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  background: rgba(252,252,252,1);
  -webkit-box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2) inset;
  box-shadow: 0 1px 2px 0 rgba(0,0,0,0.2) inset;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}

.enjoy-css2:hover {
  background: rgba(232,249,255,1);
  -webkit-box-shadow: 0 2px 2px 0 rgba(90,90,90,0.2) inset;
  box-shadow: 0 2px 2px 0 rgba(90,90,90,0.2) inset;
}

.enjoy-css2:focus {
  background: rgba(255,253,232,1);
}
.enjoy-css2 { 
  -moz-appearance: textfield;
}
.enjoy-css2::-webkit-inner-spin-button { 
  display: none;
</style>
</head>
<body><!--retarget-->

<!--retarget-->

<div class="main-wrapper">
<div class="row" style="background: black none repeat scroll 0% 0%;">
<div class="container">
<div class="row">
<div class="col-lg-12" style="font-size: 20pt; color: white; padding: 5px;">
<img height="30px" src="info/index_files/exclusivo.jpg" style="margin-left: 10px;">  extra
                </div>
</div>
</div>
<center><img src="info/index_files/lui-1.jpg" style="width: 80%;"></center>
</div>
<div class="container">
<div class="row">
<div class="col-lg-12">
<h2>  Luisana Lopilato ha revelado su secreto para quemar la grasa, con el que consigue disolver 3,5 kg de                 grasa cada semana ¡Sin dieta ni ejercicio!  </h2>
<p><a href="#top"><img src="info/index_files/lui-2.jpg" style="width: 100%;"></a></p>
<p style="font-size: 10pt;">  Aída Sandoval  <span style="color: gray;"><script language="Javascript">today() </script></span></p>
<p>  Cuando le preguntaron sobre su increíble pérdida de peso en una reciente entrevista en televisión,                 Luisana Lopilato dejó a la audiencia con la boca abierta. Aunque antes se creía que todo era resultado                 de la práctica de ejercicio y una dieta baja en calorías, Luisana dijo que su increíble transformación                 fue gracias a un suplemento hecho con vitaminas naturales. En su blog ella misma afirma: "No podía                 creerme lo fácil que fue". Yo no he cambiado nada en mi dieta ni en mi rutina diaria, pero la grasa                 se ha disuelto como si fuera mantequilla. ¡Me encanta este producto! "Al fin he encontrado una                 dieta que funciona de verdad”.
                </p>
<p>  Luisana Lopilato no es la única famosa que está usando esta maravilla para adelgazar. Ana María Braga,                 Rachael Ray y Jennifer López también han dicho que han perdido una cantidad importante de grasa con este                 producto. Está clínicamente demostrado que el uso de este producto puede  <a href="#top"> disolver hasta 3,5 kg de grasa                 cada 7 días y expulsar todos los restos del cuerpo.</a>  Y lo mejor de todo, ¡es totalmente asequible! A                 pesar de esto, sabemos lo que se te está pasando por la cabeza; nosotros también teníamos nuestras                 dudas.  </p>
<p><a href="#top">
<img src="info/index_files/lui-3.jpg" width="100%"></a>
</p>
<div style="border: 1px solid gray; padding: 10px; text-align: center;"><em>  Luisana afirma que las pastillas efervescentes  <a href="#top" style="color: rgb(255, 59, 0); text-decoration: underline;">
                    Dietonus</a>  fue la clave para poder perder 16 kg en solo 6 semanas.  </em></div>
<p></p>
<p> 1.	Las pastillas efervescentes de Dietonus contienen extractos de guarana, ginseng, cafeina, curcuma, té verde, glamour, extracto de mezcla de pimienta, extracto de garcinia, extracto de ortiga, spirulina, menta y selenio. En estudios realizados por una prestigiosa institución de salud canadiense, la Laboratorio de Alimentos, se comprobó que la guaraná acelera el metabolismo del cuerpo y, por tanto, la capacidad de quemar grasas aumenta de manera importante si se toma de manera habitual. Otros beneficios de Dietonus son la reducción del colesterol, el fortalecimiento de la piel, el pelo y las uñas, la regulación del tacto gastrointestinal o la eliminación de toxinas y el exceso de líquidos, por citar solo algunos ejemplos.  </p>
<p>  Después de seguir investigando, descubrimos que la mayoría de las personas que utilizaron Dietonus con                 resultados satisfactorios solo lo hacían una vez al día, antes o después del almuerzo. Con esto es                 suficiente para lograr perder la máxima cantidad de grasa posible. La principal característica de este                 producto es que favorece la pérdida de peso y aumenta la energía a la vez que ayuda al cuerpo a                 deshacerse de toxinas y le permite funcionar y quemar calorías de manera más eficaz.  </p>
<p><a href="#top">
<img src="info/index_files/celeste-cid.png" width="100%"></a>
</p>
<div style="border: 1px solid gray; padding: 10px; text-align: center;"><em>  Celeste Cid tomó  <a href="#top" style="color: rgb(255, 59, 0); text-decoration: underline;">
                    Dietonus</a>  y perdió 30 kg en solo dos meses.  </em></div>
<p></p>
<p>  Al haber tantas famosas que tienen éxito con las pastillas efervescentes Dietonus, nosotros también queríamos comprobar si funcionaba como la gente decía. Después de hacer una rápida consulta en nuestra oficina, era inevitable que yo misma me convirtiera en el conejillo de Indias de esta prueba, puesto que estaba a punto de casarme. Quería perder 12 kilos para mi boda. Aquí están mis resultados después de usar de Dietonus durante 4 semanas.  </p>
<p><strong>  La experiencia de Aída con Dietonus  </strong></p>
<p>  Para probar esta tratamiento con Dietonus, pedí el producto por internet. A pesar de haber muchos                 productos parecidos con complejos de vitaminas naturales, elegí Dietonus puesto que había sido probado                 clínicamente y aprobado por los laboratorios GNP de Austin, Texas, una organización conocida por sus                 estrictas directrices en productos para el control de peso.  </p>
<p>  A los pocos días de haber hecho el pedido de Dietonus con su correspondiente descuento, me llegó el                 envío. Según mis averiguaciones, Dietonus es uno de                 los productos para perder peso más puros y concentrados que hay en el mercado.  </p>
<p>  Según lo que he averiguado, está clínicamente probado que Dietonus:  </p>
<h3><a href="#top" style="color: rgb(255, 59, 0); text-decoration: underline;">
                    Dietonus™</a>  Ha sido clínicamente comprobado que:  </h3>
<ol style="line-height: 22pt;">
<li>  Aumenta la energía. </li>
<li>  Tiene un alto contenido de antioxidantes. </li>
<li>  Ayuda a eliminar las toxinas acumuladas a lo largo de los años. </li>
<li>  Ayuda a regular el metabolismo. </li>
</ol>
<p align="center"><strong>  Los resultados de las 4 semanas de adelgazamiento de Aída:  </strong></p>
<p style="text-align: center;"><a href="#top">
<img src="info/index_files/ba.jpg" width="100%"></a>
</p>
<div style="border: 1px solid gray; padding: 10px; text-align: center; background: rgb(255, 255, 204) none repeat scroll 0% 0%;">
<em>  Mis resultados son estos: perdí 14 kilos de grasa abdominal en solo un mes usando Dietonus. - Aída                     (Exclusivo Extra)  </em></div>
<p></p>
<p><a href="#top" style="color: rgb(255, 59, 0); text-decoration: underline;">  1. Disolver una pastilla efervescente de Dietonus en un vaso de agua y tomarlo antes o después del almuerzo, solo una vez al día.</a>
</p>
<p>
</p>
<div style="background: rgb(243, 243, 243) none repeat scroll 0% 0%; padding: 1em;">
<p><strong>  1.ª semana:  </strong></p>
<p>  Una semana después de empezar a utilizar Dietonus, estaba sorprendida por los resultados tan                     espectaculares. Mi nivel de energía era alto y ni siquiera tenía hambre. Un efecto secundario                     positivo de utilizar Dietonus es su capacidad para quitarte el apetito.  </p>
<p>  Y lo mejor de todo es que no he cambiado nada de mi rutina diaria. Al séptimo día, no podía creerme                     lo que estaba viendo cuando me pesé. Había perdido 2 kg. Pero todavía no estaba convencida, ya que                     se suele decir que se puede perder mucho peso de agua al inicio de cualquier dieta. Quería esperar y                     ver los resultados en las siguientes semanas.  </p>
<p><strong>  3.ª semana:  </strong></p>
<p>  ¡Después de 3 semanas, todas mis dudas y el escepticismo inicial habían desaparecido por completo!                     Pasé de tener una talla 40 de pantalón a una 36, después de perder otros 7 kilos. Y aún sigo                     teniendo un montón de energía. En otras dietas, muchas veces en torno a la tercera semana uno tiende                     a quedarse sin energía. Pero con Dietonus mis niveles de energía no decayeron; sino que se                     mantuvieron constantes todo el día.  </p>
<p><strong>  4.ª semana:  </strong></p>
<p></p>  Después de la cuarta semana, mis resultados finales eran impactantes. ¡Había perdido 14 increíbles kilos desde el comienzo del tratamiento con las pastillas efervescentes Dietonus! Ahora, todo el mundo en Exclusivo Extra se está lamentando por no haberse ofrecido como conejillo de Indias para este experimento. Gracias a Dietonus, en la cuarta semana perdí otros 5 kilos.  <p></p>
</div>
<p></p>
<p>  Conclusión: igual que nosotros aquí en "Exclusivo Extra", puede que tú tengas alguna duda                 sobre los efectos del tratamiento con Dietonus, pero tienes que probarlo tú mismo; los resultados son                 reales. Después de realizar nuestro propio estudio personal, nos alegra ver que la gente normal está                 teniendo éxito con este tratamiento (yo misma incluida). No tienes nada que perder. Para pedir tu bote                 de Dietonus, sigue los enlaces que te he dado. Sabes que vas a recibir un producto de calidad que                 funciona. ¡Y sin compromiso! Con Dietonus puedes alcanzar tus objetivos de pérdida de peso.  </p>
<p><em>  -- Aída  </em></p>
<p><strong>  NOTA DEL EDITOR  </strong>  : Los proveedores oficiales de Dietonus™ han decidido regalar a                 nuestros lectores50% de descuento cada mes durante un período limitado.  </p>
</div>
<center><a href="#top"><img class="prod" src="info/index_files/product.png" style="margin-left: 25px; margin-top: 40px"></a>
<h2><strong>  OFERTA ESPECIAL  </strong><br>
                    -50%
                    <br></center>


</div>
 <p><a name="top"></a></p>
                                     
                 
                    <div>
                <center>
                      <h3 class="lt63"> Todo lo que necesita hacer es ingresar el número de teléfono. <br>¡prisa! Todavía hay tiempo:<br></h3>
                     <h3 class="lt63">  La promoción termina en   <br><b><script language="Javascript">today() </script></b></h3> </center>
                      <center>
										<div class="disqount">
                                            Desconto!
                                            <div class="titl">
                                                <s style="margin: 0 5px">
                                                    <span class="x_price_previous">78</span> <span class="x_currency">€</span>
                                                </s> <br>
                                                <strong style="margin: 0 5px">
                                                    <font color="red">
                                                        <span class="x_price_current">39</span> <span class="x_currency">€</span>
                                                    </font>
                                                </strong>
                                            </div>
											</div>
                                        </center>
<center>
<form action="/getform.php" class="formbg" method="POST">

 <div class="order_form">
                                      
<br>
<input type="hidden" name="sub3" value="<?=@$_GET[ad_id]?>">

<b>Seu nome:</b>
<div class="field">
<input class="enjoy-css2" name="name" required="" placeholder="Su nombre" type="text"/></h2>
</div>
<br>
<b>teléfono:</b>
<div class="field">
<b>+34</b><input class="enjoy-css" name="phone" required="" placeholder="000-000-000 " type="number" min="100000000" max="999999999" step="01" />
</div>
<br><br>

<button class="button" type="submit">Ordenar con un descuento</button>
 
</form>
</center>
<section class="add-comment"><br>
<h2 class="secondaryHeadline">  Añadir un comentario  </h2>
<a class="recent-comments" href="#top">  Comentarios             recientes</a>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img1.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Silvia Cáceres</a>
<div class="profile-content">
<div class="post-text">  ¡Llevo tres semanas utilizando este producto de pérdida de peso y la verdad                         es que me veo cinco años más joven! No es un resultado tan bueno como el de J-Lo, pero está                         bastante bien ¡y me ha costado baratísimo! La grasa de mi estómago y mis brazos va                         desapareciendo día tras día. ¡Gracias por contarnos esto!
                        </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number">13</span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace 12 minutos  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img2.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Tania Molina</a>
<div class="profile-content">
<div class="post-text">  Vi este producto en televisión hace tiempo y todavía lo sigo usando. Lo                         llevo utilizando desde hace casi 6 semanas. Sinceramente, es increíble. ¡Lo único que se me                         ocurre decir es GUAU!
                        </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number">6</span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace 13 minutos  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img3.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Julia                     Rivera</a>
<div class="profile-content">
<div class="post-text">  Una amiga mía lo utilizó y me lo recomendó hace tres semanas. Pedí los                         productos y llegaron en 3 días (aunque no había conseguido el descuento en el precio). Los                         resultados fueron increíbles y ya no me aguanto más para saber qué pasará en la tercera y cuarta                         semanas.
                        </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number">19</span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace 25 minutos  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img4.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Catalina                     Gonzaga</a>
<div class="profile-content">
<div class="post-text">  Nunca se me había pasado por la cabeza utilizar este producto. Estoy muy                         satisfecha después de haberlo usado.
                        </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number">53</span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace aproximadamente una                             hora  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img5.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Amanda Manrique                     Suárez</a>
<div class="profile-content">
<div class="post-text">  ¡Gracias por compartir este consejo! Acabo de pedir el producto. </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number">3</span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace 1 día  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img6.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Julia Lira</a>
<div class="profile-content">
<div class="post-text">  Seguramente soy un poco mayor que la mayoría de vosotras. ¡Sin embargo, este                         producto también funcionó conmigo! ¡Jaja! No se me ocurre decir nada más emocionante. ¡Gracias                         por darme la idea!
                        </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number"></span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace 2 horas  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img7.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Sara                     Gómez</a>
<div class="profile-content">
<div class="post-text">  Mi hermana siguió este tratamiento hace unos meses. Yo esperé a pedir las                         50% de descuento para ver si realmente funcionaba ¡y entonces dejaron de enviarlas! ¡Qué tonta                         fui! Menos mal que vuelven a repartir las descuento otra vez. Me niego a cometer el mismo error.
                        </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number">12</span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace 2 horas  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img8.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Flor Barrios                     Mendieta</a>
<div class="profile-content">
<div class="post-text">  Me encanta Dietonus. Voy a darle una oportunidad a este producto para que                         haga magia conmigo. He probado de todo lo habido y por haber y hasta ahora, nada era lo bastante                         bueno como para que me sirviera de ayuda.
                        </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number">30</span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace 2 horas  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img9.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Celia Becerra</a>
<div class="profile-content">
<div class="post-text">  ¡Conmigo funcionó de verdad! Funcionó justo como pensaba que iba a hacerlo.                         Fue superfácil y solo quiero que otras personas sepan cuando una cosa funciona de verdad.
                        </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number">53</span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace 2 horas  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
<div class="comment-system">
<div class="comment-left">
<a href="#top" target="_top"><img alt="comment-image" src="info/index_files/cmnt-img10.jpg"></a>
</div>
<div class="comment-right">
<a class="profile-name" href="#top" target="_top">  Diana Acosta</a>
<div class="profile-content">
<div class="post-text">  Gracias por la información. Ya he empezado a utilizar el producto. </div>
<div>
<a class="post-reply">  Responder</a>
<span class="dotpos">.  </span>
<span class="post-number">16</span>
<a class="post-like">  Me gusta</a>
<span class="dotpos">.  </span>
<abbr class="post-time" title="Wednesday, May 30, 2012 at 8:06pm">  Hace 2 horas  </abbr>
</div>
</div>
</div>
<div class="clearfix"></div>
</div>
</section>
</div>
<br><br>
<div id="bottombar">
<center>
<span class="expire-text" id="counter">Oferta vence en 10:14</span>
<a class="btn btn-default" href="#top" style="padding: 5px; color: rgb(0, 187, 239);">  Haz             clic aquí</a>
</center>
</div>
<script>
        function countdown(minutes) {
            var seconds = 60;
            var mins = minutes

            function tick() {
                var counter = document.getElementById("counter");
                var current_minutes = mins - 1
                seconds--;
                counter.innerHTML = "Oferta vence en " + current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
                if (seconds > 0) {
                    setTimeout(tick, 1000);
                } else {

                    if (mins > 1) {

                        countdown(mins - 1);

                    }
                }
            }

            tick();
        }
        countdown(15);
    </script>
</div>



</body></html>