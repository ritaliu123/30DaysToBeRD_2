<?php

namespace Rita\Model\Dao;

use Rita\Model\ORM\Guestbook;

/**
 * GuestbookDao
 */
class GuestbookDao
{
    /**
     * 取得所有留言
     *
     * @return obj $guestbook
     */
    public function guestbookList()
    {
        $guestbook = Guestbook::find(["columns" => "guestbookId, memberId, message, replyCount ,createTime"]);
        return $guestbook;
    }

    /**
     * 新增留言
     *
     * @param int    $memberId 會員編號
     * @param string $message  留言
     *
     * @return viod
     */
    public function addMessage($memberId, $message)
    {
        $guestbook = new Guestbook;
        $guestbook->memberId = $memberId;
        $guestbook->message = $message;
        $guestbook->save();

        return $guestbook->guestbookId;
    }

    /**
     * 新增留言的回應數量
     *
     * @param int $guestbookId 留言編號
     *
     * @return void
     */
    public function addReplayCount($guestbookId)
    {
        $guestbook = Guestbook::findFirst("guestbookId = $guestbookId");
        $replayCount = $guestbook['replyCount'] + 1;
        $guestbook->replyCount = $replayCount;
        $guestbook->save();
    }

    /**
     * 刪除留言
     *
     * @param int $guestbookId 留言編號
     *
     * @return void
     */
    public function deleteMessage($guestbookId)
    {
        $guestbook = Guestbook::find("guestbookId = $guestbookId");
        $guestbook->delete();
    }
}


?>
