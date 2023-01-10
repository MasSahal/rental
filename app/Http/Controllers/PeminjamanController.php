<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Supir;
use Illuminate\Support\Facades\File;
use DB;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjamans = DB::table('peminjaman')
            ->join('produk', 'produk.id', '=', 'peminjaman.produk')
            ->join('supir', 'supir.supir_id', '=', 'peminjaman.sopir')
            ->get();

        $data =   [
            "sums" =>  DB::table('peminjaman')->select(DB::raw('SUM(total) as total_all'))->first()->total_all,
            "avg" =>  DB::table('peminjaman')->select(DB::raw('avg(total) as avg'))->first()->avg,
            "min" =>  DB::table('peminjaman')->select(DB::raw('min(total) as min'))->first()->min,
            "max" =>  DB::table('peminjaman')->select(DB::raw('max(total) as max'))->first()->max,
        ];

        // dd($data);
        return view('peminjaman.index', compact('peminjamans', 'data'))->with('i', (request()->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produk = Produk::all();
        $supir = Supir::all();
        return view('peminjaman.create', compact('produk', 'supir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_ref' => 'required',
            'no_cus' => 'required',
            'nm_cus' => 'required',
            'produk' => 'required',
            'sopir' => 'required',
            'jumlah' => 'required',
            'lama_pinjam' => 'required',
            'tgl_pinjam' => 'required',
            'tgl_kembali' => 'required',
        ]);

        $harga_kendaraan = $request->input('harga');
        $jml = $request->input('jumlah');
        $lama = $request->input('lama_pinjam');
        $harga_sopir = 50000;
        $total = (($harga_kendaraan * $jml) * $lama) + $harga_sopir;

        Peminjaman::create([
            'no_ref' => $request->no_ref,
            'no_cus' => $request->no_cus,
            'nm_cus' => $request->nm_cus,
            'produk' => $request->produk,
            'sopir' => $request->sopir,
            'jumlah' => $request->jumlah,
            'lama_pinjam' => $request->lama_pinjam,
            'tgl_pinjam' => $request->tgl_pinjam,
            'tgl_kembali' => $request->tgl_kembali,
            'total' => $total
        ]);
        return redirect()->route('peminjaman.index')
            ->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nm_produk' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'ket' => 'required',
        ]);

        $produk->update($request->all());
        return redirect()->route('produk.index')
            ->with('success', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        File::delete('data_file/' . $produk->gambar);

        $produk->delete();
        return redirect()->route('produk.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
