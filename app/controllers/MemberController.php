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
                $this->response->redirect("http://rita.soez.tw/member");
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
        if ($this->session->get("memberName")) {
            $this->view->sessionName = $this->session->get("memberName");
        } else {
            $this->response->redirect();
        }

        $MemberService = new MemberService();
        $MemeberList = $MemberService->getMemeberList();
        // 會員總數
        $countMember = $MemberService->countItem($MemeberList);
        // 總共幾頁
        $pages = ceil($countMember / 5);
        $this->view->pages = $pages;
        $this->view->memberList = $MemeberList;

        $this->view->sessionName = $this->session->get("memberName");

        $deleteMemberId = $this->request->getQuery("memberId");
        if ($deleteMemberId) {
            $MemberService->deleteMember($deleteMemberId);
            $this->response->redirect("http://rita.soez.tw/member");

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
        if ($this->session->get("memberName")) {
            $this->view->sessionName = $this->session->get("memberName");
        } else {
            $this->response->redirect();
        }

        $MemberService = new MemberService();
        $this->view->sessionName = $this->session->get("memberName");
        $memberId = $this->request->getQuery("memberId");
        if ($memberId) {
            $member = $MemberService->getMemeber($memberId);
        }
        $this->view->member = $member;
        // var_dump($member);
        // exit();


        $account = $this->request->getPost("account");
        $password = $this->request->getPost("password");
        $name = $this->request->getPost("name");
        $memberId = $this->request->getPost("memberId");
        if ($account && $password && $name && $memberId) {
            $member = $MemberService->updateMemeber($memberId, $account, $name, $password);
            $this->response->redirect("http://rita.soez.tw/member");

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
            $this->response->redirect("http://rita.soez.tw/member/login");
        }
    }
}



?>

