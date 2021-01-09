@extends('layouts.app') 
@section('content')
    <div class="container-fluid " style="height: 600px;margin:">
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                  <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    @foreach ($prod as $item)
                        
                    <div class="carousel-item {{$item->id == 1 ? 'active': ''}}">
                    <a href="/products/{{$item->id}}">
                        <img class="slider_img" src="{{$item->gallery}}"  alt="{{$item->name}}" style=" vertical-align: middle;
                        border-style: none;
                        width: 100%;
                        height: 400px;
                        max-width: 828px;">
                    </a>
                        <div class="carousel-caption d-none d-md-block slider">
                        <h5>{{$item->name}}</h5>
                        <p>{{$item->description}}</p>
                      </div>
                    </div>
                        @endforeach
                    
                </div>
                <a style="background-color" class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </a>
              </div>
              <br><br><hr style="color:red;">
             <div class="btn center">  People are Loving these </div>  
              <br> <hr>

           
              @foreach ($prod as $item)     
                <div class="card" style="width:18rem; padding:20px; margin:20px; text-align:center;">
                  <img class="image" src="{{$item->gallery}}"  alt="{{$item->name}}" >
                  
                  <div class="card-body">
                  <a href="/products/{{$item->id}}">   
                    <p class="card-text"> {{$item->name}} </p>
                  </a>
                  <p class="card-text"> {{$item->category}} </p> 
                  </div>
                </div>
                @endforeach
                  

        </div>
    </div>
@endsection