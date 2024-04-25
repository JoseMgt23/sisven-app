<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Detalle</title>
</head>
<body>
    <div class="container">
        <h1>Agregar Detalle</h1>
        <form method="POST" action="{{ route('details.store') }}">
            @csrf
            <div class="mb-3">
            <label for="id" class="form-label">Code</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name ="id" disable="disable">
            <div id="idHelp" class="form-text">Details Code</div>
            </div>
            <div class="mb-3">
                <label for="invoice_id" class="form-label">ID de Factura</label>
                <input type="text" class="form-control" id="invoice_id" name="invoice_id" placeholder="Ingrese el ID de la factura" required>
            </div>
            <div class="mb-3">
                <label for="product_id" class="form-label">ID de Producto</label>
                <input type="text" class="form-control" id="product_id" name="product_id" placeholder="Ingrese el ID del producto" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Ingrese la cantidad" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Ingrese el precio" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('details.index') }}" class="btn btn-warning">Cancelar</a>
        </form>
    </div>
</body>
</html>