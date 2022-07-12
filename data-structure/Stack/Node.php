<?php

class Node
{
    private mixed $data;
    private Node $next;

    public function __construct(mixed $data, ?Node $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }

    public function getData(): mixed
    {
        return $this->data;
    }

    public function setData(mixed $data): Node
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
