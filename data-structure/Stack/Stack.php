<?php

class Stack
{
    private $top = null;

    public function peek()
    {
        if ($this->top) {
            return $this->top->getData();
        }

        return null;
    }

    public function pop()
    {
        $this->top = $this->top->getNext();

        return $this;
    }

    public function push($data)
    {
        $this->top = new Node($data, $this->top);

        return $this;
    }
}
