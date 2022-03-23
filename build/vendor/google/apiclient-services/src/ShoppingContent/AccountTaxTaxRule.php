<?php

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
namespace RoRdb\Google\Service\ShoppingContent;

class AccountTaxTaxRule extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $country;
    /**
     * @var string
     */
    public $locationId;
    /**
     * @var string
     */
    public $ratePercent;
    /**
     * @var bool
     */
    public $shippingTaxed;
    /**
     * @var bool
     */
    public $useGlobalRate;
    /**
     * @param string
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }
    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * @param string
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;
    }
    /**
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }
    /**
     * @param string
     */
    public function setRatePercent($ratePercent)
    {
        $this->ratePercent = $ratePercent;
    }
    /**
     * @return string
     */
    public function getRatePercent()
    {
        return $this->ratePercent;
    }
    /**
     * @param bool
     */
    public function setShippingTaxed($shippingTaxed)
    {
        $this->shippingTaxed = $shippingTaxed;
    }
    /**
     * @return bool
     */
    public function getShippingTaxed()
    {
        return $this->shippingTaxed;
    }
    /**
     * @param bool
     */
    public function setUseGlobalRate($useGlobalRate)
    {
        $this->useGlobalRate = $useGlobalRate;
    }
    /**
     * @return bool
     */
    public function getUseGlobalRate()
    {
        return $this->useGlobalRate;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(AccountTaxTaxRule::class, 'RoRdb\\Google_Service_ShoppingContent_AccountTaxTaxRule');
