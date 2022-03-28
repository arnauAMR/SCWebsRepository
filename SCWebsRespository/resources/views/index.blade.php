<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Webs Clientes SC</title>
</head>

<body>
    <div class="container mt-3">
        <h2 class="h2">Webs de clientes SC</h2>


        <h6 class="h6 mt-5">Listado de las webs de los clientes de Sayos Carrera.</h6>
        <h2><a class="btn btn-primary col-md-2" type="button" href="/nueva-web"><i class="fa fa-plus-square"
                    style="margin-right: 5%"></i>Nueva web</a></h2>

        <table id="example" class="table table-hover table-striped align-middle mb-0 mt-3 bg-white">

            <thead class="bg-light">
                <tr>
                    <th>Cliente</th>
                    <th>URL</th>
                    <th>Abreviación</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($webs as $web)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                {{-- <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt=""
                                style="width: 45px; height: 45px" class="rounded-circle" /> --}}
                                <div class="ms-3">
                                    <p class="">{{ $web->cliente }}</p>
                                    {{-- <p class="text-muted mb-0">john.doe@gmail.com</p> --}}
                                </div>
                            </div>
                        </td>

                        <td>
                            <a href="{{ $web->url }}" target="_blank" class="link-primary">{{ $web->url }}</a>
                            {{-- <p class="text-muted mb-0">IT department</p> --}}
                        </td>

                        <td>
                            <p class="fw-bold mb-1">{{ $web->abreviacion }}</p>
                        </td>

                        <td id="estado">
                            <span class="badge badge-success rounded-pill d-inline">{{ $web->estado }}</span>
                        </td>

                        <td>
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="/editar-web/{{ $web->id }}"
                                        class="btn btn-secondary btn-sm btn-rounded"><i
                                            class="fa fa-edit"></i>Editar</a>
                                </div>
                                <div class="col-md-3">
                                    <form method="post" action="/borrar-web/{{ $web->id }}">
                                        @csrf
                                        {{-- @method('delete') --}}
                                        <button type="submit" class="btn btn-danger btn-sm btn-rounded"><i
                                                class="fa fa-trash"></i>Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
