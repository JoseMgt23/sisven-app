<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Cliente</title>
</head>
<body>
    <div class="container">
        <h1>Editar Cliente</h1>
        <form method="POST" action="{{ route('customers.update', ['customer' => $customer->id]) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
            <label for="id" class="form-label">Code</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name ="id" disable="disable"
            value="{{$customer->id_customers}}">
            <div id="idHelp" class="form-text">Customers Code</div>
            </div>
            <div class="mb-3">
                <label for="first_name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Ingrese el nombre" value="{{ $customer->first_name }}">
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Ingrese el apellido" value="{{ $customer->last_name }}">
            </div>
            <div class="mb-3">
                <label for="document_number" class="form-label">Número de Documento</label>
                <input type="text" class="form-control" id="document_number" name="document_number" value="{{ $customer->document_number }}" disabled>
                <div id="idHelp" class="form-text">Número de Documento del Cliente</div>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Ingrese la dirección" value="{{ $customer->address }}">
            </div>
            <div class="mb-3">
                <label for="birthday" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Ingrese la fecha de nacimiento" value="{{ $customer->birthday }}">
            </div>
            <div class="mb-3">
                <label for="phone_number" class="form-label">Número de Teléfono</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Ingrese el número de teléfono" value="{{ $customer->phone_number }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo electrónico" value="{{ $customer->email }}">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('customers.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>