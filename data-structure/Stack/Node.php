<?php

class Node
{
    private $data;
    private $next;

    public function __construct($data, ?Node $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data): Node
    {
        $this->data = $data;

        return $this;
    }

    public function getNext(): ?Node
    {
        return $this->next;
    }

    public function setNext(?Node $next): Node
    {
        $this->next = $next;

        return $this;
    }
}
