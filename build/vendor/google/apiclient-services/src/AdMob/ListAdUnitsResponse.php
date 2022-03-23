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
namespace RoRdb\Google\Service\AdMob;

class ListAdUnitsResponse extends \RoRdb\Google\Collection
{
    protected $collection_key = 'adUnits';
    protected $adUnitsType = AdUnit::class;
    protected $adUnitsDataType = 'array';
    /**
     * @var string
     */
    public $nextPageToken;
    /**
     * @param AdUnit[]
     */
    public function setAdUnits($adUnits)
    {
        $this->adUnits = $adUnits;
    }
    /**
     * @return AdUnit[]
     */
    public function getAdUnits()
    {
        return $this->adUnits;
    }
    /**
     * @param string
     */
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    /**
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ListAdUnitsResponse::class, 'RoRdb\\Google_Service_AdMob_ListAdUnitsResponse');
