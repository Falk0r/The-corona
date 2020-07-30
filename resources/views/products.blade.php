@extends('layouts.app')

@section('content')
<div class="section">
    <div class="page-content pt_60">
        <div class="container">
            <div class="row">
                @foreach ($products as $product)  
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="product-item">
                        <div class="photo"><a href="../product/{{$product->product_slug}}"><img src="../uploads/{{$product->product_featured_photo}}"></a></div>
                        <div class="text">
                            <h3><a href="../product/{{$product->product_slug}}">{{$product->product_name}}</a></h3>
                            <div class="price"><del>${{$product->product_old_price}}</del>  ${{$product->product_current_price}}</div>
                            <div class="cart-button">
                                @if ($product->product_stock < 1)
                                    <a href="javascript:void;" class="stock-empty">Stock is empty</a>
                                @else
                                    <form action="#" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{$product->product_id}}">
                                            <input type="hidden" name="product_current_price" value="{{$product->product_current_price}}">
                                            <input type="hidden" name="product_name" value="{{$product->product_name}}">
                                            <input type="hidden" name="product_featured_photo" value="../index.html">
                                            <input type="hidden" name="product_qty" value="1">
                                            <input type="submit" value="Add to Cart" name="form_add_to_cart">
                                        </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
