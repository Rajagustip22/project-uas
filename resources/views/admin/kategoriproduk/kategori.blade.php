@extends('admin.layout.app')

@section('content')
    @if (Auth::user()->role != 'pelanggan')
        <div class="container-fluid px-4">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Kategori Produk</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    @if (Auth::user()->role != 'admin')
                        <a href="{{ url('admin/kategori/create') }}" class="btn btn-primary">Tambah Data</a>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($kategori_produk as $kat)
                                    <tr>
                                        <td>{{ $no }}</td>
                                        <td>{{ $kat->nama }}</td>
                                        <td>
                                            <form action="{{ url('admin/kategori/delete/'. $kat->id) }}" method="GET">
                                                <button type="submit" class="btn btn-danger" name="proses" value="hapus"
                                                    title="Hapus Kategori">
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
