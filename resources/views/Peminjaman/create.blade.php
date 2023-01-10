@extends('layout.template')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('peminjaman.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">No Ref</label>
                            <input type="text" name="no_ref" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">No Cust</label>
                            <input type="text" name="no_cus" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Cust</label>
                            <input type="text" name="nm_cus" id="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Produk</label>
                            <select class="form-control" name="produk" id="produk" onchange="changeValue(this.value)">
                                @php
                                    $jsArray = "var prdName = new Array();\n";
                                @endphp
                                <option selected disabled>Pilih Produk</option>
                                @foreach ($produk as $r)
                                    <option value="{{ $r->id }}">{{ $r->nm_produk }}</option>

                                    <?php
                                    $jsArray .=
                                        "prdName['" .
                                        $r->id .
                                        "'] = {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        harga : '" .
                                        addslashes($r->harga) .
                                        "',
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        stok : '" .
                                        addslashes($r->stok) .
                                        "'};";
                                    ?>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Harga Produk</label>
                                    <input type="number" name="harga" id="harga" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Stok</label>
                                    <input type="number" name="stok" id="stok" disabled class="form-control">
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Supir</label>
                            <select class="form-control" name="supir" id="supir">
                                <option selected disabled>Pilih Supir</option>
                                @php
                                    $ArraySupir = "var supirName = new Array();\n";
                                @endphp
                                @foreach ($supir as $r)
                                    <option value="{{ $r->supir_id }}" onchange="changeSupir(this.value)">
                                        {{ $r->nm_supir }}</option>

                                    @php
                                        $ArraySupir .= "supirName['" . $r->supir_id . "'] = { no_hp : " . addslashes($r->nohp) . ", alamat : '" . addslashes($r->alamat) . "'}; \n";
                                    @endphp
                                @endforeach
                            </select>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">No Hp</label>
                                    <input type="number" name="no_hp" id="no_hp" class="form-control" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input type="text" name="alamat" id="alamat" class="form-control" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Lama Pinjam</label>
                            <input type="number" name="lama_pinjam" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Pinjam</label>
                            <input type="date" name="tgl_pinjam" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Kembali</label>
                            <input type="date" name="tgl_kembali" class="form-control">
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
    {{ var_dump([$jsArray, $ArraySupir]) }}
    <script>
        @php
            echo $jsArray;
        @endphp

        function changeValue(x) {
            document.getElementById('harga').value = prdName[x].harga;
            document.getElementById('stok').value = prdName[x].stok;
        }
    </script>
    <script>
        @php
            echo $ArraySupir;
        @endphp

        function changeSupir(y) {
            console.log(y);
            document.getElementById('no_hp').value = supirName[y].no_hp;
            document.getElementById('alamat').value = supirName[y].alamat;
        }
    </script>
@endsection()
