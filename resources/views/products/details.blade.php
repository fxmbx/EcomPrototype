@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2" style="padding-top: 60px">
         
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>{{$prod->name}}</th>
                                @if (Auth::user())
                                    
                                <a href="/edit/{{$prod->id}}" class="btn btn-sm btn-primary" style="float:right; background-color:#1a0a00;">Edit</a>  <span>  </span>
                                @endif
                            
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{$prod->gallery}}"  alt="{{$prod->name}}" style="height:75%; width:18rem;">
                                </td>
                                <td>Name: {{$prod->name}} <br><br>
                                    <hr>
                                    <b>Price: {{$prod->price}}</b><br><br>
                                    <hr>
                                    Description:  {!!$prod->description!!}<br> <br>
                                    Category: {{$prod->category}} <br><br>
                                    <a href="/order" class="btn btn-sm btn-success" role="button" style="width: %">Buy Now</a> <br> <br>

                                    <form action="/addtocart" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$prod->id}}">
                                        <button  class="btn btn-sm btn-success">Add To Chart </button> 
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    
                        <div class="card">
                            <div class="card-header">
                                Product details
                            </div>
                            <div class="card-body">
                               {{$prod->description}}
                               <hr>Lorem Ipsum is simply dummy text of the printing and 
                               typesetting industry. Lorem Ipsum has been the industry's 
                               standard dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specimen
                                 book. It has survived not only five centuries, but also the leap
                                  into electronic typesetting, remaining essentially unchanged. 
                                  It was popularised in the 1960s with the release of Letraset 
                                  sheets containing Lorem Ipsum passages, and more recently with 
                                  desktop publishing software like Aldus PageMaker including
                                   versions of Lorem Ipsum.
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                Specifications
                            </div>
                            <div class="card-body">
                                <table>
                                    <div class="card">
                                        <thead>
                                            <tr>
                                                <th><div class="card-header" style="width: 100%">
                                                Key features    
                                                </div></th>
                                                <th><div class="card-header" style="width: 100%">
                                                    Specification    
                                                </div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="card-body">
                                                        <ul>
                                                            <li></li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td><div class="card-body">
                                                    <ul>
                                                        <li></li>
                                                    </ul>
                                                </div></td>
                                            </tr>
                                        </tbody>
                                    </div>
                                </table>
                            </div>
                              
                            
                        </div>
                         
                
            
        </div>
    </div>
</div>
    
@endsection