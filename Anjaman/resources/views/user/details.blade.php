@extends('layouts.app')

@section('title')
Anjaman | Details
@endsection

@section('content')
    <section class="section-details">
        <div class="container">
            <div class="row g-2">
                <div class="col-7">
              
                    <div class="main-img">
                        <img src="{{ asset('storage/images/' . $product->image) }}" class="img-fluid w-100 pb-1" id="MainImg" alt="">
                    </div>

                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img src="{{ asset('storage/images/' . $product->image) }}" width="100%" class="small-img" alt="">
                        </div>
                    @foreach ($galleries as $gallery) 
                        @if ($gallery->product_id == $product->id)
                            <div class="small-img-col">
                                <img src="{{ asset('storage/images/' . $gallery->images) }}" width="100%" class="small-img" alt="">
                            </div>
                        @endif 
                    @endforeach
                    </div>
                </div>
                <div class="col-5">
                    <div class="card-details">
                        <div class="title">
                            <h2>{{ $product->name }}</h2>
                            <div class="icon">
                                <a href="" style="color: black;">
                                    <i class="fa-solid fa-heart"></i>
                                </a>
                                <a href="" style="color: black;">
                                    <i class="fa-solid fa-share-nodes"></i>
                                </a>
                            </div>
                        </div>
                        <div class="star-remaining">
                            <div class="icon-star">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                            <div class="remaining">
                                <p>Remaining: {{ $product->stock }}</p>
                            </div>
                        </div>
                        <p>{{ $product->description }}</p>
        
                        <div class="category">
                            <h5>Category</h5>
                            <a href="#" class="btn btn-info btn-md disabled" tabindex="-1" role="button" aria-disabled="true">{{ $product->category }}</a>
                        </div>
        
                        <h6 class="price">Rp. {{ $product->price }}</h6>
                        <a href="/cart/store/{{ $product->id }}" class="btn btn-dark card-text col-md-12 mb-12">Add to Cart</a>
        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row justify-content-center mt-4">
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
    </section>

    <script>
        var MainImg = document.getElementById('MainImg');
        var smallImg = document.getElementsByClassName('small-img');
        
        smallImg[0].onclick = function(){
        MainImg.src = smallImg[0].src;
        }

        smallImg[1].onclick = function(){
        MainImg.src = smallImg[1].src;
        }

        smallImg[2].onclick = function(){
        MainImg.src = smallImg[2].src;
        }

        smallImg[3].onclick = function(){
        MainImg.src = smallImg[3].src;
        }
    </script>
@endsection

