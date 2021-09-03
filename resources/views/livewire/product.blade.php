@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All Product</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h2>All Product</h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input wire:model="search" type="text" class="form-control" placeholder="Search . . ." aria-label="Search"
                    aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
    
    <section class="caregory justify-content-center mt-4">
        <div class="row mt-4">
            @foreach ($product as $item)   
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        @if ($item->diskon > 0) 
                        <div class="text-right discon">
                            <span class="badge py-3 bg-danger fs-6" style="border-radius: 40px">
                                {{ $item->diskon }}<i class="fas fa-percent"></i>
                            </span>
                        </div>
                        @elseif ($item->diskon == 0)
                        <div class="text-right discon">
                            <span class="badge py-3 bg-success fs-6" style="border-radius: 40px">NEW</span>
                        </div>  
                        @endif    
                        <img class="img-product" width="200px" src="{{url('assets/img/product')}}/{{ $item->gambar }}">
                        <div class="row mt-2">
                            <div class="col-md-12 text-left">
                                <h5><strong>{{ $item->nama }}</strong></h5>
                            </div>
                            @if ($item->diskon > 0)
                            <div class="col-md-6 text-left"><h6>Rp. {{ number_format($item->harga-($item->diskon/100*$item->harga)) }}</h6></div>
                            <div class="col-md-6"><h6 class="text-muted text-right text-decoration-line-through">Rp. {{ number_format($item->harga) }}</h6></div>    
                            @else   
                            <div class="col-md-6 text-left"><h6>Rp. {{ number_format($item->harga) }}</h6></div>
                            @endif
                        </div>
                        <div class="row mt-2 justify-content-center">
                            <div class="col-md-2 text-left">
                                <a href="" class="btn btn-outline-dark"><i class="fas fa-shopping-basket"></i></a>
                                {{-- <i class="far fa-heart"></i> --}}
                            </div>
                            <div class="col-md-9 ml-3 text-right">
                                <a href="" class="btn btn-outline-success btn-block"><i class="fas fa-shopping-cart"></i> Shop</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col">
                {{ $product->links() }}
            </div>
        </div>
    </section>

</div>
@endsection