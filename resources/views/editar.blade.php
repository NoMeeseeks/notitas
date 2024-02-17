<!DOCTYPE html>
<html>
<heade>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </header>

    <body>
        <div class="container">
            <div class="row">
                <h1>Edita tu notita</h1>
                <a type="button" class="btn btn-secondary" href="{{ route('notas.index') }}">Regresar</a>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <form action="{{route('notas.update',$notas->id)}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Titulo</label>
                        <input type="text" class="form-control"
                            placeholder="Crea un titulo" name="titulo" value="{{ $notas->titulo }}">
                    </div>
                    <div class="mb-3">
                        <label for="formGroupExampleInput2" class="form-label">Subtitulo</label>
                        <input type="text" class="form-control"
                            placeholder="Crea un subtitulo" name="subtitulo" value="{{ $notas->subtitulo }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
                        <textarea class="form-control" rows="3" name="descripcion" >{{ $notas->descripcion }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>

        </div>
    </body>

</html>
