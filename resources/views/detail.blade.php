@extends('layout')
@section('content')
<div class="content-top ">
    <div class="container ">
       
        @foreach ($Producten as $Producten)
        {{-- product --}}
        <div class="col-md-6 pro-1 ml-auto">
            <div class="col-m" style="border: 0px!important">
                <div class="offer-img">
                    <img src="{{$Producten->foto}}" class="img-responsive" alt="image_product">
                    <div class="offer">
                        <p><span>Offer</span></p>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="col-md-6 pro-1 ml-auto">
            <div class="col-m" style="border: 0px!important">
            
                <div class="mid-1">
                    <div class="women">
                        <h6><a href="#">{{$Producten->naam}}</a></h6>
                    </div>
                    <div class="mid-2">
                        <p><label>${{$Producten->prijs - 6}}.00</label><em class="item_price">${{$Producten->prijs}}.00</em></p>
                        <p>{{$Producten->description}}</p>
                        <div class="block">
                            <div class="starbox small ghosting"> </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="add">
                  
                        <form action="{{ route('cart.store') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $Producten->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $Producten->naam }}" id="name" name="name">
                            <input type="hidden" value="{{ $Producten->prijs }}" id="price" name="price">
                            <input type="hidden" value="{{ $Producten->foto }}" id="img" name="img">
                        <input type="hidden" value="{{$Producten->id}}" id="slug" name="slug">
                            <input type="hidden" value="1" id="quantity" name="quantity">
                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong"
                            data-summary="summary 1" data-price="1.50" data-quantity="1"
                            data-image="images/of.png">Add to Cart</button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>        

@endsection