@extends('master')
@section("content")

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Results For Products</h4>
            <a class="btn btn-success" href="ordernow">Oder Now</a> <br> <br>
            @foreach($products as $item)
            <div class="row searched-iteam cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img style="width:200px" class="trending-image" src="{{$item->gallery}}" alt="">
                    </a>
                </div>
                <div class="col-sm-3">
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                        </div> 
                </div>
                <div class="col-sm-3">
                    <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove From Cart</a>
                </div>
                 
            </div>
            @endforeach
            <a class="btn btn-success" href="ordernow">Oder Now</a> <br> <br>
            
        </div>
    </div>
</div>


@endsection