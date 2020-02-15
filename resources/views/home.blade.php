@extends('layout')
@section('content')
<div class="content-top ">
    <div class="container ">
        <div class="spec ">
            <h3>Special Offers</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        @foreach ($Producten as $Producten)
        {{-- product --}}
        <div class="col-md-3 pro-1">
            <div class="col-m">
                <a href="#" data-toggle="modal" data-target="#myModal1" class="offer-img">
                    <img src="{{$Producten->foto}}" class="img-responsive" alt="image_product">
                    <div class="offer">
                        <p><span>Offer</span></p>
                    </div>
                </a>
                <div class="mid-1">
                    <div class="women">
                        <h6><a href="#">{{$Producten->naam}}</a></h6>
                    </div>
                    <div class="mid-2">
                        <p><label>${{$Producten->prijs - 6}}.00</label><em class="item_price">${{$Producten->prijs}}.00</em></p>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="add">
                        <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong"
                            data-summary="summary 1" data-price="1.50" data-quantity="1"
                            data-image="images/of.png">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>@endforeach
    </div>

</div>        

@endsection