<?php

namespace Rita\Controllers;

use Rita\Controllers\ControllerBase;
use Rita\Model\Dao\MemberDao;

/**
 * MemberController
 */
class MemberController extends ControllerBase
{

    /**
     * 登入頁
     *
     * @return void
     */
    public function loginAction()
    {
        $memberDao = new MemberDao();
        echo "loginAction";
        exit();
    }

    /**
     * 會員清單
     *
     * @return void
     */
    public function memberlistAction()
    {
        $memberDao = new MemberDao();
        echo "memberlistAction";
        exit();
    }

    /**
     * 會員資料
     *
     * @return void
     */
    public function profileAction()
    {
        $memberDao = new MemberDao();
        echo "profileAction";
        exit();
    }

    /**
     * 註冊頁
     *
     * @return void
     */
    public function registerAction()
    {
        $memberDao = new MemberDao();
        echo "registerAction";
        exit();
    }
}

?>

