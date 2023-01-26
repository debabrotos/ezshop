@extends('master')
@section("content")

<div class="container custom-product">
    <div class="row">
        <div class="col-md-12">
            <div class="trending-wrapper">
                <div class="cartlist_header">
                    <h1>Cart List</h1>
                </div>
                <!-- <a class="btn btn-success" href="ordernow">Oder Now</a> <br> <br> -->
                @foreach($products as $item)
                <div class="row searched-iteam cart-list-divider">
                    <div class="col-sm-4">
                        <a href="detail/{{$item->id}}">
                            <img style="width:200px" class="trending-image" src="{{$item->gallery}}" alt="">
                        </a>
                    </div>
                    <div class="col-sm-4">
                            <div class="">
                                <h3>{{$item->name}}</h3>
                                <h5>{{$item->description}}</h5>
                            </div> 
                    </div>
                    <div class="col-sm-4">
                        <a href="/removecart/{{$item->cart_id}}" class="btn btn-danger">Remove From Cart</a>
                    </div>
                     
                </div>
                @endforeach
                <a class="btn detail_button" href="ordernow">Oder Now</a> <br> <br>
                
            </div>
        </div>
        
    </div>
</div>


@endsection