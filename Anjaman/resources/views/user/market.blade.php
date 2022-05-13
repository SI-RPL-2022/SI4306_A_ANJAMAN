@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@section('title')
Anjaman | Market
@endsection

@section('content')
    <h1 class="h3 mb-0 text-black-800" style="font-weight: bold; padding-top: 30px;  margin-left: 70px;">Market</h1>

    <!-- Search -->
    <form style="margin-left:70px; margin-top:30px;" action="{{ route('web.find') }}" method="GET">
        <div class="search_wrap ">
			<div class="search_box shadow p-3 mb-5 bg-white rounded">
                <div class="form-group">
				    <input type="text" name="query" class="input" placeholder="Search Product ...">
                </div>
                <div class="form-group">
                    <button class="btn" type=submit>
                        <i class="fas fa-search"></i>
                    </button>
                </div>
			</div>
		</div>
     </form>
    
     <!-- Category -->
     <ul class="tags" style= "margin-left: 70px;">
        <li class="tag" style="--color: #efd81d;">
            <a href="/user/market">All</a>
        </li>
        <li class="tag" style="--color: #41b883;">
            <a href="/user/market/category=tas">Tas</a>
        </li>
        <li class="tag" style="--color: #61dafb;">
            <a href="/user/market/category=keranjang">Keranjang</a>
        </li>
        <li class="tag" style="--color: #ff3e00;">
            <a href="/user/market/category=topi">Topi</a>
        </li>
        <li class="tag" style="--color: purple;">
            <a href="/user/market/category=pot">Pot</a>
        </li>
    </ul>

    <!-- Card -->
    <section class="row justify-content-left mt-4" style="margin: 0; padding: 0; margin-left: 70px;">
    @if (count($products) == 0)
                <div class="empty">
                    <h5 style="color:#8E654E;">====Produk Tidak Ditemukan====</h5>
                </div>
            @endif
    @if(isset($products))
        @if(count(array($products)) > 0)
            @foreach ($products as $product)
            <div class="card mr-4 mb-4 shadow p-3 mb-5 bg-white rounded" style="width: 18rem;">
                <img style="width:100%" src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-text text-center font-weight-bold">{{ $product->name }}</h5>
                    <p class="text-center">Rp. {{ $product->price }}</p>
                    <div class="card-body row justify-content-center">
                        <a href="/cart/store/{{ $product->id }}" class="btn btn-primary col-md-8 font-weight-bold text-dark" style="border: none; background-color: #EADFCE; font-size: 16px;">
                        Add To Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </section>
    @endif
@endsection

<script>

    const btn = document.getElementById('btn');

    let index = 0;

    const colors = ['salmon', 'green', 'blue', 'purple'];

    btn.addEventListener('click', function onClick() {
    btn.style.backgroundColor = colors[index];
    btn.style.color = 'white';

    index = index >= colors.length - 1 ? 0 : index + 1;
    });
    
</script>