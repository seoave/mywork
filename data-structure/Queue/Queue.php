<?php

use DataStructure\Queue\Node;

class Queue
{
    private $last = null;

    public function enqueue($data)
    {
        $this->last = new Node($data, $this->last);

        return $this;
    }

    public function deenqueue()
    {
        $current = $this->last;
        while ($current->getBefore() !== null) {
            if ($current->getBefore()->getBefore() === null) {
                $current->setBefore(null);

                return $this;
            }

            $current = $current->getBefore();
        }

        return $this;
    }

    public function peek()
    {
        $current = $this->last;
        if ($current === null) {
            return null;
        }

        while ($current !== null) {
            if ($current->getBefore() === null) {
                return $current->getData();
            }

            $current = $current->getBefore();
        }

        return null;
    }
}
