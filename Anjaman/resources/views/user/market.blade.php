@extends('layouts.app')

@section('title')
Anjaman
@endsection

@section('content')
    <!-- Card -->
    <section class="row justify-content-center mt-4 pt-5">
        @foreach ($products as $product)
        <div class="card mr-4" style="width: 18rem;">
            <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-text text-center font-weight-bold">{{ $product->name }}</h5>
                <p class="text-center">{{ $product->price }}</p>
                <div class="card-body row justify-content-center">
                    <a href="" class="btn btn-primary col-md-6 font-weight-bold text-dark" style="border: none; background-color: #EADFCE;">Add To Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </section>
@endsection