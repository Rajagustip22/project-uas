@extends('admin.layout.app')

@section('content')
    @if (Auth::user()->role != 'pelanggan')
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Pesanan</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    @if (Auth::user()->role != 'admin')
                        <a href="{{ url('admin/pesanan/create') }}" class="btn btn-primary">Tambah Data</a>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pemesan</th>
                                    <th>Alamat Pemesan</th>
                                    <th>No Hp</th>
                                    <th>Email</th>
                                    <th>Jumlah Pesanan</th>
                                    <th>Deskripsi</th>
                                    <th>Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($pesanan as $pes)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $pes->tanggal }}</td>
                                        <td>{{ $pes->nama_pemesan }}</td>
                                        <td>{{ $pes->alamat_pemesan }}</td>
                                        <td>{{ $pes->no_hp }}</td>
                                        <td>{{ $pes->email }}</td>
                                        <td>{{ $pes->jumlah_pesanan }}</td>
                                        <td>{{ $pes->deskripsi }}</td>
                                        <td>{{ $pes->nama_produk }}</td>
                                        <td>
                                            <form action="{{ url('admin/pesanan/edit/'. $pes->id) }}" method="GET">
                                                <button type="submit" class="btn btn-success" title="Edit Pesanan">
                                                    <i class="nc-icon nc-ruler-pencil"></i>
                                                </button>
                                            </form>
                                            <form action="{{ url('admin/pesanan/delete/'. $pes->id) }}" method="GET">
                                                <button type="submit" class="btn btn-danger" name="proses" value="hapus"
                                                    title="Hapus Pesanan">
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
