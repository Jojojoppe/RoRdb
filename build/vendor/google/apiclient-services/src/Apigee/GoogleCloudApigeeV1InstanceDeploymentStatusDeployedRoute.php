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
namespace RoRdb\Google\Service\Apigee;

class GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute extends \RoRdb\Google\Model
{
    /**
     * @var string
     */
    public $basepath;
    /**
     * @var string
     */
    public $envgroup;
    /**
     * @var string
     */
    public $environment;
    /**
     * @var int
     */
    public $percentage;
    /**
     * @param string
     */
    public function setBasepath($basepath)
    {
        $this->basepath = $basepath;
    }
    /**
     * @return string
     */
    public function getBasepath()
    {
        return $this->basepath;
    }
    /**
     * @param string
     */
    public function setEnvgroup($envgroup)
    {
        $this->envgroup = $envgroup;
    }
    /**
     * @return string
     */
    public function getEnvgroup()
    {
        return $this->envgroup;
    }
    /**
     * @param string
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
    }
    /**
     * @return string
     */
    public function getEnvironment()
    {
        return $this->environment;
    }
    /**
     * @param int
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
    }
    /**
     * @return int
     */
    public function getPercentage()
    {
        return $this->percentage;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute::class, 'RoRdb\\Google_Service_Apigee_GoogleCloudApigeeV1InstanceDeploymentStatusDeployedRoute');
