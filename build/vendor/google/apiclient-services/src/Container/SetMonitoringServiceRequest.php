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
namespace RoRdb\Google\Service\Container;

class SetMonitoringServiceRequest extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $monitoringService;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $zone;
    /**
     * @param string
     */
    public function setClusterId($clusterId)
    {
        $this->clusterId = $clusterId;
    }
    /**
     * @return string
     */
    public function getClusterId()
    {
        return $this->clusterId;
    }
    /**
     * @param string
     */
    public function setMonitoringService($monitoringService)
    {
        $this->monitoringService = $monitoringService;
    }
    /**
     * @return string
     */
    public function getMonitoringService()
    {
        return $this->monitoringService;
    }
    /**
     * @param string
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;
    }
    /**
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }
    /**
     * @param string
     */
    public function setZone($zone)
    {
        $this->zone = $zone;
    }
    /**
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(SetMonitoringServiceRequest::class, 'RoRdb\\Google_Service_Container_SetMonitoringServiceRequest');