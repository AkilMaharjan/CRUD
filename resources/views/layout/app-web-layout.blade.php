<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Categories'}} </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 <div class ="container mt=5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header">
                    <h4>Categories
                        <a href="{{ url('categories/create')}}" class="btn btn-primary float-end">Add Category</a>
                    </h4>
                <div>
            </div>
            <div class="card-body">
            {{-- <form action="{{url('categories/create')}}" method="POST">

                        <div class="mb-3">
                            <label >Title</label>
                            <input type="text" name="name" value="{{old('name')}}">
                        </div>

                        <div class="mb-3">
                            <label >Description</label>
                            <textarea name="description" class="form=control" rows="2">{{old('description')}}</textarea>
                        </div>

                </form> --}}
        </div>
    </div>
   
   
   
   
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>