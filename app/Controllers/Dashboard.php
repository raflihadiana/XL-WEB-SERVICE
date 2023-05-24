<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashboard()
    {
        $data['title'] = 'Welcome !!';
        return view('/Dashboard/IndexView', $data);
    }
}
