
  

 <div class ="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">
                    <h3>{{session('status')}}</h3>
                    </div>
                @endif
                <div class="card-header">
                    <h4>Edit Categories
                        <a href="{{ url('categories')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                <div>
            </div>
        </div>
            <div class="card-body">
                <form action="<?=route('update',$category->id)?>" method="POST">
                        @csrf
                    
                        <div class="mb-3">
                            <label >Title</label>
                            <input type="text" name="title" value="{{$category->title}}">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form=control" rows="2">{{$category->description}}</textarea>
                             @error('description')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                </form>
            </div>
    </div>    
   
 
   
   
     
 