@extends('layouts.app')

@section('title')
Anjaman | Home
@endsection
@section('content')
  <header class="text-left">
    <h1>
      anjaman
    </h1>
    <p class="mt-3">
      Kami menghadirkan kesempatan bisnis untuk pengembangan usaha Anda
    </p>
    <a href="user/market" class="btn btn-get-started px-4 mt-4">
      Get Started
    </a>
  </header>

  <main>
    <div class="container">
      <section class="section-stats row justify-content-center" id="stats">
        <div class="col-3 col-md-3 stats-detail text-center">
          <img src="images/Logo_Sponsor.png" alt="" style="width: 200px;">
        </div>
        <div class="col-3 col-md-3 stats-detail text-center">
          <img src="images/Logo_Sponsor.png" alt="" style="width: 200px;">
        </div>
        <div class="col-3 col-md-3 stats-detail text-center">
          <img src="images/Logo_Sponsor.png" alt="" style="width: 200px;">
        </div>
        <div class="col-3 col-md-3 stats-detail text-center">
          <img src="images/Logo_Sponsor.png" alt="" style="width: 200px;">
        </div>
      </section>

      <!-- Header Paket Wisata-->
      <section class="section-level-up" id="popular">
        <div class="container">
          <div class="row">
            <div class="col text-center section-level-up-heading">
              <h2>Level Up Your Business</h2>
              <p>
                Kami menghadirkan kesempatan bisnis untuk
                <br />
                pengembangan usaha Anda
              </p>
            </div>
          </div>
        </div>
      </section>

      <!-- Card Paket Wisata -->
      <section class="section-popular-content" id="popularContent">
        <div class="container">
          <div class="section-popular-travel row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('images/keranjang.png'); border-radius: 10px;">
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('images/keranjang.png'); border-radius: 10px;">
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card-travel text-center d-flex flex-column"
                style="background-image: url('images/keranjang.png'); border-radius: 10px;">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-product">
        <div class="product-right-anyaman">
          <div class="container-section">
            <section class="section-left">
              <h1>Our Products</h1>
              <p>
                Berbagai jenis barang
                <br>
                produksi UMKM dari Tanah
                <br>
                gambut yang berlokasi di Sumatera 
              </p>
                <a style="text-decoration:underline; color:black; font-weight:bold" href="user/market">Lihat semua produk...</a>
            </section>
            <div class="section-right">
              <img src="images/Product_Keranjang.png" alt="" style="border-radius: 10px;">
              <div class="text-product">
                <h2 style="color:lightgrey ">Kategori</h2>
                <h1>Keranjang Anyaman</h1>
                <a style="text-decoration:underline; color:black;" href="/user/market/category=keranjang">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>

        <div class="product-left-anyaman">
          <div class="container-section">
            <section class="section-left">
              <img src="images/Product_Tas.png" alt="" style="border-radius: 10px;">
              <div class="text-product">
                <h2 style="color:lightgrey ">Kategori</h2>
                <h1>Tas Anyaman</h1>
                <a style="text-decoration:underline; color:black;" href="/user/market/category=tas">Lihat Detail</a>
              </div>
            </section>
            <div class="section-right">
            </div>
          </div>
        </div>

        <div class="product-right-anyaman" style="margin-top: -120px;">
          <div class="container-section">
            <section class="section-left">
            </section>
            <div class="section-right">
              <img src="images/Product_Topi.png" alt="" style="border-radius: 10px; width: 260px;">
              <div class="text-product">
                <h2 style="color:lightgrey ">Kategori</h2>
                <h1>Topi Anyaman</h1>
                <a style="text-decoration:underline; color:black;" href="/user/market/category=topi">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>

        <div class="product-left-anyaman">
          <div class="container-section">
            <section class="section-left">
              <img src="images/Product_Pot.png" alt="" style="border-radius: 10px; width: 320px;">
              <div class="text-product">
                <h2 style="color:lightgrey ">Kategori</h2>
                <h1>Pot Anyaman</h1>
                <a style="text-decoration:underline; color:black;" href="/user/market/category=pot">Lihat Detail</a>
              </div>
            </section>
            <div class="section-right">
            </div>
          </div>
        </div>
      </section>

      <!-- Testimoni -->
      <section class="section-testimonials-heading" id="testimonialsHeading">
        <div class="container">
          <div class="row">
            <div class="col text-center">
              <h2>What They Say</h2>
              <p>
                It has survived not only five centuries, but also the leap into
                <br />
                electronic typesetting, remaining essentially unchanged.
              </p>
            </div>
          </div>
        </div>
      </section>
      <section class="section-testimonials-content" id="testimonialsContent">
        <div class="container">
          <div class="section-popular-travel row justify-content-center match-height">
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img src="images/Ellipse 1.png" alt="" class="mb-4 rounded-circle"
                    style="width: 150px; height: 150px;" />
                  <h3 class="mb-4">Eric Nam</h3>
                  <p class="testimonials">
                    “ Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's “
                  </p>
                </div>
                <hr />
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img src="images/Ellipse 1.png" alt="" class="mb-4 rounded-circle"
                    style="width: 150px; height: 150px;" />
                  <h3 class="mb-4">Eric Nam</h3>
                  <p class="testimonials">
                    “ Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's “
                  </p>
                </div>
                <hr />
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content mb-auto">
                  <img src="images/Ellipse 1.png" alt="" class="mb-4 rounded-circle"
                    style="width: 150px; height: 150px;" />
                  <h3 class="mb-4">Eric Nam</h3>
                  <p class="testimonials">
                    “ Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's “
                  </p>
                </div>
                <hr />
                <div class="star">
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>
                  <span class="fa fa-star"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
@endsection