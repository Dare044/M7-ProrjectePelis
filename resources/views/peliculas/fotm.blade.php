
<label for="Nombre">Nombre</label>
    <input type="text" name="Nombre" value="{{ $pelicula->Nombre }}" id="Nombre">
    <br>

<label for="Prouctora">Productora</label>
    <input type="text" name="Productora" value="{{ $pelicula->Productora }}" id="Productora">
    <br>

 <label for="Genero">Genero</label>
    <input type="text" name="Genero" value="{{ $pelicula->Genero }}" id="Genero">
    <br>

<label for="Descripción">Descripción</label>
    <input type="text" name="Descripción" value="{{ $pelicula->Descripción }}" id="Descripción">
    <br>

    <input type="submit" value="Enviar">
    <br>