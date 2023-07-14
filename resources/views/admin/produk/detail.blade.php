@extends('frontend.layout.app')

@section('content')
@foreach ($produk as $prod)
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Produk Kami</h2>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card bg-faded p-5 rounded">
                        <div>
                            <h2 class="section-heading mb-4">{{ $prod->nama }}</h2>
                            <div class="product-details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ $prod->image }}" alt="{{ $prod->nama }}" class="img-fluid mb-4">
                                    </div>
                                    <div class="col-md-6">
                                        <p><strong>Harga:</strong> {{ $prod->harga_jual }}</p>
                                        <p><strong>Stok:</strong> {{ $prod->stok }}</p>
                                        <p><strong>Deskripsi:</strong> {{ $prod->deskripsi }}</p>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ url('admin/produk') }}" class="btn btn-primary">Back to Produk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endforeach
@endsection
