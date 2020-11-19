<?php


class FinishedTest
{
    private string $orderTestDate;
    private string $testDate;
    private string $type;
    private string $result;
    private string  $tested_user;

    /**
     * FinishedTest constructor.
     * @param string $orderTestDate
     * @param string $testDate
     * @param string $type
     * @param bool $result
     * @param string $tested_user
     */
    public function __construct(string $orderTestDate, string $testDate, string $type, bool $result, string $tested_user)
    {
        $this->orderTestDate = $orderTestDate;
        $this->testDate = $testDate;
        $this->type = $type;
        $this->result = $result;
        $this->tested_user = $tested_user;
    }

    /**
     * @return string
     */
    public function getOrderTestDate(): string
    {
        return $this->orderTestDate;
    }

    /**
     * @param string $orderTestDate
     */
    public function setOrderTestDate(string $orderTestDate): void
    {
        $this->orderTestDate = $orderTestDate;
    }

    /**
     * @return string
     */
    public function getTestDate(): string
    {
        return $this->testDate;
    }

    /**
     * @param string $testDate
     */
    public function setTestDate(string $testDate): void
    {
        $this->testDate = $testDate;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return bool
     */
    public function isResult(): bool
    {
        return $this->result;
    }

    /**
     * @param bool $result
     */
    public function setResult(bool $result): void
    {
        $this->result = $result;
    }

    /**
     * @return string
     */
    public function getTestedUser(): string
    {
        return $this->tested_user;
    }

    /**
     * @param string $tested_user
     */
    public function setTestedUser(string $tested_user): void
    {
        $this->tested_user = $tested_user;
    }

}