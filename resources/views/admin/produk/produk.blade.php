@extends('admin.layout.app')

@section('content')
    @if (Auth::user()->role != 'pelanggan')
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Produk</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    @if (Auth::user()->role != 'admin')
                        <a href="{{ url('admin/produk/create') }}" class="btn btn-primary">Tambah Data</a>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Image</th>
                                    <th>Harga Jual</th>
                                    <th>Harga Beli</th>
                                    <th>Stok</th>
                                    <th>Minimal Stok</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($produk as $prod)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $prod->kode }}</td>
                                        <td>{{ $prod->nama }}</td>
                                        <td>
                                            <img src="{{ asset('path/to/image/' . $prod->image) }}" alt="Product Image"
                                                class="img-thumbnail">
                                        </td>
                                        <td>{{ $prod->harga_jual }}</td>
                                        <td>{{ $prod->harga_beli }}</td>
                                        <td>{{ $prod->stok }}</td>
                                        <td>{{ $prod->min_stok }}</td>
                                        <td>{{ $prod->deskripsi }}</td>
                                        <td>{{ $prod->nama_kategori }}</td>
                                        <td>
                                            <form action="{{ url('admin/produk/edit/' . $prod->id) }}" method="GET">
                                                <button type="submit" class="btn btn-success" title="Edit Produk">
                                                    <i class="nc-icon nc-ruler-pencil"></i>
                                                </button>
                                            </form>
                                            <form action="{{ url('admin/produk/delete/' . $prod->id) }}" method="GET">
                                                <button type="submit" class="btn btn-danger" name="proses" value="hapus"
                                                    title="Hapus Produk">
                                                    <i class="nc-icon nc-scissors"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @php
                                        $no++;
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @else
        @include('admin/acces_denied')
    @endif
@endsection
