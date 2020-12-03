<?php


namespace Slince\Shopify\Resource\Access;


class AccessScope
{
    /**
     * @var string
     */
    protected $handle;

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
}