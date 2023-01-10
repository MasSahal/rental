@extends('layout.template')

@section('title', 'Data peminjaman - Rental')
@section('title-page', 'Page Data peminjaman')

@section('content')
    <!--Today Tab Start-->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header  white d-flex justify-content-between ">
                    <h6>Data peminjaman Rental</h6>
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
                    <a class="btn btn-primary table-sm" href="{{ route('peminjaman.create') }}">
                        Tambah Data
                    </a>
                    <hr>
                    <div class="card-body bg-light slimScroll" data-height="400">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="dataTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>No</th>
                                        <th>No Customer</th>
                                        <th>No Ref</th>
                                        <th>Nama Customer</th>
                                        <th>Nama Produk</th>
                                        <th>Nama Supir</th>
                                        <th>Lama Pinjam</th>
                                        <th>Jumlah</th>
                                        <th>Tgl Pinjam</th>
                                        <th>Tgl Kembali</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($peminjamans as $peminjaman)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $peminjaman->no_cus }}</td>
                                            <td>{{ $peminjaman->no_ref }}</td>
                                            <td>{{ $peminjaman->nm_cus }}</td>
                                            <td>{{ $peminjaman->nm_produk }}</td>
                                            <td>{{ $peminjaman->nm_supir }}</td>
                                            <td>{{ $peminjaman->lama_pinjam }}</td>
                                            <td>{{ $peminjaman->jumlah }}</td>
                                            <td>{{ $peminjaman->tgl_pinjam }}</td>
                                            <td>{{ $peminjaman->tgl_kembali }}</td>
                                            <td>{{ $peminjaman->total }}</td>
                                            <td>
                                                <form action="{{ route('peminjaman.destroy', $peminjaman->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="btn btn-warning"
                                                        href="{{ route('peminjaman.edit', $peminjaman->id) }}">Ubah</a>
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="javascript: return confirm('apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>

                                    <tr>
                                        <th colspan="10" align="right">Total</th>
                                        <th colspan="2" align="left">{{ $data['sums'] }}</th>
                                    </tr>
                                    <tr>
                                        <th colspan="10" align="right">Rata rata</th>
                                        <th colspan="2" align="left">{{ $data['avg'] }}</th>
                                    </tr>
                                    <tr>
                                        <th colspan="10" align="right">Minimal</th>
                                        <th colspan="2" align="left">{{ $data['min'] }}</th>
                                    </tr>
                                    <tr>
                                        <th colspan="10" align="right">Makasimal</th>
                                        <th colspan="2" align="left">{{ $data['max'] }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
