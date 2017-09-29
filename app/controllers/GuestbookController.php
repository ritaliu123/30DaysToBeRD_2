<?php

namespace Rita\Controllers;

use Rita\Controllers\ControllerBase;
use Rita\Model\Dao\GuestbookDao;
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
        $GuestbookDao = new GuestbookDao();
        // echo "replyAction";
        // exit();
    }
}

?>
