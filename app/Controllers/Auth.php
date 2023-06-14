<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        if (Auth() != false) {
            return redirect()->to('dashboard');
        }
        $data['title'] = 'Dashboard';
        return view('Auth/IndexView', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth');
    }

    public function login()
    {
        $MemberModel = new \App\Models\MemberModel();
        $member_username = $this->request->getPost('username');
        $member_password = $this->request->getPost('password');
        $getMember = $MemberModel->where('member_username', $member_username)->first();
        
        if ($getMember !== null) {
            if (is_string($member_password) && password_verify($member_password, $getMember->member_password)) {
                if ($getMember->member_status == 'A') {
                    session()->set('userId', $getMember->id);
                    return redirect()->to('dashboard');
                } else {
                    session()->setFlashData(['info' => 'error', 'message' => 'Akun telah dinonaktifkan, hubungi admin']);
                }
            } else {
                session()->setFlashData(['info' => 'error', 'message' => 'Username atau password salah']);
            }
        } else {
            session()->setFlashData(['info' => 'error', 'message' => 'Username atau password salah']);
        }
        
        return redirect()->to('auth');
    }    
}
