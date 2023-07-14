@extends('frontend.layout.app')

@section('content')
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-bag"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Bebas Biaya Kirim</h3>
                        <p>Kami memberikan layanan pengiriman gratis ke seluruh dunia untuk setiap pembelian di toko kami.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Mendukung Pelanggan</h3>
                        <p>Kami selalu siap membantu Anda dengan setiap pertanyaan atau masalah yang Anda miliki.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-payment-security"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Pembayaran Aman</h3>
                        <p>Kami menggunakan sistem pembayaran yang aman dan terpercaya untuk melindungi informasi Anda.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="margin-bottom: 50px;" class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(images/toko.jpg);">
            </div>
            <div class="col-md-7 py-md-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4">Tentang Toko Kami</h2>
                    </div>
                </div>
                <div class="pb-md-5 pb-4">
                    <p>Toko kami menawarkan berbagai macam sandal untuk pria, wanita, dan anak-anak. Kami memilih koleksi sandal kami dengan teliti untuk memastikan produk yang berkualitas dan sesuai dengan tren terkini.</p>
                    <p>Toko kami menawarkan pilihan sandal yang cocok untuk berbagai aktivitas, mulai dari olahraga hingga acara formal. Dapatkan pilihan sandal yang lengkap di toko kami dengan harga yang bersaing dan pelayanan yang ramah dan profesional.</p>
                    <p><a href="#" class="btn btn-primary">Lihat Produk Kami</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
