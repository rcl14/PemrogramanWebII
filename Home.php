<?php

namespace App\Controllers;
use App\Models\PraktikanModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new PraktikanModel();
        $data['praktikan'] = $model->getData();
        return view('beranda', $data);
    }
}
