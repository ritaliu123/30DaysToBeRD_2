<?php

namespace Rita\Controllers;

use Rita\Controllers\ControllerBase;
use Rita\Model\Dao\MemberDao;
use Rita\Model\MemberService;

//use Phalcon\Mvc\View;

/**
 * MemberController
 */
class MemberController extends ControllerBase
{
    /**
     * 宣告預設header為header頁
     *
     * @return void
     */
    public function initialize()
    {
        $this->view->setTemplateAfter('header');
    }

    /**
     * 登入頁
     *
     * @return void
     */
    public function loginAction()
    {
        $this->view->setTemplateAfter('loginheader');

        $account = $this->request->getPost("account");
        $password = $this->request->getPost("password");
        
        if ($account != "" && $password != "") {
            $MemberService = new MemberService();
            $memberId = $MemberService->checkMemeber($account, $password);
            if ($memberId) {
                $member = $MemberService->getMemeber($memberId);
                $this->session->set("memberName", $member->name);
                header("Location:http://rita.soez.tw/member");
            }
        }
    }

    /**
     * 會員清單
     *
     * @return void
     */
    public function memberAction()
    {
        $MemberService = new MemberService();
        $MemeberList = $MemberService->getMemeberList();
        $this->view->memberList = $MemeberList;
        $this->view->sessionName = $this->session->get("memberName");
        if ($this->request->getQuery("id")) {
        	//echo "123";
        }
        //exit();
    }

    /**
     * 會員資料
     *
     * @return void
     */
    public function profileAction()
    {
        $MemberService = new MemberService();
        $this->view->sessionName = $this->session->get("memberName");
        $a = $this->request->getQuery("memberId");
        echo $a;
        exit();

        $memberId = $this->request->getQuery("memberId");
        if ($memberId) {
            $member = $MemberService->getMemeber($memberId);
            $this->view->member = $member;
        }
    }

    /**
     * 註冊頁
     *
     * @return void
     */
    public function registerAction()
    {
        $this->view->setTemplateAfter('loginheader');
        $MemberService = new MemberService();
        $name = $this->request->getPost("name");
        $account = $this->request->getPost("account");
        $password = $this->request->getPost("password");
        if ($name && $account && $password) {
            $MemberService->addMemeber($account, $name, $password);
            header("Location:http://rita.soez.tw/member/login");
        }
    }
}



?>

