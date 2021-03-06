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
namespace RoRdb\Google\Service\ChromeManagement;

class GoogleChromeManagementV1CpuInfo extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $architecture;
    /**
     * @var int
     */
    public $maxClockSpeed;
    /**
     * @var string
     */
    public $model;
    /**
     * @param string
     */
    public function setArchitecture($architecture)
    {
        $this->architecture = $architecture;
    }
    /**
     * @return string
     */
    public function getArchitecture()
    {
        return $this->architecture;
    }
    /**
     * @param int
     */
    public function setMaxClockSpeed($maxClockSpeed)
    {
        $this->maxClockSpeed = $maxClockSpeed;
    }
    /**
     * @return int
     */
    public function getMaxClockSpeed()
    {
        return $this->maxClockSpeed;
    }
    /**
     * @param string
     */
    public function setModel($model)
    {
        $this->model = $model;
    }
    /**
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleChromeManagementV1CpuInfo::class, 'RoRdb\\Google_Service_ChromeManagement_GoogleChromeManagementV1CpuInfo');
