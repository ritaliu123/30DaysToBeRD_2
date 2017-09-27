<?php

namespace Rita\Controllers;

use Rita\Controllers\ControllerBase;
use Rita\Model\Dao\GuestbookDao;
use Phalcon\Mvc\View;


/**
 * GuestbookController
 */
class GuestbookController extends ControllerBase
{

    /**
     * 留言板
     *
     * @return void
     */
    public function guestbookAction()
    {
        $this->view->setTemplateAfter('header');
        $GuestbookDao = new GuestbookDao();
        // echo "guestbookAction";
        // exit();
    }

    /**
     * 留言頁
     *
     * @return void
     */
    public function messageAction()
    {
        $this->view->setTemplateAfter('header');
        $GuestbookDao = new GuestbookDao();
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
        $this->view->setTemplateAfter('header');
        $GuestbookDao = new GuestbookDao();
        // echo "replyAction";
        // exit();
    }
}

?>
