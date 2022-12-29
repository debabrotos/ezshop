@extends('master')
@section("content")

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Results For Products</h4>
            
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
                    <button class="btn btn-warning">Remove From Cart</button>
                </div>
                 
            </div>
            @endforeach

        </div>
    </div>
</div>


@endsection