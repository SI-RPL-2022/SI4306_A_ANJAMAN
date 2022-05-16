{{-- harga total dan berat total seluruh produk --}}
@php
$totalItem = 0;
$totalWeight = 0;
$totalPrice = 0;
if (count($products) != 0) {
    foreach ($products as $product) {
        $totalItem += $product['quantity'];
        $totalPrice += $product['quantity'] * $product['price'];
    }
}
@endphp

@extends('layouts.app')

@section('title')
Anjaman | Details
@endsection

@section('content')
<form action="/order/store" method="post">
    <div class="main-checkouts">
        <div class="container">
            <h5 style="margin-top: 20px;">Checkout</h5>
            <div class="row" style="margin-top: 40px;">
                <!-- Section Left -->
                <div class="col-md-8">
                    <div class="shipment-method">
                        <h6>1. Choose Your Shipping Method</h6>
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Instant</div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Rp. 12000
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card text-black bg-light mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Same Day</div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Rp. 12000
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Reguler</div>
                                    <div class="card-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Rp. 12000
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shipment-address">
                        <h6>2. Address Information</h6>
                        <div class="card">
                            <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted">Bang Christopher Chan</h6>
                                <p class="card-text">Jl. Laksda Adi Sucipto Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, nam,
                                Jombang, Jombang, Jawa Timur, Indonesia
                                <br>
                                1234
                                <br>
                                083134591219
                                </p>
                            <a href="#" class="card-link">Edit Email</a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Cart --}}
                <div class="col-2 col-md-4">
                    @csrf
                    @php
                        $j = 0;
                        $subtotalPrice = 0;
                        $subtotalQuantity = 0;
                    @endphp
                    <div class="card">
                        <h5 class="card-header">Order Summary</h5>
                        <div class="card-body">
                            <div class="card-sub row g-2" style="width: 100%;">
                                <p class="card-text col-md-6 mb-3">Items</p>
                                <p class="card-text-sub col-md-6 mb-3" style="text-align: right;">{{ $totalItem }}</p>
                                <p class="card-text col-md-6 mb-3">Total Item</p>
                                <p class="card-text-sub col-md-6 mb-3" style="text-align: right;">Rp. {{ $totalPrice }}</p>
                            </div>
                            <div class="card-footer bg-transparent border-black">
                            @foreach ($products as $product)
                                <div class="card-product">
                                    <div class="kiri">
                                        <img src="{{ asset('images/' . $product['image']) }}" alt="">
                                    </div>
                                    <div class="kanan" style="width: 90%;">
                                        <h6 class="title-product">
                                            {{ $product['name'] }}
                                        </h6>

                                        <div class="qty-price">
                                            <h6>x{{ $product['quantity'] }}</h6>
                                            <h6>Rp. {{ $product['price'] * (int) $product['quantity'] }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden"
                                    name="orders[order_details][{{ $j }}][product_id]"
                                    value="{{ $product['id'] }}">
                                <input type="hidden"
                                    name="orders[order_details][{{ $j }}][quantity]"
                                    value="{{ $product['quantity'] }}">
                                @php
                                    $j = $j + 1;
                                    $subtotalPrice += (int) $product['price'] * (int) $product['quantity'];
                                    $subtotalQuantity += (int) $product['quantity'];
                                @endphp
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-purchase">
                <a href="#" class="btn btn-dark card-text col-md-2 mb-12">Confirm Purchase</a>
                <a href="#" class="btn btn-light card-text col-md-2 mb-12" style="border-style: solid; border-width: 2px; border-color: black;">Back to Cart</a>
            </div>
        </div>
    </div>
</form>
@endsection

