<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Editar Detalle</title>
</head>
<body>
    <div class="container">
        <h1>Editar Detalle</h1>
        <form method="POST" action="{{ route('details.update', ['detail' => $detail->id_detail]) }}">
            @method('PUT')
            @csrf
            <label for="id" class="form-label">Code</label>
            <input type="text" class="form-control" id="id" aria-describedby="idHelp" name ="id" disable="disable">
            <div id="idHelp" class="form-text" value="{{$detail->id_detail}}">Details Code</div>
            </div>
            <div class="mb-3">
                <label for="invoice_id" class="form-label">ID de Factura</label>
                <input type="text" class="form-control" id="id_invoices" name="invoice_id" placeholder="Ingrese el ID de la factura" value="{{ $detail->id_invoices }}">
            </div>
            <div class="mb-3">
                <label for="product_id" class="form-label">ID de Producto</label>
                <input type="text" class="form-control" id="id_products" name="product_id" placeholder="Ingrese el ID del producto" value="{{ $detail->id_products }}">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Cantidad</label>
                <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Ingrese la cantidad" value="{{ $detail->quantity }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Precio</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Ingrese el precio" value="{{ $detail->price }}">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('details.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>