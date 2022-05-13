{{-- harga total satuan produk --}}
@php
$totalPrice = 0;
if (count($products) != 0) {
    foreach ($products as $product) {
        $totalPrice += $product->price;
    }
}
@endphp

@extends('layouts.app')

@section('title')
Anjaman | Profile
@endsection

@section('content')
  <div class="main-keranjang">
    <form action="/user/checkout" method="post" class="cart-show">
      @csrf
      <div class="container">
        <h5>Shopping Cart</h5>
        <div class="row">
          <!-- Section Left -->
          <div class="col-md-8">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                  <th scope="col"></th>
                </tr>
              </thead>

              {{-- intro --}}
              @if (count($products) == 0)
                <tbody>
                  <tr>
                    <th>
                      <div class="empty-cart">
                        <h6>Keranjangmu kosong</h6>
                      </div>
                    </th>
                  </tr>
                </tbody>
              @endif

              {{-- products --}}
              {{-- summary --}}
              @for ($j = 0; $j < count($products); $j++)
                @php
                $product = $products[$j];
                $total = $product->price;
                @endphp
                <tbody>
                  <tr>
                    <th scope="row">
                      <div class="container-product">
                        <img src="{{ asset('images/' . $product->image) }}" class="mg-fluid rounded" alt="">
                        <div>
                          <h6>{{ $product->name }}</h6>
                          <p>Remaining: {{ $product->stock }}</p>
                        </div>
                      </div>
                    </th>
                    
                    <!-- Product Price -->
                    <td>
                      Rp. <span class="product-price">{{ $product->price }}</span>
                    </td>
                    <!-- End of Product Price -->

                    <!-- Quantity -->
                    <td>
                      <div class="quantity-wrapper">
                        <label
                            for="quantity-{{ $j }}"></label>
                        <input type="number"
                            name="products[{{ $j }}][quantity]"
                            id="quantity-{{ $j }}"
                            class="product-quantity" value="1" min="1" max="{{ $product->stock }}">
                      </div>
                    </td>
                    <!-- End of Quantity -->

                    <td>
                      <span class="summary-total">{{ $total }}</span>
                    </td>
                    <td>
                      <div class="col-1">
                        <a href="/cart/destroy/{{ $product->cart_id }}" class="delete-cart-item__btn" style="color: black;">
                          <i class="fa fa-trash"></i>
                        </a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              @endfor
            </table>
          </div>

          {{-- summary --}}
          @if (count($products) != 0)
            <div class="col-2 col-md-4">
              <div class="card">
                <h5 class="card-header">Order Summary</h5>
                <div class="card-body">
                  <div class="card-sub row g-2">
                    <p class="card-text col-md-6 mb-3">Items</p>
                    <p class="card-text-sub col-md-6 mb-3 summary-item">{{ count($products) }}</p>
                    <p class="card-text col-md-6 mb-3">Total Price</p>
                    <p class="card-text-sub col-md-6 mb-3 summary-price">Rp. {{ $totalPrice }}</p>
                  </div>
                  <div class="card-footer bg-transparent border-black">
                    <a href="#" class="btn btn-dark card-text col-md-12 mb-12">Checkout</a>
                  </div>
                </div>
              </div>
            </div>
          @endif
        </div>
        <a href="/user/market">Back to Market List</a>
      </div>
    </form>
  </div>
@endsection