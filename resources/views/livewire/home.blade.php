@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div id="BannerHome" class="carousel slide col-md-8 col-md-offset-2" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#BannerHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#BannerHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#BannerHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/img/banner1.jpg" class="d-block w-100" width="200" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/banner2.jpg" class="d-block w-100" width="200" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="assets/img/banner3.jpg" class="d-block w-100" width="200" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#BannerHome" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#BannerHome" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="col-md-4">
            <h4><strong>Category</strong></h4>
        <div class="row mt-4">
            @foreach ($category as $item)   
            <div class="col">
                <div class="card shadow">
                    <div class="card-body text-center">
                        <strong>{{ $item->name }}</strong>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
    <hr>
    <section class="caregory justify-content-center mt-4">
        <h4><strong>Sale</strong></h4>
        <div class="row mt-4">
            @foreach ($product as $item)   
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="text-right discon"><span class="badge bg-danger fs-6">30<i class="fas fa-percent"></i></span></div>
                        <img class="" width="200px" src="{{url('assets/img/product')}}/{{ $item->gambar }}">
                        <strong>{{ $item->name }}</strong>
                        <div class="row mt-2">
                            <div class="col-md-12 text-left">
                                <h5><strong>{{ $item->nama }}</strong></h5>
                            </div>
                            <div class="col-md-6 text-left"><h6>Rp. {{ number_format($item->harga) }}</h6></div>
                            <div class="col-md-6"><h6 class="text-muted text-right text-decoration-line-through">Rp. {{ number_format($item->harga) }}</h6></div>
                        </div>
                        <div class="row mt-2 justify-content-center">
                            <div class="col-md-2 text-left">
                                <a href="" class="btn btn-outline-dark"><i class="fas fa-shopping-basket"></i></a>
                                {{-- <i class="far fa-heart"></i> --}}
                            </div>
                            <div class="col-md-10">
                                <a href="" class="btn btn-outline-success btn-block"><i class="fas fa-shopping-cart"></i> Shop</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>
@endsection
