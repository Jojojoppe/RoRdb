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

class GoogleCloudApigeeV1ListOfDevelopersResponse extends \RoRdb\Google\Collection
{
    protected $collection_key = 'developer';
    protected $developerType = GoogleCloudApigeeV1Developer::class;
    protected $developerDataType = 'array';
    /**
     * @param GoogleCloudApigeeV1Developer[]
     */
    public function setDeveloper($developer)
    {
        $this->developer = $developer;
    }
    /**
     * @return GoogleCloudApigeeV1Developer[]
     */
    public function getDeveloper()
    {
        return $this->developer;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(GoogleCloudApigeeV1ListOfDevelopersResponse::class, 'RoRdb\\Google_Service_Apigee_GoogleCloudApigeeV1ListOfDevelopersResponse');