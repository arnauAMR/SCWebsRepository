<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Webs Clientes SC</title>
</head>

<body>
    <div class="container mt-3">
        <h2 class="h2 mb-5">Editar web</h2>
        <h6 class="h6">Modifica los datos de la web seleccionada.</h6>
        <div class="container">
            <form method="POST" action="/actualizar-web/{{ $web->id }}">
                @csrf
                {{-- @method('put') --}}
                <div class="row mt-3">
                    <label class="col-sm" for="cliente">Cliente</label>
                    <input class="col-sm" type="text" name="cliente" class="form-control" id="cliente"
                        value="{{ $web->cliente }}" />
                    <label class="col-sm" for="url">URL</label>
                    <input class="col-sm"" type=" text" name="url" class="form-control" id="url"
                        value="{{ $web->url }}" />
                </div>
                <div class="row mt-2">
                    <label class="col-sm" for="abreviacion">Abreviación</label>
                    <input class="col-sm" type="text" name="abreviacion" class="form-control" id="abreviacion"
                        value="{{ $web->abreviacion }}" />
                    <label class="col-sm" for="url">Estado</label>
                    <input class="col-sm" type="text" name="estado" class="form-control" id="estado value="
                        {{ $web->estado }}" />
                </div>
                <button class="btn btn-info mt-4" type="submit">Actualizar</button>
            </form>
        </div>
    </div>
</body>

</html>
