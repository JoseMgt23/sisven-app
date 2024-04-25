<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar Category</title>
  </head>
  <body>
    <h1>Agregar Category</h1>
    <form method="POST" action="{{ route('categories.update', ['category' => $category->id_categories]) }}">
    @method('PUT')
    @crsf
  <div class="mb-3">
    <label for="id" class="form-label">Code</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name ="id" disable="disable"
    value="{{$category->id_categories}}">
    <div id="idHelp" class="form-text">Category Code</div>
  </div>
  <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter category name" 
        value="{{$category->name}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" placeholder="Enter category description"
        value="{{$category->description}}"></textarea>
    </div>
    <div class="mt-3">
  <button type="submit" class="btn btn-primary">Save</button>
  <a href="{{route('category.index')}}" class="btn btn-warning">Cancel</a>
  </div>
</form>
  </body>
</html>