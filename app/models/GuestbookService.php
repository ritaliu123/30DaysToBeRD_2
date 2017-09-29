<?php

namespace Rita\Model\Service;

use Rita\Model\Dao\GuestbookDao;
use Rita\Model\Dao\ReplyDao;

/**
 * GuestbookService
 */
class GuestbookService
{
	public function guestbookList()
    {
        $GuestbookDao = new GuestbookDao;
        $guestbookList = $GuestbookDao->guestbookList();
        return $guestbookList;
    }

	public function addMessage($memberId, $message)
    {
        $GuestbookDao = new GuestbookDao;
        $GuestbookDao = $GuestbookDao->addMessage($memberId, $message);
    }

    public function deleteMessage($guestbookId)
    {
        $GuestbookDao = new GuestbookDao;
        $ReplyDao = new ReplyDao;
        $deleteMessage = $GuestbookDao->deleteMessage($guestbookId);
        $deleteMessage = $ReplyDao->deleteReply($guestbookId);
    }

	public function replyList($guestbookId)
    {
        $ReplyDao = new ReplyDao;
        $replyList = $ReplyDao->replyList($guestbookId);
        return $replyList;
    }

	public function addReply($guestbookId, $memberId, $message)
    {
        $GuestbookDao = new GuestbookDao;
        $ReplyDao = new ReplyDao;
        $addReply = $ReplyDao->addReplay($guestbookId, $memberId, $message);
        $addReplayCount = $GuestbookDao->addReplayCount($guestbookId);
        return $addReply;
    }
}

?>
