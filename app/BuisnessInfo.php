<?php declare(strict_types=1);

namespace App;

class BuisnessInfo
{
    private string $name;
    private int $regNumber;
    private string $type;
    private string $address;

    public function __construct
    (
        string $name,
        int $regNumber,
        string $type,
        string $address,
    )
    {
        $this->name = $name;
        $this->regNumber =$regNumber;
        $this->type = $type;
        $this->address =$address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRegNumber()
    {
        return $this->regNumber;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getAddress()
    {
        return $this->address;
    }
}