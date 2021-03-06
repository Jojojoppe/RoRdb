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
namespace RoRdb\Google\Service\Cloudbilling;

class AggregationInfo extends \RoRdb\Google\Model
{
    /**
     * @var int
     */
    public $aggregationCount;
    /**
     * @var string
     */
    public $aggregationInterval;
    /**
     * @var string
     */
    public $aggregationLevel;
    /**
     * @param int
     */
    public function setAggregationCount($aggregationCount)
    {
        $this->aggregationCount = $aggregationCount;
    }
    /**
     * @return int
     */
    public function getAggregationCount()
    {
        return $this->aggregationCount;
    }
    /**
     * @param string
     */
    public function setAggregationInterval($aggregationInterval)
    {
        $this->aggregationInterval = $aggregationInterval;
    }
    /**
     * @return string
     */
    public function getAggregationInterval()
    {
        return $this->aggregationInterval;
    }
    /**
     * @param string
     */
    public function setAggregationLevel($aggregationLevel)
    {
        $this->aggregationLevel = $aggregationLevel;
    }
    /**
     * @return string
     */
    public function getAggregationLevel()
    {
        return $this->aggregationLevel;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(AggregationInfo::class, 'RoRdb\\Google_Service_Cloudbilling_AggregationInfo');
