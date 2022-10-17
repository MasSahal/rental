@extends('layout.template')

@section('title', 'Data Produk - Rental')
@section('title-page', 'Page Data Produk')

@section('content')
    <!--Today Tab Start-->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header  white d-flex justify-content-between ">
                    <h6>Data Produk Rental</h6>
                    <div class="dropdown">
                        <a class="" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-more_vert p-0"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">View
                                Profile </a>
                            <a class="dropdown-item" href="#">Account
                                Settings </a>
                            <a class="dropdown-item" href="#">
                                Earning Reports </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Logout
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <a class="btn btn-primary table-sm" href="{{ route('produk.create') }}">
                        Tambah Data
                    </a>
                    <hr>
                    <div class="card-body bg-light slimScroll" data-height="400">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable">
                                <thead class="thead-light">
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
                                                {{-- <a name="" id="" class="btn btn-warning btn-sm" href="#"
                                                role="button">Edit</a>
                                            <a name="" id="" class="btn btn-danger btn-sm" href="#"
                                                role="button">Delete</a> --}}

                                                <a href="#">
                                                    <span class="badge badge-pill badge-info">
                                                        <i class="icon-edit lblue"></i>
                                                    </span>
                                                </a>
                                                |
                                                <a href="#">
                                                    <span class="badge badge-pill badge-secondary">
                                                        <i class="icon-share-square-o"></i>
                                                    </span>
                                                </a>
                                                |
                                                <a href="#">
                                                    <span class="badge badge-pill badge-danger">
                                                        <i class="icon-close2"></i>
                                                    </span>

                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                {{-- <div class="card-footer white">
                    <a href="#" class="btn btn-outline-primary btn-xs">Tambah Data</a>
                    <a href="#" class="btn btn-outline-danger btn-xs">Delete All</a>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
