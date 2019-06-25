<?php

/*
 * This file is part of the slince/shopify-api-php
 *
 * (c) Slince <taosikai@yeah.net>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Slince\Shopify\Manager\Shop;

use Slince\Shopify\Common\Model\Model;

class Shop extends Model
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $domain;

    /**
     * @var \DateTimeInterface
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $province;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $address1;

    /**
     * @var string
     */
    protected $zip;

    /**
     * @var string
     */
    protected $city;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $phone;

    /**
     * @var string
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $customerEmail;

    /**
     * @var float
     */
    protected $latitude;

    /**
     * @var float
     */
    protected $longitude;

    /**
     * @var int
     */
    protected $primaryLocationId;

    /**
     * @var string
     */
    protected $primaryLocale;

    /**
     * @var string
     */
    protected $address2;

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
    protected $currency;

    /**
     * @var string
     */
    protected $timezone;

    /**
     * @var string
     */
    protected $ianaTimezone;

    /**
     * @var string
     */
    protected $shopOwner;

    /**
     * @var string
     */
    protected $moneyFormat;

    /**
     * @var string
     */
    protected $moneyWithCurrencyFormat;

    /**
     * @var string
     */
    protected $weightUnit;

    /**
     * @var string
     */
    protected $provinceCode;

    /**
     * @var bool
     */
    protected $taxesIncluded;

    /**
     * @var string
     */
    protected $taxShipping;

    /**
     * @var string
     */
    protected $countyTaxes;

    /**
     * @var string
     */
    protected $planDisplayName;

    /**
     * @var string
     */
    protected $planName;

    /**
     * @var bool
     */
    protected $hasDiscounts;

    /**
     * @var bool
     */
    protected $hasGiftCards;

    /**
     * @var string
     */
    protected $myshopifyDomain;

    /**
     * @var string
     */
    protected $googleAppsDomain;

    /**
     * @var string
     */
    protected $googleAppsLoginEnabled;

    /**
     * @var string
     */
    protected $moneyInEmailsFormat;

    /**
     * @var string
     */
    protected $moneyWithCurrencyInEmailsFormat;

    /**
     * @var bool
     */
    protected $eligibleForPayments;

    /**
     * @var bool
     */
    protected $requiresExtraPaymentsAgreement;

    /**
     * @var bool
     */
    protected $passwordEnabled;

    /**
     * @var bool
     */
    protected $hasStoreFront;

    /**
     * @var bool
     */
    protected $eligibleForCardReaderGiveaway;

    /**
     * @var bool
     */
    protected $finances;

    /**
     * @var bool
     */
    protected $setupRequired;

    /**
     * @var bool
     */
    protected $forceSsl;

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
     * @return Shop
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return Shop
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * @param string $domain
     *
     * @return Shop
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
     *
     * @return Shop
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
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
     * @return Shop
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
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
     * @return Shop
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
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
     * @return Shop
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
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
     * @return Shop
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
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
     * @return Shop
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return Shop
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return Shop
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     *
     * @return Shop
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * @param string $customerEmail
     *
     * @return Shop
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param float $latitude
     *
     * @return Shop
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param float $longitude
     *
     * @return Shop
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @return integer
     */
    public function getPrimaryLocationId()
    {
        return $this->primaryLocationId;
    }

    /**
     * @param string $primaryLocationId
     *
     * @return Shop
     */
    public function setPrimaryLocationId($primaryLocationId)
    {
        $this->primaryLocationId = $primaryLocationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryLocale()
    {
        return $this->primaryLocale;
    }

    /**
     * @param string $primaryLocale
     *
     * @return Shop
     */
    public function setPrimaryLocale($primaryLocale)
    {
        $this->primaryLocale = $primaryLocale;

        return $this;
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
     * @return Shop
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
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
     * @return Shop
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;

        return $this;
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
     * @return Shop
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return Shop
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $timezone
     *
     * @return Shop
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @return string
     */
    public function getIanaTimezone()
    {
        return $this->ianaTimezone;
    }

    /**
     * @param string $ianaTimezone
     *
     * @return Shop
     */
    public function setIanaTimezone($ianaTimezone)
    {
        $this->ianaTimezone = $ianaTimezone;

        return $this;
    }

    /**
     * @return string
     */
    public function getShopOwner()
    {
        return $this->shopOwner;
    }

    /**
     * @param string $shopOwner
     *
     * @return Shop
     */
    public function setShopOwner($shopOwner)
    {
        $this->shopOwner = $shopOwner;

        return $this;
    }

    /**
     * @return string
     */
    public function getMoneyFormat()
    {
        return $this->moneyFormat;
    }

    /**
     * @param string $moneyFormat
     *
     * @return Shop
     */
    public function setMoneyFormat($moneyFormat)
    {
        $this->moneyFormat = $moneyFormat;

        return $this;
    }

    /**
     * @return string
     */
    public function getMoneyWithCurrencyFormat()
    {
        return $this->moneyWithCurrencyFormat;
    }

    /**
     * @param string $moneyWithCurrencyFormat
     *
     * @return Shop
     */
    public function setMoneyWithCurrencyFormat($moneyWithCurrencyFormat)
    {
        $this->moneyWithCurrencyFormat = $moneyWithCurrencyFormat;

        return $this;
    }

    /**
     * @return string
     */
    public function getWeightUnit()
    {
        return $this->weightUnit;
    }

    /**
     * @param string $weightUnit
     *
     * @return Shop
     */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;

        return $this;
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
     * @return Shop
     */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;

        return $this;
    }

    /**
     * @return bool
     */
    public function isTaxesIncluded()
    {
        return $this->taxesIncluded;
    }

    /**
     * @param bool $taxesIncluded
     *
     * @return Shop
     */
    public function setTaxesIncluded($taxesIncluded)
    {
        $this->taxesIncluded = $taxesIncluded;

        return $this;
    }

    /**
     * @return string
     */
    public function getTaxShipping()
    {
        return $this->taxShipping;
    }

    /**
     * @param string $taxShipping
     *
     * @return Shop
     */
    public function setTaxShipping($taxShipping)
    {
        $this->taxShipping = $taxShipping;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountyTaxes()
    {
        return $this->countyTaxes;
    }

    /**
     * @param string $countyTaxes
     *
     * @return Shop
     */
    public function setCountyTaxes($countyTaxes)
    {
        $this->countyTaxes = $countyTaxes;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanDisplayName()
    {
        return $this->planDisplayName;
    }

    /**
     * @param string $planDisplayName
     *
     * @return Shop
     */
    public function setPlanDisplayName($planDisplayName)
    {
        $this->planDisplayName = $planDisplayName;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanName()
    {
        return $this->planName;
    }

    /**
     * @param string $planName
     *
     * @return Shop
     */
    public function setPlanName($planName)
    {
        $this->planName = $planName;

        return $this;
    }

    /**
     * @return bool
     */
    public function isHasDiscounts()
    {
        return $this->hasDiscounts;
    }

    /**
     * @param bool $hasDiscounts
     *
     * @return Shop
     */
    public function setHasDiscounts($hasDiscounts)
    {
        $this->hasDiscounts = $hasDiscounts;

        return $this;
    }

    /**
     * @return bool
     */
    public function isHasGiftCards()
    {
        return $this->hasGiftCards;
    }

    /**
     * @param bool $hasGiftCards
     *
     * @return Shop
     */
    public function setHasGiftCards($hasGiftCards)
    {
        $this->hasGiftCards = $hasGiftCards;

        return $this;
    }

    /**
     * @return string
     */
    public function getMyshopifyDomain()
    {
        return $this->myshopifyDomain;
    }

    /**
     * @param string $myshopifyDomain
     *
     * @return Shop
     */
    public function setMyshopifyDomain($myshopifyDomain)
    {
        $this->myshopifyDomain = $myshopifyDomain;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleAppsDomain()
    {
        return $this->googleAppsDomain;
    }

    /**
     * @param string $googleAppsDomain
     *
     * @return Shop
     */
    public function setGoogleAppsDomain($googleAppsDomain)
    {
        $this->googleAppsDomain = $googleAppsDomain;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoogleAppsLoginEnabled()
    {
        return $this->googleAppsLoginEnabled;
    }

    /**
     * @param string $googleAppsLoginEnabled
     *
     * @return Shop
     */
    public function setGoogleAppsLoginEnabled($googleAppsLoginEnabled)
    {
        $this->googleAppsLoginEnabled = $googleAppsLoginEnabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getMoneyInEmailsFormat()
    {
        return $this->moneyInEmailsFormat;
    }

    /**
     * @param string $moneyInEmailsFormat
     *
     * @return Shop
     */
    public function setMoneyInEmailsFormat($moneyInEmailsFormat)
    {
        $this->moneyInEmailsFormat = $moneyInEmailsFormat;

        return $this;
    }

    /**
     * @return string
     */
    public function getMoneyWithCurrencyInEmailsFormat()
    {
        return $this->moneyWithCurrencyInEmailsFormat;
    }

    /**
     * @param string $moneyWithCurrencyInEmailsFormat
     *
     * @return Shop
     */
    public function setMoneyWithCurrencyInEmailsFormat($moneyWithCurrencyInEmailsFormat)
    {
        $this->moneyWithCurrencyInEmailsFormat = $moneyWithCurrencyInEmailsFormat;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEligibleForPayments()
    {
        return $this->eligibleForPayments;
    }

    /**
     * @param bool $eligibleForPayments
     *
     * @return Shop
     */
    public function setEligibleForPayments($eligibleForPayments)
    {
        $this->eligibleForPayments = $eligibleForPayments;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRequiresExtraPaymentsAgreement()
    {
        return $this->requiresExtraPaymentsAgreement;
    }

    /**
     * @param bool $requiresExtraPaymentsAgreement
     *
     * @return Shop
     */
    public function setRequiresExtraPaymentsAgreement($requiresExtraPaymentsAgreement)
    {
        $this->requiresExtraPaymentsAgreement = $requiresExtraPaymentsAgreement;

        return $this;
    }

    /**
     * @return bool
     */
    public function isPasswordEnabled()
    {
        return $this->passwordEnabled;
    }

    /**
     * @param bool $passwordEnabled
     *
     * @return Shop
     */
    public function setPasswordEnabled($passwordEnabled)
    {
        $this->passwordEnabled = $passwordEnabled;

        return $this;
    }

    /**
     * @return bool
     */
    public function isHasStoreFront()
    {
        return $this->hasStoreFront;
    }

    /**
     * @param bool $hasStoreFront
     *
     * @return Shop
     */
    public function setHasStoreFront($hasStoreFront)
    {
        $this->hasStoreFront = $hasStoreFront;

        return $this;
    }

    /**
     * @return bool
     */
    public function isEligibleForCardReaderGiveaway()
    {
        return $this->eligibleForCardReaderGiveaway;
    }

    /**
     * @param bool $eligibleForCardReaderGiveaway
     *
     * @return Shop
     */
    public function setEligibleForCardReaderGiveaway($eligibleForCardReaderGiveaway)
    {
        $this->eligibleForCardReaderGiveaway = $eligibleForCardReaderGiveaway;

        return $this;
    }

    /**
     * @return bool
     */
    public function isFinances()
    {
        return $this->finances;
    }

    /**
     * @param bool $finances
     *
     * @return Shop
     */
    public function setFinances($finances)
    {
        $this->finances = $finances;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSetupRequired()
    {
        return $this->setupRequired;
    }

    /**
     * @param bool $setupRequired
     *
     * @return Shop
     */
    public function setSetupRequired($setupRequired)
    {
        $this->setupRequired = $setupRequired;

        return $this;
    }

    /**
     * @return bool
     */
    public function isForceSsl()
    {
        return $this->forceSsl;
    }

    /**
     * @param bool $forceSsl
     *
     * @return Shop
     */
    public function setForceSsl($forceSsl)
    {
        $this->forceSsl = $forceSsl;

        return $this;
    }
}