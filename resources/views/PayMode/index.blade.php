<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Paymodes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Listado de Paymodes</h1>
        <a href="{{ route('paymodes.create') }}" class="btn btn-primary">Crear nuevo Paymode</a>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Observation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($paymodes as $paymode)
                <tr>
                    <td>{{ $paymode->id_paymode }}</td>
                    <td>{{ $paymode->name }}</td>
                    <td>{{ $paymode->observation }}</td>
                    <td>
                        <a href="{{ route('paymodes.edit', $paymode->id_paymode) }}" class="btn btn-info">Edit</a>
                        <!-- Agrega el formulario de eliminación aquí -->
                        <form action="{{ route('paymodes.destroy', $paymode->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>