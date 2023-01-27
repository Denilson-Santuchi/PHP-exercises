<?php
class Person
{
    // atributes
    private string $name;
    private int $age;
    private string $sexuality;

    // method
    public function doBirthday(): void
    {
        $this->age += 1;
    }

    // special method 
    public function __construct($na, $ag, $se)
    {
        $this->name = $na;
        $this->age = $ag;
        $this->sexuality = $se;
    }


    // getters and setters
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $na)
    {
        $this->name = $na;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(string $ag): void
    {
        $this->age = $ag;
    }

    public function getSexuality(): string
    {
        return $this->sexuality;
    }

    public function setSexuality(string $se): void
    {
        $this->sexuality = $se;
    }
}
