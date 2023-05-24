<?php

namespace App\Controllers;

class Highran extends BaseController
{
    public function highran()
    {
        $data['title'] = 'Welcome !!';
        return view('/Highran/IndexView', $data);
    }
}
