<?php

namespace Application\Model;

class Table
{
    protected $action_reason_id;
    protected $action_name;

    public function exchangeArray(array $data)
    {
        $this->id = $data['action_reason_id'];
        $this->name=$data['action_name'];
    }
    public function getReasonId()
    {
        return $this->action_reason_id;
    }
    public function getActionName()
    {
        return $this->action_name;
    }
}