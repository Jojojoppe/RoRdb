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
namespace RoRdb\Google\Service\DisplayVideo;

class ExchangeConfigEnabledExchange extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $exchange;
    /**
     * @var string
     */
    public $googleAdManagerAgencyId;
    /**
     * @var string
     */
    public $googleAdManagerBuyerNetworkId;
    /**
     * @var string
     */
    public $seatId;
    /**
     * @param string
     */
    public function setExchange($exchange)
    {
        $this->exchange = $exchange;
    }
    /**
     * @return string
     */
    public function getExchange()
    {
        return $this->exchange;
    }
    /**
     * @param string
     */
    public function setGoogleAdManagerAgencyId($googleAdManagerAgencyId)
    {
        $this->googleAdManagerAgencyId = $googleAdManagerAgencyId;
    }
    /**
     * @return string
     */
    public function getGoogleAdManagerAgencyId()
    {
        return $this->googleAdManagerAgencyId;
    }
    /**
     * @param string
     */
    public function setGoogleAdManagerBuyerNetworkId($googleAdManagerBuyerNetworkId)
    {
        $this->googleAdManagerBuyerNetworkId = $googleAdManagerBuyerNetworkId;
    }
    /**
     * @return string
     */
    public function getGoogleAdManagerBuyerNetworkId()
    {
        return $this->googleAdManagerBuyerNetworkId;
    }
    /**
     * @param string
     */
    public function setSeatId($seatId)
    {
        $this->seatId = $seatId;
    }
    /**
     * @return string
     */
    public function getSeatId()
    {
        return $this->seatId;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ExchangeConfigEnabledExchange::class, 'RoRdb\\Google_Service_DisplayVideo_ExchangeConfigEnabledExchange');
