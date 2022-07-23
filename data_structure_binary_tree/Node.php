<?php

namespace DataStructure\Tree;

class Node
{
    private $data;
    private $left = null;
    private $right = null;

    public function __construct(int $data, ?Node $left = null, ?Node $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }

    public function insert(int $data)
    {
        if ($data > $this->getData()) {
            // right branch
            if ($this->getRight() === null) {
                $this->setRight(new Node($data));
            } else {
                $this->getRight()->insert($data);
            }
        } else {
            // left branch
            if ($this->getLeft() === null) {
                $this->setLeft(new Node($data));
            } else {
                $this->getLeft()->insert($data);
            }
        }

        return $this;
    }

    public function search($value)
    {
        if ($this->data === null) {
            return false;
        }

        if ($value === $this->data) {
            return true;
        }

        if ($value > $this->data) {
            // to the right branch
            $this->getRight()->search($value);
        } else {
            //to the left branch
            $this->getLeft()->search($value);
        }

        return false;
    }


    public function getData(): int
    {
        return $this->data;
    }

    public function getLeft(): ?Node
    {
        return $this->left;
    }

    public function setLeft(?Node $left): void
    {
        $this->left = $left;
    }

    public function getRight(): ?Node
    {
        return $this->right;
    }

    public function setRight(?Node $right): void
    {
        $this->right = $right;
    }
}
