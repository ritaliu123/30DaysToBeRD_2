<?php

namespace Rita\Controllers;

use Rita\Controllers\ControllerBase;
use Rita\Model\Dao\GuestbookDao;

class GuestbookController extends ControllerBase
{

    public function loginAction()
    {
        $GuestbookDao = new GuestbookDao();
    	echo "test123";
        exit();
    }
}

