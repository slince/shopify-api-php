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

class Location extends Model
{
    use AdminGraphqlApiId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $deletedAt;

    /**
     * @var string
     */
    protected $address1;

    /**
     * @var string
     */
    protected $address2;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $zip;

    /**
     * @var string
     */
    protected $province;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var int
     */
    protected $phone;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $countryName;

    /**
     * @var string
     */
    protected $provinceCode;

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
     * @return Location
     */
    public function setName($name)
    {
        $this->name = $name;


    }

    /**
     * @return string
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * @param string $deletedAt
     *
     * @return Location
     */
    public function setDeletedAt($deletedAt)
    {
        $this->deletedAt = $deletedAt;


    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     *
     * @return Location
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;


    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     *
     * @return Location
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;


    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return Location
     */
    public function setCity($city)
    {
        $this->city = $city;


    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     *
     * @return Location
     */
    public function setZip($zip)
    {
        $this->zip = $zip;


    }

    /**
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     *
     * @return Location
     */
    public function setProvince($province)
    {
        $this->province = $province;


    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return Location
     */
    public function setCountry($country)
    {
        $this->country = $country;


    }

    /**
     * @return int
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param int $phone
     *
     * @return Location
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;


    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     *
     * @return Location
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;


    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     *
     * @return Location
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;


    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     *
     * @return Location
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;


    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param string $countryName
     *
     * @return Location
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;


    }

    /**
     * @return string
     */
    public function getProvinceCode()
    {
        return $this->provinceCode;
    }

    /**
     * @param string $provinceCode
     *
     * @return Location
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;


    }
}