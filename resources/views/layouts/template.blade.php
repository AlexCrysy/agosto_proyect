<!--esto es un html5-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Alex @yield("title")</title><!--esto es para cambiar el nombre de la pagina o link,se copia en las vistas-->
</head>
<body>

<!--comienzo del navbar-->

<!--este es el menu de la pagina o de navegacion-->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="inicio">inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca">acerca</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacto">contacto</a>   
                                    <!--se escribe en ambas como las llame para pasarlas en la pagina al seleccionar-->
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><!--es para dar un salto de linea en la pagina o separar el texto-->
<p>texto adic lado izq</p>
<!--end navbar-->

<!--comienzo de un fluid o el menu-->
<div class="container fluid">
<div class="row">    <!--el bd-danger es para el color del texto en la pagina eje bg-primary bg- bg- etc -->
<div class="col-md-3 bg-danger">    <!--el 3 es porq se utilizan tres partes de la pagina web-->
    sidebar o menu de navegacion de la pagina <!--este tex del cost izq es para el contenido de navegacion del lado izquierdo de la pagina-->
  <ul class="list-group">
  <li class="list-group-item active" aria-current="true"> andre </li>
  <li class="list-group-item"     >pedro  </li>
  <li class="list-group-item"     >leonar </li>
  <li class="list-group-item"     >mary   </li>
  <li class="list-group-item"     >stefany</li>
</ul>
<br>
</div>                  <!--el bd-danger es para el color del texto en la pagina eje bg-primary bg-? bg-? etc -->
<div class="col-md-9  bg-dange">    <!--el 9 es porq se utilizan nueve partes de la pagina web-->
<h1>contenido para titulo</h1>  <!--este contenido es para el contenido del centro de la pagina en titulo-->
<p>esto es del espacio para el contenido</p>

@yield("vistas otras")  <!--es el codigo para las nuevas vistas -->
               <!--para que salga todo lo que hay aca en la vista que quiero que salga-->

</div> 
</div>
</div> <!--estos div son para que se amplie el espacio hacia abajo-->
</div>
<!--end del fluid o menu en la pagina-->


 <!--comienzo del footer--> 

<footer> texto 1               <!--1 ejemplo se puede solo texto con flooter-->
<p> texto 1.1 </p>                  
</div>                                                                 

<footer>                         <!--2 ejemplo se puede solo texto con flooter 2 ejemplo-->
<p> texto 2 </p>
</div>

<footer class="bg-danger">       <!--el bg-COLORES lo puedo colocar en cualquiera de los ejemplos debo quitar (>)en footer-->
<div class="container-fluid">    <!--3 ejemplo se puede solo codigo (.container-fluid) y texto (p) con flooter-->
<p>texto 3</p>
</div>                                      <!--el .container-fluid le da espacio desde la izquierda hacia la derecha en la pagina-->

<footer> texto 4
<div class="container-fluid">    <!--4 ejemplo se puede solo codigo (.container-fluid) y textos (p) con flooter-->
<p>texto 4.4</p>
</div>    
    </footer>
    

</body>
</html>