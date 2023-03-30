@extends('layouts.main')
@section('container')
<!-- view width -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('img/gambar_carousel.png') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/gambar_carousel.png') }}" class="d-block w-100" alt="{{ asset('img/gambar_carousel.png') }}">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('img/gambar_carousel.png') }}" class="d-block w-100" alt="{{ asset('img/gambar_carousel.png') }}">
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

<div class="container-konten">
        <div class="content-kabinet-bersatu-maju">
            <div class="container-kbm d-flex justify-content-center align-items-center">
                <img src="{{ asset('img/vector_background.png') }}" alt="" class="vector-bg">
                <div class="title">
                    <div class="text-center fw-bold">
                        <p class="judul">Kabinet Bersatu Maju</p>
                    </div>
                    <div class="text-atribut">
                      <img src="{{ asset('img/rectangle_1.png') }}" class="img-fluid" alt="">
                      <img src="{{ asset('img/vector_1.png') }}" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="first-content">
                    <div class="left-first">

                    </div>
                </div>
            </div>
        </div>
    </div>






<style>
    .text-image-carousel {
        font-style: normal;
        font-weight: 700;
        font-size: 64px;
        line-height: 96px;
        display: flex;
        align-items: center;
        letter-spacing: -0.02em;
        text-shadow: 4px 4px 4px rgba(0, 0, 0, 0.4);
    }

    .carousel-wrapper {
        position: relative;
        display: block;
    }

    .vector-bg {
        position: absolute;
        z-index: -1;
        margin-top: 477px;
        width: 100vw;
        height: 40em;
        top: 0;
    }
</style>
@endsection
