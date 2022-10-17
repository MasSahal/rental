@extends('layout.template')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('supir.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Kode Supir</label>
                            <input type="text" name="kd_supir" id=""
                                value="{{ 'SP' . time() . rand(10, 99) }}"class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Supir</label>
                            <input type="text" name="nm_supir" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No HP</label>
                            <input type="number" name="nohp" id="" class="form-control">
                        </div>

                        <label for="">Gender</label>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender" id=""
                                        value="L" checked>
                                    Laki-laki
                                </label>
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="gender" id=""
                                        value="P">
                                    Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <textarea name="ket" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
