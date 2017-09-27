<?php

namespace Rita\Controllers;

use Rita\Controllers\ControllerBase;
use Rita\Model\Dao\MemberDao;
use Phalcon\Mvc\View;


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
        $this->view->setTemplateAfter('loginheader');
    }

    /**
     * 會員清單
     *
     * @return void
     */
    public function memberAction()
    {
        
       $this->view->setTemplateAfter('header');

    	// $this->view->disableLevel(
     //        View::LEVEL_MAIN_LAYOUT
     //    );
     //    $this->view->disableLevel(
     //        View::LEVEL_LAYOUT
     //    );
        $memberDao = new MemberDao();
        $memberDa1 = $memberDao->checkMemeber("yyy@com.tw","123");
        echo $memberDa1;
        
    	exit();
    }

    /**
     * 會員資料
     *
     * @return void
     */
    public function profileAction()
    {
        $this->view->setTemplateAfter('header');
        $memberDao = new MemberDao();
        // echo "profileAction";
        // exit();
    }

    /**
     * 註冊頁
     *
     * @return void
     */
    public function registerAction()
    {
        $this->view->setTemplateAfter('loginheader');
        $memberDao = new MemberDao();
    }
}



?>

