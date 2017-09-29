<?php

namespace Rita\Controllers;

use Rita\Controllers\ControllerBase;
use Rita\Model\Dao\GuestbookDao;
use Rita\Model\GuestbookService;

//use Phalcon\Mvc\View;

/**
 * GuestbookController
 */
class GuestbookController extends ControllerBase
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
     * 留言板
     *
     * @return void
     */
    public function guestbookAction()
    {
        if ($this->session->get("memberName")) {
            $this->view->sessionName = $this->session->get("memberName");
        } else {
            $this->response->redirect();
        }

        $GuestbookService = new GuestbookService();
        $guestbookList = $GuestbookService->guestbookList();
        $this->view->guestbookList = $guestbookList;
        $replyList = $GuestbookService->replyList();
        $this->view->replyList = $replyList;

    }

    /**
     * 留言頁
     *
     * @return void
     */
    public function messageAction()
    {
        if ($this->session->get("memberName")) {
            $this->view->sessionName = $this->session->get("memberName");
        } else {
            $this->response->redirect();
        }

        $GuestbookService = new GuestbookService();
        // echo "messageAction";
        // exit();
    }

    /**
     * 回覆頁
     *
     * @return void
     */
    public function replyAction()
    {
        if ($this->session->get("memberName")) {
            $this->view->sessionName = $this->session->get("memberName");
        } else {
            $this->response->redirect();
        }

        $GuestbookService = new GuestbookService();
        // echo "replyAction";
        // exit();
    }

    public function apiGuestbookAction($memberId, $message)
    {

        $guestbookService = new guestbookService();
        $guestbookService->addMessage($memberId, $message);
    }
}

?>
