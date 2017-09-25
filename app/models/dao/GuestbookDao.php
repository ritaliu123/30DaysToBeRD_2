<?php

namespace Rita\Model\Dao;

class GuestbookDao
{
	// include("Guestbook.php");

	public function guestbookList()
    {
        $guestbook = new Guestbook();
        $guestbook = Guestbook::find("columns" => "guestbookId, memberId, message, replyCount ,createTime");
        return $guestbook;
    }

	// 傳入memberId、留言內容，新建留言
    public function addMessage($memberId,$message)
    {
        $guestbook = new Guestbook;
        $guestbook->memberId = $memberId;
        $guestbook->message = $message;
        $guestbook->save();
    }

    // 傳入留言id新增回應數量
    public function addReplayCount($guestbookId)
    {
        $guestbook = new Guestbook;
        $guestbook = Guestbook::findFirst("guestbookId = $guestbookId");
        $replayCount = $guestbook['replyCount'] + 1;
        $guestbook->replyCount = $replayCount;
        $guestbook->save();
    }

    // 傳入留言id，刪除留言
    public function deleteMessage($guestbookId)
    {
        $guestbook = new Guestbook;
        $guestbook = Guestbook::find("guestbookId = $guestbookId");
        $guestbook->delete();
    }
}

?>
