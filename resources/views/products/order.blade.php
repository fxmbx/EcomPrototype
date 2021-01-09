@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12" style="padding-top: 60px">
            <table class="table">
                <thead>
                    <tr>
                        <th>Your Market thingy</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Total Products Price</td>
                        <td> <div class="input-group mb-3">
                            
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places) " value="{{ $order  }}">
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td> <div class="input-group mb-3">
                            
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places) " value="{{ $order/100 * 5 }}">
                          </div>
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td>Delivery fee</td>
                        <td> <div class="input-group mb-3">
                            
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places) " value="{{$order/100 * .5}}">
                          </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Total price:</td>
                       
                        <td> <div class="input-group mb-3">
                            
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places) " value="{{($order) + ($order/100 * 5) + ($order/100 * .5) }}">
                          </div>
                        </td>
                    </tr>
                    <tr>
                       
                    </tr>
                    <tr>
                        <td>Payment Method</td>
                        <td> 
                             
                                <form method="post" action="{{route('order.place')}}">
                                @csrf
                                <div class="form-group">
                                <input type="radio" name="payment" value="cash"> Payment On Delivery <br><br>
                                <input type="radio" name="payment" value="not ready"> Paypal <br><br>
                                <input type="radio" name="payment" value="xxx"> sex <br> <br>

                                </div>
                                <div class="form-group">
                                    <textarea name="address" id="body" placeholder="Enter your address here" cols="30" rows="10" value=""#body> </textarea>   <br>                           

                                </div>
                                <input type="submit" value="ok">
                            </form>
                              
                        </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
</div>
    
<script> 
    tinymce.init({
        selector:'#body'
    });
</script>
    
@endsection