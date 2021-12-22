<?php 
 
namespace App\Http\Controllers;
use App\Models\Produk;

class ProdukController extends Controller {
	function index(){ 
		$user = request()->user();
		$data['list_produk'] = $user->produk;
        return view('admin.produk.index', $data);
	}
	function create(){
       return view('admin.produk.create');
	}

	function store(){
		$produk = new produk;
		$produk->id_user = request()->user()->id;
		$produk->Nama = request('Nama');
		$produk->stok = request('stok');
		$produk->Harga = request('Harga');
		$produk->Deskripsi = request('Deskripsi');
		$produk->save();

		return redirect('admin/produk')->with('success', 'Data Berhasil ditambah');
    }
	function show(produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.show', $data);
	}
	function edit(produk $produk){
		$data['produk'] = $produk;
		return view('admin.produk.edit', $data);
	}
	function update(produk $produk){
		$produk->Nama = request('Nama');
		$produk->stok = request('stok');
		$produk->Harga = request('Harga');
		$produk->Deskripsi = request('Deskripsi');
		$produk->save();
		return redirect('admin/produk')->with('success','Data Berhasil Diedit');

	}
	function destroy(produk $produk){
		$produk->delete();
		return redirect('admin/produk')->with('danger', 'Data Berhasil Dihapus');


	}

	function filter(){
		$nama = request('nama');
		$stok = explode(",", request('stok'));
		$harga_min = request('harga_min');
		$harga_max = request('harga_max');
		//$data['list_produk'] = Produk::where('nama', 'like', "%$nama%")->get();
		//$data['list_produk'] = Produk::whereIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereBetween('harga',[$harga_min,$harga_max] )->get();
		//$data['list_produk'] = Produk::where('stok', '<>', $stok)->get();
		//$data['list_produk'] = Produk::whereNotIn('stok', $stok)->get();
		//$data['list_produk'] = Produk::whereNotBetween('harga',[$harga_min,$harga_max] )->get();
		$data['list_produk'] = Produk::whereNotNull('stok')->get();
		//$data['list_produk'] = Produk::whereDate('created_at', ['2021-10-27', '2021-10-20'])->get();
	    //$data['list_produk'] = Produk::whereBetween('harga',[$harga_min,$harga_max] )->whereYear('created_at', '2021')->get();
		$data['nama'] = $nama;
		$data['Harga'] = request('Harga');
        return view('admin.produk.index', $data);
		
	}
}