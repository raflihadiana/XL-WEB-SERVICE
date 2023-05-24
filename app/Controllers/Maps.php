<?php

namespace App\Controllers;

class Maps extends BaseController
{
    public function maps()
    {
        $data['title'] = 'Welcome !!';
        return view('/Maps/IndexView', $data);
    }
}