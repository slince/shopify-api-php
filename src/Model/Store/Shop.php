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

namespace Slince\Shopify\Model\Store;

class Shop
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
      */
    public function setName($name)
    {
        $this->name = $name;
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
      */
    public function setEmail($email)
    {
        $this->email = $email;
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
      */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTimeInterface $createdAt
      */
    public function setCreatedAt(\DateTimeInterface $createdAt)
    {
        $this->createdAt = $createdAt;
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
      */
    public function setCountry($country)
    {
        $this->country = $country;
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
      */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
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
      */
    public function setZip($zip)
    {
        $this->zip = $zip;
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
      */
    public function setCity($city)
    {
        $this->city = $city;
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
      */
    public function setSource($source)
    {
        $this->source = $source;
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
      */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTimeInterface $updatedAt
      */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt)
    {
        $this->updatedAt = $updatedAt;
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
      */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;
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
      */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
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
      */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
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
      */
    public function setPrimaryLocationId($primaryLocationId)
    {
        $this->primaryLocationId = $primaryLocationId;
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
      */
    public function setPrimaryLocale($primaryLocale)
    {
        $this->primaryLocale = $primaryLocale;
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
      */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
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
      */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
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
      */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
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
      */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
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
      */
    public function setIanaTimezone($ianaTimezone)
    {
        $this->ianaTimezone = $ianaTimezone;
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
      */
    public function setShopOwner($shopOwner)
    {
        $this->shopOwner = $shopOwner;
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
      */
    public function setMoneyFormat($moneyFormat)
    {
        $this->moneyFormat = $moneyFormat;
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
      */
    public function setMoneyWithCurrencyFormat($moneyWithCurrencyFormat)
    {
        $this->moneyWithCurrencyFormat = $moneyWithCurrencyFormat;
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
      */
    public function setWeightUnit($weightUnit)
    {
        $this->weightUnit = $weightUnit;
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
      */
    public function setProvinceCode($provinceCode)
    {
        $this->provinceCode = $provinceCode;
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
      */
    public function setTaxesIncluded($taxesIncluded)
    {
        $this->taxesIncluded = $taxesIncluded;
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
      */
    public function setTaxShipping($taxShipping)
    {
        $this->taxShipping = $taxShipping;
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
      */
    public function setCountyTaxes($countyTaxes)
    {
        $this->countyTaxes = $countyTaxes;
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
      */
    public function setPlanDisplayName($planDisplayName)
    {
        $this->planDisplayName = $planDisplayName;
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
      */
    public function setPlanName($planName)
    {
        $this->planName = $planName;
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
      */
    public function setHasDiscounts($hasDiscounts)
    {
        $this->hasDiscounts = $hasDiscounts;
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
      */
    public function setHasGiftCards($hasGiftCards)
    {
        $this->hasGiftCards = $hasGiftCards;
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
      */
    public function setMyshopifyDomain($myshopifyDomain)
    {
        $this->myshopifyDomain = $myshopifyDomain;
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
      */
    public function setGoogleAppsDomain($googleAppsDomain)
    {
        $this->googleAppsDomain = $googleAppsDomain;
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
      */
    public function setGoogleAppsLoginEnabled($googleAppsLoginEnabled)
    {
        $this->googleAppsLoginEnabled = $googleAppsLoginEnabled;
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
      */
    public function setMoneyInEmailsFormat($moneyInEmailsFormat)
    {
        $this->moneyInEmailsFormat = $moneyInEmailsFormat;
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
      */
    public function setMoneyWithCurrencyInEmailsFormat($moneyWithCurrencyInEmailsFormat)
    {
        $this->moneyWithCurrencyInEmailsFormat = $moneyWithCurrencyInEmailsFormat;
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
      */
    public function setEligibleForPayments($eligibleForPayments)
    {
        $this->eligibleForPayments = $eligibleForPayments;
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
      */
    public function setRequiresExtraPaymentsAgreement($requiresExtraPaymentsAgreement)
    {
        $this->requiresExtraPaymentsAgreement = $requiresExtraPaymentsAgreement;
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
      */
    public function setPasswordEnabled($passwordEnabled)
    {
        $this->passwordEnabled = $passwordEnabled;
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
      */
    public function setHasStoreFront($hasStoreFront)
    {
        $this->hasStoreFront = $hasStoreFront;
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
      */
    public function setEligibleForCardReaderGiveaway($eligibleForCardReaderGiveaway)
    {
        $this->eligibleForCardReaderGiveaway = $eligibleForCardReaderGiveaway;
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
      */
    public function setFinances($finances)
    {
        $this->finances = $finances;
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
      */
    public function setSetupRequired($setupRequired)
    {
        $this->setupRequired = $setupRequired;
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
      */
    public function setForceSsl($forceSsl)
    {
        $this->forceSsl = $forceSsl;
    }
}
