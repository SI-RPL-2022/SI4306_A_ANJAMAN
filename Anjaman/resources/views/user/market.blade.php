@extends('layouts.app')

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
            <a href="#">All</a>
        </li>
        <li class="tag" style="--color: #41b883;">
            <a href="#">Tas</a>
        </li>
        <li class="tag" style="--color: #61dafb;">
            <a href="#">Keranjang</a>
        </li>
        <li class="tag" style="--color: #ff3e00;">
            <a href="#">Topi</a>
        </li>
        <li class="tag" style="--color: purple;">
            <a href="#">Pot</a>
        </li>
    </ul>

    <!-- Card -->
    <section class="row justify-content-left mt-4" style="margin: 0; padding: 0; margin-left: 70px;">
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