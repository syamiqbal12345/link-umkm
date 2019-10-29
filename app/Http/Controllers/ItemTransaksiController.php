<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\ItemTransaksiForm;
use App\ItemTransaksi;
use App\Barang;
use App\User;

class ItemTransaksiController extends Controller
{
    public function index()
    {
		$itemtansaksi = ItemTransaksi::all();
		$data = [ 'itemtransaksi' => $itemtansaksi ];
		return view("itemtransaksi.index", $data);
	}

	public function create(FormBuilder $formBuilder)
	{

		$form = $formBuilder->create(ItemTransaksiForm::class, [
			'method' => 'POST', 'url' => route('itemtransaksi.store')
		]);

		$data = [
			'form' => $form
		];
		return view('itemtransaksi.create', $data);
	}

	public function store(Request $request)
	{
		$user = \Auth::user();

		$data = $request->all();

        $data ['transaksi_id'] = 0;
        $data ['barang_id'] = 0;

		$itemtransaksi = new ItemTransaksi();
		$itemtransaksi->fill($data)->save();
		return redirect(route('itemtransaksi.index'))->withMessage("Data telah disimpan");
	}

	public function edit($id, FormBuilder $formBuilder)
	{
		$itemtansaksi = ItemTransaksi::find($id);
		$form = $formBuilder->create(ItemTransaksiForm::class, [
			'method' => 'POST', 'url' => route('itemtransaksi.update', ['id' => $id]),

		]);

		$data = [
			'form' => $form
		];
		return view('itemtransaksi.create', $data);
	}
	public function update($id, Request $request)
	{
			$itemtransaksi = ItemTransaksi::find($id);
			$itemtransaksi->fill($request->all())->save();
			return redirect(route('itemtransaksi.index'))->withMessage("Data telah disimpan");
	}

	public function delete($id)
	{
		ItemTransaksi::destroy($id);
		return back()->withMessage("Data telah dihapus");
	}
}
