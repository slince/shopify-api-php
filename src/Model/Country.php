<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Model;

class Country extends Model
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var float
     */
    protected $tax;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $taxName;

    /**
     * @var Province[]
     */
    protected $provinces;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *

     */
    public function setName($name)
    {
        $this->name = $name;


    }

    /**
     * @return float
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param float $tax
     *

     */
    public function setTax($tax)
    {
        $this->tax = $tax;


    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     *

     */
    public function setCode($code)
    {
        $this->code = $code;


    }

    /**
     * @return string
     */
    public function getTaxName()
    {
        return $this->taxName;
    }

    /**
     * @param string $taxName
     *

     */
    public function setTaxName($taxName)
    {
        $this->taxName = $taxName;


    }

    /**
     * @return Province[]
     */
    public function getProvinces()
    {
        return $this->provinces;
    }

    /**
     * @param Province[] $provinces
     *

     */
    public function setProvinces($provinces)
    {
        $this->provinces = $provinces;


    }

    public function addProvince(Province $province)
    {
        $this->provinces[] = $province;
    }
}