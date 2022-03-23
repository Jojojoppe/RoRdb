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

class GoogleCloudApigeeV1CanaryEvaluationMetricLabels extends \RoRdb\Google\Model
{
    protected $internal_gapi_mappings = ["instanceId" => "instance_id"];
    /**
     * @var string
     */
    public $env;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $location;
    /**
     * @param string
     */
    public function setEnv($env)
    {
        $this->env = $env;
    }
    /**
     * @return string
     */
    public function getEnv()
    {
        return $this->env;
    }
    /**
     * @param string
     */
    public function setInstanceId($instanceId)
    {
        $this->instanceId = $instanceId;
    }
    /**
     * @return string
     */
    public function getInstanceId()
    {
        return $this->instanceId;
    }
    /**
     * @param string
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudApigeeV1CanaryEvaluationMetricLabels::class, 'RoRdb\\Google_Service_Apigee_GoogleCloudApigeeV1CanaryEvaluationMetricLabels');
