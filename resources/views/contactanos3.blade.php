@extends("layouts.template")

@section("vistas otras")<!-- cada vez que escriba algo en la vista aparecera en la otra vista template--> 

<h1>nuevo comentario</h1>
<p>texto nuevo</p>

@endsection  <!-- es para cerrar el yield o los comentarios de h1 y p-->

<h1>contactanos </h1>

@section ("title","contacto-web")  <!--cambiar el nombre de la pagina o link,se copia en las vistas-->