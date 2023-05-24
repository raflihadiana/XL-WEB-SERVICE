<?php

namespace App\Controllers;

class Lowran extends BaseController
{
    public function lowran()
    {
        $data['title'] = 'Welcome !!';
        return view('/Lowran/IndexView', $data);
    }
}
