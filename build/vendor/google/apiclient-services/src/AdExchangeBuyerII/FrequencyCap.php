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
namespace RoRdb\Google\Service\AdExchangeBuyerII;

class FrequencyCap extends \RoRdb\Google\Model
{
    /**
     * @var int
     */
    public $maxImpressions;
    /**
     * @var int
     */
    public $numTimeUnits;
    /**
     * @var string
     */
    public $timeUnitType;
    /**
     * @param int
     */
    public function setMaxImpressions($maxImpressions)
    {
        $this->maxImpressions = $maxImpressions;
    }
    /**
     * @return int
     */
    public function getMaxImpressions()
    {
        return $this->maxImpressions;
    }
    /**
     * @param int
     */
    public function setNumTimeUnits($numTimeUnits)
    {
        $this->numTimeUnits = $numTimeUnits;
    }
    /**
     * @return int
     */
    public function getNumTimeUnits()
    {
        return $this->numTimeUnits;
    }
    /**
     * @param string
     */
    public function setTimeUnitType($timeUnitType)
    {
        $this->timeUnitType = $timeUnitType;
    }
    /**
     * @return string
     */
    public function getTimeUnitType()
    {
        return $this->timeUnitType;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(FrequencyCap::class, 'RoRdb\\Google_Service_AdExchangeBuyerII_FrequencyCap');
