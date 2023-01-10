@extends('master')
@section("content")

<div class="custom-product">
    <div class="col-sm-10">
        <table class="table">
            <tbody>
                <tr>
                    <td>Amount</td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>$</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td>Total Amount</td>
                    <td>$ {{$total+10}}</td>
                </tr>
                
            </tbody>
         </table>
        <div class="orderform">
            <form>
                <div class="form-group">
                    <textarea type="" placeholder="Type Your Adress Here" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Payment Method</label> <br>
                    <input type="radio" name="payment"> <span>Online payment</span><br>
                    <input type="radio" name="payment"> <span>EMI payment</span><br>
                    <input type="radio" name="payment"> <span>Cash on Delivery</span>
                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
            </form>
        </div>
    </div>
</div>


@endsection