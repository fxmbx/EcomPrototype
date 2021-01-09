@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Edit Product
                </div>
                <div class="card-body">
                    @if (Session::has('product_update'))
                        <div class="alert alert-success">
                           {{Session::get('product_update')}}
                        </div>
                    @endif
                    <form enctype="application/x-www-form-urlencoded" method="POST" action="{{route('product.update', [$prod->id])}} " >
                        <input type="hidden" name="_method" value="PUT">
                        @csrf
                          <div class="mb-3">
                              <label for="name">Product Name</label>
                              <input type="text" name="name" class="form-control" value="{{$prod->name}}"/>
                          </div>  
                          <div class="mb-3">
                              <label for="description" class="form-control">Product Description
                            </label>
                                  <textarea name="description" class="form-control" id="body" cols="30" rows="10">{{$prod->description}}</textarea>
                          </div>
                          <div class="mb-3">
                            <label for="category">Product Category</label>
                            <input type="text" name="category" class="form-control" value="{{$prod->category}}"/>
                       </div>  
                        <div class="mb-3">
                            <label for="gallery">Product image Url</label>
                            <input type="text" name="gallery" class="form-control" value="{{$prod->gallery}}"/>
                            <p>imagepreview</p>
                            <img src="{{$prod->gallery}}" alt="" style="max-height: 70px;">
                        </div>  
                        <div class="mb-3">
                            <label for="price">Product price</label>
                            <input type="text" name="price" class="form-control" value="{{$prod->price}}"/>
                        </div>
 
                            <input type="submit" value="Update" class="btn btn-success">
                            <a href="/products" class="btn btn-primary" style="float:right";>Back</a>  <span>  </span>
                            <a href="/delete/{{$prod->id}}" class="btn btn-danger" style="";>Delete</a> 
                     </form>

                </form>  
                </div>
            </div>
        </div>
        <script> 
            tinymce.init({
                selector:'#body'
            });
        </script>
    </div>
</div>
    
@endsection