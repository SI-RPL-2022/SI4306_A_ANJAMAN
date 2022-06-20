@extends('layouts.app')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@section('title')
Anjaman | Market
@endsection

@section('content')
    @include('layouts.flash-message')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/images/Product_Keranjang.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/Product_Keranjang.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
            <img src="/images/Product_Keranjang.png" class="d-block w-100" alt="">
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

    <h1 class="h3 mb-0 text-black-600" style="font-weight: bold; margin-top: 30px; margin-left: 70px; font-size: 24px;">Market</h1>

    <div class="container-search-category">
        <!-- Category -->
        <div class="container-category">
            <ul class="tags">
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
        </div>

        <!-- Search -->
        <div class="container-serach">
            <form action="{{ route('web.find') }}" method="GET">
                <div class="search_wrap ">
                    <div class="search_box shadow p-3 mb-5 bg-white">
                        <div class="form-group">
                            <input type="text" name="query" class="input" placeholder="Search Product ...">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-dark" type=submit>
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

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
            <div class="card mr-4 mb-4 shadow p-2 mb-5 bg-white" style="width: 16rem; border-radius: 12px;">
                <img style="width:100%" src="{{ asset('storage/images/' . $product->image) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <a href="/user/details/{{ $product->id }}" style="text-decoration: none; color: black;">
                        <h5 class="card-text text-center font-weight-bold" style="font-size: 16px; height: 40px;">{{ $product->name }}</h5>
                    </a>
                    <p class="text-center" style="font-size: 16px; margin-top: 4px;">Rp. {{ $product->price }}</p>
                    <div class="card-body row justify-content-center">
                        <a href="/cart/store/{{ $product->id }}" class="btn btn-dark col-md-8 text-light" style="border: none; font-size: 12px; font-weight: 600;">
                        Add To Cart</a>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
    </section>
    @endif
@endsection