@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="home">
            <div class="home_container">
                <div class="home_background" style="background-image:url(images/cart.jpg)"></div>
                <div class="home_content_container">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="home_content">
                                    <div class="breadcrumbs">
                                        <ul>
                                            <li><a href="{{route('dashboard')}}">Home</a>/</li>
                                            <li>Shopping Cart</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cart Info -->

        <div class="cart_info">
            <div class="container">
                @if (isset($products))
                    <div class="row">
                        <div class="col">
                            <!-- Column Titles -->
                            <div class="cart_info_columns clearfix">
                                <div class="cart_info_col cart_info_col_product">Product</div>
                                <div class="cart_info_col cart_info_col_price">Price</div>
                                <div class="cart_info_col cart_info_col_quantity">Quantity</div>
                                <div class="cart_info_col cart_info_col_total">Total</div>
                            </div>
                        </div>
                    </div>
                    <div class="row cart_items_row">
                        <div class="col">

                            <!-- Cart Item -->
                                @foreach ($products as $key => $product)
                                    <div class="cart_item d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
                                        <!-- Name -->
                                            <div class="cart_item_product d-flex flex-row align-items-center justify-content-start">
                                            <div class="cart_item_image">
                                                <div><img src="{{ $product->image }}" alt=""></div>
                                            </div>
                                            <div class="cart_item_name_container">
                                                <div class="cart_item_name"><a href="{{ route('productDetails', ['id' => $product->id]) }}">{{ $product->title }}</a></div>
                                            </div>
                                            </div>
                                            <!-- Price -->
                                            <div class="cart_item_price">{{ $product->price }}$</div>
                                            <!-- Quantity -->
                                            <div class="cart_item_quantity">
                                                <div class="product_quantity_container">
                                                    <count-btn :count="{{ json_encode($cartItems[$key]->quantity) }}" :id="{{ $product->id }}"></count-btn>
                                                </div>
                                            </div>
                                        <!-- Total -->
                                        <div class="cart_item_total">{{ $product->price * $cartItems[$key]->quantity }}$</div>
                                        <div class="cart_item_remove">
                                            <remove-from-cart :id="{{ json_encode($product->id) }}"></remove-from-cart>
                                        </div>
                                    </div>
                                @endforeach
                        </div>
                    </div>
                    <div class="row row_cart_buttons">
                        <div class="col">
                            <div class="cart_buttons d-flex w-100 product-actions">
                                <remove-from-cart :is-cart="{{ json_encode(true) }}" :id="{{ json_encode(auth()->user()->id) }}"></remove-from-cart>
                                <div class="button-28 button continue_shopping_button add-btn"><a href="{{route('dashboard')}}">Continue shopping</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="row row_extra">
                        {{-- <div class="col-lg-4">
                            <!-- Coupon Code -->
                            <div class="coupon">
                                <div class="section_title">Coupon code</div>
                                <div class="section_subtitle">Enter your coupon code</div>
                                <div class="coupon_form_container">
                                    <form action="#" id="coupon_form" class="coupon_form">
                                        <input type="text" class="coupon_input" required="required">
                                        <button class="button coupon_button"><span>Apply</span></button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-lg-6 offset-lg-2">
                            <div class="cart_total">
                                <div class="section_title">Cart total</div>
                                <div class="section_subtitle">Final info</div>
                                <div class="cart_total_container">
                                    <ul>
                                        <li class="d-flex flex-row align-items-center justify-content-start">
                                            <div class="cart_total_title">Total:</div>
                                            <div class="cart_total_value ml-auto">{{$total}}$</div>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="button checkout_button"><a href="#">Proceed to checkout</a></div> --}}
                            </div>
                        </div>
                    </div>
                @else
                    <h1>Cart is empty</h1>
                @endif
            </div>
        </div>
    </div>
@endsection
