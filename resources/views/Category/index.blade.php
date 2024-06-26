<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Category</title>
  </head>
  <body>
    <h1>Listado de Category</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Crear nuevo Paymode</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($categories as $category)
    <tr>
      <th scope="row">{{$category->id_categories}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->description}}</td>
      <td>
        <a href="{{route('categories.edit',['category'=>$category->id_categories])}}"
        class="btn btn-info">Edit</a></li>
        <form action="{{route('category.destroy',['category'->$category->name])}}"
        method='POST' style="display: inline-block">
        @method('delete')
        @crsf
        <input class="btn btn-danger" type="submit" value="Delete">    
    </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </body>
</html>