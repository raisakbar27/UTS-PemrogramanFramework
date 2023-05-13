<?php

namespace App\Controllers;

class Cv extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'CV RaisAkbarWibowo'
        ];
        return view('home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Tentang'
        ];
        return view('about', $data);
    }
}
