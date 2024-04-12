
  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Categories'}} </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
 <div class ="container mt-4" >
        <div class="row " >
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">
                    <h3>{{session('status')}}</h3>
                    </div>
                @endif
                <div class="card-header ">
                    <h4>Add Categories
                        <a href="{{ url('products')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                <div>
            </div>
        </div>
            <div class="card-body">
                <form action="{{url('categories/create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label >Title</label><br>
                            <input type="text" name="title" value="{{old('name')}}">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Description</label><br>
                            <textarea name="description" class="form=control" rows="1">{{old('description')}}</textarea>
                             @error('description')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label >Image</label><br>
                            <input type="file" name="image" class="form-control" value="{{old('image')}}">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>


                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                </form>
            </div>
    </div>    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>
 
   
   
     
 