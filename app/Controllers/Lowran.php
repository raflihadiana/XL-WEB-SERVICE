<?php

namespace App\Controllers;

use App\Models\LowranModel;

class Lowran extends BaseController
{
    protected $lowranModel;
    public function __construct()
    {
        $this->lowranModel = new LowranModel();
    }
    public function lowran()
    {
        $lowran = $this->lowranModel->findAll();

        $data = [
            'title' => 'Data LowRAN',
            'lowran' => $lowran
        ];
        return view('/Lowran/IndexView', $data);
    }
}

