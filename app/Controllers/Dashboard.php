<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashboard()
    {
        $data['title'] = 'Welcome !!';
        return view('/Dashboard/IndexView', $data);
    }

    // public function index()
    // {
    //     $this->load->helper('custom_helper');
    // }
}
