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
namespace RoRdb\Google\Service\CloudRun;

class ServiceStatus extends \RoRdb\Google\Collection
{
    protected $collection_key = 'traffic';
    protected $addressType = Addressable::class;
    protected $addressDataType = '';
    protected $conditionsType = GoogleCloudRunV1Condition::class;
    protected $conditionsDataType = 'array';
    /**
     * @var string
     */
    public $latestCreatedRevisionName;
    /**
     * @var string
     */
    public $latestReadyRevisionName;
    /**
     * @var int
     */
    public $observedGeneration;
    protected $trafficType = TrafficTarget::class;
    protected $trafficDataType = 'array';
    /**
     * @var string
     */
    public $url;
    /**
     * @param Addressable
     */
    public function setAddress(Addressable $address)
    {
        $this->address = $address;
    }
    /**
     * @return Addressable
     */
    public function getAddress()
    {
        return $this->address;
    }
    /**
     * @param GoogleCloudRunV1Condition[]
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;
    }
    /**
     * @return GoogleCloudRunV1Condition[]
     */
    public function getConditions()
    {
        return $this->conditions;
    }
    /**
     * @param string
     */
    public function setLatestCreatedRevisionName($latestCreatedRevisionName)
    {
        $this->latestCreatedRevisionName = $latestCreatedRevisionName;
    }
    /**
     * @return string
     */
    public function getLatestCreatedRevisionName()
    {
        return $this->latestCreatedRevisionName;
    }
    /**
     * @param string
     */
    public function setLatestReadyRevisionName($latestReadyRevisionName)
    {
        $this->latestReadyRevisionName = $latestReadyRevisionName;
    }
    /**
     * @return string
     */
    public function getLatestReadyRevisionName()
    {
        return $this->latestReadyRevisionName;
    }
    /**
     * @param int
     */
    public function setObservedGeneration($observedGeneration)
    {
        $this->observedGeneration = $observedGeneration;
    }
    /**
     * @return int
     */
    public function getObservedGeneration()
    {
        return $this->observedGeneration;
    }
    /**
     * @param TrafficTarget[]
     */
    public function setTraffic($traffic)
    {
        $this->traffic = $traffic;
    }
    /**
     * @return TrafficTarget[]
     */
    public function getTraffic()
    {
        return $this->traffic;
    }
    /**
     * @param string
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(ServiceStatus::class, 'RoRdb\\Google_Service_CloudRun_ServiceStatus');
