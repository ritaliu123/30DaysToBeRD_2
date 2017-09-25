<?php

namespace Rita\Controllers;

use Rita\Controllers\ControllerBase;
use Rita\Model\Dao\MemberDao;

class MemberController extends ControllerBase
{

    public function loginAction()
    {
        $memberDao = new MemberDao();
    	echo "test";
        exit();
    }
}

