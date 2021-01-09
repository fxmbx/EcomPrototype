@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            
        <div class="col-md-8 offset-md-2">

            <div class="card">
                <div class="card-header">
                   {{auth()->user()->name."'s cart"}}
          {{-- <a href="#" class="btn btn-sm btn-danger"  style="float:right;  ">Empty cart</a> --}}

                </div>
              <br>
               <a href="/order" class="btn btn-sm btn-secondary"  style="margin-left:20px; width:5rem;">buy now!</a>
                
               @foreach ($prod as $item)
                <div class="boxlol" style="float:inline-end; " >
                  <table>
                      <tr>
                          <td>

                          
                    <div class=" card" style="width:18rem; padding:20px; margin:20px; text-align:center;">

                      <img class="image" src="{{$item->gallery}}"  alt="{{$item->name}}" >
                          </td>
                      <td style="">

                      <div class="card-body">
                        <a href="/products/{{$item->id}}">   
                          <p class="card-text"> {{$item->name}} </p>
                        </a>
                        <p class="card-text"> {{$item->price}} </p> 
                      </div>
                      
                    </div>
                    <a href="/remove/{{$item->cartid}}" class="btn btn-sm btn-warning" role="button" style="float:"> Remove item</a>

                  </td>
                    
                  
                </tr>
                  </table>
              </div>
                
                
                <hr>
                @endforeach
               <a href="/order" class="btn btn-sm btn-secondary"  style="margin:20px; margin-top:0; width:5rem;">buy now!</a>


            </div>
    </div>
        </div>
            </div>
        </div>
        

@endsection