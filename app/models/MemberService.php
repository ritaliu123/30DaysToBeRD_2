<?php

namespace Rita\Model;

use Rita\Model\Dao\MemberDao;

/**
 * MemberService
 */
class MemberService
{

	public function checkMemeber($account, $password)
    {
        $MemberDao = new MemberDao;
        $checkMember = $MemberDao->checkMemeber($account, $password);
        return $checkMember;
    }

    public function getMemeberList()
    {
        $MemberDao = new MemberDao;
        $getMemeberList = $MemberDao->getMemeberList();
        return $getMemeberList;
    }

    public function getMemeber($memberId)
    {
        $MemberDao = new MemberDao;
        $getMemeber = $MemberDao->getMemeber($memberId);
        return $getMemeber;
    }

    public function addMemeber($account, $name, $password)
    {
        $MemberDao = new MemberDao;
        $addMemeber = $MemberDao->addMemeber($account, $name, $password);
        return $addMember;
    }

    public function updateMemeber($memberId, $account, $name, $password)
    {
        $MemberDao = new MemberDao;
        $updateMemeber = $MemberDao->updateMemeber($memberId, $account, $name, $password);
    }

    public function deleteMember($memberId)
    {
        $MemberDao = new MemberDao;
        $MemberDao->deleteMember($memberId);
    }


    public function countItem($item)
    {
        $MemberDao = new MemberDao();
        $countItem = $MemberDao->countItem($item);
        return $countItem;
    }
}

?>
