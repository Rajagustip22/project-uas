@extends('admin.layout.app')
@section('content')
<div class="container-fluid px-4">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            &hearts; Detail Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
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
                        <th>{{ $no }}</th>
                        <th>{{ $pes->tanggal }}</th>
                        <th>{{ $pes->nama_pemesan }}</th>
                        <th>{{ $pes->alamat_pemesan }}</th>
                        <th>{{ $pes->no_hp }}</th>
                        <th>{{ $pes->email }}</th>
                        <th>{{ $pes->jumlah_pesanan }}</th>
                        <th>{{ $pes->deskripsi }}</th>
                        <td>{{ $pes->nama_produk }}</td>
                    </tr>
                    @php
                        $no++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection