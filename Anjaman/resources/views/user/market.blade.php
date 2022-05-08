@extends('layouts.app')

@section('title')
Anjaman
@endsection

@section('content')
    <!-- Card -->
    <section class="row justify-content-left mt-4" style="margin: 0; padding: 0; margin-left: 70px;">
        @foreach ($products as $product)
        <div class="card mr-4 mb-4" style="width: 16rem;">
            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-text text-center font-weight-bold">{{ $product->name }}</h5>
                <p class="text-center">Rp. {{ $product->price }}</p>
                <div class="card-body row justify-content-center">
                    <a href="" class="btn btn-primary col-md-8 font-weight-bold text-dark" style="border: none; background-color: #EADFCE; font-size: 16px;">Add To Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection