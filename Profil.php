<?php

namespace App\Controllers;
use App\Models\PraktikanModel;

class Profil extends BaseController
{
    public function index()
    {
        $model = new PraktikanModel();
        $data['praktikan'] = $model->getData();
        return view('profil', $data);
    }
}
