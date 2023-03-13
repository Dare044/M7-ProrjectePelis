Formulario de creacion de peliculas

<form action="{{ url('/peliculas')}}" method="post" enctype="multipart/form-data">

@csrf
@include('peliculas.fotm');

</form>