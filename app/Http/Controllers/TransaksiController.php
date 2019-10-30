<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\TransaksiForm;
use App\Transaksi;
use App\Pembeli;
use App\Pengguna;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function index()
    {
		$transaksi = Transaksi::all();

		$data = [ 'transaksi' => $transaksi ];
		return view("transaksi.index", $data);
	}

    public function myTransaction()
    {
        $transaksi = Transaksi::where("pembeli_id", \auth()->user()->pengguna->id);

        $data = [ 'transaksi' => $transaksi ];
        return view("transaksi.index", $data);
    }

    public function show($id)
    {
        $transaksi = Transaksi::find($id);
        $data = [ 'transaksi' => $transaksi ];
        return view("transaksi.show", $data);
    }

	public function create(FormBuilder $formBuilder)
	{


		$form = $formBuilder->create(TransaksiForm::class, [
			'method' => 'POST', 'url' => route('transaksi.store')
		]);

		$data = [
			'form' => $form
		];
		return view('transaksi.create', $data);
	}

	public function store(Request $request)
	{
		$pengguna = Pengguna::where('user_id', '=', Auth::user()->id)->firstOrFail();
		$user = Auth::user();
		//$pembeli = $user->pengguna->;
		$data = $request->all();
		if ($pengguna->user_id == Auth::user()->id) {
			$data['pembeli_id'] = $pengguna->id;
		}

		$transaksi = new Transaksi();
		$transaksi->fill($data)->save();
		return redirect(route('transaksi.index'))->withMessage("Data telah disimpan");
	}

	public function edit($id, FormBuilder $formBuilder)
	{
		$barang = Transaksi::find($id);
		$form = $formBuilder->create(TransaksiForm::class, [
			'method' => 'POST', 'url' => route('transaksi.update', ['id' => $id]),
			'model' => $barang
		]);

		$data = [
			'form' => $form
		];
		return view('transaksi.create', $data);
	}
	public function update($id, Request $request)
	{
			$transaksi = Transaksi::find($id);
			$transaksi->fill($request->all())->save();
			return redirect(route('transaksi.index'))->withMessage("Data telah disimpan");
	}

	public function delete($id)
	{
		Transaksi::destroy($id);
		return back()->withMessage("Data telah dihapus");
	}
}
