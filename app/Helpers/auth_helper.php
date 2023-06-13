<?php


function Auth()
{
    $PenggunaModel = new \App\Models\MemberModel();
    if(session()->get('userId'))
    {
        $userId = session()->get('userId');
        $getPengguna = $PenggunaModel->where('id',$userId)
                                    ->where('member_status','A')
                                    ->first();
        if($getPengguna!=null)
        {
            return $getPengguna;
        }
        else {
            return false;
        }
    }
    return false;
}