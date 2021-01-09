@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Search Result
                    </div>
                    <div class="card-body">
                        @foreach ($prod as $item)
                
                        <div class="card" style="width:100%; padding:20px; margin:20px; text-align:center;">
                          <img class="image" src="{{$item->gallery}}"  alt="{{$item->name}}" >
                          
                          <div class="card-body">
                          <a href="/products/{{$item->id}}">   
                            <p class="card-text"> {{$item->name}} </p>
                          </a>
                          <p class="card-text"> {{$item->category}} </p> 
                          <p class="card-text"> {!!$item->description!!} </p> 
                          </div>
                        </div>
                        
                        
                        
                        @endforeach

                    </div>
                </div>
        </div>
    </div>
</div>
    
@endsection