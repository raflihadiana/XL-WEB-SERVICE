<?php

namespace App\Controllers;

class Member extends BaseController
{
    public function member()
    {
        $data['title'] = 'Welcome !!';
        return view('/Member/IndexView', $data);
    }
}
