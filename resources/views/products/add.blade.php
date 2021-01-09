@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Add Product
                </div>
                <div class="card-body">
                    @if (Session::has('product_added'))
                        <div class="alert alert-sucess">
                            <? echo Session::get('product_added')?>
                        </div>
                    @endif
                    <form method="POST" action="{{route('product.store')}} " >
                        @csrf
                          <div class="mb-3">
                              <label for="name">Product Name</label>
                              <input type="text" name="name" class="form-control" placeholder="Enter product name"/>
                          </div>  
                          <div class="mb-3">
                              <label for="description" class="form-control">Product Description
                            </label>
                                  <textarea name="description" class="form-control" id="body" cols="30" rows="10"></textarea>
                          </div>
                          <div class="mb-3">
                            <label for="category">Product Category</label>
                            <input type="text" name="category" class="form-control" placeholder="Enter product category"/>
                       </div>  
                        <div class="mb-3">
                            <label for="gallery">Product image Url</label>
                            <input type="text" name="gallery" class="form-control" placeholder="Enter product Url , URL ONLY!"/>
                        </div>  
                        <div class="mb-3">
                            <label for="price">Product price</label>
                            <input type="text" name="price" class="form-control" placeholder="Enter product price"/>
                        </div>
 
                            <input type="submit" value="Submit" class="btn btn-success">
                            <a href="/products" class="btn btn-primary" style="float:right";>Back</a> 
                     </form>

                </form>  
                </div>
            </div>
        </div>
    </div>
</div>
<script> 
    tinymce.init({
        selector:'#body'
    });
</script>
    
@endsection