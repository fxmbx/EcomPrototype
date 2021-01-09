@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Pending orders
                    </div>
                    <div class="card-body">
                       <table class="table">
                           <thead>
                               <tr>
                                   <th>Product </th>
                                   <th>Payment Method</th>
                                   <th>Status</th>
                                   <th>Payment Status</th>
                                   <th>Address</th>
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($pends as $item)
                                    <tr>
                                        <td>{{$item->name}} <br><span>   
                                                          <img src="{{$item->gallery}}" alt="" style="max-height: 70px;">
                                        </span>
                                        </td>    
                                        <td>{{$item->paymentMethod}}</td>
                                        <td>{{$item->status}}</td>
                                        <td>{{$item->paymentStatus}}</td>
                                        <td>{!!$item->Address!!}</td>
                                    </tr>   
                               @endforeach
                                
                           </tbody>
                       </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection