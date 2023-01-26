@extends('master')
@section("content")

<div class="container custom_detail">
    <div class="row">
        <div style="" class="col-sm-6 detail-img">
            <img class="" src="{{$product['gallery']}}" alt="">
            <p>{{$product['name']}}</p>
        </div>
        <div class="col-sm-6">
            <a style="color:grey" href="/"><i class="fa fa-arrow-left" ></i></a>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h4>Category : {{$product['category']}}</h4>
            <h4>Details : {{$product['description']}}</h4>
            <br>
            <form action="/add_to_cart" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn detail_button">Add to Cart</button>
            </form>
            <br>
            <button class="btn detail_button">Buy Now</button>
        </div>
    </div>
    
</div>



@endsection