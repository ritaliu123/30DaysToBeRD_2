<?php

namespace Rita\Model\ORM;

class Guestbook extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    public $guestbookId;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $memberId;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $message;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $replyCount;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $createTime;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("rita");
        $this->setSource("Guestbook");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'Guestbook';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Guestbook[]|Guestbook|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Guestbook|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
