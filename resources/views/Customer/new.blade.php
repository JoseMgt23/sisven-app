<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Cliente</title>
</head>
<body>
    <div class="container">
        <h1>Agregar Cliente</h1>
        <form method="POST" action="{{ route('customers.store') }}">
            @csrf
            <div class="mb-3">
            <label for="id" class="form-label">Code</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name ="id" disable="disable">
            <div id="idHelp" class="form-text">Custmoers Code</div>
            </div>
            <div class="mb-3">
                <label for="first_name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ingrese el nombre" required>
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ingrese el apellido" required>
            </div>
            <div class="mb-3">
                <label for="document_number" class="form-label">Número de Documento</label>
                <input type="text" class="form-control" id="document_number" name="document_number" placeholder="Ingrese el número de documento" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Ingrese la dirección">
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Ingrese la fecha de nacimiento">
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Número de Teléfono</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Ingrese el número de teléfono">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo electrónico">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('customers.index') }}" class="btn btn-warning">Cancelar</a>
        </form>
    </div>
</body>
</html>