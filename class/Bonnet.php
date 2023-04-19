<?php

class Bonnet 
{
    protected string $name;
    protected float $price;
    protected string $description;
    protected string $img;
    protected string $size;
    protected string $material;

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

    // Size
    public function getSize(): string
    {
        return $this->size;
    }
    public function setSize(string $size): self
    {
        $this->size = $size;
        return $this;
    }

    // Material
    public function getMaterial(): string
    {
        return $this->material;
    }
    public function setMaterial(string $material): self
    {
        $this->material = $material;
        return $this;
    }
    


}