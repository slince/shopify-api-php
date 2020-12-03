<?php


namespace Slince\Shopify\Model\Orders\Common;

class DraftOrderShippingLine
{
    /**
     * @var bool
     */
    protected $custom;

    /**
     * @var string
     */
    protected $handle;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var float
     */
    protected $price;

    /**
     * @return bool
     */
    public function isCustom(): bool
    {
        return $this->custom;
    }

    /**
     * @param bool $custom
     */
    public function setCustom(bool $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @return string
     */
    public function getHandle(): string
    {
        return $this->handle;
    }

    /**
     * @param string $handle
     */
    public function setHandle(string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}