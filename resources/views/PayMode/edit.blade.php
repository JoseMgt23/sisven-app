<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paymode</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Paymode</h1>
        <form method="POST" action="{{ route('paymodes.update', ['paymode' => $paymode->id_paymode]) }}">
            @method('PUT')
            @csrf
            <div class="mb-3">
            <label for="id" class="form-label">Code</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name ="id" disable="disable"
            value="{{$paymode->id_paymode}}">
            <div id="idHelp" class="form-text">PayMode Code</div>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre del Paymode" value="{{ $paymode->name }}" required>
            </div>
            <div class="mb-3">
                <label for="observation" class="form-label">Observación</label>
                <textarea class="form-control" id="observation" name="observation" placeholder="Ingrese una observación para el Paymode">{{ $paymode->observation }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('paymodes.index') }}" class="btn btn-warning">Cancelar</a>
        </form>
    </div>
</body>
</html>
