@extends('layout.template')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama Produk</label>
                            <input type="text" name="nm_produk" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Harga Produk</label>
                            <input type="number" name="harga" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Stok Produk</label>
                            <input type="number" name="stok" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Ket</label>
                            <textarea name="ket" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
