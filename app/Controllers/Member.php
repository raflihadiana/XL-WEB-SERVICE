<?php

namespace App\Controllers;

class Member extends BaseController
{
    public $title = 'Member';
    public $url = 'member';

    public function index()
    {
        $data['title'] = $this->title;
        $data['url'] = $this->url;
        $data['page'] = 'Data ' . $this->title;
        $MemberModel = new \App\Models\MemberModel();
        $data['getData'] = $MemberModel->orderBy('updated_at', 'DESC')
            ->findAll();
        return view('Member/IndexView', $data);
    }

    public function form($id = '')
    {
        $MemberModel = new \App\Models\MemberModel();
        $data['title'] = $this->title;
        $data['url'] = $this->url;
        if ($id != '') {
            $getData = $MemberModel->asArray()->find($id);
        } else {
            $getData = null;
        }
        $data['getData'] = $getData;
        $data['page'] = 'Form ' . $this->title;
        return view('Member/FormView', $data);
    }

    public function save()
    {
        $MemberModel = new \App\Models\MemberModel();
        $data = $this->request->getPost();

        $file = $this->request->getFile('file');
        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/member', $newName);
            $data['member_foto'] = $newName;
        } 

        if($this->request->getPost('member_password')!='')
        {
            $data['member_password'] = password_hash($this->request->getPost('member_password'),PASSWORD_DEFAULT);
        }
        else {
            unset($data['member_password']);
        }


        $save = $MemberModel->save($data);
        if ($save) {
            session()->setFlashData(['info' => 'success', 'message' => 'Sukses disimpan']);
            return redirect()->to($this->url);
        } else {
            session()->setFlashdata('hasForm', $this->request->getPost());
            session()->setFlashdata('validation', $MemberModel->errors());
            return redirect()->to($this->url . '/form/' . $this->request->getPost('id'));
        }
    }

    public function delete($id = '')
    {
        $MemberModel = new \App\Models\MemberModel();
        $MemberModel->delete($id);
        session()->setFlashData(['info' => 'success', 'message' => 'Sukses dihapus']);
        return redirect()->to($this->url);
    }

    public function checkusername($member_username,$id='')
    {
        $MemberModel = new \App\Models\MemberModel();
        $checkUser = $MemberModel->where('member_username',$member_username);
        if($id!='')
        {
            $checkUser->where('id!=',$id);
        }

        if($checkUser->first()==null)
        {
            $status = true;
        }
        else {
            $status = false;
        }
        return $this->response->setJson(['status'=>$status]);
    }
    
}
