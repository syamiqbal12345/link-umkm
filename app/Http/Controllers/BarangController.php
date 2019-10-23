<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\BarangForm;
use App\Barang;

class BarangController extends Controller
{
    public function index()
    {
		$barang = Barang::all();
		$data = [ 'barang' => $barang ];
		return view("barang.index", $data);
	}

	public function create(FormBuilder $formBuilder)
	{
		$form = $formBuilder->create(BarangForm::class, [
			'method' => 'POST', 'url' => route('barang.store')
		]);

		$data = [
			'form' => $form
		];
		return view('barang.create', $data);
	}

	public function store(Request $request)
	{
		$barang = new Barang();
		$barang->fill($request->all())->save();
		return
		redirect(route('barang.index'))->withMessage("Data telah
		disimpan");
	}

	public function edit($id, FormBuilder $formBuilder)
	{
		$barang = Barang::find($id);
		$form = $formBuilder->create(BarangForm::class, [
			'method' => 'POST', 'url' => route('barang.update',
		['id' => $id]),
			'model' => $user
		]);

		$data = [
			'form' => $form
		];
		return view('barang.create', $data);
	}
	public function update($id, Request $request)
	{
			$barang = Barang::find($id);
			$barang->fill($request->all())->save();
			return
		redirect(route('barang.index'))->withMessage("Data telah
		disimpan");
	}

	public function delete($id)
	{
		Barang::destroy($id);
		return back()->withMessage("Data telah dihapus");
	}
}