@extends('frontend.layout.app')

@section('content')

<section class="ftco-section ftco-deal bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('frontend/images/sendal.png') }}" class="img-fluid" alt="Featured Product Image">
            </div>
            <div class="col-md-6">
                <div class="text">
                    <div class="horizontal">
                        <h1 class="mb-4 mt-3">Koleksi Sandal dll 2019</h1>
                        <p class="mb-4">Desain yang ramah lingkungan: Koleksi sandal 2019 mungkin menampilkan bahan-bahan yang lebih ramah lingkungan, seperti bahan daur ulang atau bahan organik yang lebih bertanggung jawab secara sosial dan lingkungan.</p>
                        <p><a href="{{ url('frontend/produk') }}" class="btn-custom">Temukan Sekarang</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Featured Produk</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($produk->chunk(3) as $chunk)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="row">
                                @foreach($chunk as $prod)
                                <div class="col-sm-12 col-md-6 col-lg-4 ftco-animate d-flex">
                                    <div class="product d-flex flex-column">
                                        <a href="#" class="img-prod"><img class="img-fluid" src="{{ $prod->image }}" alt="{{ $prod->nama }}"></a>
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
                                                <a href="{{ url('admin/produk/detail', $prod->id) }}" class="add-to-cart text-center py-2 mr-1"><span>Detail</span></a>
                                                <a href="{{ url('product.order', $prod->id) }}" class="buy-now text-center py-2">Beli</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script>
    // Autoplay carousel
    $('#carouselExampleIndicators').carousel({
        interval: 3000, // Ganti dengan waktu yang diinginkan (dalam milidetik)
        pause: "hover"
    });
</script>
@endpush
