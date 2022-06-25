@extends('layouts.app')

@section('title')
Anjaman | Home
@endsection
@section('content')
  <div class="container-content-our-team">
    <section class="section-header">
      <h1>Our Team</h1>
      <p>Inilah orang-orang di balik Web Anjaman yang sangat antusias untuk melestarikan 
        produk UMKM Anyaman dari Rotan, Serabut, dan lain sebagainya yang berasal
        dari tanah yang terbengkalai bertempat di wilayah Sumatera Indonesia</p>
    </section>

    <section class="section-ourteam">
      <div class="container-team">
        <div class="content-text" data-aos="fade-up" data-aos-duration="2000">
          <h4>Project Manager</h4>
          <p>Andreina Aliraihan Sudra</p>
          <p class="detail">Mahasiswa Sistem Informasi
            <br>
            Telkom University
            <br>
            120219xxxx
          </p>
        </div>
        <div class="content-image" data-aos="fade-left" data-aos-duration="1500">
          <img src="/images/Ara.png" alt="">
        </div>
      </div>

      <div class="container-team">
        <div class="content-image" data-aos="fade-right" data-aos-duration="1500">
          <img src="/images/Amel.png" alt="">
        </div>
        <div class="content-text" data-aos="fade-up" data-aos-duration="2000">
          <h4>Project Manager</h4>
          <p>Andreina Aliraihan Sudra</p>
          <p class="detail">Mahasiswa Sistem Informasi
            <br>
            Telkom University
            <br>
            120219xxxx
          </p>
        </div>
      </div>

      <div class="container-team">
        <div class="content-text" data-aos="fade-up" data-aos-duration="2000">
          <h4>Project Manager</h4>
          <p>Andreina Aliraihan Sudra</p>
          <p class="detail">Mahasiswa Sistem Informasi
            <br>
            Telkom University
            <br>
            120219xxxx
          </p>
        </div>
        <div class="content-image" data-aos="fade-left" data-aos-duration="1500">
          <img src="/images/Ara.png" alt="">
        </div>
      </div>

      <div class="container-team">
        <div class="content-image" data-aos="fade-right" data-aos-duration="1500">
          <img src="/images/Amel.png" alt="">
        </div>
        <div class="content-text" data-aos="fade-up" data-aos-duration="2000">
          <h4>Project Manager</h4>
          <p>Andreina Aliraihan Sudra</p>
          <p class="detail">Mahasiswa Sistem Informasi
            <br>
            Telkom University
            <br>
            120219xxxx
          </p>
        </div>
      </div>
    </section>
  </div>

  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
@endsection