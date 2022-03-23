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
namespace RoRdb\Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1beta1WorkloadSaaEnrollmentResponse extends \RoRdb\Google\Collection
{
    protected $collection_key = 'setupErrors';
    /**
     * @var string[]
     */
    public $setupErrors;
    /**
     * @var string
     */
    public $setupStatus;
    /**
     * @param string[]
     */
    public function setSetupErrors($setupErrors)
    {
        $this->setupErrors = $setupErrors;
    }
    /**
     * @return string[]
     */
    public function getSetupErrors()
    {
        return $this->setupErrors;
    }
    /**
     * @param string
     */
    public function setSetupStatus($setupStatus)
    {
        $this->setupStatus = $setupStatus;
    }
    /**
     * @return string
     */
    public function getSetupStatus()
    {
        return $this->setupStatus;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudAssuredworkloadsV1beta1WorkloadSaaEnrollmentResponse::class, 'RoRdb\\Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1beta1WorkloadSaaEnrollmentResponse');