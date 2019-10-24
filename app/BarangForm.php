<?php

namespace App;

use Kris\LaravelFormBuilder\Form;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class BarangForm extends Form
{
    public function buildForm()
    {
        $this
		->add("nama")
		->add("harga")
		->add("foto")

		->add('Simpan', 'submit')
		;
    }
}
