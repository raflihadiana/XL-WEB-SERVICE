<?php


function Auth()
{
    $MemberModel = new \App\Models\MemberModel();
    if(session()->get('userId'))
    {
        $userId = session()->get('userId');
        $getMember = $MemberModel->where('id',$userId)
                                    ->where('member_status','A')
                                    ->first();
        if($getMember!=null)
        {
            return $getMember;
        }
        else {
            return false;
        }
    }
    return false;
}