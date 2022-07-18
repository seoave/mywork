<?php

namespace DataStructure\Queue;

class Node
{
    private $data;
    private $before;

    public function __construct($data, ?Node $before = null)
    {
        $this->data = $data;
        $this->before = $before;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getBefore(): ?Node
    {
        return $this->before;
    }

    public function setBefore(?Node $before): void
    {
        $this->before = $before;
    }
}
