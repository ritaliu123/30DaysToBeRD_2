<?php

namespace Rita\Model\Dao;

use Rita\Model\ORM\Reply;

/**
 * ReplyDao
 */
class ReplyDao
{
    
    /**
     * 尋找留言內的所有回覆
     *
     * @param int $guestbookId 留言編號
     *
     * @return obj $reply
     */
    public function replyList($guestbookId)
    {
        $reply = Guestbook::find(
            [
                "guestbookId = $guestbookId",
                "columns" => "memberId,message,createTime",
            ]
        );
        return $reply;
    }

    /**
     * 新增回覆
     *
     * @param int    $guestbookId 留言編號
     * @param int    $memberId    會員編號
     * @param string $message     回覆
     *
     * @return int $reply
     */
    public function addReplay($guestbookId, $memberId, $message)
    {
        $reply = new Reply;
        $reply->guestbookId = $guestbookId;
        $reply->memberId = $memberId;
        $reply->message = $message;
        $reply->save();

        return $reply->replyId;
    }

    /**
     * 刪除回覆
     *
     * @param int $guestbookId 留言編號
     *
     * @return void
     */
    public function deleteReply($guestbookId)
    {
        $reply = new Reply;
        $reply = Reply::find("guestbookId = $guestbookId");
        $reply->delete();
    }


}

?>