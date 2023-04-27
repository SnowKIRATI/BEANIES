<?php

class Cart
{
    protected array $basket = [];

    public function __construct(array $data)
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $this->basket = $_SESSION['cart'];


        if (isset($data['id'])) {
            $id = $data['id'];

            if (!isset($this->basket[$id])) {
                $this->basket[$id] = 0;
            }

            $mode = 'add';
            if (isset($data['mode'])) {
                $mode = $data['mode'];
            }

            if ($mode == 'minus') {
                $this->minus($id);
            } else {
                $this->plus($id);
            }
        }

        if (isset($data['empty'])) {
            $this->empty();
        }
        $this->addBasket();
    }
    public function plus(int $id): self
    {
        $this->basket[$id]++;
        return $this;
    }
    public function minus(int $id): self
    {
        $this->basket[$id]--;
        if ($this->basket[$id] <= 0) {
            unset($this->basket[$id]);
        }
        return $this;
    }
    public function addBasket(): void
    {
        $_SESSION['cart'] = $this->basket;
    }

    public function empty(): void
    {
        $this->basket = [];
    }

    public function delete(int $id): void
    {
        unset($this->basket[$id]);
    }

    public function getBasket(): array
    {
        return $this->basket;
    }

    public function setBasket(array $basket): self
    {
        $this->basket = $basket;
        return $this;
    }

}