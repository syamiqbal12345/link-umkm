<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kris\LaravelFormBuilder\FormBuilder;
use App\ItemTransaksiForm;
use App\ItemTransaksi;
use App\Barang;
use App\User;

class ItemTransaksiController extends Controller
{
    public function updateTransaksi(Request $request)
    {
        $action = $request->get("action", "update");
        if ($action == "update") {
            foreach ($request->get('item_transaksi') as $id=>$item) {
                $itemTransaksi = ItemTransaksi::find($id);
                $itemTransaksi->jumlah = $item['jumlah'];
                $itemTransaksi->save();
            }

            return back();
        }

    }

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
	    $user = Auth::user();
	    $pembeli = $user->pengguna;
		$data = $request->all();
		$barang = Barang::find($request->get('barang_id'));
        $data ['transaksi_id'] = 0;
        $data ['pembeli_id'] = $pembeli->id;
        $data ['harga'] = $barang->harga;
        $data ['total'] = $barang->harga * $request->get("jumlah");

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
