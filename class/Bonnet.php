<?php

class Bonnet 
{
    protected string $name;
    protected float $price;
    protected string $description;
    protected string $img;

    // Name
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    // Price
    public function getPrice(): float
    {
        return $this->price;
    }
    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }

    // Description
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    // Img
    public function getImg(): string
    {
        return $this->img;
    }
    public function setImg(string $img): self
    {
        $this->img = $img;
        return $this;
    }


}