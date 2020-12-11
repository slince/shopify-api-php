<?php

declare(strict_types=1);

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Model\Orders\Common;

use Slince\Shopify\Model\Common\PriceSet;

class LineItemDuty extends PriceSet
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $harmonizedSystemCode;

    /**
     * @var TaxLine[]
     */
    protected $taxLines;

    /**
     * @var string
     */
    protected $adminGraphqlApiId;

    /**
     * @return int
     */
    public function getId(): ?int
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
    public function getHarmonizedSystemCode(): string
    {
        return $this->harmonizedSystemCode;
    }

    /**
     * @param string $harmonizedSystemCode
     */
    public function setHarmonizedSystemCode(string $harmonizedSystemCode): void
    {
        $this->harmonizedSystemCode = $harmonizedSystemCode;
    }

    /**
     * @return TaxLine[]
     */
    public function getTaxLines(): array
    {
        return $this->taxLines;
    }

    /**
     * @param TaxLine[] $taxLines
     */
    public function setTaxLines(array $taxLines): void
    {
        $this->taxLines = $taxLines;
    }

    /**
     * @return string
     */
    public function getAdminGraphqlApiId(): string
    {
        return $this->adminGraphqlApiId;
    }

    /**
     * @param string $adminGraphqlApiId
     */
    public function setAdminGraphqlApiId(string $adminGraphqlApiId): void
    {
        $this->adminGraphqlApiId = $adminGraphqlApiId;
    }
}
