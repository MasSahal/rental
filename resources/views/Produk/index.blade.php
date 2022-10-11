@extends('layout.template')

@section('title', 'Data Produk - Rental')
@section('title-page', 'Page Data Produk')

@section('breadcrumb')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Produk</li>
        </ol>
    </nav>
@endsection

@section('content')
    <!--Today Tab Start-->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary table-sm" href="{{ route('produk.create') }}">
                        Tambah Data
                    </a>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="dataTable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Keterangan</th>
                                    <th>Cretaed</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($produk as $no => $r)
                                    <tr>
                                        <td>{{ $no += 1 }}</td>
                                        <td>{{ $r->nm_produk }}</td>
                                        <td>{{ $r->harga }}</td>
                                        <td>{{ $r->stok }}</td>
                                        <td>{{ $r->ket }}</td>
                                        <td>{{ $r->created_at }}</td>
                                        <td>{{ $r->updated_at }}</td>
                                        <td>
                                            <a name="" id="" class="btn btn-warning btn-sm" href="#"
                                                role="button">Edit</a>
                                            <a name="" id="" class="btn btn-danger btn-sm" href="#"
                                                role="button">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('Produk.create')
@endsection
