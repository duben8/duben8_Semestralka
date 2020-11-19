<?php
declare(strict_types=1);

class BookedTest
{
    private string $type;
    private string $orderingUser;
    private string $orderDate;
    public function __construct($orderDate, $type,$orderingUser)
    {

        $this->orderDate = $orderDate;
        $this->type = $type;
        $this->orderingUser = $orderingUser;
    }

    /**
     * @return string
     */
    public function getOrderDate(): string
    {
        return $this->orderDate;
    }

    /**
     * @param string $orderDate
     */
    public function setOrderDate(string $orderDate): void
    {
        $this->orderDate = $orderDate;
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
     * @return string
     */
    public function getOrderingUser(): string
    {
        return $this->orderingUser;
    }

    /**
     * @param string $orderingUser
     */
    public function setOrderingUser(string $orderingUser): void
    {
        $this->orderingUser = $orderingUser;
    }

}