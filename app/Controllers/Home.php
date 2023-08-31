<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function saya($nama,$umur)
    {
        echo "nama saya ".$nama. ", umur saya ".$umur;
    }
}
