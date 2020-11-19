<?php
declare(strict_types=1);

class User
{
    private string $birthNumber;
    private string $name;
    private string $surname;
    private array $bookedTests;
    private array $finishedTests;
    private string $password;
    public function __construct(string $birthNumber, string $name, string $surname, array $bookedTests, array $finishedTests, string $password)
    {
        $this->birthNumber = $birthNumber;
        $this->bookedTests = $bookedTests;
        $this->name = $name;
        $this->surname = $surname;
        $this->finishedTests = $finishedTests;
        $this->password = $password;
    }

    /**
     * @return int
     */
    public function getBirthNumber(): string
    {
        return $this->birthNumber;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return array
     */
    public function getBookedTests(): array
    {
        return $this->bookedTests;
    }

    /**
     * @return array
     */
    public function getFinishedTests(): array
    {
        return $this->finishedTests;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param int $birthNumber
     */
    public function setBirthNumber(string $birthNumber): void
    {
        $this->birthNumber = $birthNumber;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param array $bookedTests
     */
    public function setBookedTests(array $bookedTests): void
    {
        $this->bookedTests = $bookedTests;
    }

    /**
     * @param array $finishedTests
     */
    public function setFinishedTests(array $finishedTests): void
    {
        $this->finishedTests = $finishedTests;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }


}