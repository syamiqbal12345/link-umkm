<?php

namespace App;

use Kris\LaravelFormBuilder\Form;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class UserForm extends Form
{
    public function buildForm()
    {
		$this
		->add("username", 'text')
		->add("password", 'password')

		->add("nama")
		->add("nomor_ktp")
		->add("kelamin")
		->add("alamat")
		->add("email")

		->add('Simpan', 'submit')
		;
    }
}
