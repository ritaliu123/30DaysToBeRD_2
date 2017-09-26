<?php

namespace Rita\Controllers;

use Rita\Controllers\ControllerBase;
use Rita\Model\Dao\GuestbookDao;

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
        $GuestbookDao = new GuestbookDao();
        echo "guestbookAction";
        exit();
    }

    /**
     * 留言頁
     *
     * @return void
     */
    public function messageAction()
    {
        $GuestbookDao = new GuestbookDao();
        echo "messageAction";
        exit();
    }

    /**
     * 回覆頁
     *
     * @return void
     */
    public function replyAction()
    {
        $GuestbookDao = new GuestbookDao();
        echo "replyAction";
        exit();
    }
}

?>
