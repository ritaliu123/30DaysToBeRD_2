<?php

namespace Rita\Model\Dao;

class ReplyDao
{
    include("Reply.php");

    
    //傳入留言id，找到該留言底下的回應
    public function replyList($guestbookId)
    {
        $reply = new Reply;
        $reply = Guestbook::find(
            [
                "guestbookId = $guestbookId",
                "columns" => "memberId,message,createTime",
            ]
        );
        return $reply;
    }

	// 傳入留言id、memberid、回應訊息，新增回應
    public function addReplay($guestbookId, $memberId, $message)
    {
        $reply = new Reply;
        $reply->guestbookId = $guestbookId;
        $reply->memberId = $memberId;
        $reply->message = $message;
        $reply->save();
    }

    // 傳入留言id，刪除回應
    public function deleteReply($guestbookId)
    {
        $reply = new Reply;
        $reply = Reply::find("guestbookId = $guestbookId")
        $reply->delete();
    }


}

?>