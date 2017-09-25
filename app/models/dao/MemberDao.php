<?php

namespace Rita\Model\Dao;

use Rita\Model\ORM\Member;

class MemberDao
{

	public function getMemeberList()
    {
        $member = new Member();
        $member = Member::find(["columns"=>"memberId, name, account, password ,createTime"]);
        return $member;
    }

    // 傳入memberId取得單一會員資料
    public function getMemeber($memberId)
    {
        $member = new Member();
        $member = Member::findFirst(
            [
                "memberId" => $memberId,
                "columns" => "memberId, name, account, password ,createTime",
            ]
        );
        return $member;
    }

   	//傳入會員帳號、姓名、密碼新增會員帳號
    public function addMemeber($account, $name, $password)
    {
        $member = new Member();
        $member->name = $name;
        $member->account = $account;
        $member->password = $password;
        $member->save();
    }

    //傳入會員id、帳號、名稱、密碼並更新
    public function updateMemeber($memberId, $account, $name, $password)
    {
        $member = new Member();
        $member = Member::findFirst("memberId = $memberId");
        $member->name = $name;
        $member->account = $account;
        $member->password = $password;
        $member->save();
    }

	// 傳入memberid並刪除
    public function deleteMember($memberId)
    {
        $member = new Member();
        $member = Member::findFirst("memberId = $memberId");
        $member->delete();
    }
}

?>
