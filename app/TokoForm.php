<?php

namespace App;

use Kris\LaravelFormBuilder\Form;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class TokoForm extends Form
{
    public function buildForm()
    {
        $this
        ->add("nama")
        ->add("alamat")
		->add("pemilik")
		->add("ktp_pemilik")
		->add("nomor_hp")
		->add("telepon")
		->add("email")
		->add("status")

		->add('Simpan', 'submit')
		;
    }
}
