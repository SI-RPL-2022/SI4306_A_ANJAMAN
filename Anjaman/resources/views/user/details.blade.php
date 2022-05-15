@extends('layouts.app')

@section('title')
Anjaman | Details
@endsection

@section('content')
    <section class="section-details">
        <div class="container">
            <div class="row g-2">
              <div class="col-7">
              
                <div class="card-images">
                    <div class="xzoom-container">
                        <img class="xzoom" id="xzoom-default" src="{{ asset('images/' . $product->image) }}"
                          xoriginal="{{ asset('images/' . $product->image) }}" />
                        <div class="xzoom-thumbs">
                            <a href="{{ asset('images/' . $product->image) }}"><img class="xzoom-gallery" width="128"
                                src="{{ asset('images/' . $product->image) }}" xpreview="{{ asset('images/' . $product->image) }}" /></a>
                            <a href="{{ asset('images/' . $product->image) }}"><img class="xzoom-gallery" width="128"
                                src="{{ asset('images/' . $product->image) }}" xpreview="{{ asset('images/' . $product->image) }}" /></a>
                            <a href="{{ asset('images/' . $product->image) }}"><img class="xzoom-gallery" width="128"
                                src="{{ asset('images/' . $product->image) }}" xpreview="{{ asset('images/' . $product->image) }}" /></a>
                            <a href="{{ asset('images/' . $product->image) }}"><img class="xzoom-gallery" width="128"
                                src="{{ asset('images/' . $product->image) }}" xpreview="{{ asset('images/' . $product->image) }}" /></a>
                        </div>
                    </div>
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
    
                    <h6 class="price">Rp. 200.000</h6>
                    <a href="/cart/store/{{ $product->id }}" class="btn btn-dark card-text col-md-12 mb-12">Add to Cart</a>
    
                </div>
              </div>
            </div>
        </div>
    </section>
@endsection

<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint: '#333',
            Xoffset: 15
        });
    });
</script>

