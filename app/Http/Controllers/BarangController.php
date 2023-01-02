<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class BarangController extends Controller
{
	public function index()
	{
		$barang = Barang::get();

		return view('barang.index', ['data' => $barang]);
	}

	public function tambah()
	{
		$kategori = Kategori::get();

		return view('barang.form', ['kategori' => $kategori]);
	}

	public function simpan(Request $request)
	{
		$data = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
		];

		Barang::create($data);

		return redirect()->route('barang');
	}

	public function edit($id)
	{
		$barang = Barang::find($id)->first();
		$kategori = Kategori::get();

		return view('barang.form', ['barang' => $barang, 'kategori' => $kategori]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'kode_barang' => $request->kode_barang,
			'nama_barang' => $request->nama_barang,
			'id_kategori' => $request->id_kategori,
			'harga' => $request->harga,
			'jumlah' => $request->jumlah,
		];

		Barang::find($id)->update($data);

		return redirect()->route('barang');
	}

	public function hapus($id)
	{
		Barang::find($id)->delete();

		return redirect()->route('barang');
	}
}
