<?php

namespace App\Controllers;

class Maps extends BaseController
{
    public function index()
    {
        $data['title'] = 'Welcome !!';
        return view('/Maps/IndexView', $data);
    }
}