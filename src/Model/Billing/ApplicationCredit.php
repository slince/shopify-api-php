<?php


namespace Slince\Shopify\Model\Billing;


class ApplicationCredit
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $amount;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var true|null
     */
    protected $test;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getAmount(): string
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount(string $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return true|null
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    /**
     * @param true|null $test
     */
    public function setTest(?bool $test): void
    {
        $this->test = $test;
    }
}