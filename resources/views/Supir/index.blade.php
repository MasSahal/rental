@extends('layout.template')

@section('title', 'Data Supir - Rental')
@section('title-page', 'Page Data Supir')

@section('breadcrumb')
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active">Supir</li>
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
                                    <th>Kode Supir</th>
                                    <th>Nama Supir</th>
                                    <th>No Hp</th>
                                    <th>Gender</th>
                                    <th>Alamat</th>
                                    <th>Keterangan</th>
                                    <th>Cretaed</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($record as $no => $r)
                                    <tr>
                                        <td>{{ $no += 1 }}</td>
                                        <td>{{ $r->kd_supir }}</td>
                                        <td>{{ $r->nm_supir }}</td>
                                        <td>{{ $r->nohp }}</td>
                                        <td>{{ $r->gender }}</td>
                                        <td>{{ $r->alamat }}</td>
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
@endsection
