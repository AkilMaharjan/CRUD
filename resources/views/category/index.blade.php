<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Categories'}} </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   <div class ="container mt-2">
         <div class="row">
               <div class="col-md-12">
                  <div class="card-header">
                     <h4>Categories
                           <a href="{{ url('categories/create')}}" class="btn btn-primary float-end">Add Category</a>
                     </h4>
                  <div>
               </div>
               <div class="card-body">
               
               <table class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody> 
                     @foreach ($categories as $item)
                        <tr>
                           <td>{{$item->id}}</td>
                           <td>{{$item->title}}</td>
                           <td>{{$item->description}}</td> 
                           <td>
                              <img src="{{ asset('assets/' . $item->image) }}"  width="50" height="50" > 
                           </td>
                           <td>
                              <a href="{{url('categories/'.$item->id.'/edit')}}" class="btn btn-success mx-2">Edit</a>
                              <a href="{{url('categories/'.$item->id.'/delete')}}" class="btn btn-danger mx-1">Delete</a>
                           </td>
                        </tr>
                        
                     @endforeach
                  </tbody>
               </table>
            
            </div>
         </div>  
      </div>
      
      
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>