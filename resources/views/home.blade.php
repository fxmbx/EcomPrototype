@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 80px">
    <div class="row justify-content-center">
        <div class="col-md-8">
 
            <div class="card"  style="text-align: center; ">
                <div class="card-header "><h1>Welcome to ShoppingSpri</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>you are a user so thats good lol i dont know what to say </p> <sub>but here are some buttons for stuff</sub><br>
                 <a href="/products" class="btn btn-sm btn-secondary" style="background-color:#1a0a00;">what we have </a>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
