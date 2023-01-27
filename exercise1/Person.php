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

    public function details(): void
    {
        echo "O(a) " . $this->getName() . " tem " . $this->getAge() . " anos e é do sexo " . $this->getSexuality() . ".";
    }

    // special method 
    public function __construct(string $na, int $ag, string $se)
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

    public function setName(string $na): void
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
