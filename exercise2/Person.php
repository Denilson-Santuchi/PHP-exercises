<?php
abstract class Person
{
    protected string $name;
    protected int $age;
    protected string $sexuality;
    protected int $experience;

    protected function addExp(): void
    {
        $this->experience++;
    }

    protected function getName(): string
    {
        return $this->name;
    }

    protected function setName($n): void
    {
        $this->name = $n;
    }

    protected function getAge(): int
    {
        return $this->age;
    }

    protected function setAge($a): void
    {
        $this->age = $a;
    }

    protected function getSexuality(): string
    {
        return $this->sexuality;
    }

    protected function setSexuality($s): void
    {
        $this->sexuality = $s;
    }

    protected function getExperience(): int
    {
        return $this->experience;
    }

    protected function setExperience($e): void
    {
        $this->experience = $e;
    }
}
