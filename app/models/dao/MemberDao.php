<?php

namespace Rita\Model\Dao;

use Rita\Model\ORM\Member;

/**
 * memberDao
 */
class MemberDao
{

    /**
     * 取得所有會員資料
     *
     * @return obj $member
     */
    public function getMemeberList()
    {
        $member = Member::find(["columns" => "memberId, name, account, password ,createTime"]);
        return $member;
    }

    /**
     * 取得單一會員資料
     *
     * @param int $memberId 會員編號
     *
     * @return obj $member
     */
    public function getMemeber($memberId)
    {
        $member = Member::findFirst(
            [
                "memberId = $memberId",
                "columns" => "memberId, name, account, password ,createTime",
            ]
        );
        return $member;
    }

    /**
     * 新增會員
     *
     * @param string $account  會員帳號
     * @param string $name     會員姓名
     * @param string $password 會員密碼
     *
     * @return int memberId
     */
    public function addMemeber($account, $name, $password)
    {
        $member = new Member();
        $member->name = $name;
        $member->account = $account;
        $member->password = $password;
        $member->save();

        return $member->memberId;
    }

    /**
     * 更新會員資料
     *
     * @param int    $memberId 會員編號
     * @param string $account  會員帳號
     * @param string $name     會員姓名
     * @param string $password 會員密碼
     *
     * @return void
     */
    public function updateMemeber($memberId, $account, $name, $password)
    {
        $member = new Member();
        $member = Member::findFirst("memberId = $memberId");
        $member->name = $name;
        $member->account = $account;
        $member->password = $password;
        $member->save();
    }

    /**
     * 刪除會員資料
     *
     * @param string $memberId 會員編號
     *
     * @return void
     */
    public function deleteMember($memberId)
    {
        $member = Member::findFirst("memberId = $memberId");
        $member->delete();
    }
}

?>
