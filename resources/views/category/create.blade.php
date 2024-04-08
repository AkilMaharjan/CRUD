<x-app-web-layout>
   <x-slot name="title" >
   Add Categories 
   </x-slot>
</x-app-web-layout>

 <div class ="container mt=5">
        <div class="row">
            <div class="col-md-12">
                <div class="card-header " >
                    <h4>Add Categories
                        <a href="{{ url('categories')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                <div>
            </div>
            <div class="card-body">
                <form action="{{url('categories/create')}}" method="POST">

                        <div class="mb-6">
                            <label >Title</label>
                            <input type="text" name="name" value="{{old('name')}}">
                        </div>

                        <div class="mb-3">
                            <label>Description</label>
                            <textarea name="description" class="form=control" rows="2">{{old('description')}}</textarea>
                        </div>
                        <div>
                            <button name="submit">Submit</button>
                        </div>

                </form>
            </div>
        </div>
    </div>    
   
 
   
   
     
 