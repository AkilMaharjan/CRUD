
   {{-- <x-slot name="title" >
   Add Categories 
   </x-slot> --}}


 <div class ="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">
                    <h3>{{session('status')}}</h3>
                    </div>
                @endif
                <div class="card-header">
                    <h4>Add Categories
                        <a href="{{ url('categories')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                <div>
            </div>
        </div>
            <div class="card-body">
                <form action="{{url('categories/create')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label >Title</label>
                            <input type="text" name="title" value="{{old('name')}}">
                            @error('title')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form=control" rows="2">{{old('description')}}</textarea>
                             @error('description')
                            <span class="text-danger">{{$message}}</span>
                                
                            @enderror
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                </form>
            </div>
    </div>    
   
 
   
   
     
 