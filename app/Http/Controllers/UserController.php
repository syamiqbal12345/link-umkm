<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;
use App\UserForm;
use App\User;

class UserController extends Controller
{
    public function index()
    {
		$users = User::all();
		$data = [ 'users' => $users ];
		return view("users.index", $data);
	}

	public function create(FormBuilder $formBuilder)
	{
		$form = $formBuilder->create(UserForm::class, [
			'method' => 'POST', 'url' => route('user.store')
		]);

		$data = [
			'form' => $form
		];
		return view('users.create', $data);
	}

	public function store(Request $request)
	{
		$user = new User();
		$user->fill($request->all())->save();
		return 
		redirect(route('user.index'))->withMessage("Data telah
		disimpan");
	}

	public function edit($id, FormBuilder $formBuilder)
	{
		$user = User::find($id);
		$form = $formBuilder->create(UserForm::class, [
			'method' => 'POST', 'url' => route('user.update',
		['id' => $id]),
			'model' => $user
		]);

		$data = [
			'form' => $form
		];
		return view('users.create', $data);
	}
	public function update($id, Request $request)
	{
			$user = User::find($id);
			$user->fill($request->all())->save();
			return
		redirect(route('user.index'))->withMessage("Data telah
		disimpan");
	}

	public function delete($id)
	{
		User::destroy($id);
		return back()->withMessage("Data telah dihapus");
	}
}