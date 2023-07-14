@extends('frontend.layout.app')

@section('content')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Produk Kami</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($produk as $prod)
            <div class="col-sm-12 col-md-6 col-lg-4 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                    <a href="#" class="img-prod"><img src="{{ $prod->image }}" alt="{{ $prod->nama }}" class="img-fluid mb-4">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="d-flex">
                            <div class="cat">
                                <span>{{ $prod->nama_kategori }}</span>
                            </div>
                        </div>
                        <h3><a href="#">{{ $prod->nama }}</a></h3>
                        <div class="pricing">
                            <p class="price"><span>{{ $prod->harga_jual }}</span></p>
                        </div>
                        <p class="bottom-area d-flex px-3">
                            <a href="{{ url('admin/produk/detail/'. $prod->id) }}" class="add-to-cart text-center py-2 mr-1"><span>Detail</span></a>
                            <a href="{{ url('product.order', $prod->id) }}" class="buy-now text-center py-2">Beli</a>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
