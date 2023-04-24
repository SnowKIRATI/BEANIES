<?php
class Bonnet
{
    public const AVAILABLE_SIZES =
        [
            'XS',
            'S',
            'M',
            'L',
            'XL',
        ];
    public const AVAILABLE_MATERIAL =
        [
            'Cachemire',
            'Coton',
            'Laine',
            'Soie',
        ];

    protected string $name;
    protected float $price;
    protected string $description;
    protected string $img;
    protected array $size;
    protected array $material;

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
    public function getSize(): array
    {
        return $this->size;
    }
    public function setSize(array $size): self
    {
        $this->size = $size;
        return $this;
    }

    // Material
    public function getMaterial(): array
    {
        return $this->material;
    }
    public function setMaterial(array $material): self
    {
        $this->material = $material;
        return $this;
    }



}